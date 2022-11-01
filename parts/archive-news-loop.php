<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$year = get_query_var('year');
$monthnum = get_query_var('monthnum');
if(is_tax()) {
    $term_object = get_queried_object();
    $args = array(
      'post_type' => 'news', // カスタム投稿タイプ Products
      'posts_per_page' => 10,
      'paged' => $paged,
      'post_status' => 'publish',
      'tax_query' => array(
        array(
          'taxonomy' => 'news_cat',
          'field' => 'slug',
          'terms' => $term_object->slug,
        )
      )
    );
} else {
    $args = array(
      'post_type' => 'news', // カスタム投稿タイプ Products
      'posts_per_page' => 10,
      'paged' => $paged,
      'year' => $year,
      'monthnum' => $monthnum,
      'post_status' => 'publish'
);
}
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php
        $cat = get_the_terms($post->ID, 'news_cat')[0]->name;
        ?>
<div class="news-list__single">
  <a href="<?php echo get_permalink();?>">
    <p class="news-list__date en">
      <?php echo get_the_date('Y.m.d');?>
    </p>
    <p class="news-list__cat">
      <?php echo $cat;?>
    </p>
    <p class="news-list__title">
      <?php echo get_the_title();?>
    </p>
  </a>
</div>
<?php
    endwhile;
endif;
?>