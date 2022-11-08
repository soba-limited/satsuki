<?php
$args = array(
  'post_type' => 'case', // カスタム投稿タイプ Products
  'posts_per_page' => 5,
  'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<div class="index-case__list--single">
  <figure>
    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
  </figure>
  <p class="index-case__list--title">
    <?php echo get_the_title();?>
  </p>
  <p class="index-case__list--text">
    <?php echo strip_tags(get_field('middle-title'));?>
  </p>
  <p class="index-case__list--more hover-btn">
    <a href="<?php echo get_permalink();?>">詳しくみる</a>
  </p>
</div>
<?php
    endwhile;
endif;
wp_reset_query();
