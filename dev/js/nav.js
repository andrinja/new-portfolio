
$('#menu').on('click', function () {
    $('.page-content').toggleClass('menu-open');
    $('.drawer').toggleClass('open');

    if($('.title-items').hasClass('open')) {
        $('.title-items').removeClass('open');
        // TweenMax.staggerTo(".title-items", 0.5, {scale:0.5, opacity:0, x:70, ease:Power0.easeOut}, 0.1);
    }
    else {
        $('.title-items').addClass('open');
        // TweenMax.staggerTo(".title-items", 0, {scale:0.5, opacity:0, x:50, ease:Power0.easeOut});
        // TweenMax.staggerTo(".title-items", 1, {scale:1, opacity:1, x:0, delay:0.5, ease:Elastic.easeOut}, 0.2);
    }

});