"use strict";

/*Bootstrap Color Picker Init*/
$(function () {
  $('.color-picker').each(function () {
    var elemValue = $(this).find('.colorpicker-value').val();
    $(this).find('.colorpicker-input-addon').css('background-color', elemValue).find('input[type="color"]').val(elemValue);
  });
  $(document).on("input", ".color-picker input[type='color'], .color-picker input.colorpicker-value", function (e) {
    var colorValue = $(this).val();
    var colorPicker = $(this).closest('.color-picker');
    colorPicker.find('.colorpicker-value').val(colorValue);
    colorPicker.find('input[type="color"]').val(colorValue).parent().css('background-color', colorValue);
  });
});