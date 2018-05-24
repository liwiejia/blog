<?php
/*
ThinkPHP5.0+整合百度编辑器Ueditor1.4.3.3+
作者：符工@邦明
日期：西元二零一七年元月五日
网址：http://bbs.df81.com/
不要怀念哥，哥只是个搬运工
*/
namespace Admin\Controller;
use Think\Controller;

use Vendor\Request;
use Think\Image;




class UeditorController extends Controller{
    private $fileField; //文件域名
    private $file; //文件上传对象
    private $base64; //文件上传对象
    private $Uconfig; //配置信息
    private $oriName; //原始文件名
    private $fileName; //新文件名
    private $fullName; //完整文件名,即从当前配置目录开始的URL
    private $filePath; //完整文件名,即从当前配置目录开始的URL
    private $fileSize; //文件大小
    private $fileType; //文件类型
    private $stateInfo; //上传状态信息,
    private $stateMap = array( //上传状态映射表，国际化用户需考虑此处数据的国际化
        "SUCCESS", //上传成功标记，在UEditor中内不可改变，否则flash判断会出错
        "文件大小超出 upload_max_filesize 限制",
        "文件大小超出 MAX_FILE_SIZE 限制",
        "文件未被完整上传",
        "没有文件被上传",
        "上传文件为空",
        "ERROR_TMP_FILE" => "临时文件错误",
        "ERROR_TMP_FILE_NOT_FOUND" => "找不到临时文件",
        "ERROR_SIZE_EXCEED" => "文件大小超出网站限制",
        "ERROR_TYPE_NOT_ALLOWED" => "文件类型不允许",
        "ERROR_CREATE_DIR" => "目录创建失败",
        "ERROR_DIR_NOT_WRITEABLE" => "目录没有写权限",
        "ERROR_FILE_MOVE" => "文件保存时出错",
        "ERROR_FILE_NOT_FOUND" => "找不到上传文件",
        "ERROR_WRITE_CONTENT" => "写入文件内容错误",
        "ERROR_UNKNOWN" => "未知错误",
        "ERROR_DEAD_LINK" => "链接不可用",
        "ERROR_HTTP_LINK" => "链接不是http链接",
        "ERROR_HTTP_CONTENTTYPE" => "链接contentType不正确",
        "INVALID_URL" => "非法 URL",
        "INVALID_IP" => "非法 IP"
    );

	public function index(){
        header('Access-Control-Allow-Origin: http://www.baidu.com'); //设置http://www.baidu.com允许跨域访问
        header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With'); //设置允许的跨域header
        date_default_timezone_set("Asia/Chongqing");
        error_reporting(E_ERROR);
        header("Content-Type: text/html; charset=utf-8");

        $UCONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents("Public/Plugin/ueditor1433/php/config.json")), true);
        $action = $_GET['action'];
        /* 上传配置 */
        $base64 = "upload";

        switch ($action) {
            case 'config':
                $result =  json_encode($UCONFIG);
                break;
            /* 上传图片 */
            case 'uploadimage':
                $Uconfig = array(
                    "pathFormat" => $UCONFIG['imagePathFormat'],
                    "maxSize" => $UCONFIG['imageMaxSize'],
                    "allowFiles" => $UCONFIG['imageAllowFiles'],
                    "CompressEnable" => $UCONFIG['imageCompressEnable']
                );
                $fieldName = $UCONFIG['imageFieldName'];
                $result = $this->upFile($fieldName, $Uconfig, $base64);
		        break;
            /* 上传涂鸦 */
            case 'uploadscrawl':
                $Uconfig = array(
                    "pathFormat" => $UCONFIG['scrawlPathFormat'],
                    "maxSize" => $UCONFIG['scrawlMaxSize'],
                    "allowFiles" => $UCONFIG['scrawlAllowFiles'],
                    "oriName" => "scrawl.png"
                );
                $fieldName = $UCONFIG['scrawlFieldName'];
                $base64 = "base64";
                $result = $this->upFile($fieldName, $Uconfig, $base64);
		        break;
            /* 上传视频 */
            case 'uploadvideo':
                $Uconfig = array(
                    "pathFormat" => $UCONFIG['videoPathFormat'],
                    "maxSize" => $UCONFIG['videoMaxSize'],
                    "allowFiles" => $UCONFIG['videoAllowFiles']
                );
                $fieldName = $UCONFIG['videoFieldName'];
                $result = $this->upFile($fieldName, $Uconfig, $base64);
		        break;
            /* 上传文件 */
            case 'uploadfile':
                $Uconfig = array(
                    "pathFormat" => $UCONFIG['filePathFormat'],
                    "maxSize" => $UCONFIG['fileMaxSize'],
                    "allowFiles" => $UCONFIG['fileAllowFiles']
                );
                $fieldName = $UCONFIG['fileFieldName'];
                $result = $this->upFile($fieldName, $Uconfig, $base64);
                break;
            /* 列出图片 */
            case 'listimage':
			    $allowFiles = $UCONFIG['imageManagerAllowFiles'];
			    $listSize = $UCONFIG['imageManagerListSize'];
			    $path = $UCONFIG['imageManagerListPath'];
			    $get =$_GET;
			    $result =$this->fileList($allowFiles,$listSize,$get);
                break;
            /* 列出文件 */
            case 'listfile':
			    $allowFiles = $UCONFIG['fileManagerAllowFiles'];
			    $listSize = $UCONFIG['fileManagerListSize'];
			    $path = $UCONFIG['fileManagerListPath'];
			    $get = $_GET;
			    $result = $this->fileList($allowFiles,$listSize,$get);
                break;
            /* 抓取远程文件 */
            case 'catchimage':
		    	$Uconfig = array(
			        "pathFormat" => $UCONFIG['catcherPathFormat'],
			        "maxSize" => $UCONFIG['catcherMaxSize'],
			        "allowFiles" => $UCONFIG['catcherAllowFiles'],
			        "oriName" => "remote.png"
			    );
			    $fieldName = $UCONFIG['catcherFieldName'];
			    /* 抓取远程图片 */
			    $list = array();
			    isset($_POST[$fieldName]) ? $source = $_POST[$fieldName] : $source = $_GET[$fieldName];

			    foreach($source as $imgUrl){
			        $info = json_decode($this->saveRemote($Uconfig,$imgUrl),true);
			        array_push($list, array(
			            "state" => $info["state"],
			            "url" => $info["url"],
			            "size" => $info["size"],
			            "title" => htmlspecialchars($info["title"]),
			            "original" => htmlspecialchars($info["original"]),
			            "source" => htmlspecialchars($imgUrl)
			        ));
			    }

			    $result = json_encode(array(
			        'state' => count($list) ? 'SUCCESS':'ERROR',
			        'list' => $list
			    ));
                break;
            default:
                $result = json_encode(array(
                    'state' => '请求地址出错'
                ));
                break;
        }

        /* 输出结果 */
        if(isset($_GET["callback"])){
            if(preg_match("/^[\w_]+$/", $_GET["callback"])){
                echo htmlspecialchars($_GET["callback"]).'('.$result.')';
            }else{
                echo json_encode(array(
                    'state' => 'callback参数不合法'
                ));
            }
        }else{
            echo $result;
        }
	}

	//上传文件
	private function upFile($fileField, $Uconfig, $type = "upload"){
        $this->fileField = $fileField;
        $this->Uconfig = $Uconfig;
        $this->type = $type;


        $this->stateMap['ERROR_TYPE_NOT_ALLOWED'] = iconv('unicode', 'utf-8', $this->stateMap['ERROR_TYPE_NOT_ALLOWED']);

        $file = $this->file = $_FILES[$this->fileField];
        if (!$file) {
            $this->stateInfo = $this->getStateInfo("ERROR_FILE_NOT_FOUND");
            return;
        }
        if ($this->file['error']) {
            $this->stateInfo = $this->getStateInfo($file['error']);
            return;
        } else if (!file_exists($file['tmp_name'])) {
            $this->stateInfo = $this->getStateInfo("ERROR_TMP_FILE_NOT_FOUND");
            return;
        } else if (!is_uploaded_file($file['tmp_name'])) {
            $this->stateInfo = $this->getStateInfo("ERROR_TMPFILE");
            return;
        }
        $this->oriName = $file['name'];
        $this->fileSize = $file['size'];



        $this->fileType = $this->getFileExt();
        $this->fullName = $this->getFullName();
        $this->filePath = $this->getFilePath();
        $this->fileName = $this->getFileName();

        $dirname = dirname($this->filePath);

        //检查文件大小是否超出限制
        if (!$this->checkSize()) {
            $this->stateInfo = $this->getStateInfo("ERROR_SIZE_EXCEED");
            return;
        }

        //检查是否不允许的文件格式
        if (!$this->checkType()) {
            $this->stateInfo = $this->getStateInfo("ERROR_TYPE_NOT_ALLOWED");
            return;
        }

        //创建目录失败
        if (!file_exists($dirname) && !mkdir($dirname, 0777, true)) {
            $this->stateInfo = $this->getStateInfo("ERROR_CREATE_DIR");
            return;
        } else if (!is_writeable($dirname)) {
            $this->stateInfo = $this->getStateInfo("ERROR_DIR_NOT_WRITEABLE");
            return;
        }

		$file = Request::file($this->fileField);



		$info = $file->move(ROOT_PATH,$this->fullName);

		if($info){//上传成功


			$fname=$this->fullName;

			$sm_fname= preg_replace('/(.*)\/{1}([^\/]*)/i', '$1/sm_$2', $this->fullName);;

			$imgArr = explode(',', 'jpg,gif,png,jpeg,bmp,ttf,tif');
			$imgExt= strtolower($info->getExtension());
			$isImg = in_array($imgExt,$imgArr);

			if($isImg){//如果是图片，开始处理
                $image = new Image();

				$image = $image->open('./'.$fname);

				$water = 1;

				//在这里你可以根据你需要，调用ThinkPHP5的图片处理方法了
				/*if($water == 1){//文字水印
				    $image->text('df81.com','./public/font/4.ttf',180,'#ff0000')->save('.'.$fname);
				}
				if($water ==2 ){//图片水印
				    $image->water('./public/img/df81.png',9,100)->save('.'.$fname);
				}*/

				if($Uconfig['CompressEnable']){//生成缩略图
					$image->thumb(500,500,1)->save($sm_fname);
				}

			}

			$data=array(
				'state' => 'SUCCESS',
				'url' => $fname,
				'title' => $info->getFilename(),
				'original' => $info->getFilename(),
				'type' => '.' . $info->getExtension(),
				'size' => $info->getSize(),
			);
		}else{
			$data=array(
			    'state' => $info->getError(),
			);
		}

		return json_encode($data);
	}

    //列出图片
	private function fileList($allowFiles,$listSize,$get){
		$dirname = './public/uploads/';
		$allowFiles = substr(str_replace(".","|",join("",$allowFiles)),1);

		/* 获取参数 */
		$size = isset($get['size']) ? htmlspecialchars($get['size']) : $listSize;
		$start = isset($get['start']) ? htmlspecialchars($get['start']) : 0;
		$end = $start + $size;

		/* 获取文件列表 */
		$path = $dirname;
		$files = $this->getFiles($path,$allowFiles);
		if(!count($files)){
		    return json_encode(array(
		        "state" => "no match file",
		        "list" => array(),
		        "start" => $start,
		        "total" => count($files)
		    ));
		}

		/* 获取指定范围的列表 */
		$len = count($files);
		for($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
		    $list[] = $files[$i];
		}

		/* 返回数据 */
		$result = json_encode(array(
		    "state" => "SUCCESS",
		    "list" => $list,
		    "start" => $start,
		    "total" => count($files)
		));

		return $result;
	}

   	/*
	 * 遍历获取目录下的指定类型的文件
	 * @param $path
	 * @param array $files
	 * @return array
	*/
    private function getFiles($path,$allowFiles,&$files = array()){
	    if(!is_dir($path)) return null;
	    if(substr($path,strlen($path)-1) != '/') $path .= '/';
	    $handle = opendir($path);

	    while(false !== ($file = readdir($handle))){
	        if($file != '.' && $file != '..'){
	            $path2 = $path.$file;
	            if(is_dir($path2)){
	                $this->getFiles($path2,$allowFiles,$files);
	            }else{
		            if(preg_match("/\.(".$allowFiles.")$/i",$file)){
		                $files[] = array(
		                    'url' => substr($path2,1),
		                    'mtime' => filemtime($path2)
		                );
		            }
	            }
	        }
	    }

	    return $files;
    }

    //抓取远程图片
	private function saveRemote($Uconfig,$fieldName){
	    $imgUrl = htmlspecialchars($fieldName);
	    $imgUrl = str_replace("&amp;","&",$imgUrl);

	    //http开头验证
	    if(strpos($imgUrl,"http") !== 0){
	        $data=array(
		        'state' => '链接不是http链接',
		    );
	        return json_encode($data);
	    }
	    //获取请求头并检测死链
	    $heads = get_headers($imgUrl);
	    if(!(stristr($heads[0],"200") && stristr($heads[0],"OK"))){
	        $data=array(
		        'state' => '链接不可用',
		    );
	        return json_encode($data);
	    }
	    //格式验证(扩展名验证和Content-Type验证)
	    $fileType = strtolower(strrchr($imgUrl,'.'));
	    if(!in_array($fileType,$Uconfig['allowFiles']) || stristr($heads['Content-Type'],"image")){
	        $data=array(
		        'state' => '链接contentType不正确',
		    );
	        return json_encode($data);
	    }

	    //打开输出缓冲区并获取远程图片
	    ob_start();
	    $context = stream_context_create(
	        array('http' => array(
	            'follow_location' => false // don't follow redirects
	        ))
	    );
	    readfile($imgUrl,false,$context);
	    $img = ob_get_contents();
	    ob_end_clean();
	    preg_match("/[\/]([^\/]*)[\.]?[^\.\/]*$/",$imgUrl,$m);

	    $dirname = './public/uploads/remote/';
	    $file['oriName'] = $m ? $m[1] : "";
	    $file['filesize'] = strlen($img);
	    $file['ext'] = strtolower(strrchr($Uconfig['oriName'],'.'));
	    $file['name'] = uniqid().$file['ext'];
	    $file['fullName'] = $dirname.$file['name'];
	    $fullName = $file['fullName'];

	    //检查文件大小是否超出限制
	    if($file['filesize'] >= ($Uconfig["maxSize"])){
  		    $data=array(
			    'state' => '文件大小超出网站限制',
		    );
		    return json_encode($data);
	    }

	    //创建目录失败
	    if(!file_exists($dirname) && !mkdir($dirname,0777,true)){
  		    $data=array(
			    'state' => '目录创建失败',
		    );
		    return json_encode($data);
	    }else if(!is_writeable($dirname)){
  		    $data=array(
			    'state' => '目录没有写权限',
		    );
		    return json_encode($data);
	    }

	    //移动文件
	    if(!(file_put_contents($fullName, $img) && file_exists($fullName))){ //移动失败
  		    $data=array(
			    'state' => '写入文件内容错误',
		    );
		    return json_encode($data);
	    }else{ //移动成功
	        $data=array(
			    'state' => 'SUCCESS',
			    'url' => substr($file['fullName'],1),
			    'title' => $file['name'],
			    'original' => $file['oriName'],
			    'type' => $file['ext'],
			    'size' => $file['filesize'],
		    );
	    }

	    return json_encode($data);
	}

    /*
	 * 处理base64编码的图片上传
	 * 例如：涂鸦图片上传
	*/
	private function upBase64($Uconfig,$fieldName){
	    $base64Data = $_POST[$fieldName];
	    $img = base64_decode($base64Data);

	    $dirname = './public/uploads/scrawl/';
	    $file['filesize'] = strlen($img);
	    $file['oriName'] = $Uconfig['oriName'];
	    $file['ext'] = strtolower(strrchr($Uconfig['oriName'],'.'));
	    $file['name'] = uniqid().$file['ext'];
	    $file['fullName'] = $dirname.$file['name'];
	    $fullName = $file['fullName'];

 	    //检查文件大小是否超出限制
	    if($file['filesize'] >= ($Uconfig["maxSize"])){
  		    $data=array(
			    'state' => '文件大小超出网站限制',
		    );
		    return json_encode($data);
	    }

	    //创建目录失败
	    if(!file_exists($dirname) && !mkdir($dirname,0777,true)){
	        $data=array(
			    'state' => '目录创建失败',
		    );
		    return json_encode($data);
	    }else if(!is_writeable($dirname)){
	        $data=array(
			    'state' => '目录没有写权限',
		    );
		    return json_encode($data);
	    }

	    //移动文件
	    if(!(file_put_contents($fullName, $img) && file_exists($fullName))){ //移动失败
            $data=array(
		        'state' => '写入文件内容错误',
		    );
	    }else{ //移动成功
	        $data=array(
			    'state' => 'SUCCESS',
			    'url' => substr($file['fullName'],1),
			    'title' => $file['name'],
			    'original' => $file['oriName'],
			    'type' => $file['ext'],
			    'size' => $file['filesize'],
		    );
	    }

	    return json_encode($data);
	}
    /**
     * 上传错误检查
     * @param $errCode
     * @return string
     */
    private function getStateInfo($errCode)
    {
        return !$this->stateMap[$errCode] ? $this->stateMap["ERROR_UNKNOWN"] : $this->stateMap[$errCode];
    }
    /**
     * 获取文件扩展名
     * @return string
     */
    private function getFileExt()
    {
        return strtolower(strrchr($this->oriName, '.'));
    }

    /**
     * 重命名文件
     * @return string
     */
    private function getFullName()
    {
        //替换日期事件
        $t = time();
        $d = explode('-', date("Y-y-m-d-H-i-s"));
        $format = $this->Uconfig["pathFormat"];
        $format = str_replace("{yyyy}", $d[0], $format);
        $format = str_replace("{yy}", $d[1], $format);
        $format = str_replace("{mm}", $d[2], $format);
        $format = str_replace("{dd}", $d[3], $format);
        $format = str_replace("{hh}", $d[4], $format);
        $format = str_replace("{ii}", $d[5], $format);
        $format = str_replace("{ss}", $d[6], $format);
        $format = str_replace("{time}", $t, $format);

        //过滤文件名的非法自负,并替换文件名
        $oriName = substr($this->oriName, 0, strrpos($this->oriName, '.'));
        $oriName = preg_replace("/[\|\?\"\<\>\/\*\\\\]+/", '', $oriName);
        $format = str_replace("{filename}", $oriName, $format);

        //替换随机字符串
        $randNum = rand(1, 10000000000) . rand(1, 10000000000);
        if (preg_match("/\{rand\:([\d]*)\}/i", $format, $matches)) {
            $format = preg_replace("/\{rand\:[\d]*\}/i", substr($randNum, 0, $matches[1]), $format);
        }

        $ext = $this->getFileExt();
        return $format . $ext;
    }

    /**
     * 获取文件名
     * @return string
     */
    private function getFileName () {
        return substr($this->filePath, strrpos($this->filePath, '/') + 1);
    }
    /**
     * 获取文件完整路径
     * @return string
     */
    private function getFilePath()
    {
        $fullname = $this->fullName;
        $rootPath = $_SERVER['DOCUMENT_ROOT'];

        if (substr($fullname, 0, 1) != '/') {
            $fullname = '/' . $fullname;
        }

        return $rootPath . $fullname;
    }
    /**
     * 文件类型检测
     * @return bool
     */
    private function checkType()
    {
        return in_array($this->getFileExt(), $this->Uconfig["allowFiles"]);
    }

    /**
     * 文件大小检测
     * @return bool
     */
    private function  checkSize()
    {
        return $this->fileSize <= ($this->Uconfig["maxSize"]);
    }
}
