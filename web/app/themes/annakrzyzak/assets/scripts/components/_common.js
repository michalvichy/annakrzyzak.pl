window.BC = window.BC || {};

window.BC.common = function($) {
    var $window = $(window);

    function scrolledNavigation() {
        var $nav = $('.js-navigation');

        $window.on('scroll', function() {
            var offsetTop = $window.scrollTop();
            var isScrolled = offsetTop > 50;

            console.log($nav);

            $nav.toggleClass('scrolled', isScrolled);
        })
    }

    scrolledNavigation();
};
