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
        <div class="todoapp-wrap todoapp-info-active">

            <div class="todoapp-content">
                <div class="todoapp-detail-wrap">
                    <header class="todo-header">
                        <div class="d-flex align-items-center">
                            <a class="todoapp-title  link-dark">
                                <h1>Task Details</h1>
                            </a>
                            <div class=" ms-3">

                                <a href="daily-task.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="todo-options-wrap">
                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <!-- <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="modal" data-bs-target="#add_new_task">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add New Task
                            </button> -->
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>

                        <div class="sustomdividerLedtArrow"></div>
                    </header>

                    <div class="task-info">
                        <div data-simplebar class="nicescroll-bar">
                            <header class="task-header">
                                <div class="d-flex align-items-center">
                                    <!-- <div id="sparkline_chart_7"></div> -->
                                    <div class="form-check markas_complete_task">
                                        <input type="checkbox" class="form-check-input" id="customCheckcTask" checked>
                                        <label class="form-check-label d-lg-inline d-none" for="customCheckcTask">Mark
                                            as completed</label>
                                    </div>
                                    <div class="dropdown customdropdown_menu">
                                        <button aria-expanded="false" data-bs-toggle="dropdown"
                                            class="btn  btn-rounded dropdown-toggle buttonLightBG_custom"
                                            type="button">In
                                            Progress</button>
                                        <div role="menu" class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Assigned</a>
                                            <a class="dropdown-item" href="#">Completed</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="enquiryRight_header_data TaskAction_wrapper">
                                    <div class="enquiryDate dueDate_container">
                                        <iconify-icon icon="ion:calendar-outline"></iconify-icon>
                                        <div class="duedatelabel">Due Date : </div> Nov 20, 2024
                                    </div>
                                    <div class="enquiryID_container">
                                        <div class="EnquiryID">
                                            Task Status
                                        </div>
                                        <div class="IDButton appoinment_confirmed">
                                            <button type="button" class="SourceDataBtn">
                                                <iconify-icon icon="octicon:check-16">
                                                </iconify-icon> Completed
                                            </button></div>
                                    </div>
                                    <button type="button" class="RequestChange_button" data-bs-toggle="modal"
                                        data-bs-target="#requestChange_modal">
                                        <iconify-icon icon="tabler:status-change"></iconify-icon> Request Date Change
                                    </button>

                                </div>

                            </header>
                            <div class="task-detail-body">
                                <div class="row">
                                    <!-- <div class="col-md-12">
                                        <div class="title title-wth-divider my-4"><span>Labels</span></div>
                                        <input type="text" id="exist_values1" class="user-input-tagged form-control"
                                            name="tag-3" value="Urgent,Priority" placeholder="Add Labels">
                                    </div>  -->

                                    <ul
                                        class="nav  nav-justified nav-light nav-tabs nav-segmented-tabs active-theme TaskDetails_tabs ">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_comments">
                                                <span class="nav-link-text badge-on-text">Comments</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_activity">
                                                <span class="nav-link-text badge-on-text">Activity</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tasktab_content mt-3">

                                        <div class="tab-pane fade show active" id="tab_comments">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div class="title title-lg mb-0"><span>All Comments</span></div>

                                            </div>

                                            <div class="comment-block">

                                                <div class="card card-border note-block">
                                                    <div class="card-body">

                                                        <div class="media align-items-center">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                        alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="noteAuthor_title">
                                                                    Martin Luther</div>
                                                                <div class="NoteTiming">
                                                                    9 Apr, 20, 7:14 AM
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="NoteDescription">@<a href="#"
                                                                class="fw-medium">Charlie
                                                                Darvin</a> Tenant was
                                                            very interested in the
                                                            property, appreciating the
                                                            layout and natural light.
                                                            They need two bedrooms, a
                                                            workspace, and a parking
                                                            spot. They have a small dog
                                                            and prefer to move in by the
                                                            end of next month. Awaiting
                                                            their decision by the end of
                                                            the week.</p>
                                                    </div>
                                                </div>
                                                <div class="card card-border note-block ">
                                                    <div class="card-body">

                                                        <div class="media align-items-center">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                        alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="noteAuthor_title">
                                                                    Katherine Jones
                                                                </div>
                                                                <div class="NoteTiming">
                                                                    8 Apr, 20, 5:30 PM
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="NoteDescription">@<a href="#" class="fw-medium">Martin
                                                                Luther</a> Viscosity
                                                            ratio for "Appear view" link
                                                            text is 3.7:1 which is less
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="separator separator-light">
                                                </div>

                                                <div class="AddNoteEnuSection" id="AddNote">
                                                    <div class="form-group">
                                                        <label class="form-label">Note
                                                            header</label>
                                                        <input class="form-control" type="text" name=""
                                                            placeholder="Add Title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Add
                                                            Comment</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                    <div class="NoteAction_container">
                                                        <div class="sendEnquiryNote_container">
                                                            <div class="addto_todolist">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="customCheckList-todo">
                                                                    <label class="form-check-label"
                                                                        for="customCheckList-todo">
                                                                        Add to ToDo List
                                                                        <span class="done-strikethrough"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sendEnquiryNote_container setAlert_container">
                                                            <div class="addto_todolist">
                                                                <div class="form-check">
                                                                    <input type="checkbox"
                                                                        class="form-check-input setAlertInput">
                                                                    <label class="form-check-label"
                                                                        for="customCheckList-todo">
                                                                        Set As Alert
                                                                        <span class="done-strikethrough"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="Showing_departmentand_users" style="display: none;">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select
                                                                        Department</label>
                                                                    <select class="form-control select2"
                                                                        id="selectDepartment">
                                                                        <option disabled selected value="">
                                                                            Please
                                                                            Select...
                                                                        </option>
                                                                        <option value="Account Department">
                                                                            Account
                                                                            Department
                                                                        </option>
                                                                        <option value="HR Department">
                                                                            HR
                                                                            Department
                                                                        </option>
                                                                        <option value="Contract Department">
                                                                            Contract
                                                                            Department
                                                                        </option>
                                                                        <option value="Lettings Department">
                                                                            Lettings
                                                                            Department
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select
                                                                        Users</label>
                                                                    <select class="form-control select2"
                                                                        id="selectUser">
                                                                        <option disabled selected value="">
                                                                            Please
                                                                            Select...
                                                                        </option>
                                                                        <option value="John Doe">
                                                                            John Doe
                                                                        </option>
                                                                        <option value="Jane Smith">
                                                                            Jane Smith
                                                                        </option>
                                                                        <option value="Alice Johnson">
                                                                            Alice
                                                                            Johnson
                                                                        </option>
                                                                        <option value="Robert Brown">
                                                                            Robert Brown
                                                                        </option>
                                                                        <option value="Michael Williams">
                                                                            Michael
                                                                            Williams
                                                                        </option>
                                                                        <option value="Emily Davis">
                                                                            Emily Davis
                                                                        </option>
                                                                        <option value="David Wilson">
                                                                            David Wilson
                                                                        </option>
                                                                        <option value="Sophia Martinez">
                                                                            Sophia
                                                                            Martinez
                                                                        </option>
                                                                        <option value="James Anderson">
                                                                            James
                                                                            Anderson
                                                                        </option>
                                                                        <option value="Olivia Taylor">
                                                                            Olivia
                                                                            Taylor
                                                                        </option>
                                                                        <option value="Chris Thomas">
                                                                            Chris Thomas
                                                                        </option>
                                                                        <option value="Emma Harris">
                                                                            Emma Harris
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="submitnote_container">
                                                        <button id="sendBtn2" type="button"
                                                            class="sendBtn_common_main addenun_noteBtn">
                                                            <iconify-icon icon="mynaui:send">
                                                            </iconify-icon>
                                                            Send Comment
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- <div class="AssignTasks_container">
                                                                                    <h2>Add Task</h2>
                                                                                </div> -->

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab_activity">
                                            <div class="mt-2 mb-2">
                                                <div class="title title-lg mb-0"><span>Latest activity</span></div>
                                            </div>
                                            <div class="collapse-simple">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a role="button" data-bs-toggle="collapse" href="#activity_1"
                                                            aria-expanded="true">Today</a>
                                                    </div>
                                                    <div id="activity_1" class="collapse show">
                                                        <div class="card-body">
                                                            <ul class="activity-list list-group list-group-flush">
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-primary avatar-rounded">
                                                                                <span class="initial-wrap">H</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">John</span> on
                                                                                Documentation link is working now
                                                                            </p>
                                                                            <div class="last-activity-time">Oct 15,
                                                                                2021,
                                                                                12:34 PM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                <img src="dist/img/avatar2.jpg"
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Morgan
                                                                                    Fregman</span>
                                                                                completed client conversion of
                                                                            </p>
                                                                            <div class="last-activity-time">Sep 16,
                                                                                2021,
                                                                                4:54 PM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                <img src="dist/img/avatar13.jpg"
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Jimmy
                                                                                    Carry</span> completed side bar menu
                                                                                on
                                                                                <a href="##"
                                                                                    class="link-default"><u>Graysons</u></a>
                                                                            </p>
                                                                            <div class="last-activity-time">Sep 10,
                                                                                2021,
                                                                                10:13 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                <img src="dist/img/avatar7.jpg"
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <p><span class="text-dark">Charlie
                                                                                    Chaplin</span> deleted empty cards
                                                                                on <a href="#"
                                                                                    class="link-default"><u>completed</u></a>
                                                                            </p>
                                                                            <div class="last-activity-time">Sep 10,
                                                                                2021,
                                                                                10:13 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="card">
                                                <div class="card-header">
                                                    <a role="button" data-bs-toggle="collapse" href="#activity_2"
                                                        aria-expanded="true">Yesterday</a>
                                                </div>
                                                <div id="activity_2" class="collapse show">
                                                    <div class="card-body">
                                                        <ul class="activity-list list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div
                                                                            class="avatar avatar-xs avatar-soft-danger avatar-rounded">
                                                                            <span class="initial-wrap">W</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p><span class="text-dark">Winston
                                                                                Churchills</span> created a note on UI
                                                                            components task list</p>
                                                                        <div class="last-activity-time">Sep 2, 2021,
                                                                            9:23 AM</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded">
                                                                            <img src="dist/img/avatar2.jpg" alt="user"
                                                                                class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p><span class="text-dark">Morgan Fregman</span>
                                                                            completed react conversion of <a href="#"
                                                                                class="link-default"><u>components</u></a>
                                                                        </p>
                                                                        <div class="last-activity-time">Sep 16, 2021,
                                                                            4:54 PM</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded">
                                                                            <img src="dist/img/avatar13.jpg" alt="user"
                                                                                class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p><span class="text-dark">Jimmy
                                                                                Carry</span>added shared components to
                                                                            <a href="#" class="link-default"><u>basic
                                                                                    structure</u></a></p>
                                                                        <div class="last-activity-time">Sep 10, 2021,
                                                                            10:13 AM</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div
                                                                            class="avatar avatar-xs avatar-primary avatar-rounded">
                                                                            <span class="initial-wrap">H</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p><span class="text-dark">Hencework</span>
                                                                            commented on <a href="#"
                                                                                class="link-default"><u>basic
                                                                                    structure</u></a></p>
                                                                        <div class="last-activity-time">Sep 10, 2021,
                                                                            10:13 AM</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded">
                                                                            <img src="dist/img/avatar7.jpg" alt="user"
                                                                                class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p><span class="text-dark">Charlie
                                                                                Chaplin</span> moved components from all
                                                                            modules to in progress</p>
                                                                        <div class="last-activity-time">Sep 10, 2021,
                                                                            10:13 AM</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div
                                                                            class="avatar avatar-xs avatar-soft-danger avatar-rounded">
                                                                            <span class="initial-wrap">W</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p><span class="text-dark">Winston
                                                                                Churchills</span> created a note on UI
                                                                            components task list</p>
                                                                        <div class="last-activity-time">Sep 10, 2021,
                                                                            10:13 AM</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="task_Assign_container">
                                    <h4 class="d-flex align-items-center fw-bold mb-0 inline-editable-wrap">Assign to
                                        Other Staff</h4>
                                    <p class="d-flex align-items-center inline-editable-wrap"><span
                                            class="editable">Reassign this task to another team member for assistance or
                                            completion.</span></p>
                                    <div class="todoDataFilter_options">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="form-label">Select Department</label>
                                                    <select name="department" id="department_select"
                                                        class="form-control department_select select2">
                                                        <option value="" selected>Select a Department</option>
                                                        <option value="HR">Human Resources</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="IT">Information Technology</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Sales">Sales</option>
                                                        <option value="Operations">Operations</option>
                                                        <option value="Legal">Legal</option>
                                                        <option value="Customer Support">Customer Support</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="form-label">Select User to Assign</label>
                                                    <select name="user" id="DepartmentUser_select"
                                                        class="form-control DepartmentUser_select select2">
                                                        <option value="" selected>Select a User</option>
                                                        <option value="user1">John Doe</option>
                                                        <option value="user2">Jane Smith</option>
                                                        <option value="user3">Michael Johnson</option>
                                                        <option value="user4">Emily Davis</option>
                                                        <option value="user5">Chris Brown</option>
                                                        <option value="user6">Jessica Williams</option>
                                                        <option value="user7">David Miller</option>
                                                        <option value="user8">Sophia Wilson</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label">Task Due Date</label>
                                                    <input
                                                        class="form-control customdataPicker flatpickr-input taskAssign_duedate"
                                                        type="text" name="" placeholder="Select Date"
                                                        readonly="readonly">
                                                    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                                    </iconify-icon>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Add Reason</label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="rightAlignButton_container">
                                                    <button class="btn btn-sm btn-light ms-2 AssignButton"
                                                        disabled>Assign</button>
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

    <!-- due date change modal start -->
    <div id="requestChange_modal" class="modal fade add-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="ModalheaderArea">
                    <h5 class="mb-4">Due Date Change Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <form action="" method="post" id="">
                    <div class="modal-body">

                        <div class="row gx-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">New Date</label>
                                    <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                        value="01/06/2024" readonly="readonly">
                                    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                    </iconify-icon>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Add Reason</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">

                        <div class="eventSubmit_container">

                            <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                                style="display: inline-block;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- due date change modal end -->

    <?php include('footer.php') ?>

    <!-- don't Remove this scripts these all Required Scripts for this page  -->
    <!-- Repeater JS -->
    <script src="vendors/jquery.repeater/jquery.repeater.min.js"></script>
    <!-- Drag JS -->
    <script src="vendors/dragula/dist/dragula.min.js"></script>
    <script src="dist/js/todo-data.js"></script>

    <script>
        $(".department_select").select2({
            placeholder: "Select a Department"
        })
        $(".DepartmentUser_select").select2({
            placeholder: "Select a User"
        })
    </script>

    <!-- --------------------------------------------------------- 
 assign note task to department from the left side under note js Functionality to 
  hide the assign selection option  start
  -------------------------------------------------------->

    <script>
        $(document).ready(function() {
            // Toggle the visibility of Showing_departmentand_users based on the checkbox
            $('#customCheckList-todo').change(function() {
                if ($(this).is(':checked')) {
                    $('.Showing_departmentand_users').slideDown(); // Show the section
                } else {
                    $('.Showing_departmentand_users').slideUp(); // Hide the section
                }
            });
            // Handle the Send Note button click
            $('#sendBtn2').click(function() {
                var selectedDepartment = $('#selectDepartment').val();
                var selectedUser = $('#selectUser').val();
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
        });
    </script>

    <!-- --------------------------------------------------------- 
 assign note task to department from the left side under note js Functionality to 
  hide the assign selection option  end
  -------------------------------------------------------->

    <!-- ****************************
  Note set as alert confirmation popup js start
****************************** -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.querySelector('.setAlertInput');
            checkbox.addEventListener('change', function() {
                if (this.checked) {
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
                            checkbox.checked =
                            false; // Uncheck the checkbox if the user cancels
                        }
                    });
                }
            });
        });
    </script>
    <!-- ****************************
  Note set as alert confirmation popup js end
****************************** -->

    <!-- custom task duration  field functionality js -->
    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('#durationSelect').select2({
                minimumResultsForSearch: Infinity // This disables the search box if you don't need it
            });
            // Hide custom field by default
            $('.customTile_field').hide();
            // Show/hide custom field based on selected option
            $('#durationSelect').on('change', function() {
                if ($(this).val() === 'Custom') {
                    $('.customTile_field').show();
                } else {
                    $('.customTile_field').hide();
                }
            });
        });
    </script>
    <!-- custom task duration  field functionality js end-->

    <!--  custom field numver validation and time calculation js -->
    <script>
        $(document).ready(function() {
            // Restrict input to digits only
            $('#timeInput').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, ''); // Only allow numbers
                var minutes = parseInt(this.value) || 0; // Convert to integer or default to 0 if empty
                var hours = Math.floor(minutes / 60); // Calculate hours
                var remainingMinutes = minutes % 60; // Calculate remaining minutes
                // Display the result in "X hr Y min" format
                if (minutes > 0) {
                    var timeFormatted = (hours > 0 ? hours + " hr " : "") + (remainingMinutes > 0 ?
                        remainingMinutes + " min" : "");
                    $('#timeOutput').text(timeFormatted);
                } else {
                    $('#timeOutput').text(''); // Clear the output if input is empty
                }
            });
        });
    </script>
    <!--  custom field numver validation and time calculation js end-->

    <!-- validation alert for the assign task to other staff -->
    <script>
        // Function to check if department and user are selected
        function checkSelections() {
            const department = $('#department_select').val(); // Get value from select2
            const user = $('#DepartmentUser_select').val(); // Get value from select2
            const assignButton = document.querySelector('.AssignButton');
            // Enable the button if both department and user are selected
            if (department && user) {
                assignButton.disabled = false;
            } else {
                assignButton.disabled = true;
            }
        }
        // Listen for changes in the Select2 fields
        $('#department_select').on('change', checkSelections);
        $('#DepartmentUser_select').on('change', checkSelections);
        // Handle the click event for the Assign button
        document.querySelector('.AssignButton').addEventListener('click', function() {
            const selectedUser = $('#DepartmentUser_select').find('option:selected')
        .text(); // Get selected user text
            Swal.fire({
                title: 'Are you sure?',
                text: `Do you want to assign this task to ${selectedUser}?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, assign it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Assigned!',
                        `Task has been assigned to ${selectedUser}.`,
                        'success'
                    );
                }
            });
        });
    </script>
    <!-- validation alert for the assign task to other staff end-->