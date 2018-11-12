(function() {
    'use strict';

    //MENU
    $('[data-menu-trigger]').on('click', function() {
        $('[data-menu-wrapper]').toggleClass('open');
    });

    //CAROUSEL (eventi & foto)
    $('[data-carousel-trigger]').on('click', createCarousel);

    function createCarousel (ev) {
        $('body').addClass('showCarousel');

        var imagesList = $(ev.currentTarget).data('images-list');
        var carouselHtml = '<div id="slick">';

        $.each(imagesList, function (i, imageSource) {
            carouselHtml += '<div><img src="' + imageSource + '"></div>';
        });
        carouselHtml +=  '</div>';

        $('[data-carousel]').append(carouselHtml);
        $('[data-close-carousel]').one('click', function () {
            $('body').removeClass('showCarousel');
            $('#slick').slick('unslick').remove();
        });

        var slickOptions = {
            infinite: true,
            dots: false,
            arrows: true,
            adaptiveHeight: true
        };

        $('#slick').slick(slickOptions);
    }

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
