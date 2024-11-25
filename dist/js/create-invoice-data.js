/*Invoice Init*/
/*Id Add*/
$(function () {
	'use strict';
	$('.repeater').repeater({
		defaultValues: {},
		show: function () {
			$(this).slideDown();
		},
		hide: function (deleteElement) {
			$(this).slideUp(deleteElement);
		},
		ready: function (setIndexes) {}
	});

	var edCnt = 0;
	$('.editable').each(function () {
		$(this).attr('id', 'editable_' + edCnt);
		edCnt++;
	});

	function getEditorStatus(editorId) {
		return tinymce.get(editorId).mode.get();
	};

	function toggleEditorStatus(editorId, currentStatus) {
		if (currentStatus === "design") {
			tinymce.get(editorId).mode.set("readonly");
		} else {
			tinymce.get(editorId).mode.set("design");
		}
	};

	function enableDisable(targetEditor) {
		var status = getEditorStatus(targetEditor);
		toggleEditorStatus(targetEditor, status);
	};
	tinymce.init({
		selector: '.editable',
		inline: true,
		readonly: true,
		toolbar: false,
		menubar: false,
	});

	var selId, el, sel, range;
	$(document).on("click", ".edit-tyn", function (e) {
		selId = $(this).closest('.inline-editable-wrap').find('.editable').attr('id');
		$(this).css('visibility', 'hidden');
		el = document.getElementById(selId);
		range = document.createRange();
		sel = window.getSelection();
		range.selectNodeContents(el);
		range.collapse(false);
		sel.removeAllRanges();
		sel.addRange(range);
		el.focus();
		enableDisable(selId);
		return false;
	});
	$(document).on("focusout", ".editable", function (e) {
		enableDisable(selId);
		$('.edit-tyn').css('visibility', 'visible');
	});

	calc();
	$(document).on('keyup change', '.invoice-table tbody tr', function () {
		calc();
	});

	function calc() {
		$('.invoice-table tbody tr').each(function (i, element) {
			var html = $(this).html();
			if (html != '') {
				var qty = $(this).find('.qty').val(),
					price = $(this).find('.price').val(),
					discount = $(this).find('.discount').val(),
					dis_price;
				if ($(this).find('.disc-type').val() == 1)
					dis_price = price - (price * discount / 100);
				else
					dis_price = price - discount;
				$(this).find('.total').val((qty * dis_price).toFixed(2));
				calc_total();
			}
		});
	}

	function calc_total() {
		var total = 0;
		var discounts = 0;
		$('.total').each(function () {
			total += parseInt($(this).val());
		});
		$('.discount').each(function () {
			discounts += parseFloat($(this).val());
		});
		$('.gross-total,.subtotal').val(total.toFixed(2));
		$('.gross-discount').val(discounts);
	}
	$(document).on('keyup change', '.subtotal-table tbody tr td', function () {
		var ext_discount, grosstot, subtotal;
		ext_discount = $('.extdiscount').val();
		grosstot = $('.gross-total').val();
		$('.extdiscount-read').val(ext_discount);
		if ($('.extra-disc-type').val() == 1)
			subtotal = grosstot - (grosstot * ext_discount / 100);
		else
			subtotal = grosstot - ext_discount;
		$('.subtotal').val(subtotal);
	});
	$(document).on('click', '.add-new-row', function (e) {
		$('.invoice-table tbody').append('<tr class="table-row-gap"><td></td></tr><tr><td class="w-20 rounded-top-start border-end-0 border-bottom-0"><input type="text" class="form-control customdataPicker flatpickr-input active" value="May, 22 2024 " readonly="readonly"></td><td class="w-20  border-end-0 border-bottom-0"><input type="text" class="form-control qty" value="£663.00"></td><td class="w-20 border-end-0 border-bottom-0"><input type="text" class="form-control customdataPicker flatpickr-input active" value="" readonly="readonly"></td><td class="w-20 border-end-0 border-bottom-0"><select class="form-select disc-type w-130p select2"><option value="1">Rental</option><option value="2" selected="">Utility</option></select></td><td class="w-40 rounded-end bg-primary-light-5 close-over position-relative" rowspan="2"> <div class="viewInvoiceButton"><button type="button"><iconify-icon icon="teenyicons:invoice-outline"></iconify-icon> View Invoice</button></div><button type="button" class="close-row btn-close removeinvoiceRow"><span aria-hidden="true">×</span></button></td></tr>');
		
		 // Reinitialize Select2
		 $('.select2').select2();

		 // Reinitialize Flatpickr
		 $('.customdataPicker').flatpickr({
			 // Your Flatpickr options here
		 });
	 

		return false;
	});
	$(document).on('click', '.close-row', function (e) {
		$(this).closest('tr').prev().remove();
		$(this).closest('tr').next().remove();
		$(this).closest('tr').remove();
		calc();
		return false;
	});
	$(document).on('click', '.close-input', function (e) {
		$(this).closest('.form-group').remove();
		return false;
	});
});