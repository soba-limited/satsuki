$('.ct-btn').on('click', function () {
  let targetID = $(this).attr('id');
  $('.toggle-tab').each(function () {
    $(this).removeClass('active');
    if ($(this).hasClass(targetID)) {
      $(this).addClass('active');
    }
  });
});
