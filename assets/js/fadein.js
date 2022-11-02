// スクロールして表示領域に入ったらclass付与
$(function () {
  $('.fadein,.slidein').on('inview', function () {
    $(this).addClass('active');
  });
});
