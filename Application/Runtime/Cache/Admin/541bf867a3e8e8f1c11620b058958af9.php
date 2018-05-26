<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta charset="UTF-8">
    <title><?php echo ($current['title']); ?>-<?php echo ($webcConfig["sitename"]); ?></title>

    <meta name="keywords" content="<?php echo ($webcConfig["keywords"]); ?>"/>
    <meta name="description" content="<?php echo ($webcConfig["description"]); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <link href="/Blog/Public/Plugin/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Blog/Public/Plugin/assets/css/ace.min.css" rel="stylesheet" type="text/css">

    <link href="/Blog/Public/Plugin/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">





</head>
<style type="text/css">
    body{margin:0;padding: 15px 10px 0px 0px ; background-color: #fff;height:<?php echo ($Height); ?>px;}

</style>
<body>

<form enctype="multipart/form-data" id="PostMe" method="post" name="upform" style="padding: 8px 0px 0px 0px;">
    <input type="hidden" value="<?php echo ($Width); ?>" name="Width">
    <input type="hidden" value="<?php echo ($Height); ?>" name="Height">
    <input type="hidden" value="<?php echo ($BackCall); ?>" name="BackCall">
    <input multiple="" name="img" type="file" id="id-input-file-3">

</form>
<script type="text/javascript" src="/Blog/Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="/Blog/Public/Plugin/assets/js/ace-elements.min.js"></script>
<script type="text/javascript" src="/Blog/Public/Plugin/assets/js/ace.min.js"></script>
<script>
    $('#id-input-file-3').ace_file_input({
        style: 'well',
        btn_choose: '在此处放置图像或单击以选择',
        btn_change: null,
        no_icon: 'ace-icon fa fa-picture-o',
        droppable: true,
        whitelist_ext : ["jpeg", "jpg", "png", "gif" , "bmp"],
        whitelist_mime : ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"],

        thumbnail: 'small'//large | fit
        //,icon_remove:null//set null, to hide remove/reset button
        ,before_change:function(files, dropped) {
            $('iframe',parent.document).attr("height","90px");
            $('form').attr("style","padding: 8px 0px 0px 0px;");
            $('#PostMe').submit();
            return true;
        }
        ,before_remove : function() {
            $('iframe',parent.document).attr("height","150px");
            $('form').attr("style","padding: 5px 0px 0px 0px;");
            return true;
        }
        ,
        preview_error : function(filename, error_code) {
            //name of the file that failed
            //error_code values
            //1 = 'FILE_LOAD_FAILED',
            //2 = 'IMAGE_LOAD_FAILED',
            //3 = 'THUMBNAIL_FAILED'
            //alert(error_code);
        }

    }).on('change', function(){
        //console.log($(this).data('ace_input_files'));
        //console.log($(this).data('ace_input_method'));
    });
<?php if($Img == ''): ?>$('#id-input-file-3')
            .ace_file_input('show_file_list', [
                {type: 'image', name: 'Logo', path: $('#<?php echo ($BackCall); ?>',parent.document).val()},
            ])
<?php else: ?>
    $('#id-input-file-3')
        .ace_file_input('show_file_list', [
            {type: 'image', name: 'Logo', path: '<?php echo ($Img); ?>'},
        ]);
    $('#<?php echo ($BackCall); ?>',parent.document).val("<?php echo ($Img); ?>");<?php endif; ?>;






</script>
</script>
</body>
</html>