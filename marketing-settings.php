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
            <!-- sub menu header -->
            <?php include('headers/lettings-setting-header.php') ?>
            <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="javascript:void(0)" role="button">
                                    <h1>Marketing Settings </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="##" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                    <form action="property-details.php" method="POST">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Social Hub Settings</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Map">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Manage Statuses</span>

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
                                <div class="post-list propertyTabContent">

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Details">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Social Hub Settings</h2>
                                                    <!-- <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#add_enquiry_status">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Enquiry Status
                                                        </button>
                                                    </div> -->
                                                </div>

                                                <div class="mainuserFilesds_tabpaneContainer">

                                                    <div class="notificationEditContainer">
                                                        <ul id="todo_list " class="advance-list notificationList">
                                                            <li
                                                                class="advance-list-item single-task-list active-todo moduleinableddisabled_item">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">

                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">Social
                                                                                Hub Module Control
                                                                            </span>

                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                        <span
                                                                            class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                            <div class="switchesContainer">
                                                                                <div class="form-group mb-0 enableBox">

                                                                                    <label class="switch">
                                                                                        <input type="checkbox"
                                                                                            id="toggleSwitch"
                                                                                            checked="">
                                                                                        <span
                                                                                            class="slider round"></span>
                                                                                    </label>
                                                                                    <span id="switchLabel"
                                                                                        class="ms-3">Enable</span>

                                                                                </div>
                                                                            </div>
                                                                        </span>

                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="savechangesformContainer">
                                                        <button type="submit" class="buttonInfOUpdate">
                                                            <iconify-icon icon="fluent:save-32-regular">
                                                            </iconify-icon>
                                                            Save Changes
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="Map">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Manage Statuses </h2>
                                                    <!-- <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#add_enquiry_source">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Enquiry Source
                                                        </button>
                                                    </div> -->
                                                </div>

                                                <div
                                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                                <h2> All Status</h2>
                                                                            </div>
                                                                            <div class="hk-checklist">
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="customCheckList1"
                                                                                        checked="">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList1">
                                                                                        Approved
                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>
                                                                                    <a href="#"
                                                                                        class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="trash-2"></i></span></span></a>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="customCheckList2"
                                                                                        checked="">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList2">
                                                                                        Pending Further Information
                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>
                                                                                    <a href="#"
                                                                                        class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="trash-2"></i></span></span></a>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="customCheckList3"
                                                                                        checked="">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList3">
                                                                                        In Processing
                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>
                                                                                    <a href="#"
                                                                                        class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="trash-2"></i></span></span></a>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="customCheckList4">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList4">
                                                                                        Suitable Tenant Identified
                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>
                                                                                    <a href="#"
                                                                                        class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="trash-2"></i></span></span></a>
                                                                                </div>
                                                                                <a href="#"
                                                                                    class="d-flex align-items-center add-new-checklist">
                                                                                    <span
                                                                                        class="feather-icon fe-x me-2"><i
                                                                                            data-feather="plus-square"></i></span>
                                                                                    <span>Add Status</span>
                                                                                </a>
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

<!-- add enquiry status modal-->
<div id="add_enquiry_status" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="enquiry-settings.php" method="post">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Add Enquiry Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-check checkWithLabel">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Action Required
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="canvasFooterContainer CustomModal_footer">
                    <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                        data-bs-dismiss="offcanvas">Cancel</button>
                    <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- add enquiry status modal -->

<!-- view enquiry status modal-->
<div id="View_enquiry_status" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="enquiry-settings.php" method="post">
            <div class="modal-content">
                <div class="ModalheaderArea">
                    <h5 class="">Enquiry Status Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>
                <div class="modal-body">

                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" value="Enquiry Received" type="text" />
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-check checkWithLabel">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                    <label class="form-check-label" for="gridCheck">
                                        Action Required
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Time to Action</label>
                                <input class="form-control" value="1" type="text" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group usedByInput">
                                <label class="form-label">Used By : </label>
                                <a href="all-Enquiries.php">4</a>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-check checkWithLabel">
                                    <input class="form-check-input" type="checkbox" id="disabledcheck">
                                    <label class="form-check-label" for="disabledcheck">
                                        Disabled
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="canvasFooterContainer CustomModal_footer">
                    <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                        data-bs-dismiss="offcanvas">Cancel</button>
                    <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- view enquiry status modal -->

<!-- add enquiry source modal-->
<div id="add_enquiry_source" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="enquiry-settings.php" method="post">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Add Enquiry Source</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>

                    </div>

                </div>
                <div class="canvasFooterContainer CustomModal_footer">
                    <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                        data-bs-dismiss="offcanvas">Cancel</button>
                    <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- add enquiry source modal -->

<!-- View_enquiry_source modal start -->
<div id="View_enquiry_source" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="enquiry-settings.php" method="post">
            <div class="modal-content">
                <div class="ModalheaderArea">
                    <h5 class="">Enquiry Source Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>
                <div class="modal-body">

                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" value="RightMove" type="text" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group usedByInput">
                                <label class="form-label">Used By : </label>
                                <a href="all-Enquiries.php">0</a>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-check checkWithLabel">
                                    <input class="form-check-input" type="checkbox" id="disabledcheck">
                                    <label class="form-check-label" for="disabledcheck">
                                        Disabled
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="canvasFooterContainer CustomModal_footer">
                    <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                        data-bs-dismiss="offcanvas">Cancel</button>
                    <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>

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

<style>
    .enableBox .switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 20px;
    }

    span#switchLabel {
        font-size: 14px;
    }

    .enableBox .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .enableBox .switch .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        margin: 0;
    }

    .enableBox .switch .slider:before {
        position: absolute;
        content: "";
        height: 12px;
        width: 12px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
    }

    .enableBox .switch input:checked+.slider {
        background-color: #ff9843;
    }

    .enableBox .switch input:checked+.slider:before {
        transform: translateX(20px);
    }

    .enableBox .switch .slider.round {
        border-radius: 34px;
    }

    .enableBox .switch .slider.round:before {
        border-radius: 50%;
    }

    .enableBox {
        display: flex;
        align-items: center;
        margin-top: 5px;
    }
</style>
<script>
    document.getElementById('toggleSwitch').addEventListener('change', function() {
        var switchLabel = document.getElementById('switchLabel');
        if (this.checked) {
            switchLabel.textContent = 'Enable';
            Swal.fire({
                icon: 'success',
                title: 'Enabled',
                text: 'The Social Hub module is now enabled!'
            });
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Are you sure?',
                text: 'Are you sure you want to disable the Social Hub module?',
                showCancelButton: true,
                confirmButtonText: 'Yes, Disable',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    switchLabel.textContent = 'Disable';
                    Swal.fire({
                        icon: 'success',
                        title: 'Disabled',
                        text: 'The Social Hub module is now disabled!'
                    });
                } else {
                    // Revert the toggle switch state if the user cancels
                    this.checked = true;
                }
            });
        }
    });
</script>