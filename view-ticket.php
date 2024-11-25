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
                                    <h1>Ticket Details </h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="tickets.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow">

                        </div>
                    </header>

                    <form action="view-ticket.php" method="post">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul
                                    class="nav nav-tabs nav-line nav-icon autoloadTabs fullwidthCustom_tabsUL nav-light">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Ticket Information</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mileage-logs">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Mileage Logs</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#TimeLog">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Time Log</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Expenses">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Expenses</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#History">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">History/Activity Log</span>

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

                                    <div class="tab-content tabContent_hiddenStyle">
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
                                                                <div class="fw-medium text-dark">Reported By</div>
                                                                <div class="fs-7"><a href="view-user-details.php">Clews,
                                                                        Abbie</a> @ 11/04/2024 00:04</div>
                                                            </div>
                                                        </div>

                                                        <div class="cardRightDetail_boxContainer">
                                                            <div class="flexcheckColumn">
                                                                <div class="form-group">
                                                                    <div class="form-check customformchec_kInpdisabled">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="customCheckList6" disabled>
                                                                        <label class="form-check-label"
                                                                            for="customCheckList6">
                                                                            Requested presence during maintenance
                                                                            <span class="done-strikethrough"></span>
                                                                        </label>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-body custombodyPadding">
                                                        <div class="d-flex text-center inspectionpropert_details">
                                                            <div class="flex-1 border-end CustomFlex_style">
                                                                <div>
                                                                    <span class="d-block fs-5 text-dark mb-1">
                                                                        Ticket ID</span>
                                                                    <span class="d-block text-capitalize "> <span
                                                                            class="badge badge-soft-success  my-1  me-2">115326</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 border-end CustomFlex_style">
                                                                <div>
                                                                    <span class="d-block fs-5 text-dark mb-1">
                                                                        Type</span>
                                                                    <span class="d-block text-capitalize "> <span
                                                                            class="badge badge-soft-success  my-1  me-2">Lighting</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 CustomFlex_style ">
                                                                <div>
                                                                    <div class="d-block fs-5 text-dark mb-1 ">Property
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
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Status</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="236">Inspection opens </option>

                                                                        <option value="200"> Air Flow System Testing
                                                                            AG/LQ</option>

                                                                        <option value="204">1/4 Drain Cleaning AG
                                                                        </option>

                                                                        <option value="161">Accounts Enquiries RS
                                                                        </option>

                                                                        <option value="46" selected="">Accounts Resolved
                                                                            AG</option>

                                                                        <option value="78">Additional Appliances Agreed
                                                                            RS</option>

                                                                        <option value="44">Additional Furniture Agreed
                                                                            RS</option>

                                                                        <option value="170">Admin (D)</option>

                                                                        <option value="227">Anna’s&nbsp;Tasks (D)
                                                                        </option>

                                                                        <option value="176">App Tasks (D)</option>

                                                                        <option value="180">Application Forms / Target
                                                                            List for Staff (D)</option>

                                                                        <option value="3">Appointment Booked AG</option>

                                                                        <option value="182">Availability Sheet/ Landlord
                                                                            Billing (D)</option>

                                                                        <option value="202">Awaiting Invoice Landlord
                                                                            Comp-RS</option>

                                                                        <option value="7">Awaiting Invoice Landlord
                                                                            GRepairs- RS</option>

                                                                        <option value="212">Awaiting Invoice Landlord
                                                                            Sinking Fund-RS</option>

                                                                        <option value="11">Awaiting Invoice Tenant RS
                                                                        </option>

                                                                        <option value="75">Awaiting Key Return RS
                                                                        </option>

                                                                        <option value="4">Awaiting Parts AG/LQ</option>

                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Assigned
                                                                        To</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="1">Gowthorpe, Jason</option>
                                                                        <option value="2">Properties, Graysons </option>
                                                                        <option value="3">Avi</option>
                                                                        <option value="4" selected>Rohit</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title customcardTitle">
                                                            <h6>Appointments</h6>
                                                        </div>
                                                        <div class="righthTableHeader">

                                                            <button
                                                                class="btn btn-sm btnAppoinmenthead commonAddnewButton btn-primary ms-3"
                                                                type="button" data-bs-toggle="offcanvas"
                                                                data-bs-target="#CreateAppoinment"
                                                                aria-controls="offcanvasExample">
                                                                <span>
                                                                    <span class="icon">
                                                                        <iconify-icon icon="fe:plus"></iconify-icon>
                                                                    </span>
                                                                    <span class="btn-text">Create
                                                                        Appoinment</span></span></button>

                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table
                                                                class="table common-datatable withoutActionTR nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Start</th>
                                                                        <th>End</th>
                                                                        <th>Visitor</th>
                                                                        <th>Items</th>
                                                                        <th>Reminder</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            15/04/2024 18:56
                                                                        </td>
                                                                        <td>15/04/2024 18:56</td>
                                                                        <td><a href="##" class="namelinkURl">Avinash</a>
                                                                        </td>
                                                                        <td>Bulbs</td>
                                                                        <td>
                                                                            <div
                                                                                class="form-group formgroup_marginNone">
                                                                                <div
                                                                                    class="form-check customformchec_kInpdisabled">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="customCheckList6">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList6">

                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>

                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">

                                                                                    <a href="calendar.php"
                                                                                        class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        id="buttonWihtext"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#ViewAppoinment"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <iconify-icon
                                                                                                icon="ion:calendar-outline">
                                                                                            </iconify-icon>View Calendar
                                                                                        </span>
                                                                                    </a>
                                                                                    <button
                                                                                        class="cancelButton buttonWihtext">
                                                                                        <iconify-icon
                                                                                            icon="fluent:delete-24-regular">
                                                                                        </iconify-icon> Cancel
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>

                                                                        <td>
                                                                            15/05/2024 5:35
                                                                        </td>
                                                                        <td>15/06/2024 7:56</td>
                                                                        <td><a href="##" class="namelinkURl">Avinash</a>
                                                                        </td>
                                                                        <td>Bulbs</td>
                                                                        <td>
                                                                            <div
                                                                                class="form-group formgroup_marginNone">
                                                                                <div
                                                                                    class="form-check customformchec_kInpdisabled">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="customCheckList6" checked
                                                                                        disabled="">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList6">

                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>

                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">

                                                                                    <a href="calendar.php"
                                                                                        class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        id="buttonWihtext"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#ViewAppoinment"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <iconify-icon
                                                                                                icon="ion:calendar-outline">
                                                                                            </iconify-icon> View
                                                                                            Calendar
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
                                                <div class="card">
                                                    <div class="card-header card-header-action">
                                                        <div class="media align-items-center">

                                                            <div class="media-body">
                                                                <div class="fw-medium text-dark">Images</div>
                                                                <div class="fs-7"><a href="view-user-details.php">Clews,
                                                                        Abbie</a> @ 11/04/2024 00:04</div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-body">

                                                        <div class="multiImageSlider slider">
                                                            <div class="galleryImage col">
                                                                <a class="card card-border" data-fancybox="gallery"
                                                                    href="dist/img/issue-images/mock12.jpg">
                                                                    <img src="dist/img/issue-images/mock12.jpg"
                                                                        alt="Image 1">
                                                                </a>
                                                            </div>
                                                            <div class="galleryImage col">
                                                                <a class="card card-border" data-fancybox="gallery"
                                                                    href="dist/img/issue-images/mock5.jpg">
                                                                    <img src="dist/img/issue-images/mock5.jpg"
                                                                        alt="Image 2">
                                                                </a>
                                                            </div>
                                                            <div class="galleryImage col">
                                                                <a class="card card-border" data-fancybox="gallery"
                                                                    href="dist/img/issue-images/mock6.jpg">
                                                                    <img src="dist/img/issue-images/mock6.jpg"
                                                                        alt="Image 3">
                                                                </a>
                                                            </div>
                                                            <div class="galleryImage col">
                                                                <a class="card card-border" data-fancybox="gallery"
                                                                    href="dist/img/issue-images/mock7.jpg">
                                                                    <img src="dist/img/issue-images/mock7.jpg"
                                                                        alt="Image 4">
                                                                </a>
                                                            </div>
                                                            <div class="galleryImage col">
                                                                <a class="card card-border" data-fancybox="gallery"
                                                                    href="dist/img/issue-images/mock8.jpg">
                                                                    <img src="dist/img/issue-images/mock8.jpg"
                                                                        alt="Image 5">
                                                                </a>
                                                            </div>
                                                            <div class="galleryImage col">
                                                                <a class="card card-border" data-fancybox="gallery"
                                                                    href="dist/img/issue-images/mock9.jpg">
                                                                    <img src="dist/img/issue-images/mock9.jpg"
                                                                        alt="Image 6">
                                                                </a>
                                                            </div>
                                                            <div class="galleryImage col">
                                                                <a class="card card-border" data-fancybox="gallery"
                                                                    href="dist/img/issue-images/mock10.jpg">
                                                                    <img src="dist/img/issue-images/mock10.jpg"
                                                                        alt="Image 7">
                                                                </a>
                                                            </div>

                                                            <!-- Add more slides as needed -->
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label>Upload image</label>
                                                            </div>
                                                            <input type="file" class="dropify" />
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title customcardTitle">
                                                            <h6>Comments</h6>
                                                        </div>

                                                    </div>
                                                    <div class="card-body">

                                                        <div class="commentReplyContainer">
                                                            <ul id="dummy_avatar"
                                                                class="list-unstyled chat-single-list">
                                                                <li class="media received">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="msg-box">
                                                                            <div>
                                                                                <p>Hi, I noticed some water leakage in
                                                                                    the ceiling of my bedroom. It's been
                                                                                    happening for a few days now, and
                                                                                    I'm worried it might cause damage to
                                                                                    the property. Can you please send
                                                                                    someone to inspect and fix it as
                                                                                    soon as possible?</p>
                                                                                <div class="replyUserAuthor">
                                                                                    <a href="view-user-details.php">Danial
                                                                                        Craig</a>
                                                                                    <div class="commentdateandtime">
                                                                                        11/04/2024 00:04</div>
                                                                                    <div
                                                                                        class="comment_visibilityStatus">
                                                                                        Status: <span
                                                                                            class="badge badge-soft-success  my-1  me-2">Everyone</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </li>

                                                                <li class="media sent">
                                                                    <div class="media-body">
                                                                        <div class="msg-box">
                                                                            <div>
                                                                                <p>Thank you for bringing this to our
                                                                                    attention. We apologize for any
                                                                                    inconvenience caused by the water
                                                                                    leakage in your bedroom. Our
                                                                                    maintenance team will be dispatched
                                                                                    immediately to inspect the issue and
                                                                                    take appropriate action to resolve
                                                                                    it promptly. Your safety and comfort
                                                                                    are our top priorities, and we
                                                                                    appreciate your patience as we work
                                                                                    to address this matter.</p>
                                                                                <div class="replyUserAuthor">
                                                                                    <a href="view-user-details.php">Morgan
                                                                                        Freeman</a>
                                                                                    <div class="commentdateandtime">
                                                                                        11/04/2024 00:04</div>
                                                                                    <div
                                                                                        class="comment_visibilityStatus">
                                                                                        Status: <span
                                                                                            class="badge badge-soft-success  my-1  me-2">Staff
                                                                                            Only </span></div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="media sent">
                                                                    <div class="media-body">
                                                                        <div class="msg-box">
                                                                            <div>
                                                                                <p>We'll send someone ASAP to fix it.
                                                                                    Thanks for letting us know.</p>
                                                                                <div class="replyUserAuthor">
                                                                                    <a href="view-user-details.php">Morgan
                                                                                        Freeman</a>
                                                                                    <div class="commentdateandtime">
                                                                                        11/04/2024 00:04</div>
                                                                                    <div
                                                                                        class="comment_visibilityStatus">
                                                                                        Status: <span
                                                                                            class="badge badge-soft-success  my-1  me-2">Staff
                                                                                            Only </span></div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media received">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="msg-box">
                                                                            <div>
                                                                                <p>Thanks</p>
                                                                                <div class="replyUserAuthor">
                                                                                    <a href="view-user-details.php">Danial
                                                                                        Craig</a>
                                                                                    <div class="commentdateandtime">
                                                                                        11/04/2024 00:04</div>
                                                                                    <div
                                                                                        class="comment_visibilityStatus">
                                                                                        Status: <span
                                                                                            class="badge badge-soft-success  my-1  me-2">Everyone</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <footer class="chat-footer">

                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <div class="input-group mt-4">
                                                                    <span class="input-affix-wrapper">
                                                                        <input type="text" id="input_msg_send_chatapp"
                                                                            name="send-msg"
                                                                            class="input-msg-send form-control rounded-input"
                                                                            placeholder="Type your message...">
                                                                        <span class="input-suffix">
                                                                            <button
                                                                                class="btn btn-icon btn-flush-primary btn-rounded btn-send">
                                                                                <span class="icon"><span
                                                                                        class="feather-icon">
                                                                                        <iconify-icon
                                                                                            icon="radix-icons:arrow-right">
                                                                                        </iconify-icon>
                                                                                    </span></span>
                                                                            </button>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group  formgroup_marginNone">
                                                                    <label class="form-label">Visibility</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option disabled="" selected="" value="">Please
                                                                            Select...</option>
                                                                        <option value="1">Everyone</option>
                                                                        <option value="2">Staff Only</option>
                                                                        <option value="3">Landlord</option>
                                                                        <option value="4">Tenant</option>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </footer>
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
                                        <div class="tab-pane fade" id="TimeLog">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docFilterContainer">
                                                    <div class="docfilterbutton">
                                                        <h2 class="tabinnerTitle">TimeLog </h2>
                                                        <div class="RightTabinr_container">

                                                            <button
                                                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                type="button" data-bs-toggle="offcanvas"
                                                                data-bs-target="#addtimelog"
                                                                aria-controls="offcanvasExample">
                                                                <iconify-icon icon="lets-icons:add-round">
                                                                </iconify-icon> Add TimeLog
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Reporters Name</th>
                                                                        <th>Starting Time</th>
                                                                        <th>Starting Address</th>
                                                                        <th>End Time</th>
                                                                        <th>End Address</th>
                                                                        <th>time Period</th>
                                                                        <th>Comment</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <td>
                                                                            <a href="view-user-details.php">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-head me-2">
                                                                                        <div class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <span class="d-block text-high-em">Charlie
                                                                                            Chaplin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>08/05/2024 18:56</td>
                                                                       
                                                                       
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>08/05/2024 21:30</td>
                                                                     
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>45 min</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input  tableLongMessage_Input"
                                                                                    value="Was told to raise an issue to support the possibility of a rent extension. Attached is a screenshot of an email from SFE to show I will get the funding on the 15th. If you need any other photos (from the actual account online) please let me know!">

                                                                                </input>
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
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Edittimelog"
                                                                                        aria-controls="offcanvasExample"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span></span></button>

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

                                        <div class="tab-pane fade" id="mileage-logs">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docFilterContainer">
                                                    <div class="docfilterbutton">
                                                        <h2 class="tabinnerTitle">Mileage Logs </h2>
                                                        <div class="RightTabinr_container">

                                                            <button
                                                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                type="button" data-bs-toggle="offcanvas"
                                                                data-bs-target="#AddTimeLog"
                                                                aria-controls="offcanvasExample">
                                                                <iconify-icon icon="lets-icons:add-round">
                                                                </iconify-icon> Add Mileage Log
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Repoters Name </th>
                                                                        <th>Starting Point</th>
                                                                        <th>Starting Time</th>
                                                                        <th>Starting Milleage</th>
                                                                        <th>End Point</th>
                                                                        <th>End Time</th>
                                                                        <th>End Milleage</th>
                                                                        <th>Trip Distance</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            <a href="view-user-details.php">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-head me-2">
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
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>16:40</td>
                                                                        <td>8</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>16:40</td>
                                                                        <td>37</td>
                                                                        <td>29 miles</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#EditMileage"
                                                                                        aria-controls="offcanvasExample"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span></span></button>
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#logDetailModal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span></span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="view-user-details.php">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-head me-2">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                                alt="user"
                                                                                                class="avatar-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <span
                                                                                            class="d-block text-high-em">Danial
                                                                                            Craig</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>12:00</td>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>12:00</td>
                                                                        <td>42</td>
                                                                        <td>33 miles</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#EditMileage"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#logDetailModal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="view-user-details.php">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-head me-2">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                                alt="user"
                                                                                                class="avatar-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <span
                                                                                            class="d-block text-high-em">Dean
                                                                                            Shaw</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>18:18</td>
                                                                        <td>10</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>18:18</td>
                                                                        <td>25</td>
                                                                        <td>18 miles</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#EditMileage"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#logDetailModal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="view-user-details.php">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-head me-2">
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
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>14:28</td>
                                                                        <td>6</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>14:28</td>
                                                                        <td>30</td>
                                                                        <td>22 miles</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#EditMileage"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#logDetailModal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="view-user-details.php">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-head me-2">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                                alt="user"
                                                                                                class="avatar-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <span
                                                                                            class="d-block text-high-em">Winston
                                                                                            Churchil</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>14:28</td>
                                                                        <td>7</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
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
                                                                        <td>14:28</td>
                                                                        <td>28</td>
                                                                        <td>20 miles</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#EditMileage"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#logDetailModal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
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
                                            <div class="canvasFooterContainer TabCanvas_Inner">
                                                <div class="TotalMiles_Count">
                                                    <h2>Total Miles :</h2>
                                                    <div class="Countofmiles">120 miles</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Expenses">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docFilterContainer">
                                                    <div class="docfilterbutton">
                                                        <h2 class="tabinnerTitle">Expenses </h2>
                                                        <div class="RightTabinr_container">

                                                            <button
                                                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                type="button" data-bs-toggle="offcanvas"
                                                                data-bs-target="#addtimelog"
                                                                aria-controls="offcanvasExample">
                                                                <iconify-icon icon="lets-icons:add-round">
                                                                </iconify-icon> Add Expenses
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Name</th>
                                                                        <th>Start</th>
                                                                        <th>End</th>
                                                                        <th>Comment</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            Bathroom > Routine Cleaning
                                                                        </td>
                                                                        <td>08/05/2024 18:56</td>
                                                                        <td>08/05/2024 21:30</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input  tableLongMessage_Input"
                                                                                    value="Was told to raise an issue to support the possibility of a rent extension. Attached is a screenshot of an email from SFE to show I will get the funding on the 15th. If you need any other photos (from the actual account online) please let me know!">

                                                                                </input>
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
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Edittimelog"
                                                                                        aria-controls="offcanvasExample"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span></span></button>

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

                                        <div class="tab-pane fade" id="History">
                                            <div class="fullwidthTabInner_content_container">

                                                <div class="single-email-subject">
                                                    <div>
                                                        <h4 class="fw-light">Ticket All History List.</h4><span
                                                            class="badge badge-orange badge-sm badge-pill flex-shrink-0 ms-3">updates</span>
                                                    </div>

                                                </div>
                                                <div id="accordionSimpleExample"
                                                    class="accordion historyAccordign accordion-simple single-email-thread">
                                                    <div class="accordion-item">
                                                        <div id="simple-headingOne" class="accordion-header">
                                                            <div>
                                                                <div class="email-head">
                                                                    <div data-bs-toggle="collapse"
                                                                        data-bs-target="#simple-collapseOne"
                                                                        role="button" aria-expanded="false"></div>
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="avatar-img rounded-circle">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div>Morgan Freeman</div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="email-head-action">
                                                                        <div class="email-time">Dec 30, 4:22 PM</div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="simple-collapseOne"
                                                            class="accordion-collapse collapse">
                                                            <div class="accordion-body">
                                                                <ul class="issueHistoryList">
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Created
                                                                            Issue : </label>Water Leakage from Ceiling
                                                                    </li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Changed
                                                                            Assignment : </label> <a
                                                                            href="view-user-details.php"
                                                                            class="namelinkURl">Angelina Jolie</a></li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Added
                                                                            Comment : </label>
                                                                        <ol class="commentpointslist">
                                                                            <li>The tiles are missing under the shower
                                                                                tray, some of the tiles are in the
                                                                                bathroom.</li>
                                                                            <li>The sink is clogged, the water drains
                                                                                poorly, I wanted to clear it, but I
                                                                                can't unscrew the plug.</li>
                                                                        </ol>

                                                                        <p>The tiles under the shower tray might have
                                                                            been displaced due to water damage.
                                                                            Recommend thorough inspection and
                                                                            replacement.</p>
                                                                    </li>

                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Shared With
                                                                            : </label> <a href="view-user-details.php"
                                                                            class="namelinkURl">Angelina Jolie</a></li>

                                                                    <div class="separator separator-light"></div>

                                                                    <li>
                                                                        <label for=""
                                                                            class="form-label historyLabel">Added Images
                                                                            : </label>
                                                                        <div class="issueImages_list">
                                                                            <div class="multiImageSlider slider">
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock12.jpg">
                                                                                        <img src="dist/img/issue-images/mock12.jpg"
                                                                                            alt="Image 1">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock5.jpg">
                                                                                        <img src="dist/img/issue-images/mock5.jpg"
                                                                                            alt="Image 2">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock6.jpg">
                                                                                        <img src="dist/img/issue-images/mock6.jpg"
                                                                                            alt="Image 3">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock7.jpg">
                                                                                        <img src="dist/img/issue-images/mock7.jpg"
                                                                                            alt="Image 4">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock8.jpg">
                                                                                        <img src="dist/img/issue-images/mock8.jpg"
                                                                                            alt="Image 5">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock9.jpg">
                                                                                        <img src="dist/img/issue-images/mock9.jpg"
                                                                                            alt="Image 6">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock10.jpg">
                                                                                        <img src="dist/img/issue-images/mock10.jpg"
                                                                                            alt="Image 7">
                                                                                    </a>
                                                                                </div>

                                                                                <!-- Add more slides as needed -->
                                                                            </div>

                                                                        </div>
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div id="simple-headingTwo" class="accordion-header">
                                                            <div>
                                                                <div class="email-head">
                                                                    <div data-bs-toggle="collapse"
                                                                        data-bs-target="#simple-collapseTwo"
                                                                        role="button" aria-expanded="true"></div>
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="avatar-img rounded-circle">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div>Morgan Freeman</div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="email-head-action">
                                                                        <div class="email-time">Jan 1, 9:30 AM</div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="simple-collapseTwo" class="collapse show">
                                                            <div class="accordion-body">
                                                                <ul class="issueHistoryList">
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Created
                                                                            Issue : </label>Electrical Short Circuit
                                                                    </li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Changed
                                                                            Assignment : </label> <a
                                                                            href="view-user-details.php"
                                                                            class="namelinkURl">Brad Pitt</a></li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Added
                                                                            Comment : </label>
                                                                        <ol class="commentpointslist">
                                                                            <li>The main circuit breaker in the basement
                                                                                has tripped twice this week.</li>
                                                                            <li>There's a burning smell coming from the
                                                                                outlet in the living room.</li>
                                                                        </ol>
                                                                        <p>It seems like there might be a short circuit
                                                                            in the wiring. Recommend immediate
                                                                            inspection by a licensed electrician.</p>
                                                                    </li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Shared With
                                                                            : </label> <a href="view-user-details.php"
                                                                            class="namelinkURl">Jennifer Aniston</a>
                                                                    </li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel ">Cancelled
                                                                            Appointment : </label><a
                                                                            href="view-user-details.php"
                                                                            class="namelinkURl">Kate Winslet <div
                                                                                class="dateofapoinment">@ 24/04/2024
                                                                                18:00 - 24/04/2024 19:00</div></a></li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel ">Booked
                                                                            Appointment : </label><a
                                                                            href="view-user-details.php"
                                                                            class="namelinkURl">Kate Winslet <div
                                                                                class="dateofapoinment">@ 24/04/2024
                                                                                18:00 - 24/04/2024 19:00</div></a></li>
                                                                    <div class="separator separator-light"></div>
                                                                    <li>
                                                                        <label for=""
                                                                            class="form-label historyLabel">Added Images
                                                                            : </label>
                                                                        <div class="issueImages_list">
                                                                            <div class="multiImageSlider slider">
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock12.jpg">
                                                                                        <img src="dist/img/issue-images/mock12.jpg"
                                                                                            alt="Image 1">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock5.jpg">
                                                                                        <img src="dist/img/issue-images/mock5.jpg"
                                                                                            alt="Image 2">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock6.jpg">
                                                                                        <img src="dist/img/issue-images/mock6.jpg"
                                                                                            alt="Image 3">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock7.jpg">
                                                                                        <img src="dist/img/issue-images/mock7.jpg"
                                                                                            alt="Image 4">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock8.jpg">
                                                                                        <img src="dist/img/issue-images/mock8.jpg"
                                                                                            alt="Image 5">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock9.jpg">
                                                                                        <img src="dist/img/issue-images/mock9.jpg"
                                                                                            alt="Image 6">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock10.jpg">
                                                                                        <img src="dist/img/issue-images/mock10.jpg"
                                                                                            alt="Image 7">
                                                                                    </a>
                                                                                </div>

                                                                                <!-- Add more slides as needed -->
                                                                            </div>

                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div id="simple-headingThree" class="accordion-header">
                                                            <div>
                                                                <div class="email-head">
                                                                    <div data-bs-toggle="collapse"
                                                                        data-bs-target="#simple-collapseThree"
                                                                        role="button" aria-expanded="true"></div>
                                                                    <div class="media">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="avatar-img rounded-circle">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div>Admin</div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="email-head-action">
                                                                        <div class="email-time">Jan 2, 10:21 AM</div>
                                                                        <span class="email-star"><span
                                                                                class="feather-icon"><i
                                                                                    data-feather="star"></i></span></span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="simple-collapseThree" class="collapse show">
                                                            <div class="accordion-body">
                                                                <ul class="issueHistoryList">
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Created
                                                                            Issue : </label>Broken Window</li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Changed
                                                                            Assignment : </label> <a
                                                                            href="view-user-details.php"
                                                                            class="namelinkURl">Leonardo DiCaprio</a>
                                                                    </li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Added
                                                                            Comment : </label>
                                                                        <ol class="commentpointslist">
                                                                            <li>A large crack appeared on the living
                                                                                room window after the storm last night.
                                                                            </li>
                                                                            <li>There's a small hole near the bottom
                                                                                corner of the window.</li>
                                                                        </ol>
                                                                        <p>The window needs immediate repair to prevent
                                                                            further damage and ensure safety.</p>
                                                                    </li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel">Shared With
                                                                            : </label> <a href="view-user-details.php"
                                                                            class="namelinkURl">Kate Winslet</a></li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel ">Cancelled
                                                                            Appointment : </label><a
                                                                            href="view-user-details.php"
                                                                            class="namelinkURl">Kate Winslet <div
                                                                                class="dateofapoinment">@ 24/04/2024
                                                                                18:00 - 24/04/2024 19:00</div></a></li>
                                                                    <li><label for=""
                                                                            class="form-label historyLabel ">Booked
                                                                            Appointment : </label><a
                                                                            href="view-user-details.php"
                                                                            class="namelinkURl">Kate Winslet <div
                                                                                class="dateofapoinment">@ 24/04/2024
                                                                                18:00 - 24/04/2024 19:00</div></a></li>

                                                                    <div class="separator separator-light"></div>
                                                                    <li>
                                                                        <label for=""
                                                                            class="form-label historyLabel">Added Images
                                                                            : </label>
                                                                        <div class="issueImages_list">
                                                                            <div class="multiImageSlider slider">
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock12.jpg">
                                                                                        <img src="dist/img/issue-images/mock12.jpg"
                                                                                            alt="Image 1">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock5.jpg">
                                                                                        <img src="dist/img/issue-images/mock5.jpg"
                                                                                            alt="Image 2">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock6.jpg">
                                                                                        <img src="dist/img/issue-images/mock6.jpg"
                                                                                            alt="Image 3">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock7.jpg">
                                                                                        <img src="dist/img/issue-images/mock7.jpg"
                                                                                            alt="Image 4">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock8.jpg">
                                                                                        <img src="dist/img/issue-images/mock8.jpg"
                                                                                            alt="Image 5">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock9.jpg">
                                                                                        <img src="dist/img/issue-images/mock9.jpg"
                                                                                            alt="Image 6">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="galleryImage col">
                                                                                    <a class="card card-border"
                                                                                        data-fancybox="gallery"
                                                                                        href="dist/img/issue-images/mock10.jpg">
                                                                                        <img src="dist/img/issue-images/mock10.jpg"
                                                                                            alt="Image 7">
                                                                                    </a>
                                                                                </div>

                                                                                <!-- Add more slides as needed -->
                                                                            </div>

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

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Body -->

<!-- add timelog offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addtimelog"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="line-md:document-remove" width="1.2em" height="1.2em"></iconify-icon>
            Add New Timelog
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
    <form class="" action="view-ticket.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Timelog</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                            
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Starting Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Starting Address</label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">End Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">End Address</label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Comment</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
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
<!-- add timelog end -->

<!-- Edit timelog offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Edittimelog"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="line-md:document-remove" width="1.2em" height="1.2em"></iconify-icon>
            Edit Timelog
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
    <form class="" action="view-ticket.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container ">
                <div class="add-users-modal-body-table-header text-headline-6">Edit This Time Log</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly" value="May, 08 2024 ">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">Starting Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="08/05/2024 18:56"
                                                class="form-control time__pickers" id="timepicker"
                                                placeholder="Select Time" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Starting Address</label>
                                        <input class="form-control" type="text" name="" value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly" value="May, 08 2024 ">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">End Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="08/05/2024 21:30"
                                                class="form-control time__pickers" id="timepicker"
                                                placeholder="Select Time" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">End Address</label>
                                        <input class="form-control" type="text" name="" value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Comment</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here...">Was told to raise an issue to support the possibility of a rent extension. Attached is a screenshot of an email from SFE to show I will get the funding on the 15th. If you need any other photos (from the actual account online) please let me know!</textarea>
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
<!-- edit timelog end -->

<!-- create appoinment calendar form offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="CreateAppoinment"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Create Appointment
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

    <form class="" action="view-ticket.php" method="post">
        <div class="offcanvas-body">
            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Create Appointment</div>

                <div class="formstartcontainer">
                    <div class="row gx-3">
                        <div class="col-sm-12 form-group">
                            <label class="form-label">Description</label>
                            <input class="form-control  cal-event-name" type="text" />
                        </div>
                    </div>

                    <div class="row gx-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Start Date</label>
                                <input class="form-control cal-event-date-start" name="single-date-pick" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Start Time</label>
                                <div class="form-group form-icon bookingtimeinp">
                                    <input type="text" name="input-timepicker" name="time" value="08/05/2024 18:56"
                                        class="form-control time__pickers" id="timepicker" placeholder="Select Time"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">End Date</label>
                                <input class="form-control cal-event-date-end" name="single-date-pick" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Time Picker Input Field -->

                            <div class="form-group">
                                <label class="form-label">End Time</label>
                                <div class="form-group form-icon bookingtimeinp">
                                    <input type="text" name="time" value="08/05/2024 18:56"
                                        class="form-control time__pickers" id="timepicker" placeholder="Select Time"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Visitor</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Gowthorpe, Jason</option>
                                    <option value="15">Properties, Graysons</option>
                                    <option value="19">Ghai, Akash</option>
                                    <option value="23">Bartkute, Marina</option>
                                    <option value="265">Dwernicka, Ewa</option>
                                    <option value="271">Quinn, Lynsey</option>
                                    <option value="274">Jeske, Rafal</option>
                                    <option value="693">Zaronaitis, Sarunas</option>
                                    <option value="841">Johnson, Louis</option>
                                    <option value="940">Kuran - Rkibi, Kasia</option>
                                    <option value="992">Sehgal, Ricky</option>
                                    <option value="1023">Michalska, Jolanta</option>
                                    <option value="1157">Kruszynski, Grzegorz</option>
                                    <option value="1195">Kowalski, Krzysztof</option>
                                    <option value="1215">Ghai, Rohan</option>
                                    <option value="1228">Greenway, Andy</option>

                                </select>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Appointment Colour</label>
                                <div class="input-group color-picker">
                                    <div class="input-group-text colorpicker-input-addon"
                                        style="background-color: rgb(247, 187, 9);">
                                        <input type="color"></div>
                                    <input type="text" class="form-control colorpicker-value" value="#f7bb09">
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Discard</button>
            <button id="add_event" type="button"
                class="canvasSubmit_button commonCanvas_buttonFooter fc-addEventButton-button"
                data-bs-dismiss="offcanvas">Add</button>

        </div>
    </form>
</div>
<!-- create appoinment calendar  offcanvas modal end -->

<!-- appoinment calendar view form offcanvas -->
<div class="offcanvas offcanvas-bottom calendar_offcanvasStyle" tabindex="-1" id="ViewAppoinment"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="radix-icons:calendar"></iconify-icon>
            Appointments Calendar
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
                            <div class="userFilters calendar_Filters onerowfilter" id="filterDiv">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-10">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Visitor</label>
                                                                    <select name="" id="" class="form-control select2"
                                                                        multiple="multiple"
                                                                        data-placeholder="Select an Option">

                                                                        <option value="1">Properties, Graysons</option>
                                                                        <option value="2">Ghai, Akash</option>
                                                                        <option value="3">Dwernicka, Ewa</option>
                                                                        <option value="4">Jeske, Rafal</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Property</label>
                                                                    <select name="" id="" class="form-control select2"
                                                                        multiple="multiple"
                                                                        data-placeholder="Select an Option">

                                                                        <option value="1">Communal Area Inspection House
                                                                            10</option>
                                                                        <option value="2">Communal Area Inspection House
                                                                            18</option>
                                                                        <option value="3">Communal Area Inspection House
                                                                            22</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Issue Type</label>
                                                                    <select name="" id="" class="form-control select2"
                                                                        multiple="multiple"
                                                                        data-placeholder="Select an Option">

                                                                        <option value="1">Bathroom > Sink</option>
                                                                        <option value="2">Bedroom</option>
                                                                        <option value="3">Bedroom > Wardrobe</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Users</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="user">User</option>
                                                                        <option value="issuetype_property">Issue Type -
                                                                            Property</option>
                                                                        <option value="property_issuetype">Property -
                                                                            Issue Type</option>
                                                                        <option value="issue">Issue</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2">
                                                <div class="row justify-content-end">

                                                    <div class="col-auto">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <button type="button" class="btn btn-block btn-primary ">
                                                                <iconify-icon icon="mage:filter"></iconify-icon> Filter
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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
<!-- appoinment calendar view offcanvas modal end -->

<!--create appoinment modal end -->
<div id="create_new_event" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="mb-4">Create New Event</h5>
                <form>
                    <div class="row gx-3">
                        <div class="col-sm-12 form-group">
                            <label class="form-label">Name</label>
                            <input class="form-control  cal-event-name" type="text" />
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-12 form-group">
                            <div class="form-label-group">
                                <label>Note/Description</label>
                                <small class="text-muted">200</small>
                            </div>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Start Date</label>
                                <input class="form-control cal-event-date-start" name="single-date-pick" type="text" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Start Time</label>
                                <input class="form-control input-single-timepicker" name="input-timepicker"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">End Date</label>
                                <input class="form-control cal-event-date-end" name="single-date-pick" type="text" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">End Time</label>
                                <input class="form-control input-single-timepicker" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <label class="form-label">Location</label>
                            <div class="form-group">
                                <input class="form-control" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label class="form-label">Visibility</label>
                                <div class="d-flex">
                                    <select class="form-select me-3">
                                        <option selected="" value="2">Public</option>
                                        <option value="1">Private</option>
                                    </select>
                                    <div class="">
                                        <input type="color" class="form-control form-control-color p-0" value="#009B84"
                                            title="Choose your color">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-inline">
                                <div class="form-group mt-3">
                                    <label class="form-label">Set priority:</label>
                                    <div class="form-check form-check-inline">
                                        <div class="form-check">
                                            <input type="radio" id="customRadioc1" name="customRadioc2"
                                                class="form-check-input" checked="">
                                            <label class="form-check-label" for="customRadioc1">Urgent</label>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <div class="form-check">
                                            <input type="radio" id="customRadioc2" name="customRadioc2"
                                                class="form-check-input">
                                            <label class="form-check-label" for="customRadioc2">High</label>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <div class="form-check">
                                            <input type="radio" id="customRadioc3" name="customRadioc2"
                                                class="form-check-input">
                                            <label class="form-check-label" for="customRadioc3">Medium</label>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <div class="form-check">
                                            <input type="radio" id="customRadioc4" name="customRadioc2"
                                                class="form-check-input">
                                            <label class="form-check-label" for="customRadioc4">Low</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer align-items-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                <button id="add_event" type="button" class="btn btn-primary fc-addEventButton-button"
                    data-bs-dismiss="modal">Add</button>
            </div>
        </div>
    </div>
</div>
<!-- create appoinment modal end -->

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
                    <div class="card card-border eventDetailCard mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-sm avatar-rounded">
                                        <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="fw-medium text-dark">Visitor</div>
                                    <div class="fs-7"><a href="view-user-details.php">Clews,
                                            Abbie</a> </div>
                                </div>
                            </div>

                        </div>

                    </div>
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

                    </ul>

                    <ul class="issueHistoryList eventMessageContent">

                        <li><label for="message" class="form-label historyLabel">
                                <iconify-icon icon="tabler:message-2-check"></iconify-icon> Description :
                            </label>

                            <div class="logcomment">
                                <p>Please contact us at [Contact Number] or [Contact Email] to arrange a new date and
                                    time that
                                    is convenient for you. We apologize for any inconvenience this may cause and
                                    appreciate your
                                    understanding.</p>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="d-none">
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
                            <label class="form-label">Start Date</label>
                            <input class="form-control cal-event-date-start flatpickr-input"
                                placeholder="Select Start Date" name="single-date-pick" type="text" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="form-label">End Date</label>
                            <input class="form-control cal-event-date-start flatpickr-input"
                                placeholder="Select End Date" name="single-date-pick" type="text" readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Start Time</label>
                            <div class="form-group form-icon bookingtimeinp">
                                <input type="text" name="input-timepicker" value="8:56 AM"
                                    class="form-control time__pickers" id="timepicker" placeholder="Select Time"
                                    required="" readonly="" data-time="08:56:00.000">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">End Time</label>
                            <div class="form-group form-icon bookingtimeinp">
                                <input type="text" name="input-timepicker" value="8:56 AM"
                                    class="form-control time__pickers" id="timepicker" placeholder="Select Time"
                                    required="" readonly="" data-time="08:56:00.000">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Appointment Colour</label>
                            <div class="input-group color-picker">
                                <div class="input-group-text colorpicker-input-addon"
                                    style="background-color: rgb(0, 155, 132);">
                                    <input type="color"></div>
                                <input type="text" class="form-control colorpicker-value" value="#009B84">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Visitor</label>
                            <select name="" id="" class="form-control select2">
                                <option disabled="" selected="" value="" data-select2-id="12">Please Select...</option>
                                <option value="1">Gowthorpe, Jason</option>
                                <option value="15">Properties, Graysons</option>
                                <option value="19">Ghai, Akash</option>
                                <option value="23">Bartkute, Marina</option>
                                <option value="265">Dwernicka, Ewa</option>
                                <option value="271">Quinn, Lynsey</option>
                                <option value="274">Jeske, Rafal</option>
                                <option value="693">Zaronaitis, Sarunas</option>
                                <option value="841">Johnson, Louis</option>
                                <option value="940">Kuran - Rkibi, Kasia</option>
                                <option value="992">Sehgal, Ricky</option>
                                <option value="1023">Michalska, Jolanta</option>
                                <option value="1157">Kruszynski, Grzegorz</option>
                                <option value="1195">Kowalski, Krzysztof</option>
                                <option value="1215">Ghai, Rohan</option>
                                <option value="1228">Greenway, Andy</option>

                            </select>

                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Description</label>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
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

<!-- /Calendar Drawer -->

<!-- add  Mileage offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddTimeLog"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="material-symbols:event-upcoming-outline" width="1.2em" height="1.2em"></iconify-icon>
            Add Mileage
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
    <form class="" action="view-ticket.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container ">
                <div class="add-users-modal-body-table-header text-headline-6">Add Mileage</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Starting point</label>
                                        <input class="form-control" type="text" name="" placeholder="">

                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group canvas_inputwith_Icon">
                                        <label class="form-label">Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                        <iconify-icon icon="fluent:calendar-ltr-32-regular"></iconify-icon>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group canvas_inputwith_Icon">
                                        <label class="form-label">Starting Time</label>
                                        <input type="text" name="time" value="" class="form-control time__pickers"
                                            id="timepicker" placeholder="Select Time" required="" readonly="">
                                        <iconify-icon icon="hugeicons:time-quarter"></iconify-icon>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="form-label">Starting Milleage</label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Before Picture</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">End point</label>
                                        <input class="form-control" type="text" name="" placeholder="">

                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group canvas_inputwith_Icon">
                                        <label class="form-label">End Time</label>
                                        <input type="text" name="time" value="" class="form-control time__pickers"
                                            id="timepicker" placeholder="Select Time" required="" readonly="">
                                        <iconify-icon icon="hugeicons:time-quarter"></iconify-icon>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="form-label">End Milleage</label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">After Picture</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Comment</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
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
<!-- add Event offcanvas modal end -->

<!-- edit mileage offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="EditMileage"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="material-symbols:event-upcoming-outline" width="1.2em" height="1.2em"></iconify-icon>
            Edit Mileage
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
    <form class="" action="view-ticket.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container ">
                <div class="add-users-modal-body-table-header text-headline-6">Edit This Mileage</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                            <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Starting point</label>
                                        <input class="form-control" type="text" name="" placeholder="">

                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group canvas_inputwith_Icon">
                                        <label class="form-label">Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                        <iconify-icon icon="fluent:calendar-ltr-32-regular"></iconify-icon>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group canvas_inputwith_Icon">
                                        <label class="form-label">Starting Time</label>
                                        <input type="text" name="time" value="" class="form-control time__pickers"
                                            id="timepicker" placeholder="Select Time" required="" readonly="">
                                        <iconify-icon icon="hugeicons:time-quarter"></iconify-icon>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="form-label">Starting Milleage</label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Before Picture</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">End point</label>
                                        <input class="form-control" type="text" name="" placeholder="">

                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group canvas_inputwith_Icon">
                                        <label class="form-label">End Time</label>
                                        <input type="text" name="time" value="" class="form-control time__pickers"
                                            id="timepicker" placeholder="Select Time" required="" readonly="">
                                        <iconify-icon icon="hugeicons:time-quarter"></iconify-icon>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="form-label">End Milleage</label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">After Picture</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Comment</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
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
<!-- edit mileage modal end -->

<!--Offcanvas Wrapper-->
<div class="offcanvas rightOffcanvas offcanvas-end" tabindex="-1" id="logDetailModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="line-md:speedometer-loop"></iconify-icon>
            Mileage Log Details
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
                            <div class="fw-medium text-dark">Reported By ( User )</div>
                            <div class="fs-7"><a href="view-user-details.php">Clews,
                                    Abbie</a> @ 16/04/2024 16:30</div>
                        </div>
                    </div>

                </div>
                <div class="card-body custombodyPadding">
                    <div class="d-flex text-center inspectionpropert_details " id="mileageDetailContainer">
                        <div class="flex-1 border-end CustomFlex_style">
                            <div>
                                <span class="d-block  text-dark mb-1 mileageDetailLabel Beforelabel">
                                    Before</span>
                                <span class="d-block text-capitalize "> <span
                                        class="badge custom_Green_badge  my-1  ">31602</span></span>
                            </div>
                        </div>
                        <div class="flex-1 border-end CustomFlex_style">
                            <div>
                                <span class="d-block  text-dark mb-1 mileageDetailLabel Afterlabel">
                                    After</span>
                                <span class="d-block text-capitalize "> <span class="badge  custom_Bluebadge  my-1  ">
                                        31620</span></span>
                            </div>
                        </div>
                        <div class="flex-1 CustomFlex_style ">
                            <div>
                                <span class="d-block  text-dark mb-1 mileageDetailLabel Mileagelabel">
                                    Trip Distance</span>
                                <span class="d-block text-capitalize "> <span
                                        class="badge custom_DarkPurple_bdage  my-1  ">
                                        15 miles</span></span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="MileageContainer_ghtF">
                <h4 class="">Before/After images</h4>
                <div class="multiImageSlider mileageBeforeAfter_images form-group">

                    <div class="card galleryImage">
                        <div class="card-body">
                            <a class="" data-fancybox="gallery" href="dist/img/mileage-images/before.webp">
                                <img src="dist/img/mileage-images/before.webp" alt="Image 1">
                            </a>
                        </div>
                        <div class="card-footer imagecard_footer text-muted">
                            <div class="milgtext">Before</div>
                            <button type="button" class="infoToolTip" data-bs-toggle="tooltip" data-bs-placement="top"
                                title=" Click On image to view full Preview">
                                <iconify-icon icon="ph:info"></iconify-icon>
                            </button>
                        </div>
                    </div>

                    <div class="card galleryImage">
                        <div class="card-body">
                            <a class="" data-fancybox="gallery" href="dist/img/mileage-images/after.webp">
                                <img src="dist/img/mileage-images/after.webp" alt="Image 2">
                            </a>
                        </div>
                        <div class="card-footer imagecard_footer text-muted">
                            <div class="milgtext">After</div>
                            <button type="button" class="infoToolTip" data-bs-toggle="tooltip" data-bs-placement="top"
                                title=" Click On image to view full Preview">
                                <iconify-icon icon="ph:info"></iconify-icon>
                            </button>

                        </div>
                    </div>

                </div>
            </div>

            <ul class="issueHistoryList eventMessageContent">

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="fluent-mdl2:date-time-2"></iconify-icon> Date :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage">20/01/2021 14:57</p>
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
<!--/ Offcanvas Wrapper-->

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

<!-- slick  slider for multple images start -->
<script>
    $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrow: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

<!-- slick  slider for multple images end -->

<!-- Fullcalendar JS -->
<script src="vendors/fullcalendar/index.global.min.js"></script>
<script src="vendors/%40fullcalendar/bootstrap5/index.global.min.js"></script>
<script src="dist/js/fullcalendar-init.js"></script>
<!-- Bootstrap Notify JS -->
<script src="dist/js/bootstrap-notify.min.js"></script>