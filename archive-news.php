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
    <div class="news__double">
      <aside class="news-nav">
        <?php include(dirname(__FILE__).'/parts/aside-news.php');?>
      </aside>
      <section class="news-list">
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
  </div>
</main>

<?php get_footer();?>