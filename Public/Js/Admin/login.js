/**
 * Created by Administrator on 10/04/2018.
 */
$(function() {
    //初始化input
    inputInt();
});
//是否出现警告信息  false无  true有
var isWarning = false;
//出现警告信息的元素ID
var isWarningId = null;

function showInfor(obj) {
    obj.attr("title",obj.attr('foucs-message'));
    obj.tooltip('show')
}
function checkInfor(obj,id,message,value) {
   // $("[data-toggle='tooltip']").tooltip('hide');
    //根据不同ID 规则 提示不同信息

    switch (id){
        case "username":
            if( value.length<4){
                //修改isWarning为true 使不显示focus消息
                isWarning = true;
                //记录出现错误的元素
                isWarningId = id;
                $("#"+id).addClass("has-error");
                $("#"+id+" .form-control-feedback").removeClass("glyphicon-ok").addClass("glyphicon-remove")
            } else{
                //修改isWarning为true 使显示focus消息
                isWarning = false;
                //去除记录的错误元素
                isWarningId == null;
                $("#"+id).attr("data-original-title","");
                $("#"+id).removeClass("has-error").addClass("has-success");
                $("#"+id+" .form-control-feedback").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            }
            break;
        case "password":
            if(value.length < 22 && value.length>6){
                isWarning = false;
                isWarningId == null;
                $("#"+id).attr("data-original-title","");
                $("#"+id).removeClass("has-error").addClass("has-success");
                $("#"+id+" .form-control-feedback").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            }else{
                $("#"+id).addClass("has-error");
                $("#"+id+" .form-control-feedback").removeClass("glyphicon-ok").addClass("glyphicon-remove");
                isWarning = true;
                isWarningId = id;
            }
            break;
        case "verify":
            if(value.length!=4){
                isWarning = true;
                isWarningId = id;
            }else{
                isWarning = false;
                isWarningId == null;
            }
            break;
        case "email":
            var re = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            if(!re.test(value)){
                isWarning = true;
                isWarningId = id;
            }else{
                isWarning = false;
                isWarningId == null;
            }
            break;
        case "mailVerify":
            if(value.length!=6){
                isWarning = true;
                isWarningId = id;
            }else{
                isWarning = false;
                isWarningId == null;
            }
            break;
        case "repassword":
            if(value.length < 22 && value.length > 6 && value == $("#password").val()){
                isWarning = false;
                isWarningId == null;
            }else{
                isWarning = true;
                isWarningId = id;
            }
            break;
        case "nickname":
            var re =/[`~!@#$%^&*()_+<>?:"{},.\/;'[\]]/im
            if(value.length < 12 && value.length > 4 && !re.test(value)  ){
                isWarning = false;
                isWarningId == null;
            }else{
                isWarning = true;
                isWarningId = id;

            }
            break;
        case "mobile":
            var re = /^[1][3,4,5,7,8][0-9]{9}$/;
            if(!re.test(value)){
                isWarning = true;
                isWarningId = id;
            }else{
                isWarning = false;
                isWarningId == null;
            }
            break;
    }
    if(!isWarning)
        return;

    obj.attr("title",message);
    $("#"+isWarningId+"").tooltip('destroy')
    setTimeout("$('#"+isWarningId+"').tooltip('show')", 1500 )
   // $("#username").tooltip('show')
}
function inputInt() {
    $("input").focus(function(){
        //如果存在警告信息则不显示当前focus样式
        if (isWarning)
            return;
       // $("[data-toggle='tooltip']").tooltip('destroy');
        showInfor($(this).parent());
    });

    $("input").blur(function(){

       // $("[data-toggle='tooltip']").tooltip('destroy');
        checkInfor($(this).parent(),$(this).parent()[0].id,$(this).parent().attr('lost-message'),$(this).val());
    });

   // $("input")[0].focus()
}