<footer class="footer">
  <div class="wrap">
    <article class="footer__flex">

      <div class="footer__left">
        <figure class="footer__logo">
          <a href="<?php echo urls('/');?>">
            <?php echo svg('common', 'logo');?>
          </a>
        </figure>
        <div class="footer__info">
          <p class="footer__name">
            さつき株式会社
          </p>
          <p class="footer__text">
            〒100-0011<br>
            東京都千代田区内幸町2-2-3<br>
            日比谷国際ビル18F 1801<br>
            TEL／03-6635-8600　FAX／03-6635-8601<br>
            受付時間: 9:00〜17:00(月〜金曜日)
          </p>
          <p class="footer__as">
            ※土日、祝祭日、夏季、年末年始および<br class="dn-min-m">弊社指定休業日を除く
          </p>
        </div>

      </div>
      <div class="footer__right">

        <nav class="footer__nav dn-max-m">
          <div class="footer__nav--left">
            <p class="big-link"><a href="<?php echo urls('/');?>">トップページ</a></p>
            <p class="big-link"><a href="<?php echo urls('/');?>">STORY</a></p>
            <p class="big-link"><a href="<?php echo urls('/');?>">導入事例</a></p>
            <p class="big-link"><a href="<?php echo urls('/');?>">お知らせ</a></p>
            <p class="big-link mt2em"><a href="<?php echo urls('/');?>">会員ログイン</a></p>
          </div>
          <div class="footer__nav--center">
            <p class="big-link"><a href="<?php echo urls('/');?>">製品情報</a></p>
            <p class="small-link"><a href="<?php echo urls('/');?>">Xシリーズ</a></p>
            <p class="small-link"><a href="<?php echo urls('/');?>">Cシリーズ</a></p>
            <p class="small-link"><a href="<?php echo urls('/');?>">Pシリーズ</a></p>
            <p class="big-link mt2em"><a href="<?php echo urls('/');?>">資料ダウンロード</a></p>
            <p class="big-link"><a href="<?php echo urls('/');?>">ソフトウェアダウンロード</a></p>
          </div>
          <div class="footer__nav--right">
            <p class="big-link"><a href="<?php echo urls('/');?>">お問い合わせ</a></p>
            <p class="small-link"><a href="<?php echo urls('/');?>">製品・サービスに関するお問い合わせ</a></p>
            <p class="small-link"><a href="<?php echo urls('/');?>">修理・不具合に関するお問い合わせ</a></p>
            <p class="small-link"><a href="<?php echo urls('/');?>">ご販売店様向けお問い合わせ</a></p>
            <p class="big-link mt2em"><a href="<?php echo urls('/');?>">よくある質問</a></p>
            <p class="big-link"><a href="<?php echo urls('/');?>">会社概要</a></p>
          </div>
        </nav>

        <div class="footer__bottoms">
          <figure class="footer__facebook">
            <a href="">
              <?php echo svg('common', 'facebook-w');?>
            </a>
          </figure>
          <div class="footer__bottoms--info">
            <p class="footer__small-link">
              <a href="<?php echo urls('/');?>">プライバシーポリシー</a>
              <a href="<?php echo urls('/');?>">アプリケーション利用規約</a>
            </p>
            <p class="footer__copy dn-max-m">
              ©SATSUKI Co.,Ltd. All Rights Reserved
            </p>
          </div>
        </div>
        <p class="footer__copy dn-min-m mt1em">
          ©SATSUKI Co.,Ltd. All Rights Reserved
        </p>
      </div>
    </article>
  </div>
</footer>




<?php include(dirname(__FILE__).'/parts/f-script.php');?>
<?php wp_footer(); ?>

</body>

</html>
