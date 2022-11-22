<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
if(is_tax()) {
    $term_object = get_queried_object();
    $args = array(
      'post_type' => 'movie', // カスタム投稿タイプ Products
      'posts_per_page' => 15,
      'paged' => $paged,
      'order' => 'ASC',
      'post_status' => 'publish',
      'tax_query' => array(
        array(
          'taxonomy' => 'movie_cat',
          'field' => 'slug',
          'terms' => $term_object->slug,
        )
      )
    );
} else {
    $args = array(
      'post_type' => 'movie', // カスタム投稿タイプ Products
      'posts_per_page' => 15,
      'paged' => $paged,
      'order' => 'ASC',
      'post_status' => 'publish'
);
}
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

<div class="archive-movie__list--single">
  <figure>
    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
  </figure>
  <p class="archive-movie__list--title">
    <?php echo get_the_title();?>
  </p>
  <p class="archive-movie__list--text">
    <?php echo strip_tags(get_field('text_area'));?>
  </p>
  <p class="archive-movie__list--more hover-btn">
    <a href="<?php the_field('link');?>" target="_blank">動画を見る</a>
  </p>
</div>

<?php
    endwhile;
endif;
?>