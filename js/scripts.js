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

    var scrollTop    = $(window).scrollTop(),
        windowHeight = $(window).height();

    console.log("scrollTop", scrollTop);

    $('.cover').each(function() {

        var $cover         = $(this),
            coverOffsetTop = $cover.offset().top,
            coverHeight    = $cover.outerHeight(true);

        var scrollStart    = Math.max(coverOffsetTop - windowHeight, 0),
            scrollEnd      = coverOffsetTop + coverHeight,
            scrollProgress = ( scrollTop - scrollStart ) / ( scrollEnd - scrollStart );

        var coverBgPosY = scrollProgress * 40 + 30;

        $cover.css('background-position', '50% ' + coverBgPosY + '%')

    });

});