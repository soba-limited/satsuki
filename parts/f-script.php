<script src='<?php echo get_template_directory_uri(); ?>/assets/js/common.js'></script>
<?php
if (is_home() || is_front_page()):?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js">
</script>
<?php endif; ?>
<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
$slugs = array();
if (in_array($slug, $slugs)) :
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/<?php echo $slug; ?>.js">
</script>
<?php endif;