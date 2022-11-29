<section class="sv download-sv" id="download">
  <h1 class="sv__page-title">
    <span class="jp">資料ダウンロード</span>
    <span class="en">DOCUMENT DOWNLOAD</span>
  </h1>
</section>

<!--
<?php include(dirname(__FILE__).'/../parts/bread.php');?>
-->

<section class="contact-thanks">
  <div class="wrap-mini">
    <h2 class="contact-thanks__title">
      送信が完了しました
    </h2>
    <p class="contact-thanks__text">
      お問い合わせいただき真にありがとうございました。<br>
      お問い合わせ内容を確認させていただき、後ほど担当者よりご回答をさせていただきます。<br>
      恐れ入りますが、今しばらくお待ちいただけますよう、よろしくお願い申し上げます。
    </p>
    <p class="hover-btn contact-thanks__link">
      <a href="<?php echo home_url();?>">TOPへ戻る</a>
    </p>
  </div>
</section>


<iframe width="0" height="0" name="dummyframe" style="display:none;"></iframe>

<form action="https://form.k3r.jp/satsuki/document" name="document_thanks_form" class="document_thanks_form" method="POST" target="dummyframe" style="display:none;">
  <p>問い合わせ内容をご記入ください</p>
  <input type="hidden" name="f_item_text3" value="" />
  <p>会社・組織名</p>
  <input type="hidden" name="f_item_company_name" value="" />
  <p>名前(漢字) - 姓</p>
  <input type="hidden" name="f_item_name_last" value="" />
  <input type="hidden" name="f_item_name_first" value="" />
  <p>名前(かな) - 姓</p>
  <input type="hidden" name="f_item_name_kana_last" value="" />
  <input type="hidden" name="f_item_name_kana_first" value="" />
  <p>電話番号</p>
  <input type="hidden" name="f_item_tel" value="" />
  <p>メールアドレス</p>
  <input type="hidden" name="f_item_mail" value="" />

  <input type="hidden" name="api_key" value="2e815110447005a20a830f11241d1eaac5e05a0d" />
  <input type="hidden" name="opt" value="1" />
  <input type="hidden" name="red" value="noredirect" />

  <input type="hidden" name="red_error" value="noredirect" />
</form>