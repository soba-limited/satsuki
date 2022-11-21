<?php get_header(); ?>

<main class="archive-movie under-page">
  <section class="sv maintenance-sv" id="maintenance">
    <h1 class="sv__page-title">
      <span class="jp">ミライタッチの使い方</span>
      <span class="en">HOW TO USE</span>
    </h1>
  </section>

  <?php include(dirname(__FILE__).'/parts/bread-post.php');?>

  <section class="archive-movie__list">
    <div class="wrap">
      <h2 class="archive-movie__nav-title">
        カテゴリー
      </h2>
      <p class="archive-movie__now sp-cat-toggle dn-min-s">
        <?php if (!is_tax()) {
            echo 'すべて';
        } else {
            echo get_queried_object()->name;
        }?>
      </p>
      <article class="archive-movie__nav">
        <div class="archive-movie__nav--wrap">
          <?php include(dirname(__FILE__).'/parts/archive-movie-nav.php');?>
        </div>
      </article>
      <article class="archive-movie__list--list">
        <?php include(dirname(__FILE__).'/parts/archive-movie-loop.php');?>
      </article>
      <?php
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query'=>$the_query));
        }
        wp_reset_query();?>
    </div>
  </section>

</main>

<?php get_footer();?>
