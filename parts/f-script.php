<script src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui-1.10.3.custom.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/common.js'></script>
<?php
if (is_home() || is_front_page()):?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js">
</script>
<?php endif; ?>
<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
$slugs = array("information",'faq');
if (in_array($slug, $slugs)) :
    ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/<?php echo $slug; ?>.js">
</script>
<?php endif;?>
<?php
if($post->post_parent):
    $post_data = get_post($post->post_parent);
    $parent_name = $post_data->post_name;
    if($parent_name == 'information'):?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/information.js">
</script>
<?php endif;endif;?>