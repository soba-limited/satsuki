<script src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui-1.10.3.custom.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/common.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/fadein.js'></script>
<?php
if (is_home() || is_front_page()):?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js">
</script>
<?php endif; ?>
<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
$slugs = array("information",'faq','maintenance','story');
if (in_array($slug, $slugs)) :
    ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/<?php echo $slug; ?>.js">
</script>
<?php endif;?>

<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
$slugs = array('faq','service','repair','sales','contact');
if (in_array($slug, $slugs)) :
    ?>
<script defer src="https://app.webchat.obotai.com/loader/?cid=k3thGh9TCT"></script>
<script>
$('.pagetop-btn').hide();
</script>
<?php endif;?>

<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
$slugs = array('service','document','sales','sales_thanks');
if (in_array($slug, $slugs)) :
    ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/kairos.js">
</script>
<?php endif;?>

<?php if(get_post_type() == 'news'):?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/news.js">
</script>
<?php elseif(get_post_type() == 'case'):?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/case.js">
</script>
<?php elseif(get_post_type() == 'movie'):?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/movie.js">
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
