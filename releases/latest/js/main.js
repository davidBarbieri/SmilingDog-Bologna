(function() {
    'use strict';

    //MENU
    $('[data-menu-trigger]').on('click', function() {
        $('[data-menu-wrapper]').toggleClass('open');
    });

    var setScrollClass = debounce(function() {
        var mustScroll = $(window).scrollTop() > 300;
        $('body').toggleClass('scrolled', mustScroll);
    }, 10);

    $(window).on('scroll resize', setScrollClass);
    $(document).ready(setScrollClass);

    function debounce(func, wait, immediate) {
        var timeout;

        return function() {
            var context = this,
                args = arguments;

            var later = function() {
                timeout = null;

                if (!immediate) func.apply(context, args);
            };

            var callNow = immediate && !timeout;

            clearTimeout(timeout);
            timeout = setTimeout(later, wait);

            if (callNow) func.apply(context, args);
        };
    };
})();
