//  menu icon
  $('.menu-icon').on('click', function(){
  // checks if menu is toggled or not
  if ($(this).hasClass('active')){
  // hides menu/switches button to 3 lines
  $('.menu-icon').removeClass('active');
  var tl = new TimelineMax();
  tl.to(".top-line", 1, {rotation:0, ease:Power4.easeOut,	y:0})
  // middle and bottom shows at the same time as top line -=1
  .to(".middle-line", 1, {x:0, opacity:1, ease:Power4.easeOut}, "-=1")
  .to(".bottom-line", 1, {rotation:0, ease:Power4.easeOut, y:0}, "-=1")
  }
  else {
  // shows menu/switches button to a cross
  $('.menu-icon').addClass('active');
  var tl = new TimelineMax();
  tl.to(".top-line", 1, {rotation:-45, ease:Power4.easeOut, y:7})
  .to(".middle-line", 1, {x:150, opacity:0, ease:Power1.easeOut}, "-=1")
  .to(".bottom-line", 1, {rotation:45, ease:Power4.easeOut, y:-7}, "-=1")
  }
 });

// on click stagger emoticon icons

$('.follow-btn').on('click', function () {
    if($('.item').hasClass('open')) {
        $('.item').removeClass('open');
        TweenMax.staggerTo(".item", 0.5, {scale:0.5, opacity:0, x:-70, ease:Power4.easeOut}, 0.1);
    }
    else {
        $('.item').addClass('open');
        TweenMax.staggerTo(".item", 0, {scale:0.5, opacity:0, x:-50, ease:Power4.easeOut});
        TweenMax.staggerTo(".item", 1, {scale:1, opacity:1, x:0, delay:0.5, ease:Elastic.easeOut}, 0.2);
    }
});
