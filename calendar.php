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

  .departmentfilter_container  .select2-container {
	width: 200px !important;
}

#departmentfilter_container{
    margin-right:10px !important;
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

                            <div class="departmentfilter_container" id="departmentfilter_container">
                                <select name="" id="departmentselect_filter" class="form-control departmentselect_filter ">
                                    <option value="" selected readonly>
                                        Select Department</option>
                                    <option value="Account">Account</option>
                                    <option value="Lettings Team">Lettings Team</option>
                                    <option value="Inventory Department">Inventory Department</option>
                                </select>
                            </div>

                            <select name="user" id="DepartmentUser_select" class="form-control">
                        <option value="" selected disabled>Select a User</option>
                        <option value="user1">John Doe</option>
                        <option value="user2">Jane Smith</option>
                        <option value="user3">Michael Johnson</option>
                        <option value="user4">Emily Davis</option>
                        <option value="user5">Chris Brown</option>
                        <option value="user6">Jessica Williams</option>
                        <option value="user7">David Miller</option>
                        <option value="user8">Sophia Wilson</option>
                    </select>

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
                                    <div id="calendar"></div>
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

<!--  calendar for Lettings team to view appointments and tasks offcanvas -->
<div class="offcanvas offcanvas-bottom calendar_offcanvasStyle" tabindex="-1" id="ViewAppoinment"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <div class="offcanwasBetween_title">
                <iconify-icon icon="radix-icons:calendar"></iconify-icon>
                Appointments and Tasks
            </div>

            <div id="search-container">
                <input type="text" id="search-input" class="form-control" placeholder="Search...">
                <iconify-icon icon="prime:search"></iconify-icon>

            </div>
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
    <form class="calendarForm" action="view-ticket.php" method="post">
        <div class="offcanvas-body">
            <div class="addingForm_Container fullwidthcanvas_container">

                <div class="formstartcontainer">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="calendarapp-wrap">

                                <div class="calendarapp-content">
                                    <div id="calendar"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </form>
</div>
<!--   calendar for Lettings team to view appointments and tasks end -->

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
                            <div class="event-name"></div>
                            <span>Event</span>
                        </div>
                    </div>
                    <div class="Enquiryand_attendeed_details_calendar">
                        <ul>
                            <li>
                                <span class="ev-icon-wrap"> <label class="form-label">Enquiry ID :</label></span>
                                <span class="event-enquiry-id">86cvr79t2</span>
                            </li>
                            <li>
                                <span class="ev-icon-wrap"> <label class="form-label">Status :</label></span>
                                <span class="badge bg-success" class="event-Enquiry-status">Completed</span>
                            </li>
                            <li>
                                <span class="ev-icon-wrap"> <label class="form-label">Attendees :</label></span>
                                <div class="d-flex flex-wrap">
                                    <div class="chip chip-primary user-chip mb-2 me-2">
                                        <span>
                                            <span class="avatar">
                                                <img src="dist/img/avatar11.jpg" alt="user" class="avatar-img">
                                            </span>
                                            <span class="AttendiesName">Morgan</span>
                                        </span>
                                    </div>
                                    <div class="chip chip-primary user-chip mb-2 me-2">
                                        <span>
                                            <span class="avatar">
                                                <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img">
                                            </span>
                                            <span class="AttendiesName">Charlie</span>
                                        </span>
                                    </div>
                                    <div class="chip chip-primary user-chip mb-2 me-2">
                                        <span>
                                            <span class="avatar">
                                                <img src="dist/img/avatar13.jpg" alt="user" class="avatar-img">
                                            </span>
                                            <span class="AttendiesName">Winston</span>
                                        </span>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <ul class="event-detail">
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="calendar"></i></span></span>
                            <span class="event-date"></span>
                        </li>
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="clock"></i></span></span>
                            <span class="event-time"></span>
                        </li>
                        <li class="staff_propertyattendingList" data-bs-toggle="modal" data-bs-target="#staffallviewing_modal">
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="user"></i></span></span>
                            <span class="event-staff"></span> <div class="viewallscheduels_btn"><iconify-icon icon="hugeicons:eye"></iconify-icon> View All Schedules</div>
                        </li>
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="map-pin"></i></span></span>
                            <span class="event-location"></span>
                        </li>
                        <li class="calendarNotes_Wrapper">
                            <div class="form-group">
                                <span class="ev-icon-wrap"> <label class="form-label">Note :</label></span>
                                <textarea class="form-control"
                                    rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi perferendis labore nesciunt, rerum sint!</textarea>
                            </div>

                        </li>

                        <li>
                            <div class="form-group">
                                <span class="ev-icon-wrap"> <label class="form-label">Message for Attendees
                                        :</label></span>
                                <textarea class="form-control"
                                    rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi perferendis labore nesciunt, rerum sint!</textarea>
                            </div>

                        </li>
                        <li>
                        <div class="AddNoteEnuSection" id="AddNote1">
        <div class="form-group">
            <label class="form-label">Note header</label>
            <input class="form-control note-title" type="text" placeholder="Add Title">
        </div>
    
        <div class="form-group">
            <label class="form-label">Add Comment</label>
            <textarea class="form-control note-comment" rows="5"></textarea>
        </div>
        
        <div class="NoteAction_container">
            <div class="sendEnquiryNote_container">
                <div class="addto_todolist">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input customCheckList-todo">
                        <label class="form-check-label">Add to ToDo List <span class="done-strikethrough"></span></label>
                    </div>
                </div>
            </div>
            <div class="sendEnquiryNote_container setAlert_container">
                <div class="addto_todolist">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input setAlertInput">
                        <label class="form-check-label">Set As Alert <span class="done-strikethrough"></span></label>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="Showing_departmentand_users" style="display: none;">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Select Department</label>
                        <select class="form-control select2 select-department">
                            <option disabled selected value="">Please Select...</option>
                            <option value="Account Department">Account Department</option>
                            <option value="HR Department">HR Department</option>
                            <option value="Contract Department">Contract Department</option>
                            <option value="Lettings Department">Lettings Department</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Select Users</label>
                        <select class="form-control select2 select-user">
                            <option disabled selected value="">Please Select...</option>
                            <option value="John Doe">John Doe</option>
                            <option value="Jane Smith">Jane Smith</option>
                            <option value="Alice Johnson">Alice Johnson</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-12">
                <div class="form-group">
                <label class="form-label">Select Due Date</label>
    <input class="form-control customdataPicker" type="text" name="" value="" placeholder="Due Date" />
    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
    </iconify-icon>
</div>
                </div>
            </div>
        </div>
        <div class="submitnote_container">
                                                                                    <button type="button" class="sendBtn_common_main addenun_noteBtn send-note">Send Note</button>
                                                                                    </div>
    </div>
                        </li>
                    </ul>
                    <!-- Other details you want to display -->
                </div>
            </div>
        </div>
    </div>
    <div class="d-none" id="editeventData_modal">
        <div class="drawer-header">
            <div class="drawer-header-action">
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

                            </div>
                        </div>
                    </div>
                    <form>

                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                placeholder="Select Date" readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Start Time</label>
                            <div class="form-group form-icon bookingtimeinp">
                                <input type="text" name="time" value="" class="form-control time__pickers"
                                    id="timepicker" placeholder="Select Time" required="" readonly="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">End Time</label>
                            <div class="form-group form-icon bookingtimeinp">
                                <input type="text" name="time" value="" class="form-control time__pickers"
                                    id="timepicker" placeholder="Select Time" required="" readonly="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Event Title</label>
                            <input type="text" class="form-control event-title" id="">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Staff Name</label>
                            <input type="text" class="form-control event-staff" id="">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Event location</label>
                            <input type="text" class="form-control event-location" id="">
                        </div>

                        <div class="drawer-footer d-flex justify-content-end">
                            <button class="btn btn-primary drawer-edit-close">save</button>
                        </div>

                </div>

                </form>
            </div>
        </div>
    </div>

</div>

<!-- staff property viewing attend modal -->
<div id="staffallviewing_modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered staffPropeties_modaldialog546" role="document">
        <form action="" method="post" id="wizardForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Staff Schedules</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="PropertiesAttending_list">
                        <ul>
                        <li>
                               <div class="NameofPRoperty_viewing">
                               <span class="ev-icon-wrap"><span class="feather-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg></span></span>
                                <span class="event-location"><a
                                        href="https://www.techmavedesigns.com/Design/graysons-properties-adminpanel">https://www.techmavedesigns.com/Design/graysons-properties-adminpanel</a></span>
                               </div>
                           

                               <div class="Moreproperty_staffviewing">
                               <div class="ViewingEnqID">
                               <span><iconify-icon icon="hugeicons:user-id-verification"></iconify-icon> Enquiry ID :</span> <div class="EnqViewID">86cvr79t2</div> 
                               </div>
                           <div class="VieeingDateandTime">
                            <div class="DateofViewing datetimeofviewingProperty"><iconify-icon icon="clarity:date-line"></iconify-icon> Nov 04, 2024 </div>
                            <div class="TimeofViewing datetimeofviewingProperty"><iconify-icon icon="subway:time-2" ></iconify-icon>Start Time: 9:30 AM End Time: 8:00 PM</div>
                           </div>
                               </div>
                                    </li>
                                    <li>
                               <div class="NameofPRoperty_viewing">
                               <span class="ev-icon-wrap"><span class="feather-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg></span></span>
                                <span class="event-location"><a
                                        href="https://www.techmavedesigns.com/Design/graysons-properties-adminpanel">https://www.techmavedesigns.com/Design/graysons-properties-adminpanel</a></span>
                               </div>
                           

                               <div class="Moreproperty_staffviewing">
                               <div class="ViewingEnqID">
                               <span><iconify-icon icon="hugeicons:user-id-verification"></iconify-icon> Enquiry ID :</span> <div class="EnqViewID">86cvr79t2</div> 
                               </div>
                           <div class="VieeingDateandTime">
                            <div class="DateofViewing datetimeofviewingProperty"><iconify-icon icon="clarity:date-line"></iconify-icon> Nov 04, 2024 </div>
                            <div class="TimeofViewing datetimeofviewingProperty"><iconify-icon icon="subway:time-2" ></iconify-icon>Start Time: 9:30 AM End Time: 8:00 PM</div>
                           </div>
                               </div>
                                    </li>
                                    <li>
                               <div class="NameofPRoperty_viewing">
                               <span class="ev-icon-wrap"><span class="feather-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg></span></span>
                                <span class="event-location"><a
                                        href="https://www.techmavedesigns.com/Design/graysons-properties-adminpanel">https://www.techmavedesigns.com/Design/graysons-properties-adminpanel</a></span>
                               </div>
                           

                               <div class="Moreproperty_staffviewing">
                               <div class="ViewingEnqID">
                               <span><iconify-icon icon="hugeicons:user-id-verification"></iconify-icon> Enquiry ID :</span> <div class="EnqViewID">86cvr79t2</div> 
                               </div>
                           <div class="VieeingDateandTime">
                            <div class="DateofViewing datetimeofviewingProperty"><iconify-icon icon="clarity:date-line"></iconify-icon> Nov 04, 2024 </div>
                            <div class="TimeofViewing datetimeofviewingProperty"><iconify-icon icon="subway:time-2" ></iconify-icon>Start Time: 9:30 AM End Time: 8:00 PM</div>
                           </div>
                               </div>
                                    </li>
                        </ul>
                    </div>

                </div>
                <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="modal">Close</button>
        </div>
            </div>
        </form>
    </div>
</div>
<!-- staff property viewing attend modal-->

<?php include('footer.php') ?>

<!-- Fullcalendar JS -->
<script src="vendors/fullcalendar/index.global.min.js"></script>
<script src="vendors/%40fullcalendar/bootstrap5/index.global.min.js"></script>
<script src="dist/js/fullcalendar-init.js"></script>

<!-- Bootstrap Notify JS -->
<script src="dist/js/bootstrap-notify.min.js"></script>

<!-- department calendar select 2 (dont remove this select2 function this is only for department filter) -->

<script>
    $("#departmentselect_filter").select2({
        placeholder: "Select a Department"
    })
    $("#DepartmentUser_select").select2({
        placeholder: "Select a User"
    })
</script>
<!-- end -->

<!-- add note js start -->
<script>
        $(document).ready(function () {
    // Toggle the visibility of Showing_departmentand_users based on the checkbox
    $(document).on('change', '.customCheckList-todo', function () {
        const container = $(this).closest('.AddNoteEnuSection');
        if ($(this).is(':checked')) {
            container.find('.Showing_departmentand_users').slideDown(); // Show the section
        } else {
            container.find('.Showing_departmentand_users').slideUp(); // Hide the section
        }
    });

    // Handle the Send Note button click
    $(document).on('click', '.send-note', function () {
        const container = $(this).closest('.AddNoteEnuSection');
        const selectedDepartment = container.find('.select-department').val();
        const selectedUser = container.find('.select-user').val();
        
        if (selectedDepartment && selectedUser) {
            Swal.fire({
                icon: 'success',
                title: 'Note Sent!',
                text: `Note sent to ${selectedDepartment} and ${selectedUser}.`
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Missing Information',
                text: 'Please select both a department and a user.'
            });
        }
    });

    // Handle Set Alert confirmation
    $(document).on('change', '.setAlertInput', function () {
        const checkbox = $(this);
        if (checkbox.is(':checked')) {
            Swal.fire({
                html: `
                    <div style="text-align: center;">
                        <div class="swalalert_custom_icon">
                            <iconify-icon icon="hugeicons:alert-01"></iconify-icon>
                        </div>
                        <h2 class="Swal_CustomTitle">Are You Sure You Want to Set This Note as an Alert?</h2>
                    </div>`,
                showCancelButton: true,
                confirmButtonText: 'Yes, set it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Alert Set!',
                        text: 'The note has been successfully set as an alert.',
                        icon: 'success'
                    });
                } else if (result.isDismissed) {
                    checkbox.prop('checked', false); // Uncheck the checkbox if the user cancels
                }
            });
        }
    });
});

    </script>
    <!-- end -->