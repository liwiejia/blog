/**
 * Created by Administrator on 2018/7/7.
 */


function addTag(tag) {
    var tag = JSON.parse(tag);
    var str="";
    if($("[name='tags']").val().indexOf(tag.id) != -1 || $("[name='tags']").val().split(",").length>=6)
        return;
    $("[name='tags']").val($("[name='tags']").val()+tag.id+",")
    if(tag.iconUrl)
        str+='<img src="'+tag.iconUrl+'">';
    str =tag.name+'<span data-role="remove" onclick="remoTag($(this))">×</span>';
    $('.sf-typeHelper-input').before('<span class="sf-typeHelper-item  ">'+str+'</span>')

}
function remoTag(ele) {
    var arr = $("[name='tags']").val().split(",");
    if(ele){
        arr.splice($(".sf-typeHelper--fortags>span").index($(ele).parent()),1);
        $(ele).parent().remove();
    }else{
        $('.sf-typeHelper--fortags').children("span").last().remove();
        arr.splice(arr.length-2,1)
    }
    $("[name='tags']").val(arr.join(","));
}
$(".sf-typeHelper-input").focus(function(){
    $(".techTags-panel").show();
});
$(".sf-typeHelper-input").blur(function(){
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
    addTag($(this).attr('data-tag'));
})
$(document).keydown(function(e){
    if(!$(".sf-typeHelper-input").is(":focus"))
        return;
   if(e.keyCode == 8){
        if(!$(".sf-typeHelper-input").val()){
            remoTag()
        }
   }
});