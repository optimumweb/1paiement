$(document).ready(function() {

    $('.owl-carousel').each(function() {
        var $carousel = $(this);
        var options = {};
        if ( $carousel.data('owl-carousel-items') !== undefined ) {
            options.items = $carousel.data('owl-carousel-items');
        }
        $carousel.owlCarousel(options);
    });

});