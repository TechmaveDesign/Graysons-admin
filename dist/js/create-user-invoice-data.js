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
		$('.invoice-table tbody').append(
            '<tr class="table-row-gap">' +
            '<td></td>' +
            '</tr>' +
            '<tr>' +
            '<td class="w-20 rounded-top-start border-end-0 border-bottom-0">' +
            ' <div class="quantity_container">' +
            ' <span class="btn btnquantity decrease" onclick="updateQty(this)" data-target="minBedrooms">-</span>' +
            '<input type="number" id="minBedrooms" name="minBedrooms" class="quantity customQuantity_input minBedrooms" value="0" min="0">' +
            '<span class="btn btnquantity increase" onclick="updateQty(this)" data-target="minBedrooms">+</span>' +
            '</div>' +
            '</td>' +
            '<td class="w-40 border-end-0 border-bottom-0">' +
            '<input type="text" class="form-control qty" value="">' +
            '</td>' +
            '<td class="w-20 border-end-0 border-bottom-0">' +
            '<select class="form-select disc-type w-130p select2">' +
            '<option value="1">Cleaning</option>' +
            '<option value="2">Repairs and Maintenance</option>' +
            '<option value="4">Tenant Application Fees</option>' +
            '<option value="5">Tenant Find Fees</option>' +
            '<option value="7">Emergency Call Out</option>' +
            '<option value="8">Management Services</option>' +
            '<option value="9">Rent Advance</option>' +
            '<option value="10">Property Holding Deposit</option>' +
            '<option value="11">Out of Office Hours Check In</option>' +
            '<option value="12">Out of Office Hours Check Out</option>' +
            '<option value="13">Serviced Apartment Management Fee</option>' +
            '<option value="14">Tenant Damages Charge to Landlord</option>' +
            '<option value="15">Landlord Parking Permit Fee</option>' +
            '<option value="16">Tenant Deposit Deduction Charge</option>' +
            '<option value="17">Administration Charge</option>' +
            '<option value="18">Lost Keys/Key Card</option>' +
            '<option value="19">Outstanding Rent</option>' +
            '<option value="20">reduced VAT</option>' +
            '<option value="22">Landlord Utility Charge (Charge for above fair usage)</option>' +
            '<option value="23">Inventory Completion</option>' +
            '<option value="24">Council Tax</option>' +
            '<option value="25">Items Purchased for Landlord</option>' +
            '<option value="26">Reference Fee</option>' +
            '<option value="27">Lost/ Laundry Card</option>' +
            '<option value="28">Laundry Card Top Up</option>' +
            '<option value="29">Utility Contribution</option>' +
            '<option value="30">london elite</option>' +
            '<option value="31">Breach of Tenancy</option>' +
            '</select>' +
            '</td>' +
            '<td class="w-40 rounded-end bg-primary-light-5 close-over position-relative" rowspan="2">' +
            '<input type="text" class="form-control" value="">' +
            '<button type="button" class="close-row btn-close removeinvoiceRow">' +
            '<span aria-hidden="true">×</span>' +
            '</button>' +
            '</td>' +
            '</tr>'
        );
		
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