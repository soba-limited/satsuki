<section class="sv contact-sv" id="contact">
  <h1 class="sv__page-title">
    <span class="sub-jp">ご販売店様向け</span>
    <span class="jp">お問い合わせ</span>
    <span class="en">CONTACT</span>
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
      お問い合わせいただきありがとうございました。<br>
      お問い合わせ内容を確認させていただき、後ほど担当者よりご回答をさせていただきます。<br>
      恐れ入りますが、今しばらくお待ちいただけますよう、よろしくお願い申し上げます。
    </p>
    <p class="hover-btn contact-thanks__link">
      <a href="<?php echo home_url();?>">TOPへ戻る</a>
    </p>
  </div>
</section>

<iframe width="0" height="0" name="dummyframe" style="display:none;"></iframe>

<form action="https://form.k3r.jp/satsuki/sales" name="sales_thanks_form" class="sales_thanks_form" method="POST" target="dummyframe" style="display:none;">
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
  <p>都道府県</p>
  <input type="hidden" name="f_item_text2" value="" />
  <p>住所：郵便番号</p>
  <input type="hidden" name="f_item_zip" value="" />
  <p>住所：市・区</p>
  <input type="hidden" name="f_item_address_city" value="" />
  <p>住所：ビル名・建物名・番号</p>
  <input type="hidden" name="f_item_address_bldg" value="" />

  <input type="hidden" name="api_key" value="2e815110447005a20a830f11241d1eaac5e05a0d" />
  <input type="hidden" name="opt" value="1" />
  <input type="hidden" name="red" value="noredirect" />

  <input type="hidden" name="red_error" value="noredirect" />
</form>