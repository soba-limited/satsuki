$('.news-nav__title').on('click', function () {
  var ww = window.innerWidth;
  if (ww <= 640) {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next('ul').slideUp(500);
    } else {
      $('.news-nav__title').removeClass('active');
      $('.news-nav__list').slideUp(500);
      $(this).toggleClass('active');
      $(this).next('ul').slideToggle(500);
    }
  }
});

$('.sp-cat-toggle').on('click', function () {
  var ww = window.innerWidth;
  if (ww <= 640) {
    $('.archive-news__nav--wrap').fadeToggle(200);
  }
});
