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
                                    <h1>Check Out Details </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                    <a href="checkIn.php"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary "><iconify-icon icon="line-md:list-3" ></iconify-icon> Back</a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Import</a>
                            </div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
              
                    </header>

                    <form action="property.php">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Details</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Signatories">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Signatories</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Download">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Download</span>

                                            </div>
                                        </a>
                                    </li>

                                </ul>
                                <button class="scroll-btn next" type="button">
                                    <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                                </button>

                            </div>
                            <div class="nicescroll-bar">

                                <!-- add new content here start -->
                                <div class="post-list">

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Details">

                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card card-border mb-lg-4 mb-3">
                                                    <div class="card-header card-header-action">
                                                        <div class="media align-items-center">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-sm avatar-rounded">
                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                        alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="fw-medium text-dark">Created By</div>
                                                                <div class="fs-7"><a
                                                                        href="view-user-details.php">Koriakowski,
                                                                        Krystian</a> @ 01/09/2018 15:01</div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-body custombodyPadding">
                                                        <div class="d-flex text-center inspectionpropert_details">
                                                       
                                                            <div class="flex-1 border-end CustomFlex_style">
                                                                <div>
                                                                    <span class="d-block fs-4 text-dark mb-1">
                                                                        Type</span>
                                                                    <span class="d-block text-capitalize "> <span
                                                                            class="badge badge-soft-success  my-1  me-2">Check
                                                                            Out</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 CustomFlex_style ">
                                                                <div>
                                                                    <div class="d-block fs-4 text-dark mb-1 ">Property
                                                                    </div>
                                                                    <div
                                                                        class="d-block text-capitalize fs-7 propertyUrlStyle">
                                                                        <a href="property.php" target="_blank">Bedroom 3
                                                                            133, Flat 3 (Floor 1, No3), City
                                                                            View@Phoenix House, 1-7 Union Street,
                                                                            Sunderland</a></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table
                                                                class="table common-datatable withoutActionTR nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Item</th>
                                                                        <th>Location</th>
                                                                        <th>Status</th>
                                                                        <th>Uploded Pictures</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            Tiles - Wall/Floor
                                                                        </td>
                                                                        <td>Bathroom</td>
                                                                        <td>Checked - Working</td>
                                                                        <td>
                                                                            <div class="uplodedinspection_pictures">
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/interests/interest-6.png"
                                                                                        class="lightbox-trigger" alt="">
                                                                                </div>
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/interests/interest-6.png"
                                                                                        class="lightbox-trigger" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paint - Interior</td>
                                                                        <td>Living Room</td>
                                                                        <td>Checked - Good Condition</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Doorknob</td>
                                                                        <td>Bedroom</td>
                                                                        <td>Checked - Functional</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Light Fixture</td>
                                                                        <td>Kitchen</td>
                                                                        <td>Checked - Working Properly</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Faucet</td>
                                                                        <td>Bathroom</td>
                                                                        <td>Checked - No Leaks</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Window - Frame</td>
                                                                        <td>Living Room</td>
                                                                        <td>Checked - Secure</td>
                                                                        <td>
                                                                            <div class="uplodedinspection_pictures">
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/interests/interest-8.png"
                                                                                        class="lightbox-trigger" alt="">
                                                                                </div>
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/interests/interest-8.png"
                                                                                        class="lightbox-trigger" alt="">
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

                                            <!-- <div class="savechangesformContainer">
                                                <button type="submit" class="buttonInfOUpdate">
                                                    <iconify-icon icon="fluent:save-32-regular">
                                                    </iconify-icon>
                                                    Save Changes
                                                </button>
                                                <button type="button" class="formdeleteButton">Delete</button>
                                            </div> -->
                                        </div>
                                        <div class="tab-pane fade" id="Signatories">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="signatureUser_name"><a
                                                                href="view-user-details.php">Bell, Connor <iconify-icon
                                                                    icon="fa:external-link"></iconify-icon></a></div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="SignatureContainer">
                                                            <img src="dist/img/newimages/signature-images/1.jpg"
                                                                class="lightbox-trigger" alt="">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="Download">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="downloadReportButton_section">
                                                            <img src="dist/img/newimages/downloadreport.png"
                                                                class="lightbox-trigger" alt="">
                                                            <a href="##">
                                                            <div class="alert alert-primary alert-wth-icon fade show mb-4"
                                                                role="alert">
                                                                <span class="alert-icon-wrap"><span
                                                                        class="feather-icon"><iconify-icon icon="solar:file-download-broken"></iconify-icon></span></span>
                                                                Download Report
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

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

<!-- inspection image view js -->
<div id="lightbox" class="lightbox">
    <span class="close">&times;</span>
    <img src="" class="lightbox-image" alt="lightbox image">
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.querySelector('.lightbox-image');
        const lightboxClose = document.querySelector('.close');
        const triggers = document.querySelectorAll('.lightbox-trigger');
        const body = document.querySelector('body');
        // Add click event listener to each trigger
        triggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const imageSrc = this.src;
                lightboxImage.src = imageSrc;
                lightbox.style.display = 'block';
                body.style.overflow = 'hidden'; // Hide body overflow
            });
        });
        // Close the lightbox
        lightboxClose.addEventListener('click', function() {
            lightbox.style.display = 'none';
            body.style.overflow = 'auto'; // Restore body overflow
        });
        // Close the lightbox when clicking outside of it
        window.addEventListener('click', function(event) {
            if (event.target === lightbox) {
                lightbox.style.display = 'none';
                body.style.overflow = 'auto'; // Restore body overflow
            }
        });
    });
</script>
<!-- inspection image view js end-->