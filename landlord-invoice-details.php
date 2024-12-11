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
                                <a class="contactapp-title link-dark" href="##" role="button">
                                    <h1>Landlord Invoice Details </h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="tickets-invoices.php"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="##">Import</a>
                            </div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow"></div>
                    </header>

                    <form action="generated-deposite-invoice.php" method="post">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">
                                <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Payment">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Invoice Details</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#History">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Invoice Activity History </span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Notes">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Notes</span>

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
                                        

                                        <div class="tab-pane fade " id="Notes">
                                            <div class="fullwidthTabInner_content_container">

                                                <div class="row">

                                                    <ul
                                                        class="nav applicant_activiti_inrTabs  nav-justified quotationInnertb_tabs  nav-light nav-tabs nav-segmented-tabs active-theme multinotesTabs ">

                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#General_Notes">
                                                                <span class="nav-link-text badge-on-text">General Notes
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#Emergency_Notes">
                                                                <span class="nav-link-text badge-on-text">Emergency Notes</span>
                                                            </a>
                                                        </li>

                                                        

                                                    </ul>
                                                    <div class="tab-content tasktab_content mt-3 nobtPadding">

                                                        <div class="tab-pane fade show active" id="General_Notes">
                                                            <div class="singlesectionTitle">
                                                                <h2>General Notes</h2>
                                                            </div>
                                                            <div class="AddNoteEnuSection">
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
                                                                                <input type="checkbox"
                                                                                    class="form-check-input customCheckList-todo"
                                                                                    id="customCheckList-todo">
                                                                                <label class="form-check-label"
                                                                                    for="customCheckList-todo">
                                                                                    Add to ToDo List
                                                                                    <span
                                                                                        class="done-strikethrough"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="sendEnquiryNote_container setAlert_container">
                                                                        <div class="addto_todolist">
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input setAlertInput">
                                                                                <label class="form-check-label"
                                                                                    for="customCheckList-todo">
                                                                                    Set As Alert
                                                                                    <span
                                                                                        class="done-strikethrough"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="Showing_departmentand_users"
                                                                    style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Select
                                                                                    Department</label>
                                                                                <select
                                                                                    class="form-control select2 select-department">
                                                                                    <option disabled selected value="">
                                                                                        Please Select...</option>
                                                                                    <option value="Account Department">
                                                                                        Account Department</option>
                                                                                    <option value="HR Department">HR
                                                                                        Department</option>
                                                                                    <option value="Contract Department">
                                                                                        Contract Department</option>
                                                                                    <option value="Lettings Department">
                                                                                        Lettings Department</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Select
                                                                                    Users</label>
                                                                                <select
                                                                                    class="form-control select2 select-user">
                                                                                    <option disabled selected value="">
                                                                                        Please Select...</option>
                                                                                    <option value="John Doe">John Doe
                                                                                    </option>
                                                                                    <option value="Jane Smith">Jane
                                                                                        Smith</option>
                                                                                    <option value="Alice Johnson">Alice
                                                                                        Johnson</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Select
                                                                                    Due Date</label>
                                                                                <input
                                                                                    class="form-control customdataPicker"
                                                                                    type="text" name="" value=""
                                                                                    placeholder="Due Date" />
                                                                                <iconify-icon
                                                                                    icon="ion:calendar-outline"
                                                                                    class="dateinput_icon">
                                                                                </iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="submitnote_container">
                                                                <button type="button"
                                                                    class="sendBtn_common_main addenun_noteBtn send-note">Send
                                                                    Note</button>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="Emergency_Notes">

                                                            <div class="singlesectionTitle">
                                                                <h2>Emergency Notes</h2>
                                                            </div>
                                                            <div class="task-detail-body ">
                                                                <div class="row">

                                                                    <div class="contractNotes">

                                                                        <div class="comment-block">

                                                                            <div class="card card-border note-block">
                                                                                <div class="card-body">

                                                                                    <div
                                                                                        class="media align-items-center">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <div
                                                                                                class="noteAuthor_title">
                                                                                                Martin Luther</div>
                                                                                            <div class="NoteTiming">
                                                                                                9 Apr, 20, 7:14 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="NoteDescription">@<a
                                                                                            href="#"
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

                                                                                    <div
                                                                                        class="media align-items-center">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <div
                                                                                                class="noteAuthor_title">
                                                                                                Katherine Jones
                                                                                            </div>
                                                                                            <div class="NoteTiming">
                                                                                                8 Apr, 20, 5:30 PM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="NoteDescription">@<a
                                                                                            href="#"
                                                                                            class="fw-medium">Martin
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
                                                                                    <input class="form-control"
                                                                                        type="text" name=""
                                                                                        placeholder="Add Title">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="form-label">Add
                                                                                        Notes</label>
                                                                                    <textarea class="form-control"
                                                                                        rows="5"></textarea>
                                                                                </div>
                                                                                <div class="NoteAction_container">
                                                                                    <div
                                                                                        class="sendEnquiryNote_container">
                                                                                        <div class="addto_todolist">
                                                                                            <div class="form-check">
                                                                                                <input type="checkbox"
                                                                                                    class="form-check-input customCheckList-todo"
                                                                                                    id="customCheckList-todo">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="customCheckList-todo2">
                                                                                                    Add to ToDo List
                                                                                                    <span
                                                                                                        class="done-strikethrough"></span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- <div
                                                                            class="sendEnquiryNote_container setAlert_container">
                                                                            <div class="addto_todolist">
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input setAlertInput">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList-todo">
                                                                                        Set As Alert
                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->

                                                                                </div>

                                                                                <div class="Showing_departmentand_users"
                                                                                    style="display: none;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="form-label">Select
                                                                                                    Department</label>
                                                                                                <select
                                                                                                    class="form-control select2"
                                                                                                    id="selectDepartment2">
                                                                                                    <option disabled
                                                                                                        selected
                                                                                                        value="">
                                                                                                        Please
                                                                                                        Select...
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Account Department">
                                                                                                        Account
                                                                                                        Department
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="HR Department">
                                                                                                        HR
                                                                                                        Department
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Contract Department">
                                                                                                        Contract
                                                                                                        Department
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Lettings Department">
                                                                                                        Lettings
                                                                                                        Department
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="form-label">Select
                                                                                                    Users</label>
                                                                                                <select
                                                                                                    class="form-control select2"
                                                                                                    id="selectUser2">
                                                                                                    <option disabled
                                                                                                        selected
                                                                                                        value="">
                                                                                                        Please
                                                                                                        Select...
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="John Doe">
                                                                                                        John Doe
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Jane Smith">
                                                                                                        Jane Smith
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Alice Johnson">
                                                                                                        Alice
                                                                                                        Johnson
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Robert Brown">
                                                                                                        Robert Brown
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Michael Williams">
                                                                                                        Michael
                                                                                                        Williams
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Emily Davis">
                                                                                                        Emily Davis
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="David Wilson">
                                                                                                        David Wilson
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Sophia Martinez">
                                                                                                        Sophia
                                                                                                        Martinez
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="James Anderson">
                                                                                                        James
                                                                                                        Anderson
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Olivia Taylor">
                                                                                                        Olivia
                                                                                                        Taylor
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Chris Thomas">
                                                                                                        Chris Thomas
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Emma Harris">
                                                                                                        Emma Harris
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="form-label">Select
                                                                                                    Due
                                                                                                    Date</label>
                                                                                                <input
                                                                                                    class="form-control customdataPicker"
                                                                                                    type="text" name=""
                                                                                                    value=""
                                                                                                    placeholder="Due Date" />
                                                                                                <iconify-icon
                                                                                                    icon="ion:calendar-outline"
                                                                                                    class="dateinput_icon">
                                                                                                </iconify-icon>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="submitnote_container">
                                                                                    <button type="button"
                                                                                        class="sendBtn_common_main addenun_noteBtn send-note">Send
                                                                                        Note</button>
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

                                        <div class="tab-pane fade" id="History">
                                            <div class="fullwidthTabInner_content_container contract_status_Contrair">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="tabinnertitle_withRightAction">
                                                            <h2 class="tabinnerTitle">History Activity</h2>
                                                            <!-- <div class="cntrt_detailright_header_action">

                                                                <button type="button"
                                                                    class="AddNoteRightact_button rightactionbutton_cmnStyle"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#AddNote_modal">
                                                                    <iconify-icon icon="fluent:note-add-24-regular">
                                                                    </iconify-icon> Add Note
                                                                </button>
                                                            </div> -->
                                                        </div>
                                                        <div class="contractHistory_data">
                                                            <div class="contact-body">

                                                                <div class="contact-list-view">

                                                                    <table
                                                                        class="table common-datatable nowrap w-100 tbWithout_action">
                                                                        <thead>
                                                                            <tr>

                                                                                <th>User Name</th>
                                                                                <th>Department</th>
                                                                                <th>Activity Date & Time</th>
                                                                                <th>Activity</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Morgan
                                                                                                    Freeman</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Finance</td>
                                                                                <td>18/06/2024 12:00</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Tenant <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>
                                                                                                        changed their
                                                                                                        Bank Account
                                                                                                        Number.</p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Huma
                                                                                                    Therman</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Lettings</td>
                                                                                <td>15/03/2023 16:40</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Charlie
                                                                                                    Chaplin</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Lettings</td>
                                                                                <td>10/02/2024 15:15</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>

                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Emma
                                                                                                    Watson</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Marketing</td>
                                                                                <td>25/08/2023 09:30</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Robert
                                                                                                    Downey Jr.</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">IT Support</td>
                                                                                <td>30/01/2024 14:45</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Scarlett
                                                                                                    Johansson</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">HR</td>
                                                                                <td>22/11/2023 11:10</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Chris
                                                                                                    Hemsworth</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Operations</td>
                                                                                <td>08/09/2024 13:50</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to
                                                                                                        correct Address
                                                                                                        Details for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Jennifer
                                                                                                    Lawrence</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Sales</td>
                                                                                <td>05/07/2023 17:20</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to update
                                                                                                        Phone Number for
                                                                                                        <a href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
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

                                        <div class="tab-pane fade show active" id="Payment">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="create-invoice-wrap">

                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <form class="form-inline p-3 bg-grey-light-5 rounded">
                                                                <div class="row gx-3 align-items-center">
                                                                   
                                                                    
                                                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                                                        <label class="form-label mb-xl-0">Recipient
                                                                            :</label>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <select class="form-select select2"
                                                                            required="required">
                                                                            <option value="119">Balaggan, Avinash
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                                                        
                                                                        <div class="flexcheckColumn invoiceCheckbox_nomrbt">
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    Material invoices to
                                                                    be included
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                                </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="table-wrap mt-5">
                                                        <div class="invoice-table-wrap">
                                                            <table class="table table-bordered invoice-table">
                                                                <thead class="thead-primary">
                                                                    <tr>
                                                                        <th>Due Date</th>
                                                                        <th>Amount</th>
                                                                        <th>Received</th>
                                                                        <th>Type</th>
                                                                        <th>Invoice</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="table-row-gap">
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            class="w-20 rounded-top-start border-end-0 border-bottom-0">
                                                                            <input type="text"
                                                                                class="form-control customdataPicker flatpickr-input active"
                                                                                value="May, 22 2024 "
                                                                                readonly="readonly">
                                                                        </td>
                                                                        <td class="w-20  border-end-0 border-bottom-0">
                                                                            <input type="text" class="form-control qty"
                                                                                value="£663.00"></td>
                                                                        <td class="w-20 border-end-0 border-bottom-0">
                                                                            <input type="text"
                                                                                class="form-control customdataPicker flatpickr-input active"
                                                                                value="" readonly="readonly">

                                                                        <td class="w-20 border-end-0 border-bottom-0">
                                                                            <select
                                                                                class="form-select disc-type w-130p select2">
                                                                                <option value="1">Rental</option>
                                                                                <option value="2" selected="">Utility
                                                                                </option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="w-40  rounded-end  bg-primary-light-5 close-over position-relative"
                                                                            rowspan="2">
                                                                            <div class="viewInvoiceButton">
                                                                                <button type="button">
                                                                                    <iconify-icon
                                                                                        icon="teenyicons:invoice-outline">
                                                                                    </iconify-icon> View Invoice
                                                                                </button>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="close-row btn-close removeinvoiceRow">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                            <button
                                                                class="d-inline-flex align-items-center add-new-row addnewPaymentButton">
                                                                <i class="ri-add-box-line me-1"></i> Add Payment
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-end">
                                                        <div class="col-xxl-6 ">
                                                            <div class="table-wrap">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered subtotal-table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    class="rounded-top-start border-end-0 border-bottom-0 invoiceSummary_title">
                                                                                    Contractual Total</td>
                                                                                <td
                                                                                    class="rounded-top-end InvSummary_amount border-bottom-0 invoisetotalprice_col bg-primary-light-5">
                                                                                    £4,983.00
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    class="border-end-0  border-bottom-0 invoiceSummary_title">
                                                                                    Contractual Remaining</td>
                                                                                <td
                                                                                    class="border-bottom-0 InvSummary_amount  bg-primary-light-5">
                                                                                    £2,43.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    class="border-end-0 border-bottom-0 invoiceSummary_title">
                                                                                    Paid to Date</td>
                                                                                <td
                                                                                    class="border-bottom-0 InvSummary_amount  bg-primary-light-5">
                                                                                    £0.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    class="border-end-0 border-bottom-0 invoiceSummary_title">
                                                                                    Currently Overdue</td>
                                                                                <td
                                                                                    class="border-bottom-0 InvSummary_amount  bg-primary-light-5">
                                                                                    £0.00</td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
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

<!-- create invoice js -->
<script src="dist/js/create-invoice-data.js"></script>

<!-- document filters show hide script -->
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
<!-- document filters show hide script end-->

<!-- input lenthy content show js -->
<script>
    $(document).ready(function() {
        // Initialize Bootstrap Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // Show input value content in tooltip on view button click
        $('.view-btn').on('click', function() {
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

<!-- add not functionality js start -->

<!-- ****************************
  Note set as alert confirmation popup js start
****************************** -->
<script>
    $(document).ready(function() {
        // Toggle the visibility of Showing_departmentand_users based on the checkbox
        $(document).on('change', '.customCheckList-todo', function() {
            const container = $(this).closest('.AddNoteEnuSection');
            if ($(this).is(':checked')) {
                container.find('.Showing_departmentand_users').slideDown(); // Show the section
            } else {
                container.find('.Showing_departmentand_users').slideUp(); // Hide the section
            }
        });
        // Handle the Send Note button click
        $(document).on('click', '.send-note', function() {
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
        $(document).on('change', '.setAlertInput', function() {
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
                        checkbox.prop('checked',
                            false); // Uncheck the checkbox if the user cancels
                    }
                });
            }
        });
    });
</script>

<!--add notes functionality end -->

<!-- tenency renewal request confirmation alert  -->
<script>
    // Custom styles for the Swal buttons
    const swalCustomClasses = {
        confirmButton: 'my-custom-confirm-button', // Custom class for the confirm button
        cancelButton: 'my-custom-cancel-button' // Custom class for the cancel button
    };

    // Add event listener for the Make Enquiry button
    document.getElementById("MakeEnquiry_confirmation").addEventListener("click", function () {
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to proceed with this Renewal',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, proceed',
            cancelButtonText: 'Reject',
            customClass: swalCustomClasses
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to Enquiry-details.php on Yes
                window.location.href = 'Enquiry-details.php';
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // Redirect to tenancy-renewal.php on No
                window.location.href = 'archived-tenancy-renewal.php';
            }
        });
    });
</script>
<!-- tenency renewal change request confirmation alert  end-->