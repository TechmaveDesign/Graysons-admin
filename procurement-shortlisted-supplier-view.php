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
    .cke_notifications_area {
	display: none !important;
}
.dropify-wrapper {
	height: 100px;
	padding-bottom: 27px;
	margin-bottom: 20px;
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
                                    <h1>View Supplier & Item Details</h1>
                                </a>

                            </div>
                            <div class="ms-3">
                                <a href="procurement-team-request-detail-page.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">
                         <!-- <h6 class="ReqIdGen">Request ID : <span>#GPPR001</span> </h6> -->
                         <div class="enquiryRight_header_data TaskAction_wrapper ">
                                <div class="enquiryID_container">
                                    <div class="EnquiryID">Approval Status</div>
                                    <div class="IDButton approval_status_update">
                                        <button type="button" class="SourceDataBtn approved" id="approvalStatusBtn">Approved</button>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card card-border mb-lg-4 mb-3">
                                                <div class="card-header card-header-action">
                                                    <div class="media align-items-center">
                                                        <div class="media-head me-2">
                                                            <div class="JobIdIcon">
                                                                <iconify-icon icon="hugeicons:job-link">
                                                                </iconify-icon>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="fw-medium text-dark">Request ID</div>
                                                            <div class="fs-7"><a href="#">GPPR013</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="cardRightDetail_boxContainer">
                                                        <div class="flexcheckColumn">
                                                            <span class="badge rounded-pill bg-outline-success">Confirmed</span>
                                                            <!-- <span class="badge rounded-pill bg-outline-warning">Pending</span> -->
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-body custombodyPadding">
                                                    <div class="d-flex text-center inspectionpropert_details">
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                Supplier Name</span>
                                                                <span class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span class="badge badge-soft-success  my-1  me-2">Greesh Stationary</span></span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                Email Address</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">jamessmith@gmail.com</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                               Contact No.</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">81567856942</span></span>
                                                            </div>
                                                        </div> -->
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                Contact No.</span>
                                                                <span class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span class="badge badge-soft-success  my-1  me-2">986524578</span></span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                Request Date</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">15 March, 2025</span></span>
                                                            </div>
                                                        </div> -->
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                    Email Address</span>
                                                                <span class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span class="badge badge-soft-success  my-1  me-2">greesh@gmail.com</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                   Attached Quotation File</span>
                                                               <a href="dist/img/newimages/item-images/dummy.pdf" download class="DownloadBtn"><iconify-icon icon="mynaui:file"></iconify-icon> Download</a>
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                        <!-- <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                   Approved By</span>
                                                                <span class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span class="badge badge-soft-success  my-1  me-2">Sarunas</span></span>
                                                            </div>
                                                        </div> -->

                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">

                                    <div class="col-lg-5 stickyColumn">

                                        <div class="product__carousel">

                                            <!-- Swiper and EasyZoom plugins start -->
                                            <div class="swiper-container gallery-top">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide easyzoom easyzoom--overlay">
                                                        <a href="dist/img/newimages/item-images/912 mfE2XBL._SX522.png">
                                                            <img src="dist/img/newimages/item-images/912 mfE2XBL._SX522.png" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="swiper-slide easyzoom easyzoom--overlay">
                                                        <a href="dist/img/newimages/item-images/71ts-10g8lL._SX522.png">
                                                            <img src="dist/img/newimages/item-images/71ts-10g8lL._SX522.png" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="swiper-slide easyzoom easyzoom--overlay">
                                                        <a href="dist/img/newimages/item-images/7148EEf EbL._SY679.png">
                                                            <img src="dist/img/newimages/item-images/7148EEf EbL._SY679.png" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="swiper-slide easyzoom easyzoom--overlay">
                                                        <a href="dist/img/newimages/item-images/713p5z46xDL._SY741.png">
                                                            <img src="dist/img/newimages/item-images/713p5z46xDL._SY741.png" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="swiper-slide easyzoom easyzoom--overlay">
                                                        <a href="dist/img/newimages/item-images/21th3PNiMsL.png">
                                                            <img src="dist/img/newimages/item-images/21th3PNiMsL.png" alt="" />
                                                        </a>
                                                    </div>
                                                    <!-- <div class="swiper-slide easyzoom easyzoom--overlay">
                                                        <a href="assets/img/products/singlepr6.jpg">
                                                            <img src="assets/img/products/singlepr6.jpg" alt="" />
                                                        </a>
                                                    </div> -->

                                                </div>
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next swiper-button-white"></div>
                                                <div class="swiper-button-prev swiper-button-white"></div>
                                            </div>
                                            <div class="swiper-container gallery-thumbs">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="dist/img/newimages/item-images/912 mfE2XBL._SX522.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="dist/img/newimages/item-images/71ts-10g8lL._SX522.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="dist/img/newimages/item-images/7148EEf EbL._SY679.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="dist/img/newimages/item-images/713p5z46xDL._SY741.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="dist/img/newimages/item-images/21th3PNiMsL.png" alt="">
                                                    </div>
                                                    <!-- <div class="swiper-slide">
                                                        <img src="assets/img/products/singlepr6.jpg" alt="">
                                                    </div> -->

                                                </div>
                                            </div>
                                            <!-- Swiper and EasyZoom plugins end -->
                                        </div>
                                    </div>
                                    <div class="col-lg-7">

                                        <div class="card productcontent_height">
                                            <div class="card-body">

                                                <div class="productdetails">

                                                    <h2 class="product_priceTitle_main">Solimo Notebooks, Spiral-Bound, Lightweight, Vibrant Colours (A5, 100 Pages, 70 GSM, Set of 5)</h2>
                                                    <p> Almonds are popularly considered “brain food.” Healthy levels of
                                                        vitamin E (found in almonds) have been shown to maintain the
                                                        health and alertness of the Brain.
                                                        Cashews also contain a variety of vitamins, minerals, and
                                                        health-protective beneficial plant compounds. Good for an active
                                                        lifestyle perfect for daily routine
                                                        The premium California pistachios are delicately salted and
                                                        oven-roasted for the best crispy texture, making them absolutely
                                                        delectable for your taste buds </p>
                                                    <ul class="keyPoints">
                                                        <li>Solimo presents this set of five lightweight notebooks. These versatile books are suitable for use in the classroom or office, meeting a range of daily needs.</li>
                                                        <li>Each notebook contains 100 ruled pages of 70 gsm.</li>
                                                        <li>The paper is smooth and easy to write on using any writing instrument, including fountain pens, without ink penetration.</li>
                                                        <li>The cover is made from plastic.</li>
                                                        <li>The books are spiral-bound, which allow you to open them flat on any surface.</li>
                                                        <li>These aesthetically pleasing notebooks come in vibrant colours.</li>
                                                        <li>Dimensions: A5 size; No. of pages: 100</li>
                                                        <li>Package contents: Pack of 5 notebooks</li>
                                                    </ul>
                                                   

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



<!-- Load Froala Editor CSS files. -->
<link href='https://cdn.jsdelivr.net/npm/froala-editor@4.3/css/froala_editor.pkgd.min.css' rel='stylesheet'
    type='text/css' />

<!-- Load Filestack File Picker CSS files. -->
<script src="https://static.filestackapi.com/filestack-js/3.32.0/filestack.min.js"></script>
<script src="https://static.filestackapi.com/filestack-drag-and-drop-js/1.1.1/filestack-drag-and-drop.min.js">
</script>

<!-- Load Filestack Transformation UI JS & CSS files. -->
<script src="https://static.filestackapi.com/transforms-ui/2.x.x/transforms.umd.min.js"></script>
<link rel="stylesheet" href="https://static.filestackapi.com/transforms-ui/2.x.x/transforms.css" />

<!-- Load Froala Editor JS files. -->
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@4.3/js/froala_editor.pkgd.min.js'>
</script>
<script>
    // Initialize the Froala Editor
    var editor = new FroalaEditor('#editor', {
        imageEditButtons: ['imageReplace', 'imageAlign', 'imageCaption', 'filestackIcon', 'imageTUI'],
        filestackOptions: {
            uploadToFilestackOnly: false,
            filestackAPI: '***',
            pickerOptions: {
                fromSources: [
                    'local_file_system',
                    'imagesearch',
                    'url',
                    'googledrive',
                    'facebook',
                ],
                accept: [
                    ".pdf",
                    "image/jpeg",
                    "image/png",
                    "image/webp",
                    "video/*",
                    "audio/*"
                ],
                transformations: {
                    "crop": true,
                    "rotate": true
                }
            },
        },
    });
</script>
<!-- editor js end -->

<!-- product slider with zoom effect start -->
<script src="dist/customplugins/product-zoom/swiper.min.js"></script>
<script src="dist/customplugins/product-zoom/easyzoom.js"></script>
<script src="dist/customplugins/product-zoom/customscript.js"></script>
<link rel="stylesheet" href="dist/customplugins/product-zoom/easyzoom.css">
<link rel="stylesheet" href="dist/customplugins/product-zoom/swiper.min.css">
<!-- product slider with zoom effect end -->