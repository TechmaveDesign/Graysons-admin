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

            <?php// include('headers/contracts-header.php') ?>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Lettings Admin </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">
                            <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button>
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

                    </header>

                    <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#AddPropertytb">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text">Applications Received</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="tab" href="#ContractsStatuses">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text">Contract Statuses</span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="tab" href="#ParkingContracts">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text">Parking Contracts</span>
                                </div>
                            </a>
                        </li>

                    </ul>

                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="userFilters onerowfilter longFiltersContainer" id="filterDiv"
                                style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-12">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="actionrequired">Action Required
                                                                        </option>
                                                                        <option value="stale">Stale</option>
                                                                        <option value="unset">Unset</option>
                                                                        <option value="1">Application Received</option>
                                                                        <option value="13">R2R Info Next Academic Year
                                                                        </option>
                                                                        <option value="14">Rent Advance Received
                                                                        </option>
                                                                        <option value="15">Ready For Contract</option>
                                                                        <option value="2">Reference Check Issued
                                                                        </option>
                                                                        <option value="3">Contract Issued</option>
                                                                        <option value="4">Landlord To Sign</option>
                                                                        <option value="12">Utility Contract to be sent
                                                                        </option>
                                                                        <option value="8">Awaiting Tenancy Setup
                                                                        </option>
                                                                        <option value="11">Utility Contract Sent
                                                                        </option>
                                                                        <option value="5">R2R Information This Academic
                                                                            Year</option>
                                                                        <option value="6">Completed</option>
                                                                        <option value="7">Application Withdrawn</option>
                                                                        <option value="9">Replacement Found</option>
                                                                        <option value="10">Tenancy Cancellation</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Property</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option disabled="" selected="" value="">Please
                                                                            Select...</option>
                                                                        <option value="2">Communal Area Inspection House
                                                                            10</option>
                                                                        <option value="7">Communal Area Inspection House
                                                                            14</option>
                                                                        <option value="21">Communal Area Inspection
                                                                            House 18</option>

                                                                    </select>

                                                                </div>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Contracts</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option disabled="" selected="" value="">Please
                                                                            Select...</option>
                                                                        <option value="2">Stale Application Received
                                                                        </option>
                                                                        <option value="3">Stale Reference Check Issued
                                                                        </option>
                                                                        <option value="4">Stale Contract Issued</option>

                                                                        <option value="5">Stale R2R Information This
                                                                            Academic Year</option>
                                                                        <option value="6">Stale Awaiting Tenancy Setup
                                                                        </option>
                                                                        <option value="7">Stale Tenancy Cancellation
                                                                        </option>

                                                                        <option value="8">Stale Utility Contract Sent
                                                                        </option>
                                                                        <option value="9">Stale Utility Contract to be
                                                                            sent</option>
                                                                        <option value="10">Stale R2R Info Next Academic
                                                                            Year</option>
                                                                        <option value="11">Stale Ready For Contract
                                                                        </option>
                                                                        <option value="12">Contract Statuses</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">

                                                                <div class="form-group">
                                                                    <label class="form-label">Start / End Date</label>
                                                                    <input class="form-control" type="text"
                                                                        name="daterange" value="Pick a Date">
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

                            <div class="tab-content notpMargin_tab">
                                <div class="tab-pane fade show active" id="AddPropertytb">
                                    <div class="contact-list-view">

                                        <div class="tabtable_tbHeading">
                                            <h1>All Applicants</h1>
                                        </div>

                                        <table class="table common-datatable nowrap w-100 ">
                                            <thead>
                                                <tr>

                                                    <th>Applicant Name</th>
                                                    <th>Applicant Email Address</th>
                                                    <th>Applicant Contact Number</th>
                                                    <th>Form Submitted Date </th>
                                                    <th>Application Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>
                                                        <a href="staff-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Morgan
                                                                        Freeman</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="">morgan@jampack.com</td>
                                                    <td>+145 52 5689</td>

                                                    <td>13 Jan, 2020</td>
                                                   
                                                    <td><span class="badge badge-soft-success  my-1  me-2">Application Received</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a href="application-preview.php"
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon
                                                                                icon="ant-design:eye-outlined">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>
                                                                <button
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                        class="icon"><span class="feather-icon"><i
                                                                                data-feather="trash"></i></span></span></button>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <a href="staff-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Huma
                                                                        Therman</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="">huma@clariesup.au</td>
                                                    <td>+234 48 2365</td>
                                                    <td>13 Jan, 2020</td>
                                                   
                                                    <td><span class="badge badge-soft-success  my-1  me-2">Application Received</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a href="application-preview.php"
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon
                                                                                icon="ant-design:eye-outlined">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>
                                                                <button
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                        class="icon"><span class="feather-icon"><i
                                                                                data-feather="trash"></i></span></span></button>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <a href="staff-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Charlie
                                                                        Chaplin</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="">charlie@leernoca.monster</td>
                                                    <td>+741 56 7896</td>

                                                    <td>13 Jan, 2019</td>
                                                   
                                                    <td><span class="badge badge-soft-success  my-1  me-2">Application Received</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a href="application-preview.php"
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon
                                                                                icon="ant-design:eye-outlined">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>
                                                                <button
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                        class="icon"><span class="feather-icon"><i
                                                                                data-feather="trash"></i></span></span></button>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <a href="staff-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Winston
                                                                        Churchil</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="">winston@worthniza.ga</td>
                                                    <td>+145 52 5463</td>
                                                    <td>13 Jan, 2020</td>
                                                   
                                                    <td><span class="badge badge-soft-success  my-1  me-2">Application Received</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a href="application-preview.php"
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon
                                                                                icon="ant-design:eye-outlined">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>
                                                                <button
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                        class="icon"><span class="feather-icon"><i
                                                                                data-feather="trash"></i></span></span></button>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>
                                                        <a href="staff-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Tom Cruz</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="">tomcz@jampack.com</td>
                                                    <td>+145 52 5463</td>
                                                    <td>13 Jan, 2020</td>
                                                   
                                                    <td><span class="badge bgadpastevent">Awaiting Details</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a href="application-preview.php"
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon
                                                                                icon="ant-design:eye-outlined">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>
                                                                <button
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                        class="icon"><span class="feather-icon"><i
                                                                                data-feather="trash"></i></span></span></button>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>
                                                        <a href="staff-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Dean Shaw</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="">dean-shaw@poww.me</td>
                                                    <td>+145 52 5463</td>
                                                    <td>13 Jan, 2020</td>
                                                   
                                                    <td><span class="badge badge-soft-success  my-1  me-2">Application Received</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a href="application-preview.php"
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon
                                                                                icon="ant-design:eye-outlined">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>
                                                                <button
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"
                                                                    id="del-button"><span class="icon"><span
                                                                            class="feather-icon"><i
                                                                                data-feather="trash"></i></span></span></button>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>
                                                        <a href="staff-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Danial
                                                                        Craig</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="">danialc@jampack.com</td>
                                                    <td>+145 52 5463</td>
                                                    <td>13 Jan, 2020</td>
                                                   
                                                    <td><span class="badge bgadpastevent">Awaiting Details</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a href="application-preview.php"
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon
                                                                                icon="ant-design:eye-outlined">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>

                                                                <button
                                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button "><span
                                                                        class="icon"><span class="feather-icon"><i
                                                                                data-feather="trash"></i></span></span></button>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="ContractsStatuses">
                                    <div class="contact-list-view">
                                    <div class="tabtable_tbHeading">
                                            <h1>Contract Statuses</h1>
                                        </div>
                                        <table class="table common-datatable nowrap w-100 ">
                                            <thead>
                                                <tr>

                                                    <th>Name </th>
                                                    <th>Property</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Action By</th>
                                                    <th>Completed By</th>
                                                    <th>Status</th>
                                                    <th>last Updated</th>
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
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Charlie
                                                                        Chaplin</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>17/05/2024 02:57</td>
                                                    <td>19/05/2024 16:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge badge-soft-success  my-1  me-2">Ready For
                                                            Contract</span>
                                                    </td>
                                                    <td>26/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">

                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon icon="teenyicons:eye-outline">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>
                                                                <a href="generate-contract.php"
                                                                    class="btn btn-sm commonAddnewButton generateContarct_btn btn-primary ms-3"><span><span
                                                                            class="icon"><span class="feather-icon">
                                                                                <iconify-icon icon="eva:plus-fill">
                                                                                </iconify-icon>
                                                                            </span></span><span
                                                                            class="btn-text">Generate Contract
                                                                        </span></span></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Jane Doe</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="1234 Elm Street, Springfield, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>15/05/2024 10:30</td>
                                                    <td>17/05/2024 09:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td><span class="badge bg-info">Application Received</span></td>
                                                    <td>23/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">John Smith</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="5678 Oak Avenue, Rivertown, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>16/05/2024 12:45</td>
                                                    <td>18/05/2024 11:30</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge bg-warning">Reference Check issued</span>
                                                    </td>
                                                    <td>24/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Alice
                                                                        Johnson</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="9101 Maple Lane, Lakeside, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>14/05/2024 15:20</td>
                                                    <td>16/05/2024 19:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge bgadpastevent">Awaiting Details</span>
                                                    </td>
                                                    <td>22/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Alice
                                                                        Johnson</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="9101 Maple Lane, Lakeside, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>18/05/2024 15:20</td>
                                                    <td>24/05/2024 19:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge bgadjustment">Awaiting Room
                                                            Allowcation</span>
                                                    </td>
                                                    <td>29/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Alice
                                                                        Johnson</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="9101 Maple Lane, Lakeside, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>18/05/2024 15:20</td>
                                                    <td>24/05/2024 19:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge bg-secondary">Awaiting Tenancy Setup </span>
                                                    </td>
                                                    <td>29/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                <div class="tab-pane fade" id="ParkingContracts">
                                    <div class="contact-list-view">
                                    <div class="tabtable_tbHeading">
                                            <h1>Parking Contracts</h1>
                                        </div>
                                        <table class="table common-datatable nowrap w-100 ">
                                            <thead>
                                                <tr>

                                                    <th>Name </th>
                                                    <th>Property</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Action By</th>
                                                    <th>Completed By</th>
                                                    <th>Status</th>
                                                    <th>last Updated</th>
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
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Charlie
                                                                        Chaplin</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>17/05/2024 02:57</td>
                                                    <td>19/05/2024 16:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge badge-soft-success  my-1  me-2">Ready For
                                                            Contract</span>
                                                    </td>
                                                    <td>26/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">

                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
                                                                    <span class="icon"><span class="feather-icon">
                                                                            <iconify-icon icon="teenyicons:eye-outline">
                                                                            </iconify-icon>
                                                                        </span></span>
                                                                </a>
                                                                <a href="generate-parking-contract.php"
                                                                    class="btn btn-sm commonAddnewButton generateContarct_btn btn-primary ms-3"><span><span
                                                                            class="icon"><span class="feather-icon">
                                                                                <iconify-icon icon="eva:plus-fill">
                                                                                </iconify-icon>
                                                                            </span></span><span
                                                                            class="btn-text">Generate Parking Contract
                                                                        </span></span></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Jane Doe</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="1234 Elm Street, Springfield, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>15/05/2024 10:30</td>
                                                    <td>17/05/2024 09:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td><span class="badge bg-info">Application Received</span></td>
                                                    <td>23/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">John Smith</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="5678 Oak Avenue, Rivertown, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>16/05/2024 12:45</td>
                                                    <td>18/05/2024 11:30</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge bg-warning">Reference Check issued</span>
                                                    </td>
                                                    <td>24/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Alice
                                                                        Johnson</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="9101 Maple Lane, Lakeside, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>14/05/2024 15:20</td>
                                                    <td>16/05/2024 19:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge bgadpastevent">Awaiting Details</span>
                                                    </td>
                                                    <td>22/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Alice
                                                                        Johnson</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="9101 Maple Lane, Lakeside, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>18/05/2024 15:20</td>
                                                    <td>24/05/2024 19:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge bgadjustment">Awaiting Room
                                                            Allowcation</span>
                                                    </td>
                                                    <td>29/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                                                        <a href="view-user-details.php">
                                                            <div class="media align-items-center">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="d-block text-high-em">Alice
                                                                        Johnson</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="property-details.php">
                                                            <div class="LongMesage_container">
                                                                <input
                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                    value="9101 Maple Lane, Lakeside, USA">
                                                                <button class="view-btn tablemessageview_btn"
                                                                    type="button" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Click to view"
                                                                    data-bs-original-title="Click to view Full Message">
                                                                    <i class="bi bi-eye"></i> Read More
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>18/05/2024 15:20</td>
                                                    <td>24/05/2024 19:00</td>
                                                    <td>17/09/2024 </td>
                                                    <td>19/10/2024 </td>
                                                    <td>
                                                        <span class="badge bg-secondary">Awaiting Tenancy Setup </span>
                                                    </td>
                                                    <td>29/05/2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                    href="view-contract-details.php">
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
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>

<!-- add time log offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddTimeLog"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="material-symbols:event-upcoming-outline" width="1.2em" height="1.2em"></iconify-icon>
            Add Time Log
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
    <form class="" action="time-logs.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Time Log</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="2">Communal Area Inspection House 10</option>
                                            <option value="7">Communal Area Inspection House 14</option>
                                            <option value="21">Communal Area Inspection House 18</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">Start Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">End Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
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

<!-- edit time log offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Edittimelog"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="material-symbols:event-upcoming-outline" width="1.2em" height="1.2em"></iconify-icon>
            Edit Time Log
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
    <form class="" action="time-logs.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Edit This Time Log</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="2">Communal Area Inspection House 10</option>
                                            <option value="7" selected>Communal Area Inspection House 14</option>
                                            <option value="21">Communal Area Inspection House 18</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="select Date" readonly="readonly" value="08/05/2024">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">Start Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="3:04 PM"
                                                class="form-control time__pickers" id="timepicker"
                                                placeholder="Select Time" required="" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="select Date" readonly="readonly" value="10/05/2024">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">End Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="4:04 PM"
                                                class="form-control time__pickers" id="timepicker"
                                                placeholder="Select Time" required="" readonly="">
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

<!--Offcanvas Wrapper-->
<div class="offcanvas rightOffcanvas offcanvas-end" tabindex="-1" id="logDetailModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="ion:calendar-outline"></iconify-icon>
            View Log Details
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

            </div>

            <ul class="issueHistoryList eventMessageContent">
                <li><label for="shortmessage" class="form-label historyLabel">
                        <iconify-icon icon="tabler:building"></iconify-icon> Property :
                    </label>

                    <a href="property-details.php">Graysons Properties Ltd, Newcastle Upon Tyne </a>
                </li>

                <li><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="mdi:git-issue"></iconify-icon> issue :
                    </label>

                    <div class="tipmePeriod">
                        <a href="view-ticket.php" target="_blank">Bedroom > Other</a>
                    </div>
                </li>

                <li><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="fluent-mdl2:date-time-2"></iconify-icon> Period :
                    </label>

                    <div class="tipmePeriod">
                        <p>16/04/2024 13:30 - 16/04/2024 21:30</p>
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

<!-- filters show hide script -->
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
<!-- filters show hide script end-->