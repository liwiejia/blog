/**
 * Created by Administrator on 09/08/2018.
 */
var getData = true;
var getPage = 1;
window.onscroll = function(){
    var t = document.documentElement.scrollTop || document.body.scrollTop;
    var h = document.body.scrollHeight;
    if( t >= (h-1000) &&  getData) {
        getData = false;
        getPage++;
        var o = {};
        o['p']=getPage;

        $.post(location.pathname ,o, function(e) {
            e=JSON.parse(e);
            if(e.status!=200){
                $('#btn-load-more').removeClass("hidden")
                $('#btn-loading').addClass("hidden")
            }else{
                for(i=0;i<e.data.length;i++){

                }
            }
        })
    }
}