<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
if(is_tax()) {
    $term_object = get_queried_object();
    $args = array(
      'post_type' => 'case', // カスタム投稿タイプ Products
      'posts_per_page' => 15,
      'paged' => $paged,
      'post_status' => 'publish',
      'tax_query' => array(
        array(
          'taxonomy' => 'case_cat',
          'field' => 'slug',
          'terms' => $term_object->slug,
        )
      )
    );
} else {
    $args = array(
      'post_type' => 'case', // カスタム投稿タイプ Products
      'posts_per_page' => 15,
      'paged' => $paged,
      'post_status' => 'publish'
);
}
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

<div class="archive-case__list--single">
  <figure>
    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
  </figure>
  <p class="archive-case__list--title">
    <?php echo get_the_title();?>
  </p>
  <p class="archive-case__list--text">
    <?php echo strip_tags(get_field('middle-title'));?>
  </p>
  <p class="archive-case__list--more hover-btn">
    <a href="<?php echo get_permalink();?>">詳しくみる</a>
  </p>
</div>

<?php
    endwhile;
endif;
?>
