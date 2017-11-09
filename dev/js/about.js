$('.item').on('click', function () {
    $('.item').removeClass('active');
        $(this).addClass('active');
    var ButtonClass = $('.item.active').attr('class');
    var ProgressBarClass = $('.line');
    console.log(ButtonClass);
});



