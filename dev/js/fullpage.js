$(document).ready(function() {
    //collect all anchors
    var anchors = [];
    $('[data-anchor]').each(function(){
        anchors.push($(this).attr('data-anchor'));
    });

    //Initialize full page
    $('#fullpage').fullpage({
        resize: true,
        anchors: anchors
    });
});