$('.hum-toggle').on('click', function () {
  const html = document.querySelector('html');
  let bodyHeight; //ウィンドウの高さを入れる場所
  let scrollpos; //スクロールの位置を入れる場所
  if ($(this).hasClass('active')) {
    $(this).removeClass('active');
    html.classList.remove('is-menuOpen');
    //document.body.style.top = 0;
    window.scroll(0, scrollpos);
    $('#humMenu').removeClass('active');
  } else {
    scrollpos = window.pageYOffset;
    html.classList.add('is-menuOpen');
    bodyHeight = window.innerHeight;
    document.body.style.top = scrollpos * -1 + 'px';
    $(this).addClass('active');
    $('#humMenu').addClass('active');
  }
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
  $("a[href*='#']:not('.pagetop')").on('click', function () {
    var speed = 400; // ミリ秒
    var targetId = '#' + $(this).attr('href').split('#')[1];
    var target = $(targetId == '#' || targetId == '' ? 'html' : targetId);
    var point = target.offset().top - 100;
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
