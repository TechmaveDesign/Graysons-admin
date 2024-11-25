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
                                    <h1>All Merchants </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#AddMerchantModal"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add New Merchant
                            </button>

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
                        <div class="nicescroll-bar">

                            <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>

                                            <th>Merchant </th>
                                            <th>Locations</th>
                                            <th>Offers</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Graysons Properties</td>
                                            <td><span
                                                    class="badge badge-soft-success  my-1  me-2 badgefontSize">01</span>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                      
                                                        <a href="merchant-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View Merchant Details">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Graystones Developments Ltd</td>
                                            <td><span class="badge badge-soft-danger   my-1  me-2 badgefontSize">0</span></td>
                                            <td><span class="badge badge-soft-danger   my-1  me-2 badgefontSize">0</span></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                      
                                                        <a href="merchant-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View Merchant Details">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>

<!-- add Merchant offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddMerchantModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="ic:outline-local-offer" width="1.2em" height="1.2em"></iconify-icon>
            Add Merchant
        </div>
        <div class="closeCanvasContainer">
            <button type="button" class="canvascloseButton" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-white);"
                    data-testid="icon">
                    <path
                        d="M11.375 14.5C11.5583 14.6833 11.7667 14.775 12 14.775C12.2333 14.775 12.4417 14.6833 12.625 14.5L15.625 11.525C15.7583 11.3917 15.8207 11.2167 15.812 11C15.804 10.7833 15.7333 10.6083 15.6 10.475C15.45 10.325 15.275 10.25 15.075 10.25C14.875 10.25 14.7 10.325 14.55 10.475L12 13.025L9.425 10.45C9.29167 10.3167 9.11667 10.254 8.9 10.262C8.68333 10.2707 8.50833 10.3417 8.375 10.475C8.225 10.625 8.15 10.8 8.15 11C8.15 11.2 8.225 11.375 8.375 11.525L11.375 14.5ZM12 21.5C10.6833 21.5 9.446 21.25 8.288 20.75C7.12933 20.25 6.125 19.575 5.275 18.725C4.425 17.875 3.75 16.8707 3.25 15.712C2.75 14.554 2.5 13.3167 2.5 12C2.5 10.6833 2.75 9.44567 3.25 8.287C3.75 7.129 4.425 6.125 5.275 5.275C6.125 4.425 7.12933 3.75 8.288 3.25C9.446 2.75 10.6833 2.5 12 2.5C13.3167 2.5 14.5543 2.75 15.713 3.25C16.871 3.75 17.875 4.425 18.725 5.275C19.575 6.125 20.25 7.129 20.75 8.287C21.25 9.44567 21.5 10.6833 21.5 12C21.5 13.3167 21.25 14.554 20.75 15.712C20.25 16.8707 19.575 17.875 18.725 18.725C17.875 19.575 16.871 20.25 15.713 20.75C14.5543 21.25 13.3167 21.5 12 21.5ZM12 20C14.2167 20 16.1043 19.221 17.663 17.663C19.221 16.1043 20 14.2167 20 12C20 9.78333 19.221 7.89567 17.663 6.337C16.1043 4.779 14.2167 4 12 4C9.78333 4 7.896 4.779 6.338 6.337C4.77933 7.89567 4 9.78333 4 12C4 14.2167 4.77933 16.1043 6.338 17.663C7.896 19.221 9.78333 20 12 20Z"
                        fill="currentColor"></path>
                </svg>Close
            </button>
        </div>

    </div>
    <div class="Canvas_ct_divider"></div>
    <form class="" action="merchants.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Merchant</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter Merchant Name">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="" value=""
                                            placeholder="Enter Email address ">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Phone Number</label>
                                        <input type="phone" class="form-control" id="" value=""
                                            placeholder="Enter Phone No..">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Website URL</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                                <iconify-icon icon="streamline:web"></iconify-icon>
                                            </span>
                                            <input type="text" class="form-control">

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Facebook URL</label>
                                        <div class="input-group mb-3 facebookinp">
                                            <span class="input-group-text">
                                                <iconify-icon icon="uit:facebook-f"></iconify-icon>
                                            </span>
                                            <input type="text" class="form-control">

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Twitter URL</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                                <iconify-icon icon="pajamas:twitter"></iconify-icon>
                                            </span>
                                            <input type="text" class="form-control">

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Company Registration No</label>
                                        <input type="text" class="form-control numeric-only" id="" value=""
                                            placeholder="Enter Registration No.">
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Banner Image</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- add Merchant offcanvas modal end -->



<!--view offer modal start-->
<div class="offcanvas rightOffcanvas offcanvas-end" tabindex="-1" id="offerDetailModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="ic:outline-local-offer" width="1.2em" height="1.2em"></iconify-icon>
            Offer Details
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="rightcanvas_Container">
            <div class="card card-border eventDetailCard mb-lg-4 mb-3">
                <div class="card-header card-header-action">
                    <div class="media align-items-center">
                        <div class="media-head me-2">
                            <div class="avatar avatar-sm avatar-rounded">
                                <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="fw-medium text-dark">Merchant</div>
                            <div class="fs-7">Graystones Developments Ltd</div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="MileageContainer_ghtF">
                <h4 class="">Banner images</h4>
                <div class="multiImageSlider  form-group">

                    <div class="card galleryImage">
                        <div class="card-body">
                            <a class="" data-fancybox="gallery" href="dist/img/newimages/sale.jpg">
                                <img src="dist/img/newimages/sale.jpg" alt="Image 1">
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            <ul class="issueHistoryList eventMessageContent">

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="pajamas:title"></iconify-icon>Title :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage"> Winter Discount - 5% off</p>
                    </div>
                </li>

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="fluent-mdl2:date-time-2"></iconify-icon>Start Date & Time :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage">20/01/2021 14:57</p>
                    </div>
                </li class="flexListITem">

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="fluent-mdl2:date-time-2"></iconify-icon>End Date & Time :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage">20/01/2021 14:57</p>
                    </div>
                </li>

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="ri:discount-percent-line"></iconify-icon>Redemption Code :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage"> GSP897</p>
                    </div>
                </li>

                <li><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="tabler:message-2-check"></iconify-icon> Comment :
                    </label>

                    <div class="logcomment">
                        <p>Please contact us at [Contact Number] or [Contact Email] to arrange a new date and time that
                            is convenient for you. We apologize for any inconvenience this may cause and appreciate your
                            understanding.</p>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</div>
<!-- view offer modal-->

<?php include('footer.php') ?>

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

<!-- input type text as number js validation  -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const numericInputs = document.querySelectorAll('.numeric-only');
        numericInputs.forEach(function(input) {
            input.addEventListener('input', function(e) {
                const value = e.target.value;
                e.target.value = value.replace(/\D/g, ''); // Remove any non-digit characters
            });
        });
    });
</script>
<!-- input type text as number js validation  end-->