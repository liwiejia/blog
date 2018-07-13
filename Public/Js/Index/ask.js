/**
 * Created by Administrator on 2018/7/7.
 */
function addTag(elm,tag,velm) {
    var tag = JSON.parse(tag);
    var str="";
    if($("[name="+velm+"]").val().indexOf(tag.id) != -1 || $("[name='tags']").val().split(",").length>=6)
        return;
    $("[name="+velm+"]").val($("[name="+velm+"]").val()+tag.id+",")
    if(tag.iconUrl)
        str+='<img src="'+tag.iconUrl+'">';
    str +=tag.name+'<span data-role="remove" onclick="remoTag($(this),\''+velm+'\')">×</span>';
    $(elm).before('<span class="sf-typeHelper-item  ">'+str+'</span>')

}
function remoTag(ele,velm) {
    var arr = $("[name="+velm+"]").val().split(",");
    if(ele){
        arr.splice($(".sf-typeHelper--fortags>span").index($(ele).parent()),1);
        $(ele).parent().remove();
    }else{
        $('.sf-typeHelper--fortags').children("span").last().remove();
        arr.splice(arr.length-2,1)
    }
    if(arr == "")
    $("\.sf-typeHelper\.sf-typeHelper--fortags\.sf-typeHelper--single").removeClass('sf-typeHelper-single');

    $("[name="+velm+"]").val(arr.join(","));
}
$(".blog_tag").focus(function(){
    if($("[role='tablist']").find(".active").length>1)
    $("[role='tablist']>li").eq(0).trigger("click");

    $(".techTags-panel").show();
});
$(".blog_tag,.blog_tag1").blur(function(){
    $(this).val('');
});
$("body").on("click", function(e) {
    if (0 === $(e.target).parents(".techTags-panel").length && 0 === $(e.target).parents(".sf-typeHelper").length && !$(e.target).hasClass("sf-typeHelper"))
        return $(".techTags-panel").hide()
});
$(".nav-tabs>li").on("click",function (e) {
    e.preventDefault();
    $(".nav-tabs .active").removeClass("active");
    $(this).addClass("active");
    $(".tab-content .active").removeClass("active");
    $($(this).children('a').attr('href')).addClass("active");
})
$(".tag").on("click",function (e) {
    e.preventDefault();
    addTag($('.blog_tag'),$(this).attr('data-tag'),"tags");
})
$(document).keydown(function(e){
    if(!$(".blog_tag").is(":focus"))
        return;
   if(e.keyCode == 8){
        if(!$(".blog_tag").val()){
            remoTag("","tags")
        }
   }
});
var a =new Array();
if($('#question').length)
$('#question')[0].addEventListener('submit',function(t){
    t.preventDefault();
    var o = {},
        r = $(this).closest("form").find("[name]");
    r.each(function() {
        var t = $(this)
            , n = t.attr("name")
            , a = t.val();
        o[n] = a
    });



    if(a.length>0){
        for(i=0;i<a.length;i++){
            $('[name='+a[i]+']').parent().removeClass("has-error")
            $('[name='+a[i]+']').siblings("[class='help-block err']").remove();
        }
        a.length=0;
    }

    if(o.title.length < 8){
        $('[name="title"]').parent().append('<span class="help-block err">标题应该大于8个字。</span>')
        $('[name="title"]').parent().addClass("has-error");
        a.push('title')
        return false;
    }
    if(o.tags==''){
        $('[name="tags"]').parent().append('<span class="help-block err">最少选择一个标签</span>')
        $('[name="tags"]').parent().addClass("has-error");
        a.push('tags')
        return false;
    }
    if(o.content.length<10){
        $('body').prepend( WAl('建议内容再写多一些哦！'))
        return false;
    }

    $('[type="submit"]').prop("disabled", !0);
    $(this).submit();
});
function WAl(AlertStr) {
    return   $AlertL=$('<div id="myAlert" class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" onclick="$(this).parent().remove()">&times;</a><strong>警告！</strong>'+AlertStr+'</div>');
};
$("body").on("click", function(t) {
    $('.btn\.btn-default\.dropdown-toggle').attr('aria-expanded') =="true" &&0 === $(t.target).parents(".btn-group\.open").length&&   $('.btn\.btn-default\.dropdown-toggle').attr('aria-expanded',"false")&&$('.btn\.btn-default\.dropdown-toggle').parent().removeClass("open");
    "none" !== $(".opts__item--message").css("display") && 0 === $(t.target).parents(".message").length && $(".opts__item--message").addClass("hide")
})
$(".js-news--news-type>button").on("click",function (t) {
    $("\.sf-typeHelper\.sf-typeHelper--fortags\.sf-typeHelper--single").addClass('sf-typeHelper-single')
    addTag($('[placeholder=选择频道]')[1],$(this).attr('data-item'),"type")
})
function IsURL (str_url) {
    var strRegex = '^((https|http|ftp|rtsp|mms)?://)'
        + '?(([0-9a-z_!~*\'().&=+$%-]+: )?[0-9a-z_!~*\'().&=+$%-]+@)?' //ftp的user@
        + '(([0-9]{1,3}.){3}[0-9]{1,3}' // IP形式的URL- 199.194.52.184
        + '|' // 允许IP和DOMAIN（域名）
        + '([0-9a-z_!~*\'()-]+.)*' // 域名- www.
        + '([0-9a-z][0-9a-z-]{0,61})?[0-9a-z].' // 二级域名
        + '[a-z]{2,6})' // first level domain- .com or .museum
        + '(:[0-9]{1,4})?' // 端口- :80
        + '((/?)|' // a slash isn't required if there is no file name
        + '(/[0-9a-z_!~*\'().;?:@&=+$,%#-]+)+/?)$';
    var re=new RegExp(strRegex);
//re.test()
    if (re.test(str_url)) {
        return (true);
    } else {
        return (false);
    }
}
$("[data-action='manual']").on("click",function () {
    $(this).parent().addClass("hide");
    $("[name='title']").parent().removeClass("hide");
})
$(".news__form--splider").on("click",function () {
    $("[name='url']").parent().removeClass("has-error")
    $("[name='url']").siblings("[class='help-block err']").remove();
    $("[name='title']").parent().removeClass("has-error")
    $("[name='title']").siblings("[class='help-block err']").remove();
    if(!IsURL( $("[name='url']").val())){
        $("[name='url']").parent().append('<span class="help-block err">请填写正确的url</span>')
        $("[name='url']").parent().addClass("has-error");
        return;
    }
    $('.btn\.btn-default\.news__form--splider').prop("disabled", !0);
    $(".form-control\.news__form--title-remote ").removeClass("hide");
    $("[name='title']").parent().addClass("hide");
    $.post("http://blog.liweijia.site/Api/getUrlTitle/", {"url": $("[name='url']").val()}, function(e) {

        e=JSON.parse(e);
        if(e.status==200){
            $("[name='title']").val(e.data.title)
        }else{
            $("[name='title']").parent().append('<span class="help-block err">'+e.message+'</span>')
            $("[name='title']").parent().addClass("has-error");
        }
        $(".form-control\.news__form--title-remote").addClass("hide");
        $("[name='title']").parent().removeClass("hide");
        $('.btn\.btn-default\.news__form--splider').prop("disabled", !1);
    })
})
if($('#submit').length)
    $('#submit')[0].addEventListener('submit',function(t){
        t.preventDefault();
        var o = {},
            r = $(this).closest("form").find("[name]");
        r.each(function() {
            var t = $(this)
                , n = t.attr("name")
                , a = t.val();
            o[n] = a
        });



        if(a.length>0){
            for(i=0;i<a.length;i++){
                $('[name='+a[i]+']').parent().removeClass("has-error")
                $('[name='+a[i]+']').siblings("[class='help-block err']").remove();
                if(a[i]=="title"){
                    $('[name='+a[i]+']').parent().parent().removeClass("has-error")
                    $('[name='+a[i]+']').parent().siblings("[class='help-block err']").remove();
                }
            }
            a.length=0;
        }

        if(!IsURL(o.url)){
            $('[name="url"]').parent().append('<span class="help-block err">请检查url是否符合规范。例如：http(s)://blog.liweijia.site</span>')
            $('[name="url"]').parent().addClass("has-error");
            a.push('url')
            return false;
        }
        if(o.title==''){
            $('[name="title"]').parent().parent().append('<span class="help-block err">标题不能为空</span>')
            $('[name="title"]').parent().parent().addClass("has-error");
            a.push('title')
            return false;
        }
        if(o.type==''){
            $('[name="type"]').parent().append('<span class="help-block err">请选择一个频道</span>')
            $('[name="type"]').parent().addClass("has-error");
            a.push('type')
            return false;
        }

        if(o.description.length<10){
            $('[name="description"]').parent().append('<span class="help-block err">再描述详细点哦！</span>')
            $('[name="description"]').parent().addClass("has-error");
            a.push('description')
            return false;
        }

        $('[type="submit"]').prop("disabled", !0);
        $(this).submit();
    });
if($('#write').length)
    $('#write')[0].addEventListener('submit',function(t){
        t.preventDefault();
        var o = {},
            r = $(this).closest("form").find("[name]");
        r.each(function() {
            var t = $(this)
                , n = t.attr("name")
                , a = t.val();
            o[n] = a
        });



        if(a.length>0){
            for(i=0;i<a.length;i++){
                $('[name='+a[i]+']').parent().removeClass("has-error")
                $('[name='+a[i]+']').siblings("[class='help-block err']").remove();
            }
            a.length=0;
        }

        if(o.title.length < 8){
            $('[name="title"]').parent().append('<span class="help-block err">标题应该大于8个字。</span>')
            $('[name="title"]').parent().addClass("has-error");
            a.push('title')
            return false;
        }
        if(o.tags==''){
            $('[name="tags"]').parent().append('<span class="help-block err">最少选择一个标签</span>')
            $('[name="tags"]').parent().addClass("has-error");
            a.push('tags')
            return false;
        }
        if(o.content.length<10){
            $('body').prepend( WAl('建议内容再写多一些哦！'))
            return false;
        }

        $('[type="submit"]').prop("disabled", !0);
        $(this).submit();
    });
$("[data-type='set_type']>li").on("click",function () {
    var size = $("[data-type='set_type']>li").index(this)
    if(size==1){
        $(".modal").show();
        str= '<div class="sfModal-content">为了保证文章内容的持续更新，我们不建议大面积转载别人的内容到自己的专栏里；我们推荐使用头条发布该文章的链接，来保证原作者与读者的有效沟通。</div>';
        $(".modal-body").html(str);
        $(".modal-footer ").removeClass("hidden");
        $(".modal-footer ").html('<button type="button" class="btn btn-default" data-dismiss="modal" onclick=" $(\'.modal\').hide();$(\'.in\').removeClass(\'modal-backdrop\');">继续转载</button><button type="button" class="btn btn-primary done-btn" onclick="top.location.href=\'/blog/submit/index.html\'">用头条发布</button>');
        $(".in").addClass("modal-backdrop");
        $(".modal-title").html("转载建议");

        $("[name='url']").parent().removeClass("hide")
    }else{
        $("[name='url']").parent().addClass("hide")
    }
    $('[name="type"]').val(size+1);
    $(".blog__type-toggle>span").eq(0)[0].innerHTML=$(this).children('a')[0].innerHTML;
})
$(".close").on("click", function(e) {
    $(".modal").hide();
    $(".in").removeClass("modal-backdrop");

})
if($('#write').length)
    $('#write')[0].addEventListener('submit',function(t){
        t.preventDefault();
        var o = {},
            r = $(this).closest("form").find("[name]");
        r.each(function() {
            var t = $(this)
                , n = t.attr("name")
                , a = t.val();
            o[n] = a
        });



        if(a.length>0){
            for(i=0;i<a.length;i++){
                $('[name='+a[i]+']').parent().removeClass("has-error")
                $('[name='+a[i]+']').siblings("[class='help-block err']").remove();
                if(a[i]=="title"){
                    $('[name='+a[i]+']').parent().parent().removeClass("has-error")
                    $('[name='+a[i]+']').parent().siblings("[class='help-block err']").remove();
                }
            }
            a.length=0;
        }


        if(o.title.length<8){
            $('[name="title"]').parent().parent().append('<span class="help-block err">最少填写八个字符</span>');
            $('[name="title"]').parent().parent().addClass("has-error");
            a.push('title')
            return false;
        }
        if(o.type == 2){
            if( o.url ==''){
                $('[name="url"]').parent().parent().append('<span class="help-block err">URL 不能为空</span>');
                $('[name="url"]').parent().parent().addClass("has-error");
                a.push('url')
            }else if(!IsURL(o.url)){
                $('[name="url"]').parent().parent().append('<span class="help-block err">URL 不正确</span>');
                $('[name="url"]').parent().parent().addClass("has-error");
                a.push('url')
            }
        }
        if(o.tags==''){
            $('[name="tags"]').parent().append('<span class="help-block err">至少选择一个标签</span>');
            $('[name="tags"]').parent().addClass("has-error");
            a.push('tags')
            return false;
        }

        if(o.content.length<10){
            $('[name="content"]').parent().append('<span class="help-block err">再描述详细点哦！</span>')
            $('[name="content"]').parent().addClass("has-error");
            a.push('description')
            return false;
        }

        $('[type="submit"]').prop("disabled", !0);
        $(this).submit();
    });