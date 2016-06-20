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