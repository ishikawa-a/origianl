// 使いまわす変数

var winHeight; //window高さ
var winWidth; //window幅
var winScroll; //windowスクロール量


  
// windowのいろいろを取得
$(window).on('load resize scroll',function(){
  winHeight = $(window).height();
  winWidth = $(window).width();
  winScroll = $(window).scrollTop();
});	


//スムーススクロール
var noScroll = '.noLink>a'
var scrollOffset = 0
/*
var noScroll = '.xxx,.xxx>a' カンマ区切りで除外するセレクタを設定
var scrollOffset = $('.xxx').height(); // 固定ヘッダがある場合
*/

$(function(){
  $('a[href^="#"]').not(noScroll).click(function() {
  var speed = 400;
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $('body,html').animate({scrollTop:(position - scrollOffset)}, speed, 'swing');
  return false;
});
}); 


$(function(){
$('.header_btn').on('click', function(){
  $('.header').toggleClass('menu_open');
});
}); 
$(function(){
	
$('.bottomIn,.leftIn,rightIn ').waypoint(function(direction){
    var activePoint = $(this.element);
    if (direction === 'down') { 
        activePoint.addClass('active');
    }
    else{ //scroll up
        activePoint.removeClass('active');
    }
},{offset : '95%'});	
});