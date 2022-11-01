<?php get_header();?>

<main class="news news-single under-page">
  <section class="sv maintenance-sv" id="maintenance">
    <h1 class="sv__page-title">
      <span class="jp">お知らせ</span>
      <span class="en">NEWS</span>
    </h1>
  </section>

  <?php include(dirname(__FILE__).'/parts/bread-post.php');?>

  <section class="news__main">
    <div class="wrap-small">
      <p class="news-single__info">
        <span class="news-single__date en"><?php echo get_the_date('Y.m.d');?></span>
        <span class="news-single__cat"><?php echo get_the_terms(get_post()->ID, 'news_cat')[0]->name;?></span>
      </p>
      <h2 class="news-single__title">
        <?php echo get_the_title();?>
      </h2>
      <article class="news-single__content">
        <?php the_content();?>
      </article>
      <ul class="news-single__nav">
        <li class="prev"><?php previous_post_link('%link', '戻る'); ?></li>
        <li class="list"><a href="<?php echo urls('news');?>">一覧へ</a></li>
        <li class="next"><?php next_post_link('%link', '次へ'); ?></li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer();?>