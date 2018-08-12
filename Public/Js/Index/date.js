/**
 * Created by Administrator on 09/08/2018.
 */
var getData = true;
var getPage = 1;
window.onscroll = function(){
    var t = document.documentElement.scrollTop || document.body.scrollTop;
    var h = document.body.scrollHeight;
    if( t >= (h-1300) &&  getData) {
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
                getData = true;
                str = '';
                for(i=0;i<e.data.length;i++){
                    str+='<div class="news-item stream__item clearfix" data-id="'+e.data[i].id+'">\n' ;
                    if(location.href.indexOf("Index/index.html") != -1 || location.href.indexOf("Feed/index.html") != -1 || location.href.indexOf("Newest/index.html") != -1){
                        str+='<div class="news__item-from">来自标签 <a href="/blog/index.php/Tag/index/type/'+e.data[i].name+'.html">'+e.data[i].name+'</a></div>\n' ;
                    }
                    str+='                            <div class="news__item-avatar"><a href="/blog/index.php/User/index/user/'+e.data[i].pageurl+'.html"><img class="avatars-img" src="'+e.data[i].head+'"></a></div>\n' +
                        '                            <div class="news__item-info">\n' +
                        '                                <div class="mb6">\n' +
                        '                                    <h4 class="news__item-title mt0"><a class="mr10" target="_blank" href="/blog/index.php/Article/index/id/'+e.data[i].id+'.html">'+e.data[i].title+'</a></h4>\n' +
                        '                                </div>\n' +
                        '                                <p class="news__item-meta"><a href="/blog/index.php/User/index/user/\'+e.data[i].pageurl+\'.html">'+e.data[i].nickname+'</a><span class="dot">·</span><span>'+mdate(e.data[i].date)+'</span><span class="pull-right hidden-xs hidden-sm"><i class="fa fa-thumbs-up" aria-hidden="true"></i> '+e.data[i].thumbs+'</span></p>\n' +
                        '                            </div>\n' +
                        '                        </div>';
                }
                $(".news-list").append(str);
            }
        })
    }
}