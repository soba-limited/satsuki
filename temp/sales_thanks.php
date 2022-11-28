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
      お問い合わせありがとうございました。
    </h2>
    <p class="contact-thanks__text">
      この度はミライタッチへのお問い合わせありがとうございました。<br>
      ご返信まで少々お待ちください。
    </p>
  </div>
</section>

<iframe width="0" height="0" border="0" name="dummyframe" style="display:none;"></iframe>

<form action="https://form.k3r.jp/satsuki/sales" name="sales_thanks_form" class="sales_thanks_form" method="POST" target="dummyframe">
  <p>問い合わせ内容をご記入ください</p>
  <textarea name="f_item_free1" rows="12" placeholder="問い合わせ内容をご記入ください"></textarea>
  <p>会社・組織名</p>
  <input type="text" name="f_item_company_name" value="" />
  <p>名前(漢字) - 姓</p>
  <input type="text" name="f_item_name_last" value="" />
  <p>名前(漢字) - 名</p>
  <input type="hidden" name="f_item_name_first" value="" />
  <p>名前(かな) - 姓</p>
  <input type="text" name="f_item_name_kana_last" value="" />
  <p>名前(かな) - 名</p>
  <input type="hidden" name="f_item_name_kana_first" value="" />
  <p>電話番号</p>
  <input type="text" name="f_item_tel" value="" />
  <p>メールアドレス</p>
  <input type="text" name="f_item_mail" value="" />
  <p>都道府県</p>
  <input type="text" name="f_item_text2" value="" />
  <p>住所：郵便番号</p>
  <input type="text" name="f_item_zip" value="" />
  <p>住所：市・区</p>
  <input type="text" name="f_item_address_city" value="" />
  <p>住所：ビル名・建物名・番号</p>
  <input type="text" name="f_item_address_bldg" value="" />

  <!-- ↓↓↓必須↓↓↓ -->
  <input type="hidden" name="api_key" value="2e815110447005a20a830f11241d1eaac5e05a0d" />
  <input type="hidden" name="opt" value="1" /><!-- メール配信 承諾=1 未承諾=0 -->
  <input type="hidden" name="red" value="noredirect" />
  <!-- ↓↓↓テストモード↓↓↓ -->
  <!-- カスタムフォームの動作テストをしたい場合は｢false｣を｢true｣にしてください。 -->
  <!-- テストモードでは実際のフォーム登録は行われませんが自動返信メール等は送信されます。 -->
  <input type="hidden" name="test_mode" value="true" />
  <!-- テストモードにおいて、フォーム登録が正しく行えることを確認したい場合にご使用ください。 -->
  <!-- 以下の｢value｣に指定したメールアドレスにリード情報(登録通知の内容と同様)が送られます -->
  <input type="hidden" name="test_mail" value="yamauchi@ai-communication.jp" />

  <p><input type="submit" value="送信" /></p>
</form>
