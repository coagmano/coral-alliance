jQuery(document).ready(function($) {

	var Theme = {
		init: function() {
            $('a[href^="#"]').on('click', this.scrollTo);
		},

        scrollTo: function(e) {
            var target = $($(this).attr('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 400);
            }
        }

	};

	Theme.init();

	window.Theme = Theme;

});
