$(document).ready(function() {

    $('.owl-carousel').each(function() {
        var $carousel = $(this);
        var options = {};
        if ( $carousel.data('owl-carousel-items') !== undefined ) {
            options.items = $carousel.data('owl-carousel-items');
        }
        $carousel.owlCarousel(options);
    });

    $('.cover').each(function() {
        var $cover = $(this);
        if ( $cover.data('cover-src') ) {
            $cover.css('background-image', 'url(' + $cover.data('cover-src') + ')');
        }
    });

});

$(document).ready(function() {

    var windowHeight = $(window).height();

    $('.cover').each(function() {

        var $cover = $(this);

        var coverOffsetTop = $cover.offset().top,
            coverHeight = $cover.outerHeight(true);

        var scrollStart = Math.max(coverOffsetTop - windowHeight, 0),
            scrollEnd = scrollStart + coverHeight;

        console.log("scrollStart", scrollStart);
        console.log("scrollEnd", scrollEnd);

    });

});

$(window).on('load scroll resize', function() {

    var scrollTop = $(window).scrollTop(),
        windowHeight = $(window).height();

    console.log("scrollTop", scrollTop);

    $('.cover').each(function() {

        var $cover = $(this),
            coverHeight = $cover.outerHeight(true),
            coverOffsetTop = $cover.offset().top;

    });

});