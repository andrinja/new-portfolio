$(document).ready(function() {
    //collect all anchors
    var anchors = [];
    $('[data-anchor]').each(function(){
        anchors.push($(this).attr('data-anchor'));
    });

    console.log(anchors);

    //Initialize full page
    $('#fullpage').fullpage({
        anchors: anchors
    });
});