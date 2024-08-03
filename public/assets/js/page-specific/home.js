var $grid = $("#holiday_types_grid").imagesLoaded(function () {
  // init Masonry after all images have loaded
  $grid.masonry({
    // options
    itemSelector: ".grid-item",
    columnWidth: ".grid-sizer",
  });
  console.log("triggered.");
});
