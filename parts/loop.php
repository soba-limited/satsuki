<?php
$args = array(
  'post_type' => 'post', // カスタム投稿タイプ Products
  'posts_per_page' => $num,
  'paged' => $paged,
  'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<div class="single">
  <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
  <p class="title">
    <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
  </p>
</div>
<?php
  endwhile;
endif;
?>