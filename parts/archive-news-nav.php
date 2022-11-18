<?php if (!is_tax()):?>
<p class="archive-news__nav--single active">
  <a href="<?php echo urls('news');?>">
    すべて
  </a>
</p>

<?php
    $terms = get_terms('news_cat');
    $now = get_queried_object();
    foreach ($terms as $term):
        ?>

<p class="archive-news__nav--single">
  <a href="<?php echo urls('news_cat/').$term->slug;?>">
    <?php echo $term->name;?>
  </a>
</p>

<?php endforeach;?>

<?php else:?>

<p class="archive-news__nav--single">
  <a href="<?php echo urls('news');?>">
    すべて
  </a>
</p>

<?php
    $terms = get_terms('news_cat');
    $now = get_queried_object();
    foreach ($terms as $term):
        ?>

<?php if ($now->slug == $term->slug):?>
<p class="archive-news__nav--single active">
  <a href="<?php echo urls('news_cat/').$term->slug;?>">
    <?php echo $term->name;?>
  </a>
</p>
<?php else:?>
<p class="archive-news__nav--single">
  <a href="<?php echo urls('news_cat/').$term->slug;?>">
    <?php echo $term->name;?>
  </a>
</p>
<?php endif;?>

<?php endforeach;?>

<?php endif;?>