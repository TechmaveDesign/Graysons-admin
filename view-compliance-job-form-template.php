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

    .contactapp-wrap .contactapp-content .contactapp-detail-wrap .contact-body .nicescroll-bar {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .canvasFooterContainer {
        position: fixed !important;
        width: calc(100% - 70px) !important;
        height: 70px;
        left: 70px;
    }

    .hk-wrapper[data-layout="vertical"][data-layout-style="default"] .canvasFooterContainer {
        position: fixed !important;
        width: calc(100% - 270px) !important;
        height: 70px;
        left: 270px;
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
                                <a class="contactapp-title link-dark" href="javascript:void(0)" role="button">
                                    <h1> Compliance Job Form Template View</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="compliance-job-form-template.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow"></div>
                    </header>

                    <form action="application-form.php" method="POST">
                        <div class="contact-body">

                            <div class="nicescroll-bar">

                                <div class="ApplicationForm_wrapper">

                                    <div class="offcanvas-body">

                                        <div class="addingForm_Container ApplicationFrm_wrapper">
                                            <div class="add-users-modal-body-table-header text-headline-6">Compliance Form Template 1 </div>

                                            <div class="formstartcontainer">
                                                <div class="row">
                                                    <div class="col-lg-12">

                                                        <div class="ApplicationformSection" id="section1">

                                                            <div class="customflexHeader">
                                                                <div class="tabinnerTitle">
                                                                   
                                                                    Basic Details
                                                                </div>
                                                               
                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Title</label>
                                                                        <select class="form-control select2">
                                                                            <option disabled selected value="">Please
                                                                                Select...</option>
                                                                            <option value="Mr">Mr</option>
                                                                            <option value="Mrs">Mrs</option>
                                                                            <option value="Miss">Miss</option>
                                                                            <option value="Ms">Ms</option>
                                                                            <option value="Dr">Dr</option>
                                                                            <option value="Mx">Mx</option>
                                                                            <option value="Prof.">Prof.</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">First Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                               

                                                               
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Date of Birth</label>
                                                                        <input
                                                                            class="form-control customdataPicker flatpickr-input"
                                                                            type="text" name="" value=""
                                                                            placeholder="Select DOB"
                                                                            readonly="readonly">
                                                                        <iconify-icon icon="ion:calendar-outline"
                                                                            class="dateinput_icon"></iconify-icon>
                                                                    </div>
                                                                </div>
                                                               
                                                               
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Do you have a Valid
                                                                            passport</label>
                                                                        <div class="flexoneselectgroup">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="Passport"
                                                                                    id="passportopt1"
                                                                                    value="passportopt1">
                                                                                <label class="form-check-label"
                                                                                    for="passportopt1">
                                                                                    Yes
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="Passport"
                                                                                    id="passportopt2"
                                                                                    value="passportopt2">
                                                                                <label class="form-check-label"
                                                                                    for="passportopt2">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group extrabtm_margin">
                                                                        <label class="form-label">Do You Smoke?</label>
                                                                        <div class="yesNo_opt_container">
                                                                            <div class="checkbox">
                                                                                <input id="yes1" type="radio"
                                                                                    name="option1" value="yes">
                                                                                <label for="yes1">Yes</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <input id="no1" type="radio"
                                                                                    name="option1" value="no">
                                                                                <label for="no1">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <div class="form-label-group">
                                                                            <label>Please provide names of all
                                                                                applicants in your group</label>
                                                                        </div>
                                                                        <textarea class="form-control" rows="4"
                                                                            placeholder="Write here..." ></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Upload Attachments</label>
                                                                        <input type="file" class="filepond" id="imageInput1" name="imageInput" multiple
                                                                            data-max-file-size="3MB" data-max-files="5">
                                                                    </div>
                                                                </div>

                                                               

                                                                

                                                            </div>
                                                            <div class="fields-container" data-section="section1"></div>
                                                        </div>

                                                        

                                                       


                                               

                                                        

                                                        

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- <div class="canvasFooterContainer">
                                            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                                                data-bs-dismiss="offcanvas">Cancel</button>
                                            <button type="submit"
                                                class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
                                        </div> -->

                                    </div>

                                </div>
                            </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Body -->



<?php include('footer.php') ?>




<!-- yes no option for other details radio style js -->
<script>
    document.querySelectorAll('.question').forEach(group => {
        const checkboxes = group.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    checkboxes.forEach(box => {
                        if (box !== this) {
                            box.checked = false;
                        }
                    });
                }
            });
        });
    });
</script>
<!-- yes no option for other details radio style js end-->

<!-- have a gurantor  fields selection functionality start -->
<script>
    $(document).ready(function() {
        $('#gurantorSelect').change(function() {
            var selectedValue = $(this).val();
            // Hide all fields initially
            $('#GuranterAddress').hide();
            $('#GuranterBank_details').hide();
            if (selectedValue === 'Yes') {
                $('#GuranterAddress').show();
                $('#GuranterBank_details').show();
            }
        });
    });
</script>
<!-- have a gurantor  fields selection functionality end -->

<!-- button sybmit loader js start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission or link redirection
                // Show loading dots
                button.classList.add('btn-loading');
                button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
            });
        });
    });
</script>
<!-- button sybmit loader js end -->

<!-- custom form fields functionality start -->
<link rel="stylesheet" href="dist/customplugins/customfield/custom-field-add.css">
<script src="dist/customplugins/customfield/custom-fields-add.js"></script>
<!-- custom form fields functionality end -->



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

<!-- filepond video js -->
<!-- <script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginMediaPreview
    );
    // Create a FilePond instance
    const inputElement = document.querySelector('#videoInput');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['video/*'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            resolve(type);
        })
    });
    // Optional: FilePond configuration
    FilePond.setOptions({
        allowMultiple: true,
        maxFiles: 10
    });
    // Handle video previews
    pond.on('addfile', (error, file) => {
        if (error) {
            console.error('Error adding file', error);
            return;
        }
    });
</script> -->
<!-- filepond video js end -->

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
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput1'), {
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let formElements = document.querySelectorAll('input, select, textarea');

        // Disable all form fields on page load
        formElements.forEach(element => {
            element.disabled = true;
        });

        // Disable radio button clicks manually
        let radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(radio => {
            radio.dataset.originalDisabled = "true";
            radio.addEventListener('click', preventRadioSelection);
        });

        // Disable file input fields
        let fileInputs = document.querySelectorAll('input[type="file"]');
        fileInputs.forEach(fileInput => {
            fileInput.disabled = true;
        });
    });

    // Prevent radio selection when disabled
    function preventRadioSelection(event) {
        event.preventDefault();
    }
</script>

