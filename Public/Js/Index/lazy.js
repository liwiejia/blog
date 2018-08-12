/**
 * Created by Administrator on 09/08/2018.
 */
var aImg = document.querySelectorAll('img');
var len = aImg.length;
var n = 0;//存储图片加载到的位置，避免每次都从第一张图片开始遍历
for(var i = n; i < len; i++){
    if (aImg[i].getAttribute('src') == 'https://static.segmentfault.com/v-5b4c6359/global/img/squares.svg') {
        aImg[i].src = "http://www.liweijia.site/blog/Public/Image/squares.svg";
    }

}
window.onscroll = function() {
    var seeHeight = document.documentElement.clientHeight;
    var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    for (var i = n; i < len; i++) {
        if (aImg[i].offsetTop < seeHeight + scrollTop) {
            if (aImg[i].getAttribute('src') == 'http://www.liweijia.site/blog/Public/Image/squares.svg') {
                aImg[i].src = aImg[i].getAttribute('data-src');
            }
            n = i + 1;
            console.log('n = ' + n);
        }
    }
};