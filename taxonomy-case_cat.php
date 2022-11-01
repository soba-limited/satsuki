<?php get_header(); ?>

<main class="archive-case under-page">
  <section class="sv maintenance-sv" id="maintenance">
    <h1 class="sv__page-title">
      <span class="jp">導入事例</span>
      <span class="en">CASE STUDY</span>
    </h1>
  </section>

  <?php include(dirname(__FILE__).'/parts/bread-post.php');?>

  <section class="archive-case__list">
    <div class="wrap">
      <h2 class="archive-case__nav-title">
        カテゴリー
      </h2>
      <p class="archive-case__now sp-cat-toggle dn-min-s">
        <?php if (!is_tax()) {
            echo 'すべて';
        } else {
            echo get_queried_object()->name;
        }?>
      </p>
      <article class="archive-case__nav">
        <div class="archive-case__nav--wrap">
          <?php include(dirname(__FILE__).'/parts/archive-case-nav.php');?>
        </div>
      </article>
      <article class="archive-case__list--list">
        <?php include(dirname(__FILE__).'/parts/archive-case-loop.php');?>
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