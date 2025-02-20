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
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Stripe Dashboard Overview</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                        <!-- <div class="ActionBtn generate-invoice-btn p-0" id="generateInvoiceBtn">
                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 invoiceBtn themeBtn">
                            <iconify-icon icon="lucide:send"></iconify-icon> Send Invoice
                            </button>
                        
                            <div class="form-check checkboxTask">
                                <input id="checkboxSendQuickBook" checked class="form-check-input" type="checkbox" value="">
                                <label for="checkboxSendQuickBook" class="aform-check-label">Send to Quick Book</label>
                            </div>
                        </div> -->
                        <div class="form-group frmgroup_withicon formgroup_noMargin cardheaderDate_filter me-2">
                                          <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                          <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                   </div>
                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow"></div>
                    </header>
                    
                   
                    <div class="contact-body">
                    <div class="Count_Numbers_container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="SubDBSecTite">Received Amount Overview</h5>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="tickettopcard_icon">
                                                <span class="initial-wrap stale_icBG">
                                                <iconify-icon icon="icon-park-outline:success"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Success</div>
                                                <div class="todayyesterday_tick">
                                                 <div class="AmountDTY"><iconify-icon icon="material-symbols-light:euro-rounded"></iconify-icon>15067.00</div>
                                               </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="tickettopcard_icon">
                                                <span class="initial-wrap overdue_icBG">
                                                <iconify-icon icon="hugeicons:money-receive-01"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Settled</div>
                                                <div class="todayyesterday_tick">
                                                 <div class="AmountDTY"><iconify-icon icon="material-symbols-light:euro-rounded"></iconify-icon>12067.00</div>
                                               </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="tickettopcard_icon">
                                                <span class="initial-wrap emergency_icBG">
                                                    <iconify-icon icon="mage:money-exchange"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Processing</div>
                                                <div class="todayyesterday_tick">
                                                 <div class="AmountDTY"><iconify-icon icon="material-symbols-light:euro-rounded"></iconify-icon>2067.00</div>
                                               </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="tickettopcard_icon">
                                                <span class="initial-wrap completed_icBG">
                                                    <iconify-icon icon="hugeicons:money-not-found-01"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Failed</div>
                                                <div class="todayyesterday_tick">
                                                 <div class="AmountDTY"><iconify-icon icon="material-symbols-light:euro-rounded"></iconify-icon>4563.00</div>
                                               </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <h5 class="SubDBSecTite">Refund Amount Overview</h5>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="tickettopcard_icon">
                                                <span class="initial-wrap progress_icBG">
                                                <iconify-icon icon="solar:bill-check-linear"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Refunded</div>
                                                <div class="todayyesterday_tick">
                                                 <div class="AmountDTY"><iconify-icon icon="material-symbols-light:euro-rounded"></iconify-icon>2663.00</div>
                                               </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="tickettopcard_icon">
                                                <span class="initial-wrap assigned_icBG">
                                                <iconify-icon icon="pepicons-pencil:money-note-off"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Failed</div>
                                                <div class="todayyesterday_tick">
                                                 <div class="AmountDTY"><iconify-icon icon="material-symbols-light:euro-rounded"></iconify-icon>1063.00</div>
                                               </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="tickettopcard_icon">
                                                <span class="initial-wrap progress_icBG">
                                                <iconify-icon icon="eva:loader-outline"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Processing</div>
                                                <div class="todayyesterday_tick">
                                                 <div class="AmountDTY"><iconify-icon icon="material-symbols-light:euro-rounded"></iconify-icon> 1863.00</div>
                                               </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <h5 class="SubDBSecTite">Your overview</h5>
                            </div>
                            <div class="col-lg-3">  
                                <div class="BDStrirtpf">
                                <div class="paymentTopHead">
                                    <div class="paymentAmountCharged">
                                        <h6 class="PaymentTitle"><iconify-icon icon="solar:sale-broken"></iconify-icon> Gross volume</h6>
                                        <div class="amountCharged">
                                            <h2 class="chargedAmount"><iconify-icon icon="fa:eur"></iconify-icon> 5,578.24
                                            <span>eur</span></h2> <span class="statusSuccess">+1,173.1%</span>
                                        </div>
                                        <h6 class="charged">438.15  <span class="CustomerName">previous period</span></h6>
                                    </div>
                                 
                                </div>
                                </div>
                                
                            </div>

                            <div class="col-lg-3">  
                                <div class="BDStrirtpf">
                                <div class="paymentTopHead">
                                    <div class="paymentAmountCharged">
                                        <h6 class="PaymentTitle"><iconify-icon icon="solar:sale-broken"></iconify-icon> Net volume</h6>
                                        <div class="amountCharged">
                                            <h2 class="chargedAmount"><iconify-icon icon="fa:eur"></iconify-icon> 5,578.24
                                            <span>eur</span></h2> <span class="statusSuccess">+1,173.1%</span>
                                        </div>
                                        <h6 class="charged">438.15  <span class="CustomerName">previous period</span></h6>
                                    </div>
                                 
                                </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-3">  
                                <div class="BDStrirtpf">
                                <div class="paymentTopHead">
                                    <div class="paymentAmountCharged">
                                        <h6 class="PaymentTitle"><iconify-icon icon="hugeicons:ai-user"></iconify-icon> New Tenant</h6>
                                        <div class="amountCharged">
                                            <h2 class="chargedAmount">456
                                            </h2> <span class="statusSuccess">+1,173.1%</span>
                                        </div>
                                        <h6 class="charged">200  <span class="CustomerName">previous period</span></h6>
                                    </div>
                                 
                                </div>
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
</div>


<!-- add issue offcanvas modal end -->

<?php include('footer.php') ?>

<!-- input lenthy content show js -->
<script>
    $(document).ready(function() {
        // Initialize Bootstrap Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // Show input value content in tooltip on view button click
        $('.view-btn').on('mouseenter', function() {
            var inputValue = $(this).siblings('.refuge-collection-input').val();
            $(this).attr('data-bs-original-title', inputValue).tooltip('show');
        });
    });
</script>
<!-- input lenthy content show js end-->

<!-- filters show hide script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get reference to the button and the filter div
        var button = document.getElementById("toggleButton");
        var filterDiv = document.getElementById("filterDiv");
        // Add click event listener to the button
        button.addEventListener("click", function() {
            // Toggle the visibility of the filter div
            if (filterDiv.style.display === "none") {
                filterDiv.style.display = "block";
            } else {
                filterDiv.style.display = "none";
            }
        });
    });
</script>
<!-- filters show hide script end-->

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
<script>
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
</script>
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
<!-- filepod image uploader end-->

<!-- tabs scroll js start-->
<script>
    $(document).ready(function() {
        $('.next').click(function() {
            $('.nav-tabs').animate({
                scrollLeft: '+=100'
            }, 300);
        });
        $('.prev').click(function() {
            $('.nav-tabs').animate({
                scrollLeft: '-=100'
            }, 300);
        });
    });
</script>
<!-- tabs scroll js end-->