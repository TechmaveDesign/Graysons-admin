<?php include('header.php') ?>

<style>
    @media (min-width: 1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            padding-left: 0px !important;
        }
    }
</style>

<div class="container-xxl">
    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="##" role="button">
                                    <h1>Edit Request Details</h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="procurement-request.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">
                        <h6 class="ReqIdGen">Request ID : <span>#GPPR001</span> </h6>
                        <div class="v-separator d-lg-block d-none"></div>
                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow">

                        </div>
                    </header>


                    <div class="contact-body">

                        <div class="nicescroll-bar">
                            <div class="formstartcontainer">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="docFilterContainer">
                                            <div class="docfilterbutton">
                                                <h2 class="tabinnerTitle">Requester Details</h2>
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Requester's Name </label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Department</label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Contact Number </label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Email Address </label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Request Date </label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Due Date</label>
                                            <input class="form-control customdataPicker" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                   <div class="col-lg-12">
                                        <div class="docFilterContainer">
                                            <div class="docfilterbutton">
                                                <h2 class="tabinnerTitle">Item Details</h2>
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Item Name <span
                                            class="RequiredField_badge">*</span></label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Item Category <span
                                            class="RequiredField_badge">*</span></label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="form-label">Quantity Required <span
                                            class="RequiredField_badge">*</span></label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="form-label">Priority Level <span
                                            class="RequiredField_badge">*</span></label>
                                            <select name="" id="" class="form-control select2">
                                                <option disabled="" selected="" value="">Please Select...</option>
                                                <option value="1">High</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="form-label">Estimated Budget</label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Item Description <span
                                            class="RequiredField_badge">*</span></label>
                                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Purpose/Justification</label>
                                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                        </div>
                                    </div>
                                 
                                   
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Upload Attachments</label>
                                        <input type="file" class="filepond" id="imageInput2" name="imageInput" multiple
                                            data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>
                                
                                    
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="docFilterContainer">
                                            <div class="docfilterbutton">
                                                <h2 class="tabinnerTitle">Technical Specifications</h2>
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Brand Preference</label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Model/Part Number</label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Alternative Options</label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Technical Specifications</label>
                                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="FormsActionGroup">
                                    <a href="procurement-request.php"><button type="button" class="canvascancel_button commonCanvas_buttonFooter">Cancel</button></a>
                                    <a href="procurement-request.php"><button type="button" class="canvasSubmit_button commonCanvas_buttonFooter"><iconify-icon icon="mynaui:save"></iconify-icon> Save & Update</button></a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Body -->









<?php include('footer.php') ?>

<!-- input lenthy content show js -->
<script>
    $(document).ready(function () {
        // Initialize Bootstrap Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // Show input value content in tooltip on view button click
        $('.view-btn').on('mouseenter', function () {
            var inputValue = $(this).siblings('.refuge-collection-input').val();
            $(this).attr('data-bs-original-title', inputValue).tooltip('show');
        });
    });
</script>
<!-- input lenthy content show js end-->



<!-- document upload dropify -->
<script>
    $('.Documentdropify').dropify({
        messages: {
            'default': '<span class="main-text">Drag and Drop OR Click to Upload </span>',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        },
        tpl: {
            message: '<div class="dropify-message"><span class="file-icon"></span> <p>{{ default }}</p></div>',
        }
    });
</script>
<!-- end -->

<!-- multiple video File Uploader js -->
<!-- NOTE: Dont add this code in footer section -->
<!-- filepond for videos uploader -->
<link href="dist/customplugins/file-uploader/filepond.css" rel="stylesheet">
<link href="dist/customplugins/file-uploader/filepond-plugin-media-preview.min.css" rel="stylesheet">
<script src="dist/customplugins/file-uploader/filepond.js"></script>
<script src="dist/customplugins/file-uploader/filepond-plugin-file-validate-type.js"></script>
<script src="dist/customplugins/file-uploader/filepond-plugin-media-preview.min.js"></script>
<script src="dist/customplugins/file-uploader/lg-video.min.js"></script>
<!-- filepond for images uploader -->
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

<!-- filepod image uploader start-->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput'), {
        acceptedFileTypes: ['image/*'],
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>

<!-- for two time uses -->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput2'), {
        acceptedFileTypes: ['image/*'],
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>
<!-- filepod image uploader end-->

<!-- add material locations js  -->
<script>
    $(document).ready(function () {
        // When the "Add More" button is clicked
        $('#addFolderBtn').on('click', function () {
            // Clone the three column divs (excluding the header and the "Add More" button)
            var newLocation = `
            <div class="row new-location-row">
                <div class="col-lg-11">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="form-label">Material Location <span class="RequiredField_badge">*</span></label>
                <select class="form-control select2" name="" id="">
                    <option disabled="" selected="" value="">Please Select...</option>
                    <option value="Stock Room">Stock Room</option>
                </select>
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-label">Qty. <span class="RequiredField_badge">*</span></label>
                <input class="form-control" type="number" name="" placeholder="">
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-label">Doc/Shelf No.. <span class="RequiredField_badge">*</span></label>
                <input class="form-control" type="text" name="" placeholder="">
            </div>
        </div>
    </div>
</div>

                <div class="col-lg-1 flex_columnRight">
                <div class="form-group">
                <button class="btn btn-danger delete-location dltappendlocation_btn" type="button"><iconify-icon icon="fluent:delete-32-regular"></iconify-icon></button>
            </div>
           
        </div>

            </div>
        `;
            // Append the new row to the location container
            $('#locationRows').append(newLocation);
            // Reinitialize select2 on the new select elements
            $('.select2').select2();
            // Add functionality to the delete button
            $('.delete-location').on('click', function () {
                // Remove the current location row
                $(this).closest('.new-location-row').remove();
            });
        });
    });
</script>

<!-- add meterial canvas submit js -->
<script>
    document.getElementById("AddmeterialProduct_submit").addEventListener("click", function () {
        // Hide the no data div
        document.getElementById("no_records").style.display = "none";
        // Show the added products listing
        document.getElementById("added_products").style.display = "block";
    });
</script>

<!-- form country option dynamic using Json  -->
<script>
    $(document).ready(function () {
        // Initialize select2
        $('.countrySelect').select2({
            placeholder: "Please Select...",
            allowClear: true
        });
        // Fetch country data from the API
        $.ajax({
            url: 'all-countries.json', // API URL to get all countries
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                var $select = $('.countrySelect');
                $select.empty(); // Clear existing options
                $select.append(
                    '<option disabled selected value="">Please Select...</option>'
                ); // Add placeholder option
                // Iterate over the response data and populate options
                $.each(response, function (index, country) {
                    var countryName = country.name.common; // Access the common name
                    var countryCode = country.cca2; // Access the country code (2-letter)
                    // Check if countryName and countryCode are not undefined
                    if (countryName && countryCode) {
                        // Add each country as an option in the select
                        $select.append('<option value="' + countryCode + '">' +
                            countryName + '</option>');
                    }
                });
                // Reinitialize Select2 to apply new options
                $('.countrySelect').select2();
            },
            error: function (xhr, status, error) {
                console.error('Failed to fetch country data:', error);
            }
        });
    });
</script>
<!-- form country option dynamic using Json  -->

<!-- phone number with country code custom code js and css -->
<link rel="stylesheet" href="dist/customplugins/phonecountry/phone-with-country.css">
<script src="dist/customplugins/phonecountry/list.min.js"></script>
<script src="dist/customplugins/phonecountry/phone-with-country.js"></script>
<!-- phone number with country code custom code js and css end-->