<!DOCTYPE html>
<html lang="ja">

<head>
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
</head>

<?php include(dirname(__FILE__).'/parts/func.php'); ?>

<body>
  <header class="head">
    <figure class="head__logo">
      <?php echo svg("common", 'logo');?>
    </figure>
    <nav class="head__nav dn-max-l">
      <p class="head__nav--single">
        <a href="<?php echo urls('/');?>">STORY</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('/');?>">製品情報</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('/');?>">導入事例</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('/');?>">保証について</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('/');?>">よくある質問</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('/');?>">お知らせ</a>
      <p>
      <p class="head__nav--single">
        <a href="<?php echo urls('/');?>">会社概要</a>
      <p>
    </nav>
    <section class="head__btns dn-max-s">
      <p class="head__btns--single hover-btn">
        <a href="<?php echo urls('/');?>">資料ダウンロード</a>
      </p>
      <p class="head__btns--single hover-btn">
        <a href="<?php echo urls('/');?>">お問い合わせ</a>
      </p>
    </section>
    <section class="head__hum-toggle hum-toggle dn-min-l">
      <div class="head__hum-toggle--bar"></div>
      <div class="head__hum-toggle--bar"></div>
      <div class="head__hum-toggle--bar"></div>
    </section>
  </header>

  <section class="humburger dn-min-l" id="humMenu">

    <nav class="humburger__nav">
      <p class="humburger__nav--single">
        <a href="<?php echo urls('/');?>">STORY</a>
      <p>
      <p class="humburger__nav--single">
        <a href="<?php echo urls('/');?>">製品情報</a>
      <p>
      <ul class="humburger__nav--sub">
        <li class="humburger__nav--sub__single">
          <a href="<?php echo urls('/');?>">Xシリーズ</a>
        </li>
        <li class="humburger__nav--sub__single">
          <a href="<?php echo urls('/');?>">Pシリーズ</a>
        </li>
        <li class="humburger__nav--sub__single">
          <a href="<?php echo urls('/');?>">Cシリーズ</a>
        </li>
      </ul>
      <p class="humburger__nav--single">
        <a href="<?php echo urls('/');?>">導入事例</a>
      <p>
      <p class="humburger__nav--single">
        <a href="<?php echo urls('/');?>">よくある質問</a>
      <p>
      <p class="humburger__nav--single">
        <a href="<?php echo urls('/');?>">お知らせ</a>
      <p>
      <p class="humburger__nav--single">
        <a href="<?php echo urls('/');?>">会社概要</a>
      <p>
    </nav>
    <section class="humburger__btns">
      <p class="humburger__btns--single hover-btn">
        <a href="<?php echo urls('/');?>">資料ダウンロード</a>
      </p>
      <p class="humburger__btns--single hover-btn">
        <a href="<?php echo urls('/');?>">お問い合わせ</a>
      </p>
    </section>

    <section class="humburger__bottom">
      <p class="humburger__bottom--single">
        <a href="<?php echo urls('/');?>">プライバシーポリシー</a>
      </p>
      <p class="humburger__bottom--single">
        <a href="<?php echo urls('/');?>">アプリケーション利用規約</a>
      </p>
      <p class="humburger__bottom--single">
        <a href="" target="_blank">
          <?php echo svg('common', 'facebook');?>
        </a>
      </p>
    </section>


  </section>