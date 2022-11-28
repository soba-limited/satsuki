$('.sales_submit')
  .parent('.hover-btn')
  .on('mouseover', function () {
    let sales_your_content = $('textarea[name="your_content"]').val();
    let sales_your_company = $('input[name="your_company"]').val();
    let sales_your_name = $('input[name="your_name"]').val();
    let sales_your_furi = $('input[name="your_furi"]').val();
    let sales_your_email = $('input[name="your_email"]').val();
    let sales_your_tell = $('input[name="your_tell"]').val();
    let sales_your_zipcode = $('input[name="your_zipcode"]').val();
    let sales_your_zip = $('select[name="your_zip"]').val();
    let sales_your_city = $('input[name="your_city"]').val();
    let sales_your_building = $('input[name="your_building"]').val();

    window.localStorage.setItem('sales_your_content', sales_your_content);
    window.localStorage.setItem('sales_your_company', sales_your_company);
    window.localStorage.setItem('sales_your_name', sales_your_name);
    window.localStorage.setItem('sales_your_furi', sales_your_furi);
    window.localStorage.setItem('sales_your_email', sales_your_email);
    window.localStorage.setItem('sales_your_tell', sales_your_tell);
    window.localStorage.setItem('sales_your_zipcode', sales_your_zipcode);
    window.localStorage.setItem('sales_your_zip', sales_your_zip);
    window.localStorage.setItem('sales_your_city', sales_your_city);
    window.localStorage.setItem('sales_your_building', sales_your_building);
  });

$(document).ready(function () {
  if ($('form').hasClass('sales_thanks_form')) {
    let sales_your_content = window.localStorage.getItem('sales_your_content');
    let sales_your_company = window.localStorage.getItem('sales_your_company');
    let sales_your_name = window.localStorage.getItem('sales_your_name');
    let sales_your_furi = window.localStorage.getItem('sales_your_furi');
    let sales_your_email = window.localStorage.getItem('sales_your_email');
    let sales_your_tell = window.localStorage.getItem('sales_your_tell');
    let sales_your_zipcode = window.localStorage.getItem('sales_your_zipcode');
    let sales_your_zip = window.localStorage.getItem('sales_your_zip');
    let sales_your_city = window.localStorage.getItem('sales_your_city');
    let sales_your_building = window.localStorage.getItem(
      'sales_your_building'
    );

    console.log(sales_your_content);

    $('textarea[name="f_item_free1"]').val(sales_your_content);
    $('input[name="f_item_company_name"]').val(sales_your_company);
    $('input[name="f_item_name_last"]').val(sales_your_name);
    $('input[name="f_item_name_kana_last"]').val(sales_your_furi);
    $('input[name="f_item_tel"]').val(sales_your_email);
    $('input[name="f_item_mail"]').val(sales_your_tell);
    $('input[name="f_item_text2"]').val(sales_your_zipcode);
    $('input[name="f_item_zip"]').val(sales_your_zip);
    $('input[name="f_item_address_city"]').val(sales_your_city);
    $('input[name="f_item_address_bldg"]').val(sales_your_building);

    document.sales_thanks_form.submit();
  }
});
