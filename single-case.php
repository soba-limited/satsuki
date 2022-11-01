<?php get_header();?>

<main class="case-single under-page">
  <section class="sv maintenance-sv" id="maintenance">
    <h1 class="sv__page-title">
      <span class="jp">導入事例</span>
      <span class="en">CASE STUDY</span>
    </h1>
  </section>

  <?php include(dirname(__FILE__).'/parts/bread-post.php');?>

  <div class="wrap-small">
    <section class="case-single__head">
      <?php if (get_field('pdf')) {?>
      <div class="case-single__head--pdf">
        <a href="<?php the_field('pdf');?>" target="_blank">
          <picture>
            <?php echo svg2('case', 'pdf');?>
          </picture>
        </a>
      </div>
      <?php }?>
      <div class="case-single__head--title">
        <?php the_field('middle-title');?>
      </div>
    </section>

    <section class="case-single__info">
      <figure class="case-single__info--mv">
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
      </figure>
      <div class="case-single__info--bottoms">
        <h2 class="case-single__info--title">
          <?php echo get_the_title();?>
        </h2>
        <div class="case-single__info--left">
          <p class="text">導入機器</p>
          <p class="text"><?php the_field('machine');?></p>
        </div>
        <div class="case-single__info--right">
          <p class="text">お話を伺った方</p>
          <p class="text small"><?php the_field('type');?></p>
          <p class="text"><?php the_field('name');?></p>
        </div>
      </div>
    </section>

    <section class="case-single__mondai">
      <article class="case-single__mondai--card">
        <dl>
          <dt>
            <picture>
              <?php echo svg2('case', 'kadai');?>
            </picture>
          </dt>
          <dd><?php the_field('kadai');?></dd>
        </dl>
        <dl>
          <dt>
            <picture>
              <?php echo svg2('case', 'kaiketsu');?>
            </picture>
          </dt>
          <dd><?php the_field('kaiketsu');?></dd>
        </dl>
        <dl>
          <dt>
            <picture>
              <?php echo svg2('case', 'koka');?>
            </picture>
          </dt>
          <dd><?php the_field('koka');?></dd>
        </dl>
      </article>
    </section>

    <section class="case-single__content">
      <?php the_content();?>
    </section>
  </div>

</main>

<?php get_footer();?>