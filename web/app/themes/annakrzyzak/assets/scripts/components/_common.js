window.AK = window.AK || {};

window.AK.common = function($) {
    var $window = $(window);
    var isDesktop = $window.innerWidth() > 1024 ? true : false;

    function scrolledNavigation() {
        var $nav = $('.js-navigation');

        $window.on('scroll', function() {
            var offsetTop = $window.scrollTop();
            var isScrolled = offsetTop > 50;

            $nav.toggleClass('scrolled', isScrolled);
        });
    }

    function smoothScrolling() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
                var target = $(this.hash);

                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 800);

                    return false;
                }
            }
        });
    }

    function toTopButton() {
        $button = $('.js-to-top');

        $(window).on('scroll', function() {
            if ($(this).scrollTop() >= 150) {
                $button.fadeIn(500);
            } else {
                $button.fadeOut(500);
            }
        });

        $button.on('click', function() {
            $('html, body').stop().animate({ scrollTop: 0 }, 'slow');
        });
    }

    function showContactForm() {
        var $btn = $('.js-show-contactform');
        var $contactForm = $('.js-contactform');

        $btn.on('click', function() {
            $contactForm.addClass('visible');
            $(this).hide();
        });
    }

    function skrollrInit() {
        if (isDesktop) {
            skrollr.init();
        }
    }

    function initCarousel() {
        var $carousel = $('.js-banner-carousel');

        $('.js-banner-carousel').slick({
            dots: true,
            arrows: true,
            autoplay: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
        });
    }


    $(document).ready(function() {
        scrolledNavigation();
        smoothScrolling();
        toTopButton();
        showContactForm();
        initCarousel();
    });

    $window.load(function() {
    });
};
