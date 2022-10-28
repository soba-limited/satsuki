$('.open a').click(function () {
  const target = $(this).parents('.products-option__single');
  const title = target.find('.title').text();
  const name = target.find('.name').text();
  const thumbs = target.find('.thumbs').children('img').attr('src');
  const num = $(this).attr('data-num');
  const table = thumbs.slice(0, -6) + '-t' + num + '.svg';
  const table__sp = thumbs.slice(0, -6) + '-t' + num + '__sp.svg';

  const insertData =
    "<div class='modal__left'><h3 class='modal__title'>" +
    title +
    "</h3><p class='modal__name'>" +
    name +
    "</p><figure class='modal__thumbs'><img src='" +
    thumbs +
    "'></figure></div><div class='modal__right'><picture class='modal__table'><source media='(max-width:767px)' srcset='" +
    table__sp +
    "'><source srcset='" +
    table +
    "'><img src='" +
    table +
    "' alt=''></picture></div>";
  $('.modal__wrap').html(insertData);
  $('.modal').addClass('active');
  return false;
});

$('.close').on('click', function () {
  $('.modal').removeClass('active');
});
