<section class="sv contact-sv" id="contact">
  <h1 class="sv__page-title">
    <span class="sub-jp">製品・サービスに関する</span>
    <span class="jp">お問い合わせ</span>
    <span class="en">CONTACT</span>
  </h1>
</section>

<?php include(dirname(__FILE__).'/../parts/bread.php');?>

<section class="contact-child-tell">
  <div class="wrap-mini">
    <article class="contact-child-tell__card">
      <h2 class="contact-child-tell__title">
        お電話でのお問い合わせ
      </h2>
      <div class="contact-child-tell__flex">
        <div class="left">
          <figure>
            <?php echo svg('contact', 'tell-mark');?>
          </figure>
          <p class="number en">
            <a href="tel:0120-261-271">0120-261-271</a>
          </p>
        </div>
        <div class="right">
          <p class="text">
            受付時間 9:00〜17:00 (月〜金曜日)<br>
            ※土日、祝祭日、夏季、年末年始および弊社指定休業日を除く
          </p>
        </div>
      </div>
      <div class="contact-child-tell__mail">
        <figure>
          <?php echo svg('contact', 'mail-mark');?>
        </figure>
        <p class="address en">
          <a href="mailto:support@mirai-touch.com">support@mirai-touch.com</a>
        </p>
      </div>
    </article>
  </div>
</section>

<section class="contact-form">
  <div class="wrap-mini">
    <h2 class="contact-form__title">
      フォームからのお問い合わせ
    </h2>
    <article class="contact-form__wrap">
      <?php echo do_shortcode('[mwform_formkey key="46"]');?>
    </article>
  </div>
</section>