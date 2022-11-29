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

    $('input[name="f_item_text3"]').attr('value', sales_your_content);
    $('input[name="f_item_company_name"]').attr('value', sales_your_company);
    $('input[name="f_item_name_last"]').attr('value', sales_your_name);
    //$('input[name="f_item_name_first"]').attr('value', sales_your_name);
    $('input[name="f_item_name_kana_last"]').attr('value', sales_your_furi);
    //$('input[name="f_item_name_kana_first"]').attr('value', sales_your_furi);
    $('input[name="f_item_tel"]').attr('value', sales_your_tell);
    $('input[name="f_item_mail"]').attr('value', sales_your_email);
    $('input[name="f_item_text2"]').attr('value', sales_your_zip);
    $('input[name="f_item_zip"]').attr('value', sales_your_zipcode);
    $('input[name="f_item_address_city"]').attr('value', sales_your_city);
    $('input[name="f_item_address_bldg"]').attr('value', sales_your_building);

    console.log(document.sales_thanks_form);

    document.sales_thanks_form.submit();
  }
});

$('.service_submit')
  .parent('.hover-btn')
  .on('mouseover', function () {
    let service_your_content = $('textarea[name="your_content"]').val();
    let service_your_company = $('input[name="your_company"]').val();
    let service_your_name = $('input[name="your_name"]').val();
    let service_your_furi = $('input[name="your_furi"]').val();
    let service_your_email = $('input[name="your_email"]').val();
    let service_your_tell = $('input[name="your_tell"]').val();
    let service_your_zipcode = $('input[name="your_zipcode"]').val();
    let service_your_zip = $('select[name="your_zip"]').val();
    let service_your_city = $('input[name="your_city"]').val();
    let service_your_building = $('input[name="your_building"]').val();

    window.localStorage.setItem('service_your_content', service_your_content);
    window.localStorage.setItem('service_your_company', service_your_company);
    window.localStorage.setItem('service_your_name', service_your_name);
    window.localStorage.setItem('service_your_furi', service_your_furi);
    window.localStorage.setItem('service_your_email', service_your_email);
    window.localStorage.setItem('service_your_tell', service_your_tell);
    window.localStorage.setItem('service_your_zipcode', service_your_zipcode);
    window.localStorage.setItem('service_your_zip', service_your_zip);
    window.localStorage.setItem('service_your_city', service_your_city);
    window.localStorage.setItem('service_your_building', service_your_building);
  });

$(document).ready(function () {
  if ($('form').hasClass('service_thanks_form')) {
    let service_your_content = window.localStorage.getItem(
      'service_your_content'
    );
    let service_your_company = window.localStorage.getItem(
      'service_your_company'
    );
    let service_your_name = window.localStorage.getItem('service_your_name');
    let service_your_furi = window.localStorage.getItem('service_your_furi');
    let service_your_email = window.localStorage.getItem('service_your_email');
    let service_your_tell = window.localStorage.getItem('service_your_tell');
    let service_your_zipcode = window.localStorage.getItem(
      'service_your_zipcode'
    );
    let service_your_zip = window.localStorage.getItem('service_your_zip');
    let service_your_city = window.localStorage.getItem('service_your_city');
    let service_your_building = window.localStorage.getItem(
      'service_your_building'
    );

    $('input[name="f_item_text5"]').attr('value', service_your_content);
    $('input[name="f_item_company_name"]').attr('value', service_your_company);
    $('input[name="f_item_name_last"]').attr('value', service_your_name);
    //$('input[name="f_item_name_first"]').attr('value', service_your_name);
    $('input[name="f_item_name_kana_last"]').attr('value', service_your_furi);
    //$('input[name="f_item_name_kana_first"]').attr('value', service_your_furi);
    $('input[name="f_item_tel"]').attr('value', service_your_tell);
    $('input[name="f_item_mail"]').attr('value', service_your_email);
    $('input[name="f_item_text4"]').attr('value', service_your_zip);
    $('input[name="f_item_zip"]').attr('value', service_your_zipcode);
    $('input[name="f_item_address_city"]').attr('value', service_your_city);
    $('input[name="f_item_address_bldg"]').attr('value', service_your_building);

    console.log(document.service_thanks_form);

    document.service_thanks_form.submit();
  }
});

$('.document_submit')
  .parent('.hover-btn')
  .on('mouseover', function () {
    const your_selects = [];
    your_selects.length = 0;
    $(':checkbox[name="your_select[data][]"]:checked').each(function () {
      your_selects.push($(this).val());
    });
    let document_your_select = your_selects;
    let document_your_company = $('input[name="your_company"]').val();
    let document_your_name = $('input[name="your_name"]').val();
    let document_your_furi = $('input[name="your_furi"]').val();
    let document_your_email = $('input[name="your_email"]').val();
    let document_your_tell = $('input[name="your_tell"]').val();

    window.localStorage.setItem('document_your_select', document_your_select);
    window.localStorage.setItem('document_your_company', document_your_company);
    window.localStorage.setItem('document_your_name', document_your_name);
    window.localStorage.setItem('document_your_furi', document_your_furi);
    window.localStorage.setItem('document_your_email', document_your_email);
    window.localStorage.setItem('document_your_tell', document_your_tell);
  });

$(document).ready(function () {
  if ($('form').hasClass('document_thanks_form')) {
    let document_your_select = window.localStorage.getItem(
      'document_your_select'
    );
    let document_your_company = window.localStorage.getItem(
      'document_your_company'
    );
    let document_your_name = window.localStorage.getItem('document_your_name');
    let document_your_furi = window.localStorage.getItem('document_your_furi');
    let document_your_email = window.localStorage.getItem(
      'document_your_email'
    );
    let document_your_tell = window.localStorage.getItem('document_your_tell');

    $('input[name="f_item_text3"]').attr('value', document_your_select);
    $('input[name="f_item_company_name"]').attr('value', document_your_company);
    $('input[name="f_item_name_last"]').attr('value', document_your_name);
    //$('input[name="f_item_name_first"]').attr('value', document_your_name);
    $('input[name="f_item_name_kana_last"]').attr('value', document_your_furi);
    //$('input[name="f_item_name_kana_first"]').attr('value', document_your_furi);
    $('input[name="f_item_tel"]').attr('value', document_your_tell);
    $('input[name="f_item_mail"]').attr('value', document_your_email);

    console.log(document.document_thanks_form);

    document.document_thanks_form.submit();
  }
});
