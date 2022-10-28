<?php
  $faqCats = get_terms('faq_cat');
  foreach($faqCats as $faqCat):
      ?>
<article class="faq-list__single">
  <h2 class="faq-list__title">
    <?php echo $faqCat->name;?>
  </h2>
  <div class="faq-list__list">
    <?php
$args = array(
  'post_type' => 'faq', // カスタム投稿タイプ Products
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'tax_query' => array(
    array(
      'taxonomy' => 'faq_cat',
      'field' => 'slug',
      'terms' => $faqCat->slug
    )
  )
);
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
          ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <dl>
      <dt class="faq_toggle">
        <span class="first en">Q</span>
        <span class="text"><?php the_field('question');?></span>
        <span class="toggle-btn"></span>
      </dt>
      <dd>
        <p class="answer__text">
          <span class="first en">A</span>
          <span class="text"><?php the_field('answer');?></span>
        </p>
      </dd>
    </dl>
    <?php
    endwhile;
      endif;
      wp_reset_query();
      ?>

  </div>

</article>
<?php endforeach;?>