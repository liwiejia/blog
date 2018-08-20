/**
 * Created by Administrator on 09/08/2018.
 */
var aImg = document.querySelectorAll('img');
var len = aImg.length;
var Bookmark =Array() ;
var n = 0;//存储图片加载到的位置，避免每次都从第一张图片开始遍历
for(var i = n; i < len; i++){
    if (aImg[i].getAttribute('src') == 'https://static.segmentfault.com/v-5b4c6359/global/img/squares.svg') {
        aImg[i].src = "http://www.liweijia.site/blog/Public/Image/squares.svg";
    }

}
window.onscroll = function() {
    $(".col-md-3\.side\.hidden-sm\.hidden-xs").attr("style","height:"+ $(".col-xs-12\.col-md-9\.main")[0].offsetHeight+"px");
    panelElem = document.getElementsByClassName("blogTitle");
    Bookmark =Array();
    for(i=0; i<panelElem.length; i++){
        var offsetTop = panelElem[i].offsetTop;
        Bookmark.push(offsetTop);
    }
    var seeHeight = document.documentElement.clientHeight;
    var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    for (var i = n; i < len; i++) {
        if (aImg[i].offsetTop < seeHeight + scrollTop) {
            if (aImg[i].getAttribute('src') == 'http://www.liweijia.site/blog/Public/Image/squares.svg') {
                src = aImg[i].getAttribute('data-src');
                if(src.indexOf("http://segmentfault.com") == -1 && src.indexOf("http") == -1)
                {
                    if(src.indexOf("https") == -1){
                        src = "http://segmentfault.com"+src;
                    }

                }
                aImg[i].src = src;
            }
            n = i + 1;
        }
    }

    for(var i = 0; i < Bookmark.length; i++){
        if (Bookmark[i] < (scrollTop-80) && Bookmark[i+1] > (scrollTop-80) || (i==(Bookmark.length-1) &&Bookmark[i]<scrollTop )) {
            $(".articleIndex>.active").attr("class","");
            $(".articleIndex>").eq(i).attr("class","active")
            t = $(".articleIndex>").eq(i)[0].offsetTop;
            h = $(".articleIndex>").eq(i)[0].offsetHeight;
            if(t>350 ){
                $(".nav-body").attr("style","top:-"+(t-350)+"px")
            }else if($(".nav-body")[0].style.top!='' && t<350){
                $(".nav-body").attr("style","")
            }
            $(".nav-body>.highlight-title").attr("style","top:"+t+"px;height:"+h+"px")
        }
    }
};

/*
    功能：生成博客目录的JS工具
    测试：IE8，火狐，google测试通过
    孤傲苍狼
    2014-5-11
*/
var BlogDirectory = {
    /*
        获取元素位置，距浏览器左边界的距离（left）和距浏览器上边界的距离（top）
    */
    getElementPosition:function (ele) {
        var topPosition = 0;
        var leftPosition = 0;
        while (ele){
            topPosition += ele.offsetTop;
            leftPosition += ele.offsetLeft;
            ele = ele.offsetParent;
        }
        return {top:topPosition, left:leftPosition};
    },

    /*
    获取滚动条当前位置
    */
    getScrollBarPosition:function () {
        var scrollBarPosition = document.body.scrollTop || document.documentElement.scrollTop;
        return  scrollBarPosition;
    },

    /*
    移动滚动条，finalPos 为目的位置，internal 为移动速度
    */
    moveScrollBar:function(finalpos, interval) {

        //若不支持此方法，则退出
        if(!window.scrollTo) {
            return false;
        }

        //窗体滚动时，禁用鼠标滚轮
        window.onmousewheel = function(){
            return false;
        };

        //清除计时
        if (document.body.movement) {
            clearTimeout(document.body.movement);
        }

        var currentpos =BlogDirectory.getScrollBarPosition();//获取滚动条当前位置

        var dist = 0;
        if (currentpos == finalpos) {//到达预定位置，则解禁鼠标滚轮，并退出
            window.onmousewheel = function(){
                return true;
            }
            return true;
        }
        if (currentpos < finalpos) {//未到达，则计算下一步所要移动的距离
            dist = Math.ceil((finalpos - currentpos)/10);
            currentpos += dist;
        }
        if (currentpos > finalpos) {
            dist = Math.ceil((currentpos - finalpos)/10);
            currentpos -= dist;
        }

        var scrTop = BlogDirectory.getScrollBarPosition();//获取滚动条当前位置
        window.scrollTo(0, currentpos);//移动窗口
        if(BlogDirectory.getScrollBarPosition() == scrTop)//若已到底部，则解禁鼠标滚轮，并退出
        {
            window.onmousewheel = function(){
                return true;
            }
            return true;
        }

        //进行下一步移动
        var repeat = "BlogDirectory.moveScrollBar(" + finalpos + "," + interval + ")";
        document.body.movement = setTimeout(repeat, interval);
    },

    htmlDecode:function (text){
        var temp = document.createElement("div");
        temp.innerHTML = text;
        var output = temp.innerText || temp.textContent;
        temp = null;
        return output;
    },

    /*
    创建博客目录，
    id表示包含博文正文的 div 容器的 id，
    mt 和 st 分别表示主标题和次级标题的标签名称（如 H2、H3，大写或小写都可以！），
    interval 表示移动的速度
    */
    createBlogDirectory:function (id, mt, lt, st, interval){
        //获取博文正文div容器
        var elem = document.getElementById(id);
        if(!elem) return false;
        //获取div中所有元素结点
        var nodes = elem.getElementsByTagName("*");
        //创建博客目录的div容器
        var divSideBar = document.createElement('DIV');
        divSideBar.className = 'panel panel-default widget-outline';
        var divSideBarTab = document.createElement('DIV');
        divSideBarTab.className="panel-heading";
        divSideBarTab.innerHTML="目录";
        divSideBar.appendChild(divSideBarTab);

        var divSideBarContents = document.createElement('DIV');
        divSideBarContents.className="panel-body";


        var divNavBody = document.createElement('div');
        divNavBody.className="nav-body";

        var divHighlight = document.createElement('div');
        divHighlight.setAttribute("style","display:none");
        divHighlight.className="highlight-title";
        divNavBody.appendChild(divHighlight);
        var dlist = document.createElement("ul");
        dlist.setAttribute("class","articleIndex");
        divNavBody.appendChild(dlist);
        divSideBarContents.appendChild(divNavBody);



        divSideBar.appendChild(divSideBarContents);
        //创建自定义列表

        var num = 0;//统计找到的mt和st
        mt = mt.toUpperCase();//转化成大写
        lt = lt.toUpperCase();//转化成大写
        st = st.toUpperCase();//转化成大写
        //遍历所有元素结点
        for(var i=0; i<nodes.length; i++)
        {
            if(nodes[i].nodeName == mt || nodes[i].nodeName == lt || nodes[i].nodeName == st)
            {
                //获取标题文本
                var nodetext = nodes[i].innerHTML.replace(/<\/?[^>]+>/g,"");//innerHTML里面的内容可能有HTML标签，所以用正则表达式去除HTML的标签
                nodetext = nodetext.replace(/&nbsp;/ig, "");//替换掉所有的&nbsp;
                nodetext = BlogDirectory.htmlDecode(nodetext);
                //插入锚
                nodes[i].setAttribute("id", "blogTitle" + num);
                nodes[i].setAttribute("class", "blogTitle");
                var item;
                switch(nodes[i].nodeName)
                {
                    case mt:    //若为主标题
                    case lt:    //若为主标题
                        item = document.createElement("li");
                        break;
                    case st:    //若为子标题
                        item = document.createElement("dd");
                        break;
                }

                //创建锚链接
                var itemtext = document.createTextNode(nodetext);
                var itemA = document.createElement("a");
                itemA.setAttribute("href","");
                itemA.appendChild(itemtext);
                item.appendChild(itemA);
                item.setAttribute("name", num);
                item.onclick = function(){        //添加鼠标点击触发函数
                    var pos = BlogDirectory.getElementPosition(document.getElementById("blogTitle" + this.getAttribute("name")));
                    if(!BlogDirectory.moveScrollBar(pos.top, interval)) return false;
                };

                //将自定义表项加入自定义列表中
                dlist.appendChild(item);
                num++;
            }
        }

        if(num == 0) return false;

        panel = num;


        $('.post-nav\.hidden-xs\.side-outline\.hidden-sm')[0].appendChild(divSideBar);
        $(".col-md-3\.side\.hidden-sm\.hidden-xs").attr("style","height:"+ $(".col-xs-12\.col-md-9\.main")[0].offsetHeight+"px")
    }

};

window.onload=function(){
    /*页面加载完成之后生成博客目录*/
    BlogDirectory.createBlogDirectory("article__content","h1","h2","h3",20);
    panelElem = document.getElementsByClassName("blogTitle");
    for(i=0; i<panelElem.length; i++){
        var offsetTop = panelElem[i].offsetTop;
        Bookmark.push(offsetTop);
    }
}