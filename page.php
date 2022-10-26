<?php
/*
Template Name: 固定ページ
*/
$page_name = get_post(get_the_ID())->post_name;
?>
<?php get_header(); ?>
<main class="under-page <?php echo $page_name; ?> <?php !empty($post->post_parent)? print 'series': print '';?>">
  <?php include("temp/" . $page_name . ".php"); ?>
</main>

<?php get_footer();
?>
