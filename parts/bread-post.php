<section class="bread">
  <ul>
    <li>
      <a href="<?php echo urls('/');?>">トップ</a>
    </li>
    <li class="arrow"></li>
    <?php if(is_single()):?>
    <li>
      <a href="<?php echo urls('').get_post_type();?>">
        <?php echo get_post_type_object(get_post_type())->label;?>
      </a>
    </li>
    <li class="arrow"></li>
    <li>
      <?php echo get_the_title();?>
    </li>
    <?php elseif (is_tax()):?>
    <li>
      <a href="<?php echo urls('').get_post_type();?>">
        <?php echo get_post_type_object(get_post_type())->label;?>
      </a>
    </li>
    <li class="arrow"></li>
    <li>
      <?php echo get_queried_object()->name;?>
    </li>
    <?php else:?>
    <li>
      <?php echo get_post_type_object(get_post_type())->label;?>
    </li>
    <?php endif;?>
  </ul>
</section>