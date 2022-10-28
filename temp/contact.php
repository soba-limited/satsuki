<section class="sv contact-sv" id="contact">
  <h1 class="sv__page-title">
    <span class="jp">お問い合わせ</span>
    <span class="en">CONTACT</span>
  </h1>
</section>

<?php include(dirname(__FILE__).'/../parts/bread.php');?>

<section class="contact-tell">
  <div class="wrap-mini">
    <article class="contact-tell__card">
      <h2 class="contact-tell__title">
        資料のご請求や製品の詳細情報・各種サポートの<br>
        お問い合わせはこちらから
      </h2>
      <div class="contact-tell__flex">
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
    </article>
  </div>
</section>

<section class="contact-list">
  <div class="wrap-mini">
    <article class="contact-list__single">
      <figure class="icon">
        <?php echo svg('contact', 'products');?>
      </figure>
      <div class="text-box">
        <p class="title">製品・サービスに関する<br class="dn-min-s">お問い合わせ</p>
        <p class="people">ご導入を検討中のお客様</p>
      </div>
      <p class="hover-btn more">
        <a href="./service">詳しく見る</a>
      </p>
    </article>
    <article class="contact-list__single">
      <figure class="icon">
        <?php echo svg('contact', 'repair');?>
      </figure>
      <div class="text-box">
        <p class="title">修理・不具合に関する<br class="dn-min-s">お問い合わせ</p>
        <p class="people">ご利用中のお客様</p>
      </div>
      <p class="hover-btn more">
        <a href="./repair">詳しく見る</a>
      </p>
    </article>
    <article class="contact-list__single">
      <figure class="icon">
        <?php echo svg('contact', 'sales');?>
      </figure>
      <div class="text-box">
        <p class="title">
          ご販売店様向け<br>
          お問い合わせページ
        </p>
      </div>
      <p class="hover-btn more">
        <a href="./sales">詳しく見る</a>
      </p>
    </article>
    <article class="contact-list__single">
      <figure class="icon">
        <?php echo svg('contact', 'download');?>
      </figure>
      <div class="text-box">
        <p class="title">ソフトウェアダウンロード</p>
      </div>
      <p class="hover-btn more">
        <a href="<?php echo urls('software');?>">詳しく見る</a>
      </p>
    </article>
  </div>
</section>