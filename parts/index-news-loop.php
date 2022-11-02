<?php
$args = array(
  'post_type' => 'news', // カスタム投稿タイプ Products
  'posts_per_page' => 3,
  'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php
        $cat = get_the_terms($post->ID, 'news_cat')[0]->name;
        ?>
<div class="index-news__list--single slidein">
  <a href="<?php echo get_permalink();?>">
    <p class="index-news__list--date en">
      <?php echo get_the_date('Y.m.d');?>
    </p>
    <p class="index-news__list--cat">
      <?php echo $cat;?>
    </p>
    <p class="index-news__list--title">
      <?php echo get_the_title();?>
    </p>
    <figure class="index-news__list--arrow">
      <?php echo svg('common', 'r-arrow');?>
    </figure>
  </a>
</div>
<?php
    endwhile;
endif;
wp_reset_query();