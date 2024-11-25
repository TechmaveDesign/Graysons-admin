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

    .hiddenelements {
        display: none !important;
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
                                <a class="contactapp-title link-dark" href="javascript:void(0)" role="button">
                                    <h1>Enquiry Details </h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="all-Enquiries.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                            <div class="nicescroll-bar">
                                <div class="fullwidthTabInner_content_container">

                                    <div class="card card-border">
                                        <div class="card-header">
                                            <div class="enquiryLeft_header_area">
                                                <iconify-icon icon="fluent:person-support-32-regular"></iconify-icon>
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb custombreadcrums">
                                                        <li class="breadcrumb-item"><a href="#">Enquiries</a></li>
                                                        <li class="breadcrumb-item"><a href="#">All Enquiries</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Enquiry
                                                            Details</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                            <div class="enquiryRight_header_data">
                                                <div class="enquiryDate">
                                                    <iconify-icon icon="ion:calendar-outline"></iconify-icon> Received
                                                    on
                                                    Jun 20
                                                </div>

                                                <button type="button" class="scheduleViewingBtn"
                                                    data-bs-toggle="offcanvas" data-bs-target="#ViewAppoinment"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="radix-icons:calendar"></iconify-icon> View
                                                    Calendar
                                                </button>

                                                <div class="scheduleViewing">
                                                    <button type="button" data-bs-toggle="offcanvas"
                                                        data-bs-target="#viewingSchedule"
                                                        aria-controls="offcanvasExample" class="scheduleViewingBtn">
                                                        <iconify-icon icon="akar-icons:schedule"></iconify-icon>
                                                        Schedule
                                                        Viewing
                                                    </button>
                                                </div>

                                                <!-- <div class="accept_enquirybtn">
                                                    <button id="acceptEnqBtn" type="button" class="acceptEnqBtn">Accept
                                                        Enquiry</button>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="card-body enquirytwoCl_body custombodyPadding">

                                            <div class="cu-task-view-body__inner">
                                                <div class="cu-task-view-task-content row">
                                                    <div class="col-lg-7 colnopadding">
                                                        <div class="enquiryleftMain_contanet">
                                                            <div class="EnquiryContainer_content">
                                                                <div class="statusEnqContainer">
                                                                    <div class="enquiryID_container">
                                                                        <div class="EnquiryID">
                                                                            Enquiry ID
                                                                        </div>
                                                                        <div class="IDButton enQID_container">
                                                                            <!-- <button type="button" class="idDataBtn enqID_copyBtn" id="success_notification">86cvr79t2 <span><iconify-icon icon="solar:copy-line-duotone"></iconify-icon></span></button> -->

                                                                            <input type="text" id="myID"
                                                                                value="86cvr79t2"
                                                                                class="idDataBtn enqID_copyInput"
                                                                                readonly><button
                                                                                id="success_notification"
                                                                                class="copyidBtn_custom"><span>
                                                                                    <iconify-icon
                                                                                        icon="solar:copy-line-duotone">
                                                                                    </iconify-icon>
                                                                                </span></button>
                                                                            <div id="alertPlaceholder">
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="enquiryID_container">
                                                                        <div class="EnquiryID">
                                                                            Enquiry Status
                                                                        </div>
                                                                        <div class="IDButton">
                                                                            <div class="dropdown statusChange_dropdown">
                                                                                <button
                                                                                    class=" bg-success dropdown-toggle"
                                                                                    type="button"
                                                                                    id="dropdownMenuButton"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    Approved <iconify-icon
                                                                                        icon="iconamoon:arrow-down-2">
                                                                                    </iconify-icon>
                                                                                </button>
                                                                                <ul class="dropdown-menu"
                                                                                    aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#"
                                                                                            data-color="bg-success">Approved
                                                                                        </a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#"
                                                                                            data-color="bg-warning">In
                                                                                            Processing</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#"
                                                                                            data-color="bg-secondary">Pending
                                                                                            Further Information</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#"
                                                                                            data-color="bg-primary">Prospect
                                                                                            Tenant</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#"
                                                                                            data-color="bg-danger">Rejected</a>
                                                                                    </li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#"
                                                                                            data-color="bg-info">Suitable
                                                                                            Tenant Identified</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="enquiryID_container">
                                                                        <div class="EnquiryID">
                                                                            Enquiry Source
                                                                        </div>
                                                                        <div class="IDButton"><button type="button"
                                                                                class="SourceDataBtn">
                                                                                <iconify-icon icon="streamline:web">
                                                                                </iconify-icon> Website
                                                                            </button></div>
                                                                    </div>

                                                                    <div class="enquiryID_container">
                                                                        <div class="EnquiryID">
                                                                            Appoinment
                                                                        </div>
                                                                        <div class="IDButton appoinment_confirmed">
                                                                            <button type="button" class="SourceDataBtn">
                                                                                <iconify-icon icon="octicon:check-16">
                                                                                </iconify-icon> Confirmed
                                                                            </button></div>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="Enquiry_TitleInner d-flex align-items-center justify-content-between ">
                                                                    <h2>Tenant Enquiry Details</h2>
                                                                    <div class="btn btn-xs btn-icon btn-rounded btn-light"
                                                                        data-bs-toggle="offcanvas"
                                                                        data-bs-target="#offcanvasBottom"
                                                                        aria-controls="offcanvasExample"><span
                                                                            class="icon"><span class="feather-icon">
                                                                                <iconify-icon
                                                                                    icon="fluent:edit-28-regular">
                                                                                </iconify-icon>
                                                                            </span></span></div>
                                                                </div>

                                                                <div class="EnquiryDetailsGrid"
                                                                    id="enquiryuserView_details">

                                                                    <div class="cu-task-fields__row">
                                                                        <div class="cu-task-label-icon__container">Start
                                                                            tenancy Date :</div>
                                                                        <div class="userenuData">2024-07-15</div>
                                                                    </div>

                                                                    <div class="cu-task-fields__row">
                                                                        <div class="cu-task-label-icon__container">Weeks
                                                                            of rent :</div>
                                                                        <div class="userenuData">26</div>
                                                                    </div>

                                                                    <div class="cu-task-fields__row">
                                                                        <div class="cu-task-label-icon__container">
                                                                            current weekly rental budget :</div>
                                                                        <div class="userenuData">200</div>
                                                                    </div>

                                                                    <div class="cu-task-fields__row">
                                                                        <div class="cu-task-label-icon__container">Bills
                                                                            Inclusive/Exclusive :</div>
                                                                        <div class="userenuData">Bills Inclusive</div>
                                                                    </div>

                                                                    <div class="cu-task-fields__row">
                                                                        <div class="cu-task-label-icon__container">Group
                                                                            Size :</div>
                                                                        <div class="userenuData">05</div>
                                                                    </div>

                                                                    <div class="cu-task-fields__row">
                                                                        <div class="cu-task-label-icon__container">night
                                                                            or a day person :</div>
                                                                        <div class="userenuData">Night</div>
                                                                    </div>

                                                                    <div class="cu-task-fields__row">
                                                                        <div class="cu-task-label-icon__container">
                                                                            Contact Method :</div>
                                                                        <div class="userenuData"> Phone call</div>
                                                                    </div>

                                                                </div>

                                                                <!-- <div class="descriptionEnquiry_container">
                                                                    <div class="form-group">
                                                                        <div class="form-label-group">
                                                                            <label>Tenant Message</label>
                                                                        </div>
                                                                        <textarea class="form-control" rows="3"
                                                                            placeholder="Write an internal note">I am looking for a property close to my university with good public transportation links.</textarea>
                                                                    </div>
                                                                </div> -->

                                                                <div class="selected-container"
                                                                    id="selected-properties">
                                                                    <h3 id="selected-title" style="display: none;">
                                                                        Selected
                                                                        Properties and Units</h3>

                                                                </div>

                                                                <div class="selectAvaialable_property">
                                                                    <div class="usersDropdownFilterss">

                                                                        <!-- Available Users dropdown -->

                                                                    </div>
                                                                </div>

                                                                <div class="LeadTenant_details">
                                                                    <h2 class="blinking-title">Lead Tenant Details
                                                                    </h2>

                                                                    <div class="EnquiryDetailsGrid"
                                                                        id="enquiryuserView_details">

                                                                        <div class="cu-task-fields__row">
                                                                            <div class="cu-task-label-icon__container">
                                                                                <iconify-icon icon="noto:star">
                                                                                </iconify-icon>First
                                                                                Name :
                                                                            </div>
                                                                            <div class="userenuData">John</div>
                                                                        </div>
                                                                        <div class="cu-task-fields__row">
                                                                            <div class="cu-task-label-icon__container">
                                                                                Last
                                                                                Name :</div>
                                                                            <div class="userenuData">Johnson</div>
                                                                        </div>
                                                                        <div class="cu-task-fields__row">
                                                                            <div class="cu-task-label-icon__container">
                                                                                Location :</div>
                                                                            <div class="userenuData">Manchester</div>
                                                                        </div>

                                                                        <div class="cu-task-fields__row">
                                                                            <div class="cu-task-label-icon__container">
                                                                                Nationality :</div>
                                                                            <div class="userenuData">Indian</div>
                                                                        </div>
                                                                        <div class="cu-task-fields__row">
                                                                            <div class="cu-task-label-icon__container">
                                                                                Email
                                                                                Address :</div>
                                                                            <div class="userenuData">
                                                                                John.johnson@example.com</div>
                                                                        </div>
                                                                        <div class="cu-task-fields__row">
                                                                            <div class="cu-task-label-icon__container">
                                                                                Phone
                                                                                Number :</div>
                                                                            <div class="userenuData">07122334455</div>
                                                                        </div>
                                                                        <div class="cu-task-fields__row">
                                                                            <div class="cu-task-label-icon__container">
                                                                                Type
                                                                                :</div>
                                                                            <div class="userenuData">Professional</div>
                                                                        </div>
                                                                        <div class="cu-task-fields__row">
                                                                            <div class="cu-task-label-icon__container">
                                                                                UK
                                                                                Home Owner Guarantor :</div>
                                                                            <div class="userenuData">Yes</div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="otherPersons_details">
                                                                    <h2 class="blinking-title">Tenant Viewing Records
                                                                    </h2>
                                                                    <div class="OtherPersons_withtenant">
                                                                        <div class="card card-border spipeline-card">
                                                                            <div class="card-body">
                                                                                <div class="card-action-wrap">
                                                                                    <a class="btn btn-xs btn-icon btn-rounded btn-light dropdown-toggle no-caret"
                                                                                        aria-expanded="false"
                                                                                        data-bs-toggle="dropdown"
                                                                                        href="#"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="chevron-right"></i></span></span></a>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-icon-text dropdown-menu-end spipeline-dropdown">
                                                                                        <h6
                                                                                            class="dropdown-header text-muted">
                                                                                            Person Details</h6>

                                                                                        <div class="makeLeadPerson">
                                                                                            <div class="form-check">
                                                                                                <input type="checkbox"
                                                                                                    class="form-check-input"
                                                                                                    id="customCheckListlead">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="customCheckListlead">
                                                                                                    Make Lead Tenant

                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="makeLeadPerson">
                                                                                            <div class="form-check">
                                                                                                <input type="checkbox"
                                                                                                    class="form-check-input"
                                                                                                    id="customCheckListlead">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="customCheckListlead">
                                                                                                    No Longer Interested

                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-item">
                                                                                            <div
                                                                                                class="d-flex personCard_item align-items-center">
                                                                                                <div
                                                                                                    class="personeDtContainer">
                                                                                                    <div
                                                                                                        class="me-3 position-relative text-disabled">
                                                                                                        <i
                                                                                                            class="ri-checkbox-blank-circle-line"></i>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mw-175p">
                                                                                                        <div
                                                                                                            class="h6 mb-0 text-truncate smallDropiten_title">
                                                                                                            Person Name
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="emailaddress_user">
                                                                                                            <a
                                                                                                                href="##">John
                                                                                                                Doe</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="avatar avatar-icon avatar-xxs avatar-soft-danger avatar-rounded ms-3">
                                                                                                    <span
                                                                                                        class="initial-wrap">
                                                                                                        <span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="solar:user-outline">
                                                                                                            </iconify-icon>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-item">
                                                                                            <div
                                                                                                class="d-flex personCard_item align-items-center">
                                                                                                <div
                                                                                                    class="personeDtContainer">
                                                                                                    <div
                                                                                                        class="me-3 position-relative text-disabled">
                                                                                                        <i
                                                                                                            class="ri-checkbox-blank-circle-line"></i>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mw-175p">
                                                                                                        <div
                                                                                                            class="h6 mb-0 text-truncate smallDropiten_title">
                                                                                                            Phone Number
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="emailaddress_user">
                                                                                                            <a
                                                                                                                href="tel:8975869586">8975869586</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="avatar avatar-icon avatar-xxs avatar-light avatar-rounded ms-3">
                                                                                                    <span
                                                                                                        class="initial-wrap">
                                                                                                        <span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="solar:phone-linear">
                                                                                                            </iconify-icon>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-item">
                                                                                            <div
                                                                                                class="d-flex personCard_item align-items-center">
                                                                                                <div
                                                                                                    class="personeDtContainer">
                                                                                                    <div
                                                                                                        class="me-3 position-relative text-disabled">
                                                                                                        <i
                                                                                                            class="ri-checkbox-blank-circle-line"></i>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mw-175p">
                                                                                                        <div
                                                                                                            class="h6 mb-0 text-truncate smallDropiten_title">
                                                                                                            Email
                                                                                                            Address
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="emailaddress_user">
                                                                                                            <a
                                                                                                                href="mailto:janesmith@example.com">janesmith@example.com</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="avatar avatar-icon avatar-xxs avatar-soft-primary avatar-rounded ms-3">
                                                                                                    <span
                                                                                                        class="initial-wrap">
                                                                                                        <span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="fluent:mail-48-regular">
                                                                                                            </iconify-icon>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="media">
                                                                                    <div class="media-head">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                                alt="user"
                                                                                                class="avatar-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <div class="Person-name">John
                                                                                            Doe</div>
                                                                                        <div
                                                                                            class="price-estimation emailaddress_user">
                                                                                            <a
                                                                                                href="mailto:johndoe@example.com">johndoe@example.com</a>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card card-border spipeline-card">
                                                                            <div class="card-body">
                                                                                <div class="card-action-wrap">
                                                                                    <a class="btn btn-xs btn-icon btn-rounded btn-light dropdown-toggle no-caret"
                                                                                        aria-expanded="false"
                                                                                        data-bs-toggle="dropdown"
                                                                                        href="#"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="chevron-right"></i></span></span></a>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-icon-text dropdown-menu-end spipeline-dropdown">
                                                                                        <h6
                                                                                            class="dropdown-header text-muted">
                                                                                            Person Details</h6>

                                                                                        <div class="makeLeadPerson">
                                                                                            <div class="form-check">
                                                                                                <input type="checkbox"
                                                                                                    class="form-check-input"
                                                                                                    id="customCheckListlead2">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="customCheckListlead2">
                                                                                                    Make Lead Tenant

                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="makeLeadPerson">
                                                                                            <div class="form-check">
                                                                                                <input type="checkbox"
                                                                                                    class="form-check-input"
                                                                                                    id="customCheckListlead">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="customCheckListlead">
                                                                                                    No Longer Interested

                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-item">
                                                                                            <div
                                                                                                class="d-flex personCard_item align-items-center">
                                                                                                <div
                                                                                                    class="personeDtContainer">
                                                                                                    <div
                                                                                                        class="me-3 position-relative text-disabled">
                                                                                                        <i
                                                                                                            class="ri-checkbox-blank-circle-line"></i>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mw-175p">
                                                                                                        <div
                                                                                                            class="h6 mb-0 text-truncate smallDropiten_title">
                                                                                                            Person Name
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="emailaddress_user">
                                                                                                            <a
                                                                                                                href="##">Jane
                                                                                                                Smith</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="avatar avatar-icon avatar-xxs avatar-soft-danger avatar-rounded ms-3">
                                                                                                    <span
                                                                                                        class="initial-wrap">
                                                                                                        <span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="solar:user-outline">
                                                                                                            </iconify-icon>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-item">
                                                                                            <div
                                                                                                class="d-flex personCard_item align-items-center">
                                                                                                <div
                                                                                                    class="personeDtContainer">
                                                                                                    <div
                                                                                                        class="me-3 position-relative text-disabled">
                                                                                                        <i
                                                                                                            class="ri-checkbox-blank-circle-line"></i>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mw-175p">
                                                                                                        <div
                                                                                                            class="h6 mb-0 text-truncate smallDropiten_title">
                                                                                                            Phone Number
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="emailaddress_user">
                                                                                                            <a
                                                                                                                href="tel:8975869586">8975869586</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="avatar avatar-icon avatar-xxs avatar-light avatar-rounded ms-3">
                                                                                                    <span
                                                                                                        class="initial-wrap">
                                                                                                        <span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="solar:phone-linear">
                                                                                                            </iconify-icon>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-item">
                                                                                            <div
                                                                                                class="d-flex personCard_item align-items-center">
                                                                                                <div
                                                                                                    class="personeDtContainer">
                                                                                                    <div
                                                                                                        class="me-3 position-relative text-disabled">
                                                                                                        <i
                                                                                                            class="ri-checkbox-blank-circle-line"></i>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mw-175p">
                                                                                                        <div
                                                                                                            class="h6 mb-0 text-truncate smallDropiten_title">
                                                                                                            Email
                                                                                                            Address
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="emailaddress_user">
                                                                                                            <a
                                                                                                                href="mailto:janesmith@example.com">janesmith@example.com</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="avatar avatar-icon avatar-xxs avatar-soft-primary avatar-rounded ms-3">
                                                                                                    <span
                                                                                                        class="initial-wrap">
                                                                                                        <span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="fluent:mail-48-regular">
                                                                                                            </iconify-icon>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="media">
                                                                                    <div class="media-head">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                                alt="user"
                                                                                                class="avatar-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <div class="Person-name">Jane
                                                                                            Smith</div>
                                                                                        <div
                                                                                            class="price-estimation emailaddress_user">
                                                                                            <a
                                                                                                href="mailto:janesmith@example.com">janesmith@example.com</a>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="concernDetails_container">

                                                                    <div class="concern_listitem">
                                                                        <h2 class="blinking-title">Active Viewing</h2>
                                                                        <div class="meeting-details">

                                                                            <div class="meetingDetailsList">
                                                                                <p><strong>Date:</strong> 28th June 2024
                                                                                </p>
                                                                                <p><strong>Time:</strong> 10:00 AM</p>
                                                                                <p><strong>Staff Name:</strong> Jphn Doe
                                                                                </p>
                                                                                <p><strong>Meeting Location:</strong> UK
                                                                                    Address Placeholder
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="concernDetails_container">

                                                                    <div class="concern_listitem pastrecordsItems">
                                                                        <h2 class="blinking-title">Past Viewing</h2>
                                                                        <div class="meeting-details">

                                                                            <div class="meetingDetailsList">
                                                                                <p><strong>Date:</strong> 5 Sep 2024
                                                                                </p>
                                                                                <p><strong>Time:</strong> 10:00 AM</p>
                                                                                <p><strong>Staff Name:</strong> Jphn Doe
                                                                                </p>
                                                                                <p><strong>Meeting Location:</strong> UK
                                                                                    Address Placeholder
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="meeting-details">

                                                                            <div class="meetingDetailsList">
                                                                                <p><strong>Date:</strong> 5 Sep 2024
                                                                                </p>
                                                                                <p><strong>Time:</strong> 10:00 AM</p>
                                                                                <p><strong>Staff Name:</strong> Jphn Doe
                                                                                </p>
                                                                                <p><strong>Meeting Location:</strong> UK
                                                                                    Address Placeholder
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <!-- staff and tenant activity logs start -->
                                                                <!-- <div class="tenant_concern_activitylist">
                                                                    <h2 class="blinking-title">Staff and Tenant Activity
                                                                        Logs</h2>

                                                                    <div class="hk-checklist">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="customCheckList5" checked="">
                                                                            <label class="form-check-label"
                                                                                for="customCheckList5">
                                                                                24 hours reminder send
                                                                                <span class="done-strikethrough"></span>
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
                                                                                id="customCheckList6" checked="">
                                                                            <label class="form-check-label"
                                                                                for="customCheckList6">
                                                                                Tenant confirms they are attending
                                                                                <span class="done-strikethrough"></span>
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
                                                                                id="customCheckList7" checked="">
                                                                            <label class="form-check-label"
                                                                                for="customCheckList7">
                                                                                Staff member attends for a viewing
                                                                                <span class="done-strikethrough"></span>
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
                                                                                id="customCheckList8" checked="">
                                                                            <label class="form-check-label"
                                                                                for="customCheckList8">
                                                                                Tenant Attended
                                                                                <span class="done-strikethrough"></span>
                                                                            </label>
                                                                            <a href="#"
                                                                                class="btn btn-xs btn-icon btn-rounded btn-flush-light flush-soft-hover delete-checklist"><span
                                                                                    class="icon"><span
                                                                                        class="feather-icon"><i
                                                                                            data-feather="trash-2"></i></span></span></a>
                                                                        </div>
                                                                        <a href="#"
                                                                            class="d-flex align-items-center add-new-checklist">
                                                                            <span class="feather-icon fe-x me-2"><i
                                                                                    data-feather="plus-square"></i></span>
                                                                            <span>Add New Note</span>
                                                                        </a>
                                                                    </div>

                                                                </div> -->

                                                                <!-- tenant question and when viewing end-->

                                                                <!-- <div class="staffNotes_after_viewing">
                                                                    <h2 class="blinking-title">Staff Notes After Viewing
                                                                        Complete</h2>
                                                                    <div class="form-group">
                                                                        <label class="form-label">Staff Note</label>
                                                                        <textarea class="form-control"
                                                                            rows="5">Tenant was very interested in the property, appreciating the layout and natural light. They need two bedrooms, a workspace, and a parking spot. They have a small dog and prefer to move in by the end of next month. Awaiting their decision by the end of the week.</textarea>
                                                                    </div>
                                                                </div> -->

                                                                <div class="addedPropertiesData_list">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">

                                                                            <ul
                                                                                class="nav nav-justified nav-light nav-tabs custominner_tbEntTabs nav-segmented-tabs active-theme mt-4">
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link active"
                                                                                        data-bs-toggle="tab"
                                                                                        href="#tab_suggestedProperties">
                                                                                        <span
                                                                                            class="nav-link-text">Suggested
                                                                                            Properties</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link"
                                                                                        data-bs-toggle="tab"
                                                                                        href="#tab_viewedProperties">
                                                                                        <span
                                                                                            class="nav-link-text badge-on-text">Viewed
                                                                                            History</span>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                            <div class="tab-content enquiryTabsContent">
                                                                                <div class="tab-pane fade show active"
                                                                                    id="tab_suggestedProperties">

                                                                                    <div id="selectedDataDiv"
                                                                                        class="hiddenelements propertyavilableDataSearch mt-4">
                                                                                        <div
                                                                                            class="selectedPropertyfor_tenant_section">
                                                                                            <h2>Selected Properties</h2>
                                                                                            <div id="selectedCount"
                                                                                                class="mb-2"></div>
                                                                                        </div>

                                                                                        <div
                                                                                            class="selected_property_mainContainer">
                                                                                            <table
                                                                                                id="selectedDataTable"
                                                                                                class="table w-100">
                                                                                                <thead>

                                                                                                    <tr>
                                                                                                        <th><input
                                                                                                                type="checkbox"
                                                                                                                class="form-check-input"
                                                                                                                id="selectAll2">
                                                                                                        </th>
                                                                                                        <th>Property
                                                                                                            Type</th>
                                                                                                        <th colspan="3">
                                                                                                            Weekly
                                                                                                            Pricing</th>
                                                                                                        <th>Address</th>
                                                                                                        <th>Area</th>
                                                                                                        <th>Available
                                                                                                            Rooms</th>
                                                                                                    </tr>
                                                                                                    <tr
                                                                                                        class="extraTBOption_th">
                                                                                                        <th>&nbsp;</th>
                                                                                                        <th>&nbsp;</th>
                                                                                                        <th>Rent</th>
                                                                                                        <th>Council Tax
                                                                                                        </th>
                                                                                                        <th>Utilities
                                                                                                        </th>
                                                                                                        <th>&nbsp;</th>
                                                                                                        <th>&nbsp;</th>
                                                                                                        <th>&nbsp;</th>
                                                                                                    </tr>

                                                                                                </thead>
                                                                                                <tbody>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <button id="doneBtn"
                                                                                            type="button"
                                                                                            class="btn btn-success hiddenelements">Done</button>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="tab-pane fade "
                                                                                    id="tab_viewedProperties">

                                                                                    <table class="table  w-100">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th><input
                                                                                                        type="checkbox"
                                                                                                        class="form-check-input"
                                                                                                        readonly checked
                                                                                                        disabled></th>
                                                                                                <th>Property Name</th>
                                                                                                <th>Date & Time</th>
                                                                                                <th>Status</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td><input
                                                                                                        type="checkbox"
                                                                                                        class=" form-check-input"
                                                                                                        readonly checked
                                                                                                        disabled></td>

                                                                                                <td>
                                                                                                    <a
                                                                                                        href="property-details.php">
                                                                                                        <div
                                                                                                            class="LongMesage_container">
                                                                                                            <input
                                                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                                                value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
                                                                                                            <button
                                                                                                                class="view-btn tablemessageview_btn"
                                                                                                                type="button"
                                                                                                                data-bs-toggle="tooltip"
                                                                                                                data-bs-placement="top"
                                                                                                                aria-label="Click to view"
                                                                                                                data-bs-original-title="Click to view Full Message">
                                                                                                                <i
                                                                                                                    class="bi bi-eye"></i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </td>
                                                                                                <td>05/22/2024 / 5:22 PM
                                                                                                </td>
                                                                                                <td><span
                                                                                                        class="badge bg-success">Viewed</span>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input
                                                                                                        type="checkbox"
                                                                                                        class=" form-check-input"
                                                                                                        readonly checked
                                                                                                        disabled></td>
                                                                                                <td>
                                                                                                    <a
                                                                                                        href="property-details.php">
                                                                                                        <div
                                                                                                            class="LongMesage_container">
                                                                                                            <input
                                                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                                                value="3 and 3A - Apperley Road, Stocksfield, Northumerland"></input>
                                                                                                            <button
                                                                                                                class="view-btn tablemessageview_btn"
                                                                                                                type="button"
                                                                                                                data-bs-toggle="tooltip"
                                                                                                                data-bs-placement="top"
                                                                                                                aria-label="Click to view"
                                                                                                                data-bs-original-title="Click to view Full Message">
                                                                                                                <i
                                                                                                                    class="bi bi-eye"></i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </td>
                                                                                                <td>05/22/2024 / 5:22 PM
                                                                                                </td>
                                                                                                <td><span
                                                                                                        class="badge bg-success">Viewed</span>
                                                                                                </td>
                                                                                            </tr>

                                                                                        </tbody>
                                                                                    </table>

                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="pastHistoryand_actibities">
                                                                    <ul
                                                                        class="nav nav-justified nav-light nav-tabs custominner_tbEntTabs nav-segmented-tabs active-theme mt-4">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link active"
                                                                                data-bs-toggle="tab"
                                                                                href="#tab_checklist">
                                                                                <span class="nav-link-text">Manage
                                                                                    Status</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                href="#tab_comments">
                                                                                <span
                                                                                    class="nav-link-text badge-on-text">All
                                                                                    Notes</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                href="#tab_files">
                                                                                <span
                                                                                    class="nav-link-text badge-on-text">History</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                href="#tab_activity">
                                                                                <span
                                                                                    class="nav-link-text badge-on-text">Activity</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                href="#Tenant_Questionnaire">
                                                                                <span
                                                                                    class="nav-link-text badge-on-text">
                                                                                    Questionnaire</span>
                                                                            </a>
                                                                        </li>

                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                href="#viewhistorydetailed_tab">
                                                                                <span
                                                                                    class="nav-link-text badge-on-text">
                                                                                    Appointment  History</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="tab-content enquiryTabsContent">
                                                                        <div class="tab-pane fade show active"
                                                                            id="tab_checklist">
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
                                                                        <div class="tab-pane fade" id="tab_comments">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                                <h2> All Notes</h2>
                                                                                <a href="#AddNote"
                                                                                    class="btn btn-xs btn-icon btn-rounded btn-light"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title="Add Note"><span
                                                                                        class="icon"><span
                                                                                            class="feather-icon"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24" height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-plus">
                                                                                                <line x1="12" y1="5"
                                                                                                    x2="12" y2="19">
                                                                                                </line>
                                                                                                <line x1="5" y1="12"
                                                                                                    x2="19" y2="12">
                                                                                                </line>
                                                                                            </svg></span></span></a>
                                                                            </div>
                                                                            <div class="comment-block">

                                                                                <div
                                                                                    class="card card-border note-block">
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
                                                                                <div
                                                                                    class="card card-border note-block ">
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

                                                                                <div class="AddNoteEnuSection"
                                                                                    id="AddNote">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Note
                                                                                            header</label>
                                                                                        <input class="form-control"
                                                                                            type="text" name=""
                                                                                            placeholder="Add Title">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Add
                                                                                            Note</label>
                                                                                        <textarea class="form-control"
                                                                                            rows="5"></textarea>
                                                                                    </div>
                                                                                    <div class="NoteAction_container">
                                                                                        <div
                                                                                            class="sendEnquiryNote_container">
                                                                                            <div class="addto_todolist">
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="form-check-input"
                                                                                                        id="customCheckList-todo">
                                                                                                    <label
                                                                                                        class="form-check-label"
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
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="form-check-input setAlertInput">
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="customCheckList-todo">
                                                                                                        Set As Alert
                                                                                                        <span
                                                                                                            class="done-strikethrough"></span>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group inpicon_without_label CsMl-10">
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

                                                                                    <div class="Showing_departmentand_users"
                                                                                        style="display: none;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="form-label">Select
                                                                                                        Department</label>
                                                                                                    <select
                                                                                                        class="form-control select2"
                                                                                                        id="selectDepartment">
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
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="form-label">Select
                                                                                                        Users</label>
                                                                                                    <select
                                                                                                        class="form-control select2"
                                                                                                        id="selectUser">
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
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="submitnote_container">
                                                                                        <button id="sendBtn2"
                                                                                            type="button"
                                                                                            class="sendBtn_common_main addenun_noteBtn">
                                                                                            <iconify-icon
                                                                                                icon="mynaui:send">
                                                                                            </iconify-icon>
                                                                                            Send Note
                                                                                        </button>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- <div class="AssignTasks_container">
                                                                                    <h2>Add Task</h2>
                                                                                </div> -->

                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="tab_files">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                                <h2>All History <span
                                                                                        class="badge badge-orange badge-sm badge-pill flex-shrink-0 ms-3">Updated</span>
                                                                                </h2>
                                                                            </div>

                                                                            <div
                                                                                class="fullwidthTabInner_content_container">
                                                                                <div id="accordionSimpleExample"
                                                                                    class="accordion historyAccordign accordion-simple single-email-thread">
                                                                                    <div class="accordion-item">
                                                                                        <div id="simple-headingOne"
                                                                                            class="accordion-header">
                                                                                            <div>
                                                                                                <div class="email-head">
                                                                                                    <div data-bs-toggle="collapse"
                                                                                                        data-bs-target="#simple-collapseOne"
                                                                                                        role="button"
                                                                                                        aria-expanded="false"
                                                                                                        class="collapsed">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="media align-items-center">
                                                                                                        <div
                                                                                                            class="media-head me-2">
                                                                                                            <div
                                                                                                                class="avatar avatar-sm avatar-rounded">
                                                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <div
                                                                                                                class="fw-medium text-dark">
                                                                                                                Created
                                                                                                                By</div>
                                                                                                            <div
                                                                                                                class="fs-7">
                                                                                                                <a
                                                                                                                    href="view-user-details.php">Koriakowski,
                                                                                                                    Krystian</a>
                                                                                                                @
                                                                                                                01/09/2018
                                                                                                                15:01
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="email-head-action">
                                                                                                        <div
                                                                                                            class="email-time">
                                                                                                            Dec 30, 4:22
                                                                                                            PM</div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="simple-collapseOne"
                                                                                            class="accordion-collapse collapse"
                                                                                            style="">
                                                                                            <div class="accordion-body">
                                                                                                <ul
                                                                                                    class="issueHistoryList">
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Created
                                                                                                            Issue :
                                                                                                        </label>Water
                                                                                                        Leakage from
                                                                                                        Ceiling
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Changed
                                                                                                            Assignment :
                                                                                                        </label> <a
                                                                                                            href="view-user-details.php"
                                                                                                            class="namelinkURl">Angelina
                                                                                                            Jolie</a>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Added
                                                                                                            Comment :
                                                                                                        </label>
                                                                                                        <ol
                                                                                                            class="commentpointslist">
                                                                                                            <li>The
                                                                                                                tiles
                                                                                                                are
                                                                                                                missing
                                                                                                                under
                                                                                                                the
                                                                                                                shower
                                                                                                                tray,
                                                                                                                some of
                                                                                                                the
                                                                                                                tiles
                                                                                                                are in
                                                                                                                the
                                                                                                                bathroom.
                                                                                                            </li>
                                                                                                            <li>The sink
                                                                                                                is
                                                                                                                clogged,
                                                                                                                the
                                                                                                                water
                                                                                                                drains
                                                                                                                poorly,
                                                                                                                I wanted
                                                                                                                to clear
                                                                                                                it, but
                                                                                                                I
                                                                                                                can't
                                                                                                                unscrew
                                                                                                                the
                                                                                                                plug.
                                                                                                            </li>
                                                                                                        </ol>

                                                                                                        <p>The tiles
                                                                                                            under the
                                                                                                            shower tray
                                                                                                            might have
                                                                                                            been
                                                                                                            displaced
                                                                                                            due to water
                                                                                                            damage.
                                                                                                            Recommend
                                                                                                            thorough
                                                                                                            inspection
                                                                                                            and
                                                                                                            replacement.
                                                                                                        </p>
                                                                                                    </li>

                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Shared
                                                                                                            With
                                                                                                            : </label>
                                                                                                        <a href="view-user-details.php"
                                                                                                            class="namelinkURl">Angelina
                                                                                                            Jolie</a>
                                                                                                    </li>

                                                                                                    <div
                                                                                                        class="separator separator-light">
                                                                                                    </div>

                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="accordion-item">
                                                                                        <div id="simple-headingTwo"
                                                                                            class="accordion-header">
                                                                                            <div>
                                                                                                <div class="email-head">
                                                                                                    <div data-bs-toggle="collapse"
                                                                                                        data-bs-target="#simple-collapseTwo"
                                                                                                        role="button"
                                                                                                        aria-expanded="true">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="media align-items-center">
                                                                                                        <div
                                                                                                            class="media-head me-2">
                                                                                                            <div
                                                                                                                class="avatar avatar-sm avatar-rounded">
                                                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <div
                                                                                                                class="fw-medium text-dark">
                                                                                                                Created
                                                                                                                By</div>
                                                                                                            <div
                                                                                                                class="fs-7">
                                                                                                                <a
                                                                                                                    href="view-user-details.php">Koriakowski,
                                                                                                                    Krystian</a>
                                                                                                                @
                                                                                                                01/09/2018
                                                                                                                15:01
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="email-head-action">
                                                                                                        <div
                                                                                                            class="email-time">
                                                                                                            Jan 1, 9:30
                                                                                                            AM</div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="simple-collapseTwo"
                                                                                            class="collapse show">
                                                                                            <div class="accordion-body">
                                                                                                <ul
                                                                                                    class="issueHistoryList">
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Created
                                                                                                            Issue :
                                                                                                        </label>Electrical
                                                                                                        Short Circuit
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Changed
                                                                                                            Assignment :
                                                                                                        </label> <a
                                                                                                            href="view-user-details.php"
                                                                                                            class="namelinkURl">Brad
                                                                                                            Pitt</a>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Added
                                                                                                            Comment :
                                                                                                        </label>
                                                                                                        <ol
                                                                                                            class="commentpointslist">
                                                                                                            <li>The main
                                                                                                                circuit
                                                                                                                breaker
                                                                                                                in the
                                                                                                                basement
                                                                                                                has
                                                                                                                tripped
                                                                                                                twice
                                                                                                                this
                                                                                                                week.
                                                                                                            </li>
                                                                                                            <li>There's
                                                                                                                a
                                                                                                                burning
                                                                                                                smell
                                                                                                                coming
                                                                                                                from the
                                                                                                                outlet
                                                                                                                in the
                                                                                                                living
                                                                                                                room.
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                        <p>It seems like
                                                                                                            there might
                                                                                                            be a short
                                                                                                            circuit
                                                                                                            in the
                                                                                                            wiring.
                                                                                                            Recommend
                                                                                                            immediate
                                                                                                            inspection
                                                                                                            by a
                                                                                                            licensed
                                                                                                            electrician.
                                                                                                        </p>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Shared
                                                                                                            With
                                                                                                            : </label>
                                                                                                        <a href="view-user-details.php"
                                                                                                            class="namelinkURl">Jennifer
                                                                                                            Aniston</a>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel ">Cancelled
                                                                                                            Appointment
                                                                                                            : </label><a
                                                                                                            href="view-user-details.php"
                                                                                                            class="namelinkURl">Kate
                                                                                                            Winslet <div
                                                                                                                class="dateofapoinment">
                                                                                                                @
                                                                                                                24/04/2024
                                                                                                                18:00 -
                                                                                                                24/04/2024
                                                                                                                19:00
                                                                                                            </div></a>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel ">Booked
                                                                                                            Appointment
                                                                                                            : </label><a
                                                                                                            href="view-user-details.php"
                                                                                                            class="namelinkURl">Kate
                                                                                                            Winslet <div
                                                                                                                class="dateofapoinment">
                                                                                                                @
                                                                                                                24/04/2024
                                                                                                                18:00 -
                                                                                                                24/04/2024
                                                                                                                19:00
                                                                                                            </div></a>
                                                                                                    </li>
                                                                                                    <div
                                                                                                        class="separator separator-light">
                                                                                                    </div>

                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="accordion-item">
                                                                                        <div id="simple-headingThree"
                                                                                            class="accordion-header">
                                                                                            <div>
                                                                                                <div class="email-head">
                                                                                                    <div data-bs-toggle="collapse"
                                                                                                        data-bs-target="#simple-collapseThree"
                                                                                                        role="button"
                                                                                                        aria-expanded="true">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="media align-items-center">
                                                                                                        <div
                                                                                                            class="media-head me-2">
                                                                                                            <div
                                                                                                                class="avatar avatar-sm avatar-rounded">
                                                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <div
                                                                                                                class="fw-medium text-dark">
                                                                                                                Created
                                                                                                                By</div>
                                                                                                            <div
                                                                                                                class="fs-7">
                                                                                                                <a
                                                                                                                    href="view-user-details.php">Koriakowski,
                                                                                                                    Krystian</a>
                                                                                                                @
                                                                                                                01/09/2018
                                                                                                                15:01
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="email-head-action">
                                                                                                        <div
                                                                                                            class="email-time">
                                                                                                            Jan 2, 10:21
                                                                                                            AM</div>
                                                                                                        <span
                                                                                                            class="email-star"><span
                                                                                                                class="feather-icon"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    width="24"
                                                                                                                    height="24"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    fill="none"
                                                                                                                    stroke="currentColor"
                                                                                                                    stroke-width="2"
                                                                                                                    stroke-linecap="round"
                                                                                                                    stroke-linejoin="round"
                                                                                                                    class="feather feather-star">
                                                                                                                    <polygon
                                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                                    </polygon>
                                                                                                                </svg></span></span>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="simple-collapseThree"
                                                                                            class="collapse show">
                                                                                            <div class="accordion-body">
                                                                                                <ul
                                                                                                    class="issueHistoryList">
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Created
                                                                                                            Issue :
                                                                                                        </label>Broken
                                                                                                        Window</li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Changed
                                                                                                            Assignment :
                                                                                                        </label> <a
                                                                                                            href="view-user-details.php"
                                                                                                            class="namelinkURl">Leonardo
                                                                                                            DiCaprio</a>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Added
                                                                                                            Comment :
                                                                                                        </label>
                                                                                                        <ol
                                                                                                            class="commentpointslist">
                                                                                                            <li>A large
                                                                                                                crack
                                                                                                                appeared
                                                                                                                on the
                                                                                                                living
                                                                                                                room
                                                                                                                window
                                                                                                                after
                                                                                                                the
                                                                                                                storm
                                                                                                                last
                                                                                                                night.
                                                                                                            </li>
                                                                                                            <li>There's
                                                                                                                a small
                                                                                                                hole
                                                                                                                near the
                                                                                                                bottom
                                                                                                                corner
                                                                                                                of the
                                                                                                                window.
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                        <p>The window
                                                                                                            needs
                                                                                                            immediate
                                                                                                            repair to
                                                                                                            prevent
                                                                                                            further
                                                                                                            damage and
                                                                                                            ensure
                                                                                                            safety.</p>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel">Shared
                                                                                                            With
                                                                                                            : </label>
                                                                                                        <a href="view-user-details.php"
                                                                                                            class="namelinkURl">Kate
                                                                                                            Winslet</a>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel ">Cancelled
                                                                                                            Appointment
                                                                                                            : </label><a
                                                                                                            href="view-user-details.php"
                                                                                                            class="namelinkURl">Kate
                                                                                                            Winslet <div
                                                                                                                class="dateofapoinment">
                                                                                                                @
                                                                                                                24/04/2024
                                                                                                                18:00 -
                                                                                                                24/04/2024
                                                                                                                19:00
                                                                                                            </div></a>
                                                                                                    </li>
                                                                                                    <li><label for=""
                                                                                                            class="form-label historyLabel ">Booked
                                                                                                            Appointment
                                                                                                            : </label><a
                                                                                                            href="view-user-details.php"
                                                                                                            class="namelinkURl">Kate
                                                                                                            Winslet <div
                                                                                                                class="dateofapoinment">
                                                                                                                @
                                                                                                                24/04/2024
                                                                                                                18:00 -
                                                                                                                24/04/2024
                                                                                                                19:00
                                                                                                            </div></a>
                                                                                                    </li>

                                                                                                    <div
                                                                                                        class="separator separator-light">
                                                                                                    </div>

                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="tab_activity">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                                <h2> Latest activity</h2>
                                                                            </div>

                                                                            <div class="collapse-simple">
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <a role="button"
                                                                                            data-bs-toggle="collapse"
                                                                                            href="#activity_1"
                                                                                            aria-expanded="true">Today</a>
                                                                                    </div>
                                                                                    <div id="activity_1"
                                                                                        class="collapse show">
                                                                                        <div class="card-body">
                                                                                            <ul
                                                                                                class="activity-list list-group list-group-flush">
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-primary avatar-rounded">
                                                                                                                <span
                                                                                                                    class="initial-wrap">H</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Hencework</span>
                                                                                                                on
                                                                                                                Documentation
                                                                                                                link is
                                                                                                                working
                                                                                                                now - <a
                                                                                                                    href="#"
                                                                                                                    class="link-url"><u>https://graysons.com</u></a>
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Oct 15,
                                                                                                                2021,
                                                                                                                12:34 PM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                                <img src="dist/img/avatar2.jpg"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Morgan
                                                                                                                    Fregman</span>
                                                                                                                completed
                                                                                                                react
                                                                                                                conversion
                                                                                                                of <a
                                                                                                                    href="#"
                                                                                                                    class="link-default"><u>Enquiry</u></a>
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 16,
                                                                                                                2021,
                                                                                                                4:54 PM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                                <img src="dist/img/avatar13.jpg"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Jimmy
                                                                                                                    Carry</span>completed
                                                                                                                side bar
                                                                                                                menu on
                                                                                                                <a href="#"
                                                                                                                    class="link-default"><u>Enquiry</u></a>
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 10,
                                                                                                                2021,
                                                                                                                10:13 AM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                                <img src="dist/img/avatar7.jpg"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Charlie
                                                                                                                    Chaplin</span>
                                                                                                                deleted
                                                                                                                empty
                                                                                                                cards on
                                                                                                                <a href="#"
                                                                                                                    class="link-default"><u>completed</u></a>
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 10,
                                                                                                                2021,
                                                                                                                10:13 AM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <a role="button"
                                                                                            data-bs-toggle="collapse"
                                                                                            href="#activity_2"
                                                                                            aria-expanded="true">Yesterday</a>
                                                                                    </div>
                                                                                    <div id="activity_2"
                                                                                        class="collapse show">
                                                                                        <div class="card-body">
                                                                                            <ul
                                                                                                class="activity-list list-group list-group-flush">
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-soft-danger avatar-rounded">
                                                                                                                <span
                                                                                                                    class="initial-wrap">W</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Winston
                                                                                                                    Churchills</span>
                                                                                                                created
                                                                                                                a note
                                                                                                                on UI
                                                                                                                components
                                                                                                                task
                                                                                                                list</p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 2,
                                                                                                                2021,
                                                                                                                9:23 AM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                                <img src="dist/img/avatar2.jpg"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Morgan
                                                                                                                    Fregman</span>
                                                                                                                completed
                                                                                                                react
                                                                                                                conversion
                                                                                                                of <a
                                                                                                                    href="#"
                                                                                                                    class="link-default"><u>components</u></a>
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 16,
                                                                                                                2021,
                                                                                                                4:54 PM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                                <img src="dist/img/avatar13.jpg"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Jimmy
                                                                                                                    Carry</span>added
                                                                                                                shared
                                                                                                                components
                                                                                                                to <a
                                                                                                                    href="#"
                                                                                                                    class="link-default"><u>basic
                                                                                                                        structure</u></a>
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 10,
                                                                                                                2021,
                                                                                                                10:13 AM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-primary avatar-rounded">
                                                                                                                <span
                                                                                                                    class="initial-wrap">H</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Hencework</span>
                                                                                                                commented
                                                                                                                on <a
                                                                                                                    href="#"
                                                                                                                    class="link-default"><u>basic
                                                                                                                        structure</u></a>
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 10,
                                                                                                                2021,
                                                                                                                10:13 AM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                                <img src="dist/img/avatar7.jpg"
                                                                                                                    alt="user"
                                                                                                                    class="avatar-img">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Charlie
                                                                                                                    Chaplin</span>
                                                                                                                moved
                                                                                                                components
                                                                                                                from all
                                                                                                                modules
                                                                                                                to in
                                                                                                                progress
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 10,
                                                                                                                2021,
                                                                                                                10:13 AM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div class="media">
                                                                                                        <div
                                                                                                            class="media-head">
                                                                                                            <div
                                                                                                                class="avatar avatar-xs avatar-soft-danger avatar-rounded">
                                                                                                                <span
                                                                                                                    class="initial-wrap">W</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <p><span
                                                                                                                    class="text-dark">Winston
                                                                                                                    Churchills</span>
                                                                                                                created
                                                                                                                a note
                                                                                                                on UI
                                                                                                                components
                                                                                                                task
                                                                                                                list</p>
                                                                                                            <div
                                                                                                                class="last-activity-time">
                                                                                                                Sep 10,
                                                                                                                2021,
                                                                                                                10:13 AM
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="tab-pane fade"
                                                                            id="Tenant_Questionnaire">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                                <h2> Tenant Questionnaire</h2>
                                                                            </div>

                                                                            <div class="comment-block QuestionAnsBlock">
                                                                                <div class="media Question_item">
                                                                                    <div class="media-head">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            Q1
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <div>
                                                                                            <span
                                                                                                class="cm-name QsTitle">Welcome!
                                                                                                How do you find the
                                                                                                property so
                                                                                                far?</span>

                                                                                        </div>
                                                                                        <p class="tenantAnswer">@<a
                                                                                                href="#"
                                                                                                class="fw-medium">Tenant</a>
                                                                                            It's really nice. I like the
                                                                                            layout
                                                                                            and the natural light.</p>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="media Question_item">
                                                                                    <div class="media-head">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            Q2
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <div>
                                                                                            <span
                                                                                                class="cm-name QsTitle">Do
                                                                                                you
                                                                                                have any specific
                                                                                                requirements
                                                                                                for your new
                                                                                                home?</span>
                                                                                        </div>
                                                                                        <p class="tenantAnswer">@<a
                                                                                                href="#"
                                                                                                class="fw-medium">Tenant</a>
                                                                                            Yes, I'm looking for a place
                                                                                            with at
                                                                                            least two bedrooms and a
                                                                                            dedicated
                                                                                            workspace.</p>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="media Question_item">
                                                                                    <div class="media-head">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            Q3
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <div>
                                                                                            <span
                                                                                                class="cm-name QsTitle">Are
                                                                                                there any particular
                                                                                                amenities
                                                                                                you are looking for in
                                                                                                the
                                                                                                neighborhood?</span>

                                                                                        </div>
                                                                                        <p class="tenantAnswer">@<a
                                                                                                href="#"
                                                                                                class="fw-medium">Tenant</a>
                                                                                            I'd
                                                                                            love to be near parks and
                                                                                            have easy
                                                                                            access to public
                                                                                            transportation.</p>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="media Question_item">
                                                                                    <div class="media-head">
                                                                                        <div
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            Q4
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <div>
                                                                                            <span
                                                                                                class="cm-name QsTitle">Do
                                                                                                you
                                                                                                have any pets?</span>
                                                                                        </div>
                                                                                        <p class="tenantAnswer">@<a
                                                                                                href="#"
                                                                                                class="fw-medium">Tenant</a>
                                                                                            Yes, I have a small dog.</p>

                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div class="tab-pane fade "
                                                                            id="viewhistorydetailed_tab">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                                <h2> Appointment History</h2>
                                                                            </div>
                                                                            <table class="table  w-100">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th><input
                                                                                                        type="checkbox"
                                                                                                        class="form-check-input"
                                                                                                        readonly checked
                                                                                                        disabled></th>
                                                                                                <th>Property Name</th>
                                                                                                <th>Date & Time</th>
                                                                                                <th>Status</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td><input
                                                                                                        type="checkbox"
                                                                                                        class=" form-check-input"
                                                                                                        readonly checked
                                                                                                        disabled></td>

                                                                                                <td>
                                                                                                    <a
                                                                                                        href="property-details.php">
                                                                                                        <div
                                                                                                            class="LongMesage_container">
                                                                                                            <input
                                                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                                                value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
                                                                                                            <button
                                                                                                                class="view-btn tablemessageview_btn"
                                                                                                                type="button"
                                                                                                                data-bs-toggle="tooltip"
                                                                                                                data-bs-placement="top"
                                                                                                                aria-label="Click to view"
                                                                                                                data-bs-original-title="Click to view Full Message">
                                                                                                                <i
                                                                                                                    class="bi bi-eye"></i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </td>
                                                                                                <td>05/22/2024 / 5:22 PM
                                                                                                </td>
                                                                                                <td><span
                                                                                                        class="badge bg-success">Viewed</span>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input
                                                                                                        type="checkbox"
                                                                                                        class=" form-check-input"
                                                                                                        readonly checked
                                                                                                        disabled></td>
                                                                                                <td>
                                                                                                    <a
                                                                                                        href="property-details.php">
                                                                                                        <div
                                                                                                            class="LongMesage_container">
                                                                                                            <input
                                                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                                                value="3 and 3A - Apperley Road, Stocksfield, Northumerland"></input>
                                                                                                            <button
                                                                                                                class="view-btn tablemessageview_btn"
                                                                                                                type="button"
                                                                                                                data-bs-toggle="tooltip"
                                                                                                                data-bs-placement="top"
                                                                                                                aria-label="Click to view"
                                                                                                                data-bs-original-title="Click to view Full Message">
                                                                                                                <i
                                                                                                                    class="bi bi-eye"></i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </td>
                                                                                                <td>05/22/2024 / 5:22 PM
                                                                                                </td>
                                                                                                <td><span
                                                                                                        class="badge bg-success">Viewed</span>
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

                                                    <div class="col-lg-5 colnopadding">
                                                        <div class="rightenquiry_dataContainer">
                                                            <div class="innerEnupropertyData">
                                                                <div class="flex_containerCmn">
                                                                    <h2>Available Properties</h2>
                                                                    <div class="rightpropertyheader_actions">
                                                                        <div id="send_property_to_tent"
                                                                            class="hiddenelements">
                                                                            <button id="sendBtn" type="button"
                                                                                class="sendBtn_common_main">
                                                                                <img src="dist/img/newimages/AI-default.51bec1607029ffbd.svg"
                                                                                    alt="">
                                                                                Add Properties
                                                                            </button>
                                                                        </div>
                                                                        <div class="scheduleViewing">
                                                                            <a href="property-availability.php"
                                                                                target="_blank"
                                                                                class="scheduleViewingBtn viewallbtn_right">
                                                                                <iconify-icon icon="bytesize:eye">
                                                                                </iconify-icon>
                                                                                View All
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="propertyavilableDataSearch"
                                                                    id="propertyAvailableData">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="contact-list-view">

                                                                                <table
                                                                                    class="table availableProperty_Table Tablewithout_columnfilter w-100">
                                                                                    <thead>

                                                                                        <tr>
                                                                                            <th><input type="checkbox"
                                                                                                    class="form-check-input"
                                                                                                    id="selectAll"></th>
                                                                                            <th>Property Type</th>
                                                                                            <th colspan="3">Weekly
                                                                                                Pricing</th>
                                                                                            <th>Address</th>
                                                                                            <th>Area</th>
                                                                                            <th>Available Rooms</th>
                                                                                        </tr>
                                                                                        <tr class="extraTBOption_th">
                                                                                            <th>&nbsp;</th>
                                                                                            <th>&nbsp;</th>
                                                                                            <th>Rent</th>
                                                                                            <th>Council Tax</th>
                                                                                            <th>Utilities</th>
                                                                                            <th>&nbsp;</th>
                                                                                            <th>&nbsp;</th>
                                                                                            <th>&nbsp;</th>
                                                                                        </tr>

                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td><input type="checkbox"
                                                                                                    class="rowCheckbox form-check-input">
                                                                                            </td>
                                                                                            <td> Flat 5D</td>
                                                                                            <td>$200</td>
                                                                                            <td>$50</td>
                                                                                            <td>$30</td>
                                                                                            <td>
                                                                                                <a
                                                                                                    href="property-details.php">
                                                                                                    <div
                                                                                                        class="LongMesage_container">
                                                                                                        <input
                                                                                                            class="refuge-collection-input tableLongMessage_Input"
                                                                                                            value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
                                                                                                        <button
                                                                                                            class="view-btn tablemessageview_btn"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="tooltip"
                                                                                                            data-bs-placement="top"
                                                                                                            aria-label="Click to view"
                                                                                                            data-bs-original-title="Click to view Full Message">
                                                                                                            <i
                                                                                                                class="bi bi-eye"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td>Sunderland</td>
                                                                                            <td>4/4</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><input type="checkbox"
                                                                                                    class="rowCheckbox form-check-input">
                                                                                            </td>
                                                                                            <td> Apartment 3B</td>
                                                                                            <td>$200</td>
                                                                                            <td>$50</td>
                                                                                            <td>$30</td>
                                                                                            <td>
                                                                                                <a
                                                                                                    href="property-details.php">
                                                                                                    <div
                                                                                                        class="LongMesage_container">
                                                                                                        <input
                                                                                                            class="refuge-collection-input tableLongMessage_Input"
                                                                                                            value="3 and 3A - Apperley Road, Stocksfield, Northumerland"></input>
                                                                                                        <button
                                                                                                            class="view-btn tablemessageview_btn"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="tooltip"
                                                                                                            data-bs-placement="top"
                                                                                                            aria-label="Click to view"
                                                                                                            data-bs-original-title="Click to view Full Message">
                                                                                                            <i
                                                                                                                class="bi bi-eye"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td>Bristol</td>
                                                                                            <td>2/2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><input type="checkbox"
                                                                                                    class="rowCheckbox form-check-input">
                                                                                            </td>
                                                                                            <td>Flat 1</td>
                                                                                            <td>$200</td>
                                                                                            <td>$50</td>
                                                                                            <td>$30</td>
                                                                                            <td>
                                                                                                <a
                                                                                                    href="property-details.php">
                                                                                                    <div
                                                                                                        class="LongMesage_container">
                                                                                                        <input
                                                                                                            class="refuge-collection-input tableLongMessage_Input"
                                                                                                            value="West One, Asama Court,Newcastle Business Park, Newcastle upon Tyne"></input>
                                                                                                        <button
                                                                                                            class="view-btn tablemessageview_btn"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="tooltip"
                                                                                                            data-bs-placement="top"
                                                                                                            aria-label="Click to view"
                                                                                                            data-bs-original-title="Click to view Full Message">
                                                                                                            <i
                                                                                                                class="bi bi-eye"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td>Manchester</td>
                                                                                            <td>3/3</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><input type="checkbox"
                                                                                                    class="rowCheckbox form-check-input">
                                                                                            </td>
                                                                                            <td> Flat 2A</td>
                                                                                            <td>$200</td>
                                                                                            <td>$50</td>
                                                                                            <td>$30</td>
                                                                                            <td>
                                                                                                <a
                                                                                                    href="property-details.php">
                                                                                                    <div
                                                                                                        class="LongMesage_container">
                                                                                                        <input
                                                                                                            class="refuge-collection-input tableLongMessage_Input"
                                                                                                            value="West One, Asama Court,Newcastle Business Park, Newcastle upon Tyne"></input>
                                                                                                        <button
                                                                                                            class="view-btn tablemessageview_btn"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="tooltip"
                                                                                                            data-bs-placement="top"
                                                                                                            aria-label="Click to view"
                                                                                                            data-bs-original-title="Click to view Full Message">
                                                                                                            <i
                                                                                                                class="bi bi-eye"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td>Leeds</td>
                                                                                            <td>2/2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><input type="checkbox"
                                                                                                    class="rowCheckbox form-check-input">
                                                                                            </td>
                                                                                            <td>Apartment 2C</td>
                                                                                            <td>$200</td>
                                                                                            <td>$50</td>
                                                                                            <td>$30</td>
                                                                                            <td>
                                                                                                <a
                                                                                                    href="property-details.php">
                                                                                                    <div
                                                                                                        class="LongMesage_container">
                                                                                                        <input
                                                                                                            class="refuge-collection-input tableLongMessage_Input"
                                                                                                            value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House, 1-7 Union Street, Sunderland"></input>
                                                                                                        <button
                                                                                                            class="view-btn tablemessageview_btn"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="tooltip"
                                                                                                            data-bs-placement="top"
                                                                                                            aria-label="Click to view"
                                                                                                            data-bs-original-title="Click to view Full Message">
                                                                                                            <i
                                                                                                                class="bi bi-eye"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td>Liverpool</td>
                                                                                            <td>4/4</td>
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

<!-- viewing schedule modal offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="viewingSchedule"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="akar-icons:schedule" width="1.2em" height="1.2em"></iconify-icon>
            Schedule Viewing
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
    <form class="" action="Enquiry-details.php" method="POST">
        <div class="offcanvas-body">
            

            <div class="addingForm_Container_fullwidth ">
          
                <div class="formstartcontainer">
                <div class="row">
    <div class="col-lg-12 calendarToggleWrap">
        <button id="toggleCalendar" type="button" class="btn btn-primary"><iconify-icon icon="solar:minimize-broken"></iconify-icon> Minimize Calendar</button>
    </div>
</div>
                    <div class="row calendar-row">
                        <div class="col-lg-12">
                        <div class="calendarapp-wrap">

<div class="calendarapp-content">
    <div id="defaultshowcalendar"></div>
</div>

</div>
                        </div>
                        
                        
                    </div>

                    <div class="schedulViewing_wrapss">
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="leftViewSchedule_frmDetails">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Viewing Date</label>
                                            <input class="form-control customdataPicker flatpickr-input" type="text"
                                                name="" placeholder="Select Date" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Viewing Start Time</label>
                                            <div class="form-group form-icon bookingtimeinp">
                                                <input type="text" name="time" value=""
                                                    class="form-control time__pickers" id="timepicker"
                                                    placeholder="Select Time" required="" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Viewing End Time</label>
                                            <div class="form-group form-icon bookingtimeinp">
                                                <input type="text" name="time" value=""
                                                    class="form-control time__pickers" id="timepicker"
                                                    placeholder="Select Time" required="" readonly="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="legendColor_information form-group">
                                            <label class="form-label">Property Seperation By: </label>
                                            <div class="colorlegendsitems">
                                                <div class="legend-item">
                                                    <div class="legend-color suggested"></div>
                                                    <h1>Suggested Properties</h1>
                                                </div>
                                                <div class="legend-item">
                                                    <div class="legend-color viewed"></div>
                                                    <h1>Viewed Properties</h1>
                                                </div>
                                                <div class="legend-item">
                                                    <div class="legend-color all"></div>
                                                    <h1>All Properties</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group propertyMultiselect_container">
                                            <label class="form-label">Selected Properties</label>
                                            <select id="property-select" class="form-control select2-properties"
                                                multiple="multiple">
                                                <option data-category="suggested" selected="selected">Elmwood Cottage
                                                </option>
                                                <option data-category="viewed">Rosewood Gardens</option>
                                                <option data-category="suggested" selected="selected">Ivy Court
                                                    Apartments</option>
                                                <option data-category="all">Oakridge Manor</option>
                                                <option data-category="viewed">Rosewood Gardens</option>
                                                <option data-category="suggested" selected="selected">The Meadows
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Select Staff For Property Viewing</label>
                                            <select class="form-control select2">
                                                <option disabled selected value="">Please Select...</option>
                                                <option value="John Doe">John Doe</option>
                                                <option value="Jane Smith">Jane Smith</option>
                                                <option value="Alice Johnson">Alice Johnson</option>
                                                <option value="Robert Brown">Robert Brown</option>
                                                <option value="Michael Williams">Michael Williams</option>
                                                <option value="Emily Davis">Emily Davis</option>
                                                <option value="David Wilson">David Wilson</option>
                                                <option value="Sophia Martinez">Sophia Martinez</option>
                                                <option value="James Anderson">James Anderson</option>
                                                <option value="Olivia Taylor">Olivia Taylor</option>
                                                <option value="Chris Thomas">Chris Thomas</option>
                                                <option value="Emma Harris">Emma Harris</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label>Comment</label>
                                            </div>
                                            <textarea class="form-control" rows="4"
                                                placeholder="Write here..."></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="viewedHistory_modalcard">
                                <div class="card card-border">
                                    <div class="card-header">
                                        <h2>Viewed Properties</h2>
                                    </div>
                                    <div class="card-body">
                                        <table class="table  w-100">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="form-check-input" readonly=""
                                                            checked="" disabled=""></th>
                                                    <th>Property Name</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class=" form-check-input" readonly=""
                                                            checked="" disabled=""></td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation.">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i>
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td><span class="badge bg-success">Viewed</span></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" class=" form-check-input" readonly=""
                                                            checked="" disabled=""></td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="3 and 3A - Apperley Road, Stocksfield, Northumerland">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i>
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td><span class="badge bg-success">Viewed</span></td>
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

            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- viewing schedule modal end -->

<!--  calendar for Lettings team to view appointments and tasks offcanvas -->
<div class="offcanvas offcanvas-bottom calendar_offcanvasStyle" tabindex="-1" id="ViewAppoinment"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title calendarHeader_container">
            <div class="offcanwasBetween_title">
                <iconify-icon icon="radix-icons:calendar"></iconify-icon>
                Appointments and Tasks
            </div>

            <div class="CalendarRight_filters">
                <div id="search-container">
                    <input type="text" id="search-input" class="form-control" placeholder="Search...">
                    <iconify-icon icon="prime:search"></iconify-icon>

                </div>
                <div class="departmentfilter_container">
                    <select name="department" id="department_select" class="form-control comfieldR_margin">
                        <option value="" selected disabled>Select a Department</option>
                        <option value="HR">Human Resources</option>
                        <option value="Finance">Finance</option>
                        <option value="IT">Information Technology</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="Operations">Operations</option>
                        <option value="Legal">Legal</option>
                        <option value="Customer Support">Customer Support</option>
                    </select>

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
                </div>
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
                                            <a href="view-user-details.php"><span class="chip-text">Morgan</span></a>
                                        </span>
                                    </div>
                                    <div class="chip chip-primary user-chip mb-2 me-2">
                                        <span>
                                            <span class="avatar">
                                                <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img">
                                            </span>
                                            <a href="view-user-details.php"><span class="chip-text">Charlie</span></a>
                                        </span>
                                    </div>
                                    <div class="chip chip-primary user-chip mb-2 me-2">
                                        <span>
                                            <span class="avatar">
                                                <img src="dist/img/avatar13.jpg" alt="user" class="avatar-img">
                                            </span>
                                            <a href="view-user-details.php"><span class="chip-text">Winston</span></a>
                                        </span>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <ul class="event-detail">
                        <!-- <div class="form-group">
                            <label class="form-label">Enquiry ID</label>
                            <input type="text" class="form-control" id="" value="86cvr79t2">
                        </div> -->

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
                            <span class="event-staff"></span>
                            <div class="viewallscheduels_btn"><iconify-icon icon="hugeicons:eye"></iconify-icon> View All Schedules</div>
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
                            <label class="form-label">Enquiry ID</label>
                            <input type="text" class="form-control" id="" value="86cvr79t2">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select name="" id="" class="form-control select2">
                                <option value="" disable readonly selected>
                                    Salect an Option</option>
                                <option value="Approved">Approved</option>
                                <option value="In Processing">
                                    In Processing</option>
                                <option value="Pending Further Information">
                                    Pending Further Information</option>
                                <option value="Prospect Tenant">
                                    Prospect Tenant</option>
                                <option value="Rejected">Rejected </option>
                                <option value="Suitable Tenant Identified">
                                    Suitable Tenant Identified
                                </option>
                            </select>

                        </div>

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
                        <div class="form-group">
                            <label class="form-label">Edit
                                Note</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <span class="ev-icon-wrap"> <label class="form-label">Message for Attendees :</label></span>
                            <textarea class="form-control"
                                rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi perferendis labore nesciunt, rerum sint!</textarea>
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

<!--edit enquiry information offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="offcanvasBottom"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="mynaui:user"></iconify-icon>
            Edit information
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
    <form class="" action="Enquiry-details.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Edit this Enquiry Information</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="John" id="Title">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="Johnson" id="firstname">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="John.johnson@example.com"
                                            id="Email">
                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Number</label>
                                        <div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
                                            <!-- Selected prefix -->
                                            <button class="pn-selected-prefix" aria-label="Select phonenumber prefix"
                                                id="js_trigger-dropdown" tabindex="1">
                                                <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                                    src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
                                                <!-- prettier-ignore -->
                                                <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="#081626" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <polyline points="6 9 12 15 18 9" />
                                                </svg>
                                            </button>
                                            <!-- Phone number input -->
                                            <div class="pn-input">
                                                <div class="pn-input__container">
                                                    <input class="pn-input__prefix" value="+31" type="text"
                                                        name="phonenumber-prefix" id="js_number-prefix" tabindex="-1" />
                                                    <input class="pn-input__phonenumber" id="js_input-phonenumber"
                                                        type="tel" name="phonenumber" pattern="\d*" value=""
                                                        placeholder=" " autocomplete="nope" required max="10"
                                                        tabindex="0" />
                                                    <small class="pn-input__error">
                                                        This is not a valid phone number
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- Dropdown -->
                                            <div class="pn-dropdown" id="js_dropdown">
                                                <div class="pn-search">
                                                    <!-- prettier-ignore -->
                                                    <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="#103155" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                    <input placeholder="Search for countries"
                                                        class="pn-search__input search" type="search"
                                                        id="js_search-input" autocomplete="nope" />
                                                </div>
                                                <!-- Country list -->
                                                <ul class="pn-list list" id="js_list"></ul>
                                                <div class="pn-list-item pn-list-item--no-results" style="display: none"
                                                    id="js_no-results-found">
                                                    No results found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Are you a student or a young professional?</label>
                                        <div class="flexoneselectgroup selectioncontainer">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="student">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Student
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="Family" value="Family">
                                                <label class="form-check-label" for="Family">
                                                    Family
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="professional" checked>
                                                <label class="form-check-label" for="gridRadios2">
                                                    Professional
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 Guarantorselect_column">
                                    <div class="form-group">
                                        <label class="form-label">Do you have UK Home Owner Guarantor?</label>
                                        <div class="flexoneselectgroup">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp1" value="gridRadiosp1" checked>
                                                <label class="form-check-label" for="gridRadiosp1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp2" value="gridRadiosp2">
                                                <label class="form-check-label" for="gridRadiosp2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 locationselect_colcontainer" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-label">Which University you are attending or going to
                                            attend?</label>
                                        <select class="form-control select2" id="universitySelect">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Northumbria">Northumbria</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="otherUniversityInput" style="display: none;">
                                        <label class="form-label">Please specify:</label>
                                        <input type="text" class="form-control" id="otherUniversityText">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Location </label>
                                        <input type="text" class="form-control" value="Manchester" id="Contact">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="addressline1" class="form-label"> Nationality </label>
                                        <input type="text" class="form-control" value="Indian">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Start tenancy Date</label>
                                        <input class="form-control customdataPicker" value="2024-07-15" type="text"
                                            name="" placeholder="" />
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="addressline1" class="form-label"> Weeks of rent </label>
                                        <input type="text" class="form-control" value="26">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="addressline1" class="form-label"> current weekly rental budget
                                        </label>
                                        <input type="text" class="form-control" value="200">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Bills Inclusive/Exclusive</label>
                                        <select class="form-control select2">
                                            <option disabled selected readonly>Please Select...</option>
                                            <option value="Bills Inclusive" selected>Bills Inclusive</option>
                                            <option value="Bills Exclusive">Bills Exclusive</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Are you a night or a day person?</label>
                                        <select class="form-control select2">
                                            <option disabled selected readonly value="">Please Select...</option>
                                            <option value="Night Person" selected>Night Person</option>
                                            <option value="Day Person">Day Person</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Group Size?</label>
                                        <select id="staffSelect" class="form-control select2">
                                            <option disabled selected readonly value="">Please Select...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected>5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10+</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Preferred method of contact:</label>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks1">
                                                    <label class="form-check-label" for="customChecks1">Email (you may
                                                        need to check your spam/junk folder)</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks2"
                                                        checked>
                                                    <label class="form-check-label" for="customChecks2">Phone
                                                        call</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks3">
                                                    <label class="form-check-label" for="customChecks3">Text</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks5">
                                                    <label class="form-check-label" for="customChecks4">WhatsApp</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Message</label>
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
<!-- edit enquiry information offcanvas modal end -->

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

<!-- phone number with country code custom code js and css -->
<link rel="stylesheet" href="dist/customplugins/phonecountry/phone-with-country.css">
<script src="dist/customplugins/phonecountry/list.min.js"></script>
<script src="dist/customplugins/phonecountry/phone-with-country.js"></script>
<!-- phone number with country code custom code js and css end-->

<!-- miltiselect dropdown with check box js file -->
<script src="dist/customplugins/customcheck-dropdown.js"></script>

<!-- Required Fullcalendar files JS -->
<script src="vendors/fullcalendar/index.global.min.js"></script>
<script src="vendors/%40fullcalendar/bootstrap5/index.global.min.js"></script>
<script src="dist/js/enquirycalendar.js"></script>

<!-- enquiry schedule viewing default calendar js -->
<script src="dist/js/enquiry-default-calendar.js"></script>

<!-- Required Fullcalendar files end -->

<!--  accept enquiry button text change on click js -->
<script>
    document.getElementById('acceptEnqBtn').addEventListener('click', function() {
        const acceptBtn = document.getElementById('acceptEnqBtn');
        // Change button text to "Accepted" with a check icon
        acceptBtn.innerHTML = 'Accepted <iconify-icon icon="lets-icons:check-fill"></iconify-icon>';
        // Add the accepted class to change background color
        acceptBtn.classList.add('Enquiryaccepted');
    });
</script>

<!--  done button text change on click js -->
<script>
    document.getElementById('doneBtn').addEventListener('click', function() {
        const acceptBtn = document.getElementById('doneBtn');
        // Change button text to "Accepted" with a check icon
        acceptBtn.innerHTML = 'Done <iconify-icon icon="lets-icons:check-fill"></iconify-icon>';
        // Add the accepted class to change background color
        acceptBtn.classList.add('Enquiryaccepted');
    });
</script>

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

<!-- /*DataTable Init without column visibility*/ -->
<script>
    if ($(".Tablewithout_columnfilter").length > 0) {
        var targetDt = $('.Tablewithout_columnfilter').DataTable({
            dom: '<"row"<"col-7 mb-3"<"contact-toolbar-left">l><"col-5 mb-3"<"contact-toolbar-right"flip>>><"row"<"col-sm-12"t>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
            // Your existing DataTable configuration
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
            }],
            pagingType: 'simple_numbers',
            "order": [1, 'asc'],
            language: {
                search: "",
                searchPlaceholder: "Search here...",
                "info": "_START_ - _END_ of _TOTAL_",
                sLengthMenu: "View  _MENU_",
                paginate: {
                    next: '<i class="ri-arrow-right-s-line"></i>', // or '→'
                    previous: '<i class="ri-arrow-left-s-line"></i>' // or '←' 
                }
            },
            "drawCallback": function() {
                $('.common-datatable_wrapper').find('.pagination').addClass(
                    'custom-pagination pagination-simple justify-content-end');
            }
        });
        // Add search icon inside the input
        $('.dt-search input').before('<iconify-icon icon="majesticons:search-line"></iconify-icon>');
        $('.pagination').addClass('custom-pagination pagination-simple justify-content-end');
        $(document).on('click', '.del-button', function() {
            targetDt.row('.selected').remove().draw(false);
            return false;
        });
        $("div.contact-toolbar-left").html(
            '<div class="d-xxl-flex filterbyTable d-none align-items-center form-group mb-0"> <label class="flex-shrink-0 mb-0 me-2">Filter by:</label> </div> '
        );
        // Add DataTables length menu under contact-toolbar-left div
        if ($(".contact-toolbar-left .dataTables_length").length === 0) {
            var lengthMenu = $(
                '<div class="dataTables_length"><label for="example-select-1">Show </label><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="example-select-1"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><label for="example-select-1"> entries</label></div>'
            );
            $("div.contact-toolbar-left").append(lengthMenu);
        }
        $(".Tablewithout_columnfilter").parent().addClass('table-responsive');
    }
</script>
<!-- available propert table -->


<!-- property select and add functionality start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sendBtnDiv = document.getElementById('send_property_to_tent');
        const selectAllCheckbox = document.getElementById('selectAll');
        const rowCheckboxes = document.querySelectorAll('.rowCheckbox');
        const selectedDataDiv = document.getElementById('selectedDataDiv');
        const selectedDataTable = document.getElementById('selectedDataTable').querySelector('tbody');
        const selectAllSelectedCheckbox = document.getElementById('selectAllSelected');
        const doneBtn = document.getElementById('doneBtn');
        const selectedCountDiv = document.getElementById('selectedCount');
        // Function to update visibility of the "Add Properties" button
        function updateButtonVisibility() {
            const anyChecked = Array.from(rowCheckboxes).some(checkbox => checkbox.checked);
            sendBtnDiv.classList.toggle('hiddenelements', !anyChecked);
        }
        // Function to update visibility of the "Done" button
        function updateDoneButtonVisibility() {
            const anyChecked = selectedDataTable.querySelectorAll('.rowCheckboxSelected:checked').length > 0;
            doneBtn.classList.toggle('hiddenelements', !anyChecked);
            selectedCountDiv.textContent = anyChecked ?
                `${selectedDataTable.querySelectorAll('.rowCheckboxSelected:checked').length} selected` : '';
        }
        // Select/Deselect all checkboxes functionality
        selectAllCheckbox.addEventListener('change', function() {
            const checked = selectAllCheckbox.checked;
            rowCheckboxes.forEach(checkbox => {
                checkbox.checked = checked; // Check or uncheck each row checkbox
            });
            updateButtonVisibility(); // Update button visibility after selecting/deselecting
        });
        // Individual checkbox change event
        rowCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                // Update the "Select All" checkbox status based on individual checkbox states
                const allChecked = Array.from(rowCheckboxes).every(cb => cb.checked);
                selectAllCheckbox.checked = allChecked;
                updateButtonVisibility();
            });
        });
        // Modified sendBtn click handler
        document.getElementById('sendBtn').addEventListener('click', function() {
            const selectedCount = Array.from(rowCheckboxes).reduce((count, checkbox) => {
                if (checkbox.checked) {
                    count++;
                }
                return count;
            }, 0);
            if (selectedCount === 0) {
                return; // Prevent the alert if no properties are selected
            }
            Swal.fire({
                icon: 'success',
                title: 'Properties Added',
                text: `${selectedCount} properties added to tenant.`,
                confirmButtonText: 'OK'
            });
            selectedDataTable.innerHTML = ''; // Clear the selected data table
            rowCheckboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    const row = checkbox.closest('tr').cloneNode(true);
                    row.removeChild(row.firstElementChild); // Remove the original checkbox cell
                    const checkboxCell = document.createElement('td');
                    checkboxCell.innerHTML =
                        '<input type="checkbox" class="rowCheckboxSelected form-check-input">';
                    row.insertBefore(checkboxCell, row.firstElementChild);
                    selectedDataTable.appendChild(row);
                }
            });
            selectedDataDiv.classList.remove('hiddenelements'); // Show selected data div
            const selectedCheckboxes = selectedDataTable.querySelectorAll('.rowCheckboxSelected');
            selectedCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateDoneButtonVisibility);
            });
            updateDoneButtonVisibility();
        });
        // Functionality for the "Done" button
        doneBtn.addEventListener('click', function() {
            const selectedCount = selectedDataTable.querySelectorAll('.rowCheckboxSelected:checked')
                .length;
            Swal.fire({
                icon: 'question',
                title: 'Send Properties',
                text: `You have selected ${selectedCount} properties. Do you want to send these to the tenant?`,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    const selectedProperties = [];
                    const selectedCheckboxes = selectedDataTable.querySelectorAll(
                        '.rowCheckboxSelected:checked');
                    selectedCheckboxes.forEach(checkbox => {
                        const row = checkbox.closest('tr');
                        selectedProperties.push({
                            address: row.children[1].innerText,
                            area: row.children[2].innerText,
                            availableRooms: row.children[3].innerText
                        });
                    });
                    localStorage.setItem('selectedProperties', JSON.stringify(
                        selectedProperties));
                    Swal.fire({
                        icon: 'success',
                        title: 'Sent!',
                        text: `Selected properties have been sent to the tenant.`,
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>

<!-- add enquiry form student and professional condition js  -->
<script>
    $(document).ready(function() {
        // Toggle input field based on selection in locationselect_colcontainer
        $('#universitySelect').change(function() {
            if ($(this).val() === 'Other') {
                $('#otherUniversityInput').show();
            } else {
                $('#otherUniversityInput').hide();
            }
        });
        // Toggle columns based on student/professional selection
        $('input[name="gridRadios"]').change(function() {
            if ($(this).val() === 'student') {
                $('.locationselect_colcontainer').show();
                $('.Guarantorselect_column').hide();
            } else if ($(this).val() === 'professional') {
                $('.locationselect_colcontainer').hide();
                $('.Guarantorselect_column').show();
            } else if ($(this).val() === 'Family') {
                $('.locationselect_colcontainer').hide();
                $('.Guarantorselect_column').hide();
            }
        });
    });
</script>
<!-- add enquiry form student and professional condition js  end-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        function formatOption(option) {
            if (!option.id) {
                return option.text;
            }
            var $option = $(
                '<span class="' + $(option.element).data('category') + '">' + option.text + '</span>'
            );
            return $option;
        }
        $('#property-select').select2({
            templateResult: formatOption,
            templateSelection: formatOption
        }).on('select2:open', function() {
            setTimeout(function() {
                $('.select2-results__option').each(function() {
                    var category = $(this).find('span').attr('class');
                    $(this).addClass(category);
                });
            }, 0);
        });
    });
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

<!-- Bootstrap Notify JS -->
<script src="dist/js/bootstrap-notify.min.js"></script>
<script>
    // Function to show the success notification
    function showSuccessNotification() {
        setTimeout(function() {
            $('.alert.alert-dismissible .close').addClass('btn-close').removeClass('close');
        }, 100);
        $.notify("ID Copied Successfully", {
            animate: {
                enter: 'animated bounceInDown',
                exit: 'animated bounceOutUp'
            },
            type: "success",
            allow_dismiss: false,
            delay: 5000 // Set a delay for the notification to disappear
        });
    }
    // Event listener for the button to copy the ID and trigger the notification
    $('#success_notification').on('click', function(event) {
        event.preventDefault();
        // Get the ID value
        var idValue = $('#myID').val();
        // Create a temporary textarea to copy the ID
        var $temp = $('<textarea>');
        $('body').append($temp);
        $temp.val(idValue).select();
        document.execCommand('copy');
        $temp.remove();
        // Show success notification
        showSuccessNotification();
    });
</script>

<!-- custom enquiry dropdown starts changebale js -->
<script>
    document.querySelectorAll('.statusChange_dropdown .dropdown-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const selectedText = this.textContent
                .trim(); // Get the text without leading/trailing spaces
            const selectedColor = this.getAttribute('data-color');
            const dropdownButton = document.getElementById('dropdownMenuButton');
            // Update the dropdown button text and background color
            dropdownButton.innerHTML =
                `<iconify-icon icon="iconamoon:arrow-down-2"></iconify-icon> ${selectedText}`;
            dropdownButton.className = `btn dropdown-toggle ${selectedColor}`;
            // Close the dropdown after selection
            const dropdown = bootstrap.Dropdown.getInstance(dropdownButton);
            dropdown.hide();
        });
    });
    // Automatically close the dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdownElement = document.querySelector('.dropdown-menu.show');
        if (dropdownElement && !dropdownElement.contains(event.target) && !event.target.matches(
                '.dropdown-toggle')) {
            const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('dropdownMenuButton'));
            dropdown.hide();
        }
    });
</script>
<!-- end -->

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
                        checkbox.checked = false; // Uncheck the checkbox if the user cancels
                    }
                });
            }
        });
    });
</script>
<!-- ****************************
  Note set as alert confirmation popup js end
****************************** -->

<!-- department calendar select 2 (dont remove this select2 function this is only for department filter) -->
<script>
    $("#department_select").select2({
        placeholder: "Select a Department"
    })
    $("#DepartmentUser_select").select2({
        placeholder: "Select a User"
    })
</script>
<!-- end -->

<!-- open double offcanvas form the schedule viewing to open calendar off canvas  overlap js -->
<script>
    document.getElementById('openSecondOffcanvas').addEventListener('click', function() {
        var secondOffcanvas = new bootstrap.Offcanvas(document.getElementById('ViewAppoinment'));
        secondOffcanvas.show();
        document.getElementById('viewingSchedule').classList.add('show');
    });
</script>
<!-- open double offcanvas form the schedule viewing to open calendar off canvas  overlap js end-->


<!-- hide show calendar for schedule viewing  -->
 <script>
 $(document).ready(function () {
    $('#toggleCalendar').click(function () {
        const $calendarRow = $('.calendar-row');

        if ($calendarRow.hasClass('minimizing') || $calendarRow.css('opacity') == '0') {
            // Restore the calendar
            $calendarRow.removeClass('minimizing').addClass('maximizing');

            // Update button text
            $(this).html('<iconify-icon icon="solar:minimize-broken"></iconify-icon> Minimize Calendar');
        } else {
            // Minimize the calendar
            $calendarRow.removeClass('maximizing').addClass('minimizing');

            // Update button text
            $(this).html('<iconify-icon icon="solar:maximize-broken" style="color: black"></iconify-icon> Show Calendar');
        }
    });
});


 </script>