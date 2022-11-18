<?php get_header(); ?>

<main class="news archive-news under-page">
  <section class="sv maintenance-sv" id="maintenance">
    <h1 class="sv__page-title">
      <span class="jp">お知らせ</span>
      <span class="en">NEWS</span>
    </h1>
  </section>

  <?php include(dirname(__FILE__).'/parts/bread-post.php');?>

  <div class="wrap">
    <section class="news-list">
      <h2 class="archive-news__nav-title">
        カテゴリー
      </h2>
      <p class="archive-news__now sp-cat-toggle dn-min-s">
        <?php if (!is_tax()) {
            echo 'すべて';
        } else {
            echo get_queried_object()->name;
        }?>
      </p>
      <article class="archive-news__nav">
        <div class="archive-news__nav--wrap">
          <?php include(dirname(__FILE__).'/parts/archive-news-nav.php');?>
        </div>
      </article>
      <article class="news-list__list">
        <?php include(dirname(__FILE__).'/parts/archive-news-loop.php');?>
      </article>
      <?php
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query'=>$the_query));
        }
        wp_reset_query();?>
    </section>
  </div>
</main>

<?php get_footer();?>