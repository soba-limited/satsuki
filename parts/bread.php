<section class="bread">
  <ul>
    <li>
      <a href="<?php echo urls('/');?>">トップ</a>
    </li>
    <?php if($post->post_parent):$post_data = get_post($post->post_parent);?>
    <li class="arrow"></li>
    <li>
      <a href="<?php echo urls('').$post_data->post_name;?>">
        <?php echo $post_data->post_title;?>
      </a>
    </li>
    <?php endif;?>
    <li class="arrow"></li>
    <li>
      <?php echo get_the_title();?>
    </li>
  </ul>
</section>