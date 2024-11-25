<?php include('header.php') ?>

<!-- Calendar CSS -->
<link href="vendors/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />
<!-- Daterangepicker CSS -->
<link href="vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

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
    .form-control {
	padding-left: 37px !important;
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
                                    <h1>Appointment Calendar </h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="index.php"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary flex-shrink-0 d-lg-inline-block d-none">Back</a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>


                                          <div class="departmentfilter_container">
                                          <select name="" id="" class="form-control departmentselect_filter Departmentselect2">
                                                                        <option value="" selected  readonly>
                                                                            Select Department</option>
                                                                        <option value="Account">Account</option>
                                                                        <option value="Lettings Team">Lettings Team</option>
                                                                        <option value="Inventory Department">Inventory Department</option>
                                                                    </select>
                                          </div>


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

                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <!-- add new content here start -->


                            <div class="calendarapp-wrap">
                               
                                <div class="calendarapp-content">
                                    <div id="calendar" ></div>
                                </div>

                            </div>

                            <!-- end new content  -->

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>


<!-- Calendar Drawer -->
<div class="hk-drawer calendar-drawer drawer-right">
    <div>
        <div class="drawer-header">
            <div class="drawer-header-action">
                <a href="#" id="edit_event"
                    class="btn btn-sm btn-icon btn-flush-secondary btn-rounded flush-soft-hover"><span
                        class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
                <a href="#" id="del_event"
                    class="btn btn-sm btn-icon btn-flush-secondary btn-rounded flush-soft-hover"><span
                        class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                <a href="#" class="btn btn-sm btn-icon btn-flush-secondary btn-rounded flush-soft-hover me-2"><span
                        class="icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span></a>
                <button type="button" class="drawer-close btn-close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
        <div class="drawer-body">
            <div data-simplebar class="nicescroll-bar">
                <div class="drawer-content-wrap">
                    <div class="event-head mb-4">
                        <span class="badge badge-violet badge-indicator badge-indicator-xl flex-shrink-0 me-2"></span>
                        <div>
                            <div class="event-name">Graysons Team Meet</div>
                            <span>Event</span>
                        </div>
                    </div>
                    <ul class="event-detail">
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="calendar"></i></span></span>
                            Aug 18,2020 - Aug 19, 2020
                        </li>
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="clock"></i></span></span>
                            8:40 AM - 5:40 PM
                        </li>
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="map-pin"></i></span></span>
                            Oslo, Canada
                        </li>
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="check-square"></i></span></span>
                            Meetings
                        </li>
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="eye"></i></span></span>
                            Default Visibility
                        </li>
                        
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="menu"></i></span></span>
                            Annual meeting with global branch teams & bosses about growth planning and fiscal year
                            reports
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none">
        <div class="drawer-header">
            <div class="drawer-header-action">
                <a href="#" class="btn btn-sm btn-icon btn-flush-secondary btn-rounded flush-soft-hover me-2"><span
                        class="icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span></a>
                <button type="button" class="drawer-edit-close btn-close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
        <div class="drawer-body">
            <div data-simplebar class="nicescroll-bar">
                <div class="drawer-content-wrap">
                    <div class="event-head mb-4">
                        <span class="badge badge-violet badge-indicator badge-indicator-xl flex-shrink-0 me-2"></span>
                        <div>
                            <div class="event-name" contenteditable="true">Graysons Team Meet</div>
                            <div class="form-group mt-2 mb-0">
                                <div class="form-check form-check-inline ps-0">
                                    <div class="form-check">
                                        <input type="radio" id="event_1" name="eventSelect" class="form-check-input"
                                            checked="">
                                        <label class="form-check-label" for="event_1">Event</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline ps-0">
                                    <div class="form-check">
                                        <input type="radio" id="reminder_1" name="eventSelect" class="form-check-input">
                                        <label class="form-check-label" for="reminder_1">Reminder</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-affix-wrapper">
                                    <span class="input-prefix"><span class="feather-icon"><i
                                                data-feather="calendar"></i></span></span>
                                    <input class="form-control form-wth-icon" name="datetimes"
                                        value="Aug 18,2020 - Aug 19, 2020">
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-affix-wrapper">
                                    <span class="input-prefix"><span class="feather-icon"><i
                                                data-feather="clock"></i></span></span>
                                    <input type="text" class="form-control form-wth-icon input-timepicker"
                                        value="8:40 AM - 5:40 PM">
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-affix-wrapper">
                                    <span class="input-prefix"><span class="feather-icon"><i
                                                data-feather="map-pin"></i></span></span>
                                    <input type="text" class="form-control form-wth-icon" value="Oslo, Canada">
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-affix-wrapper">
                                    <span class="input-prefix"><span class="feather-icon"><i
                                                data-feather="check-square"></i></span></span>
                                    <select class="form-select">
                                        <option selected="" value="1">All Time</option>
                                        <option value="2">Half Day</option>
                                        <option value="3">9 to 5</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-affix-wrapper">
                                    <span class="input-prefix"><span class="feather-icon"><i
                                                data-feather="eye"></i></span></span>
                                    <select class="form-select">
                                        <option selected="">Default Visibility</option>
                                        <option value="1">Private</option>
                                        <option value="2">Public</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group color-picker">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                <input type="text" class="form-control" value="#007D88" />
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <textarea class="form-control"
                                rows="4">Annual meeting with global branch teams & bosses about growth planning and fiscal year reports</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="drawer-footer d-flex justify-content-end">
            <button class="btn btn-secondary drawer-edit-close me-2">discard</button>
            <button class="btn btn-primary drawer-edit-close">save</button>
        </div>
    </div>
</div>
<!-- /Calendar Drawer -->

<?php include('footer.php') ?>

<!-- Fullcalendar JS -->
<script src="vendors/fullcalendar/index.global.min.js"></script>
<script src="vendors/%40fullcalendar/bootstrap5/index.global.min.js"></script>
<script src="dist/js/testing-calendar.js"></script>
<!-- Bootstrap Notify JS -->
<script src="dist/js/bootstrap-notify.min.js"></script>

<!-- department calendar select 2 (dont remove this select2 function this is only for department filter) -->
<script>
    $(".Departmentselect2").select2({
    placeholder: "Select Department"
})
</script>