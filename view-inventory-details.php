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
                                    <h1>Inventory Details </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="inspection-inventory.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                    <form action="view-inventory-details.php">
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
                                                <span class="nav-link-text">Used By</span>

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
                                                <div class="docfilterbutton centerTitle_inner">
                                                    <h2 class="tabinnerTitle">WESTLANDS DENTAL STUDIO </h2>
                                                </div>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table
                                                                class="table common-datatable withoutActionTR nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Name</th>
                                                                        <th>Description</th>
                                                                        <th>Location</th>
                                                                        <th>Quantity</th>
                                                                        <th>Checks</th>
                                                                        <!-- <th>Full</th>
                                                                        <th>Incremental</th>
                                                                        <th>Shared</th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            <input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Front Door">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Fire door"></td>
                                                                        <td><input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Entrance"></td>
                                                                        <td><input type="number"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="1"></td>

                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <textarea
                                                                                    class=" refuge-collection-input  sustomaddonInput tableInputSMall tabletextareainput"> WESTLANDS DENTAL STUDIO</textarea>

                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    aria-label="Click to view"
                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        checked id="chk_sel_3"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_3"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        checked id="chk_sel_3"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_3"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        id="chk_sel_3"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_3"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td> -->
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Back Door">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Security door"></td>
                                                                        <td><input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Exit"></td>
                                                                        <td><input type="number"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="2"></td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <textarea
                                                                                    class="refuge-collection-input sustomaddonInput tableInputSMall tabletextareainput">EASTSIDE MEDICAL CENTER</textarea>
                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    aria-label="Click to view"
                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        checked id="chk_sel_4"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_4"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        checked id="chk_sel_5"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_5"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        id="chk_sel_6"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_6"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td> -->
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Side Door">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Glass door"></td>
                                                                        <td><input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Lobby"></td>
                                                                        <td><input type="number"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="3"></td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <textarea
                                                                                    class="refuge-collection-input sustomaddonInput tableInputSMall tabletextareainput">SOUTHWEST BUSINESS HUB</textarea>
                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    aria-label="Click to view"
                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        checked id="chk_sel_7"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_7"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        checked id="chk_sel_8"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_8"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        id="chk_sel_9"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_9"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td> -->
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Garage Door">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Metal door"></td>
                                                                        <td><input type="text"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="Storage"></td>
                                                                        <td><input type="number"
                                                                                class="sustomaddonInput tableInputSMall"
                                                                                value="4"></td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <textarea
                                                                                    class="refuge-collection-input sustomaddonInput tableInputSMall tabletextareainput">NORTHLAND TECHNOLOGY PARK</textarea>
                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    aria-label="Click to view"
                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        checked id="chk_sel_10"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_10"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        checked id="chk_sel_11"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_11"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="form-check mb-0"><input
                                                                                        type="checkbox"
                                                                                        class="form-check-input "
                                                                                        id="chk_sel_12"><label
                                                                                        class="form-check-label"
                                                                                        for="chk_sel_12"></label></span><span
                                                                                    class="contact-star"></span>
                                                                            </div>
                                                                        </td> -->
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="savechangesformContainer">
                                                <button type="submit" class="buttonInfOUpdate">
                                                    <iconify-icon icon="fluent:save-32-regular">
                                                    </iconify-icon>
                                                    Save Changes
                                                </button>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="Signatories">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton centerTitle_inner">
                                                    <h2 class="tabinnerTitle">WESTLANDS DENTAL STUDIO </h2>
                                                </div>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table
                                                                class="table common-datatable withoutActionTR nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Address</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input sustomaddonInput tableLongMessage_Input"
                                                                                    value="NORTHLAND TECHNOLOGY PARK"></input>
                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    aria-label="Click to view"
                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="property-details.php" target="_blank">
                                                                                        <span class="icon"><span class="feather-icon">
                                                                                                <iconify-icon icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
    <td>
        <div class="LongMesage_container">
            <input class="refuge-collection-input sustomaddonInput tableLongMessage_Input" value="EASTERN BUSINESS HUB"></input>
            <button class="view-btn tablemessageview_btn" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Click to view" data-bs-original-title="Click to view Full Message">
                <i class="bi bi-eye"></i> Read More
            </button>
        </div>
    </td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="property-details.php" target="_blank">
                    <span class="icon"><span class="feather-icon">
                        <iconify-icon icon="teenyicons:eye-outline">
                        </iconify-icon>
                    </span></span>
                </a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <div class="LongMesage_container">
            <input class="refuge-collection-input sustomaddonInput tableLongMessage_Input" value="WESTSIDE INDUSTRIAL PARK"></input>
            <button class="view-btn tablemessageview_btn" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Click to view" data-bs-original-title="Click to view Full Message">
                <i class="bi bi-eye"></i> Read More
            </button>
        </div>
    </td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="property-details.php" target="_blank">
                    <span class="icon"><span class="feather-icon">
                        <iconify-icon icon="teenyicons:eye-outline">
                        </iconify-icon>
                    </span></span>
                </a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <div class="LongMesage_container">
            <input class="refuge-collection-input sustomaddonInput tableLongMessage_Input" value="SOUTHERN TECHNOLOGIES CENTER"></input>
            <button class="view-btn tablemessageview_btn" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Click to view" data-bs-original-title="Click to view Full Message">
                <i class="bi bi-eye"></i> Read More
            </button>
        </div>
    </td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="property-details.php" target="_blank">
                    <span class="icon"><span class="feather-icon">
                        <iconify-icon icon="teenyicons:eye-outline">
                        </iconify-icon>
                    </span></span>
                </a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <div class="LongMesage_container">
            <input class="refuge-collection-input sustomaddonInput tableLongMessage_Input" value="CENTRAL BUSINESS DISTRICT"></input>
            <button class="view-btn tablemessageview_btn" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Click to view" data-bs-original-title="Click to view Full Message">
                <i class="bi bi-eye"></i> Read More
            </button>
        </div>
    </td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="property-details.php" target="_blank">
                    <span class="icon"><span class="feather-icon">
                        <iconify-icon icon="teenyicons:eye-outline">
                        </iconify-icon>
                    </span></span>
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