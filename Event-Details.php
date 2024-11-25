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
                                    <h1>Event Details</h1>
                                </a>

                            </div>
                            <div class="ms-3">
                                <a href="Social-hub.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <div class="eventStatus_detailpage">
                            <button type="button" class="PublishButton ComnStyle_button__event" id="publishButton">
    <iconify-icon icon="carbon:ibm-elo-publishing"></iconify-icon> Publish
</button>

                                <button type="button" class="ApproveButton ComnStyle_button__event"
                                    id="approvalRequestButton">
                                    <iconify-icon icon="ph:stamp-duotone"></iconify-icon> Approval Request
                                </button>
                                <button type="button" class="requestadjustmentButton ComnStyle_button__event"
                                    data-bs-toggle="modal" data-bs-target="#request_adjustment_Modal">
                                    <iconify-icon icon="carbon:intent-request-inactive"></iconify-icon> Request
                                    Adjustment
                                </button>
                                <!-- show this when event is inactive -->
                                <!-- <span class="badge badge-soft-danger   my-1  me-2">Inactive</span> -->
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
                        <div class="nicescroll-bar">

                            <div class="contact-list-view">
                                <div class="integrationsapp-content">
                                    <div class="integrationsapp-detail-wrap">

                                        <div class="integrations-body">
                                            <div data-simplebar class="nicescroll-bar">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xxl-6 col-lg-6">
                                                            <div class="media event_detail_title">
                                                                <div class="media-head me-3">
                                                                    <div class="avatar avatar-logo">
                                                                        <span class="initial-wrap eventimage_icon">
                                                                            <img src="dist/img/newimages/eventpicture.jpg"
                                                                                alt="logo">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h3 class="hd-bold mb-0 TitleEvent_eftrd">Annual
                                                                        Tech Conference</h3>
                                                                    <span>Created by Admin</span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 col-lg-6 mt-lg-0 mt-3">
                                                            <div class="eventStatus_detailpage">
                                                                <span class="badge badge-soft-success  my-1  me-2">Event
                                                                    Active</span>

                                                                <!-- show this when event is inactive -->
                                                                <!-- <span class="badge badge-soft-danger   my-1  me-2">Inactive</span> -->
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xxl-8 col-lg-7">
                                                            <div class="product-detail-slider">
                                                                <div id="owl_demo_1"
                                                                    class="owl-carousel owl-primary mt-1">
                                                                    <div class="item" data-hash="zero"><img
                                                                            src="dist/img/newimages/eventpicture.jpg"
                                                                            alt="Owl Image"></div>
                                                                    <div class="item" data-hash="one"><img
                                                                            src="dist/img/slide2.jpg" alt="Owl Image">
                                                                    </div>
                                                                    <div class="item" data-hash="two"><img
                                                                            src="dist/img/slide3.jpg" alt="Owl Image">
                                                                    </div>
                                                                    <div class="item" data-hash="three"><img
                                                                            src="dist/img/slide4.jpg" alt="Owl Image">
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-wrap">
                                                                    <a class="active-thumb" href="#zero"></a>
                                                                    <a href="#one"></a>
                                                                    <a href="#two"></a>
                                                                    <a href="#three"></a>
                                                                </div>
                                                            </div>
                                                            <div class="separator"></div>

                                                            <div class="EventDescription_details">
                                                                <h5>Event Description</h5>
                                                                <p>Think classic lorem ipsum is passé? Give your next
                                                                    project a bit more edge with these funny and unique
                                                                    text generators. The classic latin passage that just
                                                                    never gets old, enjoy as much (or as little) lorem
                                                                    ipsum as you can handle with our easy to use filler
                                                                    text generator. It will be met with fire and fury
                                                                    like the world has never seen. Does everybody know
                                                                    that pig named Lorem Ipsum? An ‘extremely credible
                                                                    source’ has called my office and told me that Barack
                                                                    Obama’s placeholder text is a fraud.</p>
                                                            </div>

                                                            <div class="tab-content py-7">

                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-5">
                                                            <div class="content-aside contenteveneaside">

                                                                <!-- <div class="card card-border">
                                                                    <div class="card-body">
                                                                        <div class="media align-items-center">
                                                                            <div class="media-head me-3">
                                                                                <div
                                                                                    class="avatar avatar-sm avatar-icon avatar-soft-success avatar-rounded">
                                                                                    <span class="initial-wrap">
                                                                                        <span class="feather-icon"><i
                                                                                                data-feather="external-link"></i></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h1 class="mb-0">Website</h1>
                                                                                <a href="#"
                                                                                    class="link-muted">kickstarter.com</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="card card-border">
                                                                    <div class="card-header">
                                                                        <h1 class="">Additional Info</h1>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <ul class="list-unstyled">
                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Start Date & Time
                                                                                </div>
                                                                                <div class="text-dark fw-medium">
                                                                                    2024-09-15 09:00</div>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <div class="fs-7">End Date & Time</div>
                                                                                <div class="text-dark fw-medium">
                                                                                    2024-09-15 17:00</div>
                                                                            </li>

                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Created Date</div>
                                                                                <div class="text-dark fw-medium">
                                                                                    2024-09-15</div>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Updated Date</div>
                                                                                <div class="text-dark fw-medium">
                                                                                    2024-09-15 </div>
                                                                            </li>

                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Location</div>
                                                                                <div
                                                                                    class="text-dark fw-medium d-flex align-items-center">
                                                                                    Convention Center, City <a
                                                                                        href="Convention Center, City"
                                                                                        class="d-flex"><i
                                                                                            class="ri-external-link-line fs-7 ms-1 lh-1"></i></a>
                                                                                </div>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Organizer</div>
                                                                                <div class="text-dark fw-medium">
                                                                                    Graysons Properties</div>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Event Type</div>
                                                                                <div class="text-dark fw-medium">
                                                                                    Workshop</div>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Status</div>
                                                                                <div class="text-dark fw-medium"><span
                                                                                        class="badge badge-soft-success  my-1  me-2">Active</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Contact Information
                                                                                </div>
                                                                                <div
                                                                                    class="text-dark fw-medium d-flex align-items-center">
                                                                                    +91 9897999627 <a
                                                                                        href="tel:+91 9897999627"
                                                                                        class="d-flex"><i
                                                                                            class="ri-external-link-line fs-7 ms-1 lh-1"></i></a>
                                                                                </div>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <div class="fs-7">Additional Notes</div>
                                                                                <div
                                                                                    class="text-dark fw-medium d-flex align-items-center">
                                                                                    Hands-on activities and discussions.
                                                                                </div>
                                                                            </li>

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

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->

    <!-- request adjustment Modal start -->
    <div class="modal fade customwizard_formStyle sm_modalCustom" id="request_adjustment_Modal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="Event-Details.php">
                <div class="modal-content">
                    <div class="ModalheaderArea">
                        <h5 class="mb-4">Request Adjustment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="ModalcmnForm_container">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Add Note</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer modalfooter_Cmn_dark">
                        <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- request adjustment Modal end -->

</div>

<?php include('footer.php') ?>

<!-- Owl JS -->
<script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Init JS -->
<script src="dist/js/init.js"></script>
<script src="dist/js/integration-data.js"></script>
<script src="dist/js/chips-init.js"></script>


<!-- approval request Alert MEsaage -->
 <script>
document.getElementById('approvalRequestButton').addEventListener('click', function() {
    Swal.fire({
        title: 'Approval Request',
        text: 'Have you reviewed the description and Other Details of the Event?',
        icon: 'question',
        iconHtml: '<iconify-icon icon="ph:stamp-duotone"></iconify-icon>', // Custom icon
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        customClass: {
            confirmButton: 'my-confirm-button-class',  // Add your custom class for the confirm button
            cancelButton: 'my-cancel-button-class'     // Add your custom class for the cancel button
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Change the button text to "Approved"
            document.getElementById('approvalRequestButton').innerHTML = 
                '<iconify-icon icon="ph:stamp-duotone"></iconify-icon> Approved';
        }
    });
});

 </script>
  <!-- publish button action js end -->

 <!-- publish button action js start -->
  <script>
   document.getElementById('publishButton').addEventListener('click', function() {
    Swal.fire({
        title: 'Publish Event',
        text: 'Are you sure you want to publish this event?',
        icon: 'warning',
        iconHtml: '<iconify-icon icon="carbon:ibm-elo-publishing"></iconify-icon>', // Custom icon
        showCancelButton: true,
        confirmButtonText: 'Yes, Publish',
        cancelButtonText: 'No, Cancel',
        customClass: {
            confirmButton: 'my-confirm-button-class',  // Add your custom class for the confirm button
            cancelButton: 'my-cancel-button-class'     // Add your custom class for the cancel button
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Change the button text to "Published"
            document.getElementById('publishButton').innerHTML = 
                '<iconify-icon icon="carbon:ibm-elo-publishing"></iconify-icon> Published';

            // Optionally, show a success message
            Swal.fire({
                title: 'Published!',
                text: 'The event has been published successfully.',
                icon: 'success',
                customClass: {
                    confirmButton: 'my-confirm-button-class'  // Optional custom class for this alert's confirm button
                }
            });
        }
    });
});

  </script>
   <!-- publish button action js end -->