

$(function(){
    $('a[href^="#"]').on('click', scrollTo);
});

function scrollTo(e) {
   var target = $($(this).attr('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 400);
    }
}