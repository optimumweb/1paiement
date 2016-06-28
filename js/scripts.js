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

$(window).on('load scroll resize', function() {

    var scrollTop = $(window).scrollTop(),
        windowHeight = $(window).height();

    console.log("scrollTop", scrollTop);
    console.log("windowHeight", windowHeight);

    $('.cover').each(function() {

        var $cover = $(this),
            coverHeight = $cover.outerHeight(true),
            coverOffsetTop = $cover.offset().top;

        console.log("coverHeight", coverHeight);
        console.log("coverOffsetTop", coverOffsetTop);

        var coverTopSpacing    = Math.max(coverOffsetTop - scrollTop, 0),
            coverBottomSpacing = Math.max(windowHeight + scrollTop - coverOffsetTop - coverHeight, 0);

        console.log("coverTopSpacing", coverTopSpacing);
        console.log("coverBottomSpacing", coverBottomSpacing);

        console.log("-------------------------------");

    });

});