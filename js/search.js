/** @format */

$(function () {
  $('#productSearch').on('input', function () {
    var search = $(this).val();
    $('.product').each(function () {
      var productTitle = $(this).find('.card-title').text();
      if (productTitle.indexOf(search) === -1) {
        $(this).hide();
      } else {
        $(this).show();
      }
    });
  });
});
