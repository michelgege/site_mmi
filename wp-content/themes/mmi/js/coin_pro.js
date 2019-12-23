$('#menu').click(function(){
    $('html, body, footer').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});