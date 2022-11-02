$('.hum-toggle').on('click', function () {
  $(this).toggleClass('active');
  $('#humMenu').toggleClass('active');
});

function topButton(elmId, duration) {
  //トップに戻るボタンの要素の取得
  var topButton = document.getElementById(elmId);

  topButton.addEventListener(
    'click',
    function (e) {
      //デフォルトの動作の制御
      e.preventDefault();

      var begin = new Date() - 0;
      var yOffset = window.pageYOffset;
      var timer = setInterval(function () {
        var current = new Date() - begin;
        if (current > duration) {
          clearInterval(timer);
          current = duration;
        }

        //スクロール位置を単位時間で変更する
        window.scrollTo(0, yOffset * (1 - current / duration));
      }, 10);
    },
    false
  );
}

// 使用例 トップに戻るボタンの id とアニメーションにかかる時間をミリ秒で指定
if ($('a#pagetop').hasClass('pagetop')) {
  topButton('pagetop', 300);
}

$(function () {
  $("a[href*='#']").on('click', function () {
    var speed = 400; // ミリ秒
    var targetId = '#' + $(this).attr('href').split('#')[1];
    var target = $(targetId == '#' || targetId == '' ? 'html' : targetId);
    var point = target.offset().top - 150;
    $('body,html').animate(
      {
        scrollTop: point,
      },
      speed,
      'swing'
    );
    return false;
  });
});
