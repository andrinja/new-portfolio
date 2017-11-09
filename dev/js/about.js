$('.item').on('click', function () {
    $('.item').removeClass('active');
        $(this).addClass('active');

    var item = $(this);

    //get specific item class
    var itemClasses = item.attr('class').split(' ');

    //remove active and item class from the list
    var specificClass = '';
    $.each(itemClasses, function(index, value){
        if(value != 'item' && value != 'active'){
            specificClass = value;
        }
    });

    $('.line').attr('class', 'line ' + specificClass);
});


