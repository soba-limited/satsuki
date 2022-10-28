<section class="sv contact-sv" id="contact">
  <h1 class="sv__page-title">
    <span class="sub-jp">修理・不具合に関する</span>
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
            0120-261-271
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
          tech-support@mirai-touch.com
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
    <p class="contact-form__text">
      ※製品型番およびシリアルナンバーは、電子黒板の裏面にある銀色ラベルに記載があります。
    </p>
    <article class="contact-form__wrap">
      <?php echo do_shortcode('[mwform_formkey key="50"]');?>
    </article>
  </div>
</section>