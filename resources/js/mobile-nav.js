import $ from 'jquery'
window.jQuery = window.$ = $

$(function() {
    function mobile_nav_init() {
        var $mobile_nav = $('.mobile-nav');
        var $togggler = $('.navbar-toggler');

        $togggler.on('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $mobile_nav.toggleClass('open');

            $('html').toggleClass('noscroll');
            $('body').toggleClass('noscroll');
        });

        window.matchMedia('(min-width: 992px)').onchange = (e) => {
            if (e.matches) {
                $mobile_nav.removeClass('open');
                $('html').removeClass('noscroll');
                $('body').removeClass('noscroll');
            }
        }
    }
    mobile_nav_init();
});
