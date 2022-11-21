$('.sp-cat-toggle').on('click', function () {
  var ww = window.innerWidth;
  if (ww <= 640) {
    $('.archive-movie__nav--wrap').fadeToggle(200);
  }
});
