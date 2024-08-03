var $grid = $('.grid').imagesLoaded(function () {
    // init Masonry after all images have loaded
    $grid.masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 285
    });
});

$(document).on('click', '#hdest-switchto-more-tab', function () {
    $('#holiday_destination_tabs a[href="#tab-3"]').tab('show');
    $('html, body').animate({
        scrollTop: $("#holiday_destination_tabs").offset().top
    }, 2000);
});