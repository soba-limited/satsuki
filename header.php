<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-5M3TKZZ');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <title><?php bloginfo('name');
  wp_title('|', true, 'left'); ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.ico">

  <?php include(dirname(__FILE__).'/parts/css.php');?>

  <?php include(dirname(__FILE__).'/parts/webfonts.php');?>

  <!--<?php include(dirname(__FILE__).'/parts/gsap.php');?>-->

  <?php wp_head(); ?>
  <?php include(dirname(__FILE__).'/parts/tag.php');?>
  <script type="text/javascript">
  var Kairos3Tracker = "satsuki";
  </script>
  <script type="text/javascript" charset="utf-8" src="//c.k3r.jp"></script>
</head>

<?php include(dirname(__FILE__).'/parts/func.php'); ?>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M3TKZZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header class="head">
    <figure class="head__logo">
      <a href="<?php echo urls('/');?>">
        <?php echo svg("common", 'logo');?>
      </a>
    </figure>
    <nav class="head__nav dn-max-l">
      <p class="head__nav--single">
        <a href="<?php echo urls('story');?>">STORY</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('information');?>">製品情報</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('case');?>">導入事例</a>
      <p>
        <!--
      <p class="head__nav--single">
        <a href="<?php echo urls('maintenance');?>">保証について</a>
      <p>
        -->
      <p class="head__nav--single">
        <a href="<?php echo urls('faq');?>">よくある質問</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('movie');?>">ミライタッチの使い方</a>
      <p>
    </nav>
    <section class="head__btns dn-max-s">
      <p class="head__btns--single hover-btn">
        <a href="<?php echo urls('document');?>">資料ダウンロード</a>
      </p>
      <p class="head__btns--single hover-btn">
        <a href="<?php echo urls('contact');?>">お問い合わせ</a>
      </p>
    </section>
    <section class="head__hum-toggle hum-toggle dn-min-l">
      <div class="head__hum-toggle--bar"></div>
      <div class="head__hum-toggle--bar"></div>
      <div class="head__hum-toggle--bar"></div>
    </section>
  </header>

  <section class="humburger dn-min-l" id="humMenu">

    <div class="humburger__inner">
      <nav class="humburger__nav">
        <p class="humburger__nav--single">
          <a href="<?php echo urls('/');?>">トップページ</a>
        <p>
        <p class="humburger__nav--single">
          <a href="<?php echo urls('story');?>">STORY</a>
        <p>
        <p class="humburger__nav--single">
          <a href="<?php echo urls('information');?>">製品情報</a>
        <p>
        <ul class="humburger__nav--sub">
          <li class="humburger__nav--sub__single">
            <a href="<?php echo urls('information/x-series');?>">Xシリーズ</a>
          </li>
          <li class="humburger__nav--sub__single">
            <a href="<?php echo urls('information/c-series');?>">Cシリーズ</a>
          </li>
          <li class="humburger__nav--sub__single">
            <a href="<?php echo urls('information/p-series');?>">Pシリーズ</a>
          </li>
        </ul>
        <p class="humburger__nav--single">
          <a href="<?php echo urls('case');?>">導入事例</a>
        <p>
          <!--
        <p class="humburger__nav--single">
          <a href="<?php echo urls('maintenance');?>">保証について</a>
        <p>
          -->
        <p class="humburger__nav--single">
          <a href="<?php echo urls('movie');?>">ミライタッチの使い方</a>
        <p>
        <p class="humburger__nav--single">
          <a href="<?php echo urls('faq');?>">よくある質問</a>
        <p>
        <p class="humburger__nav--single">
          <a href="<?php echo urls('news');?>">お知らせ</a>
        <p>
        <p class="humburger__nav--single">
          <a href="<?php echo urls('company');?>">会社概要</a>
        <p>
      </nav>
      <article class="humburger__btns">
        <p class="humburger__btns--single hover-btn">
          <a href="<?php echo urls('document');?>">資料ダウンロード</a>
        </p>
        <p class="humburger__btns--single hover-btn">
          <a href="<?php echo urls('contact');?>">お問い合わせ</a>
        </p>
      </article>

      <article class="humburger__bottom">
        <p class="humburger__bottom--single">
          <a href="<?php echo urls('privacy');?>">プライバシーポリシー</a>
        </p>
        <p class="humburger__bottom--single">
          <a href="<?php echo urls('term');?>">アプリケーション利用規約</a>
        </p>
        <p class="humburger__bottom--single">
          <a href="https://www.facebook.com/Collabon.SOL" target="_blank">
            <?php echo svg('common', 'facebook');?>
          </a>
        </p>
      </article>
    </div>


  </section>
