<?php
 $cats = get_terms('news_cat');
 foreach($cats as $cat):
     ?>
<li class="news-nav__single">
  <a href="<?php echo urls('news_cat/').$cat->slug;?>"><?php echo $cat->name;?></a>
</li>
<?php endforeach;?>