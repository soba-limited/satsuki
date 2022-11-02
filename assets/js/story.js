// スクロールして表示領域に入ったらclass付与
$(function () {
  $('.j-animation').on('inview', function () {
    $(this).addClass('action');
  });
});
