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
                                    <h1>Inspection </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="property-details.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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
                        <div class=" sustomdividerLedtArrow"></div>
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
                                                                            In</span></span>
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
                                                                class="table common-datatable withoutActionTR nowrap w-100">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Location</th>
                                                                        <th>Items</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="inspectionwith360view">
                                                                                <div class="nameofinspe_location">
                                                                                    Bathroom</div>
                                                                                <button type="button" class="view-360-btn lightbox-trigger360" data-panorama="dist/img/newimages/inspectionitems/bathroom.jpg">
                                                                                
                                                                                    <iconify-icon
                                                                                        icon="solar:eye-broken">
                                                                                    </iconify-icon> View 360 Image
                                                                                </button>
                                                                            </div>

                                                                        </td>
                                                                        <td>
                                                                            <div class="multipleinspectItems_wrap">
                                                                            <div class="inspection_multiitems">
                                                                                <div class="inepect_iteamName">Faucet:
                                                                                </div>
                                                                                <div class="uplodedinspection_pictures">
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/Faucet2.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/Faucet3.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                          
                                                                            <div class="inspection_multiitems">
                                                                                <div class="inepect_iteamName">Paint:
                                                                                </div>
                                                                                <div class="uplodedinspection_pictures">
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/Paint.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/paint2.webp" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <strong>Faucet:</strong> Checked - No
                                                                                Leaks
                                                                            </div>
                                                                            <br>
                                                                            <div>
                                                                                <strong>Paint:</strong> Checked - Good
                                                                                Condition
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="inspectionwith360view">
                                                                                <div class="nameofinspe_location">Living
                                                                                    Room</div>
                                                                                    <button type="button" class="view-360-btn lightbox-trigger360" data-panorama="dist/img/newimages/inspectionitems/Living-Room.jpg">
                                                                                
                                                                                <iconify-icon
                                                                                    icon="solar:eye-broken">
                                                                                </iconify-icon> View 360 Image
                                                                            </button>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="multipleinspectItems_wrap">
                                                                            <div class="inspection_multiitems">
                                                                                <div class="inepect_iteamName">Window
                                                                                    Frame:</div>
                                                                                    <div class="uplodedinspection_pictures">
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/Window-Frame.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/Window-Frame2.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                         
                                                                            <div class="inspection_multiitems">
                                                                                <div class="inepect_iteamName">Paint:
                                                                                </div>
                                                                                <div class="uplodedinspection_pictures">
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/Paint.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/paint2.webp" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <strong>Window Frame:</strong> Checked -
                                                                                Good Condition
                                                                            </div>
                                                                            <br>
                                                                            <div>
                                                                                <strong>Paint:</strong> Checked - No
                                                                                Damage
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="inspectionwith360view">
                                                                                <div class="nameofinspe_location">
                                                                                    Kitchen</div>
                                                                                    <button type="button" class="view-360-btn lightbox-trigger360" data-panorama="dist/img/newimages/inspectionitems/kitchen.jpg">
                                                                                
                                                                                <iconify-icon
                                                                                    icon="solar:eye-broken">
                                                                                </iconify-icon> View 360 Image
                                                                            </button>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="multipleinspectItems_wrap">
                                                                            <div class="inspection_multiitems">
                                                                                <div class="inepect_iteamName">Cabinets:
                                                                                </div>
                                                                                <div class="uplodedinspection_pictures">
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/Cabinets.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/Cabinets2.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                        
                                                                            <div class="inspection_multiitems">
                                                                                <div class="inepect_iteamName">Lighting:
                                                                                </div>
                                                                                <div class="uplodedinspection_pictures">
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/roombulb.png" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                                <div class="inspPicture_item">
                                                                                    <img src="dist/img/newimages/inspectionitems/lighting2.jpg" class="lightbox-trigger" alt="">
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <strong>Cabinets:</strong> Checked -
                                                                                Functional
                                                                            </div>
                                                                            <br>
                                                                            <div>
                                                                                <strong>Lighting:</strong> Checked -
                                                                                Working Properly
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
                                                    <div class="card-footer">
                                                        <div class="Signature_timestemp">
                                                            <div class="enquiryRight_header_data TaskAction_wrapper">
                                                                <div class="enquiryDate dueDate_container">
                                                                    <iconify-icon icon="ion:calendar-outline">
                                                                    </iconify-icon>
                                                                    <div class="duedatelabel">Date & Time : </div> Nov
                                                                    20,
                                                                    2024 15:45
                                                                </div>
                                                                <div class="IPAddress_wrap">
                                                                    <div class="IPlAbel">
                                                                        IP Address :
                                                                    </div>
                                                                    <div class="IPAddress">192.168.1.1</div>
                                                                </div>

                                                            </div>
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
                                                                            class="feather-icon">
                                                                            <iconify-icon
                                                                                icon="solar:file-download-broken">
                                                                            </iconify-icon>
                                                                        </span></span>
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

<!-- 360 image Modal for Photo Sphere Viewer -->
<div id="viewer-modal">
    <button class="close-btn" id="close-viewer">Close</button>
    <button class="prev-btn" id="prev-image">
        <iconify-icon icon="majesticons:arrow-left-line"></iconify-icon>
    </button>
    <button class="next-btn" id="next-image">
        <iconify-icon icon="majesticons:arrow-right-line"></iconify-icon>
    </button>
    <div id="viewer"></div>
</div>

<?php include('footer.php') ?>

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

<!-- 360 image view  js start -->
<!-- Photo Sphere Viewer styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.css" />
<script type="importmap">
    {
            "imports": {
                "@photo-sphere-viewer/core": "https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.module.js",
                "three": "https://cdn.jsdelivr.net/npm/three/build/three.module.js"
            }
        }
    </script>
    
<script type="module">
    import { Viewer } from '@photo-sphere-viewer/core';
        let viewer = null;
        const images = Array.from(document.querySelectorAll('.lightbox-trigger360')).map(button => button.dataset.panorama);
        let currentIndex = 0;

        // Function to open the viewer
        function openViewer(index) {
            const modal = document.getElementById('viewer-modal');
            modal.style.display = 'flex';
            currentIndex = index;

            if (!viewer) {
                viewer = new Viewer({
                    container: document.getElementById('viewer'),
                    panorama: images[currentIndex],
                });
            } else {
                viewer.setPanorama(images[currentIndex]);
            }
        }

        // Function to close the viewer
        function closeViewer() {
            document.getElementById('viewer-modal').style.display = 'none';
        }

        // Function to show the previous image
        // function showPreviousImage() {
        //     if (currentIndex > 0) {
        //         currentIndex--;
        //     } else {
        //         currentIndex = images.length - 1; // Loop to last image
        //     }
        //     viewer.setPanorama(images[currentIndex]);
        // }

        // Function to show the next image
        // function showNextImage() {
        //     if (currentIndex < images.length - 1) {
        //         currentIndex++;
        //     } else {
        //         currentIndex = 0; // Loop to first image
        //     }
        //     viewer.setPanorama(images[currentIndex]);
        // }

        // Attach event listeners
        document.querySelectorAll('.lightbox-trigger360').forEach((item, index) => {
            item.addEventListener('click', () => openViewer(index));
        });

        document.getElementById('close-viewer').addEventListener('click', closeViewer);
        document.getElementById('prev-image').addEventListener('click', showPreviousImage);
        document.getElementById('next-image').addEventListener('click', showNextImage);

        // Close modal when clicking outside the viewer
        document.getElementById('viewer-modal').addEventListener('click', (event) => {
            if (event.target.id === 'viewer-modal') {
                closeViewer();
            }
        });
    </script>
<!-- 360 image view  js end -->