

    // Initialize Select2 for normal page
    $(".select2").select2({
        placeholder: "Select an option"
    }).on('select2:open', function () {
        $('.select2-search__field').attr('placeholder', 'Search...');
    });

    $(".input_tags").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });

    // Handle Offcanvas shown event for any offcanvas with the common class
    $('.custombottm_offcanvasStyle').on('shown.bs.offcanvas', function () {
        // Initialize Select2 for Select2 elements inside this Offcanvas
        $(this).find('.select2').select2({
            placeholder: "Select an option",
            dropdownParent: $(this)
        }).on('select2:open', function () {
            $('.select2-search__field').attr('placeholder', 'Search...');
        });

        $(this).find(".input_tags").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
    });

    // Close Select2 dropdown when clicking outside of it
    $(document).on('click', function(event) {
        // Normal page Select2
        if (!$(event.target).closest('.select2-container').length && $('.select2').data('select2')) {
            $('.select2').select2('close');
        }
    });

    // Handle clicks inside the offcanvas specifically
    $('.custombottm_offcanvasStyle').on('click', function(event) {
        if (!$(event.target).closest('.select2-container').length && $(this).find('.select2').data('select2')) {
            $(this).find('.select2').select2('close');
        }
    })