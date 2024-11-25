/*Contact Init*/
"use strict"; 
$(function() {
    /*Select2*/
    $("#input_tags_1,#input_tags_2,#input_tags_3").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
    
   
    /*DataTable Init*/
    if ($(".common-datatable").length > 0) {
        /*Checkbox Add*/
        var tdCnt=0;
        $('table tr').each(function(){
            $('<span class="form-check mb-0"><input type="checkbox" class="form-check-input check-select" id="chk_sel_'+tdCnt+'"><label class="form-check-label" for="chk_sel_'+tdCnt+'"></label></span>').insertBefore($(this).find("td > .d-flex .contact-star").eq(0));
            tdCnt++;
        });
        var targetDt = $('.common-datatable').DataTable({
            dom: '<"row"<"col-5 mb-3"<"contact-toolbar-left">l><"col-7 mb-3"<"contact-toolbar-right"flip>>><"row"<"col-sm-12"t>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
            // Your existing DataTable configuration
            "columnDefs": [ {
                "searchable": false,
                "orderable": false,
            } ],
            pagingType: 'simple_numbers',
            "order": [1, 'asc' ],
            language: { search: "",
                searchPlaceholder: "Search",
                "info": "_START_ - _END_ of _TOTAL_",
                sLengthMenu: "View  _MENU_",
                paginate: {
                    next: '<i class="ri-arrow-right-s-line"></i>', // or '→'
                    previous: '<i class="ri-arrow-left-s-line"></i>' // or '←' 
                }
            },
            "drawCallback": function () {
                $('.common-datatable_wrapper').find('.pagination').addClass('custom-pagination pagination-simple justify-content-end');
            }
        });
        $('.pagination').addClass('custom-pagination pagination-simple justify-content-end');
        $(document).on( 'click', '.del-button', function () {
            targetDt.row('.selected').remove().draw( false );
            return false;
        });
        $("div.contact-toolbar-left").html('<div class="d-xxl-flex d-none align-items-center"> </div><div class="d-xxl-flex d-none align-items-center form-group mb-0"> <label class="flex-shrink-0 mb-0 me-2">Filter by:</label> </div> ');

        // Add DataTables length menu under contact-toolbar-left div
        if ($(".contact-toolbar-left .dataTables_length").length === 0) {
            var lengthMenu = $('<div class="dataTables_length"><label for="example-select-1">Show </label><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="example-select-1"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><label for="example-select-1"> entries</label></div>');
            $("div.contact-toolbar-left").append(lengthMenu);
        }

        $(".common-datatable").parent().addClass('table-responsive');
        
       
        // var  DT1 = $('.common-datatable').DataTable();
        // $(".check-select-all").on( "click", function(e) {
        //     $('.check-select').attr('checked', true);
        //     if ($(this).is( ":checked" )) {
        //         DT1.rows().select();    
        //         $('.check-select').prop('checked', true);            
        //     } else {
        //         DT1.rows().deselect(); 
        //         $('.check-select').prop('checked', false);
        //     }
        // });
        // $(".check-select").on( "click", function(e) {
        //     if ($(this).is( ":checked" )) {
        //         $(this).closest('tr').addClass('selected');        
        //     } else {
        //         $(this).closest('tr').removeClass('selected');
        //         $('.check-select-all').prop('checked', false);
        //     }
        // });

        // Add export dropdown button
        var exportDropdown = $('<div class="dropdown"></div>');
        var exportButton = $('<button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">Export</button>');
        var dropdownMenu = $('<ul class="dropdown-menu" aria-labelledby="exportDropdown"></ul>');

        // Add export options to the dropdown menu
        var exportOptions = ['Copy', 'Excel', 'CSV', 'PDF', 'Print'];
        exportOptions.forEach(function(option) {
            var listItem = $('<li></li>');
            var link = $('<a class="dropdown-item export-btn" href="#">' + option + '</a>');
            listItem.append(link);
            dropdownMenu.append(listItem);
        });

        exportDropdown.append(exportButton);
        exportDropdown.append(dropdownMenu);

        // Append the dropdown to the contact-toolbar-left div
        $(".contact-toolbar-left").append(exportDropdown);

        // Initialize DataTables buttons
        var buttons = new $.fn.dataTable.Buttons(targetDt, {
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print'
            ]
        }).container();

        // Append the buttons to the dropdown menu
        dropdownMenu.append(buttons);
    }
});
