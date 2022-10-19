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

  <?php include(dirname(__FILE__).'/parts/gsap.php');?>

  <?php wp_head(); ?>
  <?php include(dirname(__FILE__).'/parts/tag.php');?>
</head>

<?php include(dirname(__FILE__).'/parts/func.php'); ?>

<body>