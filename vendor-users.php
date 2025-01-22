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
            <?php include('headers/user-header.php') ?>
            <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">

                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Vendors</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
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
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Import</a>
                            </div>
                            <button class="btn btn-sm commonAddnewButton btn-primary ms-3" data-bs-toggle="offcanvas"
                                data-bs-target="#addVendorcanvas" aria-controls="offcanvasExample"><span><span
                                        class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg></span></span><span class="btn-text">Add new
                                        Vendor</span></span></button>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="sustomdividerLedtArrow"></div>
                    </header>

                    <!-- users type tabs -->
                    <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">
                        <button class="scroll-btn prev" type="button">
                            <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                        </button>

                        <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#Activeusers">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-text">Active Users</span>

                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#Inactive_users">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-text">Inactive Users</span>

                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#emailnot_verified">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-text">Email not Verified</span>

                                    </div>
                                </a>
                            </li>

                        </ul>

                        <button class="scroll-btn next" type="button">
                            <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                        </button>

                    </div>

                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3 align-items-center">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="form-label">Users</label>
                                                    <select name="user" class="form-control select2">
                                                        <option value="" selected disabled>Select a User
                                                        </option>
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
                                            <div class="col-lg-3">

                                                <div class="form-group">
                                                    <label class="form-label">Filter By Email</label>
                                                    <input class="form-control" placeholder="Email Id" value=""
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">

                                                <div class="form-group">
                                                    <label class="form-label">Filter By Contact No.</label>
                                                    <input class="form-control" placeholder="Contact Number" value=""
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group withoutlabel_field_align">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckList6">
                                                        <label class="form-check-label" for="customCheckList6">
                                                            Active Tenancy
                                                            <span class="done-strikethrough"></span>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- add new content here start -->
                            <div class="post-list propertyTabContent">

                                <div class="tab-content">

                                    <div class="tab-pane fade show active" id="Activeusers">
                                        <div class="fullwidthTabInner_content_container">
                                            <div class="contact-list-view">

                                                <table class="table common-datatable nowrap w-100 ">
                                                    <thead>
                                                        <tr>

                                                            <th>Name</th>
                                                            <th>Email Address</th>
                                                            <th>Contact Number</th>
                                                            <th>Roles</th>
                                                            <th>Date Created</th>
                                                            <th>Status</th>
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

                                                            <td>Vendor</td>
                                                            <td>13 Jan, 2020</td>

                                                            <td><span
                                                                    class="badge badge-soft-success  my-1  me-2">Active</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>

                                                                        <button
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="trash"></i></span></span></button>
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

                                                            <td>Vendor</td>
                                                            <td>13 Jan, 2020</td>
                                                            <td><span
                                                                    class="badge badge-soft-success  my-1  me-2">Active</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>
                                                                        <button
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="trash"></i></span></span></button>
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

                                                            <td>Vendor</td>
                                                            <td>13 Jan, 2019</td>
                                                            <td><span
                                                                    class="badge badge-soft-success  my-1  me-2">Active</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>

                                                                        <button
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="trash"></i></span></span></button>
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
                                                            <td>Vendor</td>
                                                            <td>13 Jan, 2020</td>
                                                            <td><span
                                                                    class="badge badge-soft-success  my-1  me-2">Active</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>

                                                                        <button
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="trash"></i></span></span></button>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="Inactive_users">
                                        <div class="fullwidthTabInner_content_container">
                                            <div class="contact-list-view">

                                                <table class="table common-datatable nowrap w-100 ">
                                                    <thead>
                                                        <tr>

                                                            <th>Name</th>
                                                            <th>Last Login</th>
                                                            <th>Last App Login</th>
                                                            <th>Status</th>
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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span class="d-block text-high-em">Graysons
                                                                                Properties</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td>13 Mar, 2024 15:30</td>
                                                            <td>15 Jan, 2020 8:40</td>
                                                            <td><span class="badge bg-danger">Inactive</span></td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>

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
                                                            <td>13 Mar, 2024 15:30</td>
                                                            <td>15 Jan, 2020 8:40</td>
                                                            <td><span class="badge bg-danger">Inactive</span></td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>

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
                                                            <td>13 Mar, 2024 15:30</td>
                                                            <td>15 Jan, 2020 8:40</td>
                                                            <td><span class="badge bg-danger">Inactive</span></td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>

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
                                                            <td>13 Mar, 2024 15:30</td>
                                                            <td>15 Jan, 2020 8:40</td>
                                                            <td><span class="badge bg-danger">Inactive</span></td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>

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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span class="d-block text-high-em">Tom
                                                                                Cruz</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td>13 June, 2024 12:20</td>
                                                            <td>12 June, 2020 2:40</td>
                                                            <td><span class="badge bg-danger">Inactive</span></td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View User Details"
                                                                            href="view-user-details.php"><span
                                                                                class="icon"><span
                                                                                    class="feather-icon"><i
                                                                                        data-feather="eye"></i></span></span></a>

                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="emailnot_verified">
                                        <div class="fullwidthTabInner_content_container">
                                            <div class="contact-list-view">

                                                <table class="table common-datatable nowrap w-100 ">
                                                    <thead>
                                                        <tr>

                                                            <th>Name</th>
                                                            <th>Email Address</th>
                                                            <th>Last Requested</th>
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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span
                                                                                class="d-block text-high-em namelinkURl">Morgan
                                                                                Freeman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td class="">morgan@jampack.com</td>
                                                            <td>13 Jan, 2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <button
                                                                            class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                            id="buttonWihtext"><span class="icon">
                                                                                <iconify-icon
                                                                                    icon="fluent:branch-request-16-regular">
                                                                                </iconify-icon> Request Verification
                                                                            </span></button>
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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span
                                                                                class="d-block text-high-em namelinkURl">Emma
                                                                                Watson</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td class="">emma@example.com</td>
                                                            <td>25 Mar, 2023</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <button
                                                                            class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                            id="buttonWihtext">
                                                                            <span class="icon">
                                                                                <iconify-icon
                                                                                    icon="fluent:branch-request-16-regular">
                                                                                </iconify-icon> Request Verification
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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span
                                                                                class="d-block text-high-em namelinkURl">Leonardo
                                                                                DiCaprio</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td class="">leo@example.com</td>
                                                            <td>8 Aug, 2022</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <button
                                                                            class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                            id="buttonWihtext">
                                                                            <span class="icon">
                                                                                <iconify-icon
                                                                                    icon="fluent:branch-request-16-regular">
                                                                                </iconify-icon> Request Verification
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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span
                                                                                class="d-block text-high-em namelinkURl">Jennifer
                                                                                Lawrence</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td class="">jen@example.com</td>
                                                            <td>17 Nov, 2023</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <button
                                                                            class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                            id="buttonWihtext">
                                                                            <span class="icon">
                                                                                <iconify-icon
                                                                                    icon="fluent:branch-request-16-regular">
                                                                                </iconify-icon> Request Verification
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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span
                                                                                class="d-block text-high-em namelinkURl">Tom
                                                                                Hanks</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td class="">tom@example.com</td>
                                                            <td>30 Sep, 2022</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <button
                                                                            class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                            id="buttonWihtext">
                                                                            <span class="icon">
                                                                                <iconify-icon
                                                                                    icon="fluent:branch-request-16-regular">
                                                                                </iconify-icon> Request Verification
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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span
                                                                                class="d-block text-high-em namelinkURl">Scarlett
                                                                                Johansson</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td class="">scarlett@example.com</td>
                                                            <td>5 May, 2023</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <button
                                                                            class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                            id="buttonWihtext">
                                                                            <span class="icon">
                                                                                <iconify-icon
                                                                                    icon="fluent:branch-request-16-regular">
                                                                                </iconify-icon> Request Verification
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
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span
                                                                                class="d-block text-high-em namelinkURl">Chris
                                                                                Hemsworth</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td class="">chris@example.com</td>
                                                            <td>20 Oct, 2022</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <button
                                                                            class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                                            id="buttonWihtext">
                                                                            <span class="icon">
                                                                                <iconify-icon
                                                                                    icon="fluent:branch-request-16-regular">
                                                                                </iconify-icon> Request Verification
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

<!-- add Vendor offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addVendorcanvas"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="si:user-duotone"></iconify-icon>
            Add New Vendor
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
    <form class="" action="vendor-users.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add Vendor Details</div>

                <div class="formstartcontainer">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="vendorName" class="form-label">Vendor Name <span
                                        class="RequiredField_badge">*</span></label>
                                <input type="text" class="form-control" id="vendorName" placeholder="Enter vendor name">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="vendorEmail" class="form-label">Email Address <span
                                        class="RequiredField_badge">*</span></label>
                                <input type="email" class="form-control" id="vendorEmail"
                                    placeholder="Enter email address">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Contact
                                    Number</label>
                                <div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
                                    <!-- Selected prefix -->
                                    <button class="pn-selected-prefix" aria-label="Select phonenumber prefix"
                                        id="js_trigger-dropdown" tabindex="1">
                                        <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                            src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
                                        <!-- prettier-ignore -->
                                        <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#081626"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                    </button>
                                    <!-- Phone number input -->
                                    <div class="pn-input">
                                        <div class="pn-input__container">
                                            <input class="pn-input__prefix" value="+31" type="text"
                                                name="phonenumber-prefix" id="js_number-prefix" tabindex="-1" />
                                            <input class="pn-input__phonenumber" id="js_input-phonenumber" type="tel"
                                                name="phonenumber" pattern="\d*" value="" placeholder=" "
                                                autocomplete="nope" max="10" tabindex="0" />
                                            <small class="pn-input__error">
                                                This is not a valid
                                                phone number
                                            </small>
                                        </div>
                                    </div>
                                    <!-- Dropdown -->
                                    <div class="pn-dropdown" id="js_dropdown">
                                        <div class="pn-search">
                                            <!-- prettier-ignore -->
                                            <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="#103155"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="11" cy="11" r="8">
                                                </circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                            <input placeholder="Search for countries" class="pn-search__input search"
                                                type="search" id="js_search-input" autocomplete="nope" />
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Contact" class="form-label"> Alt Contact Number</label>
                                <input type="phone" class="form-control" id="Contact">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="addressline1" class="form-label"> Address Line 1 <span
                                        class="RequiredField_badge">*</span></label>
                                <input type="text" class="form-control" id="addressline1">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="addressline2" class="form-label"> Address Line 2</label>
                                <input type="text" class="form-control" id="addressline2">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Town/City" class="form-label"> Town/City <span
                                        class="RequiredField_badge">*</span></label>
                                <input type="text" class="form-control" id="Town/City">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="County" class="form-label"> Country <span
                                        class="RequiredField_badge">*</span></label>
                                <input type="text" class="form-control" id="County">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Postcode" class="form-label"> Postcode <span
                                        class="RequiredField_badge">*</span></label>
                                <input type="text" class="form-control" id="Postcode">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vendorCategory" class="form-label">Category <span
                                        class="RequiredField_badge">*</span></label>
                                <select class="form-control vendor-category-select select2" required>
                                    <option value="" disabled>Select category</option>
                                    <option value="Electrical Services">Electrical Services</option>
                                    <option value="Plumbing Services">Plumbing Services</option>
                                    <option value="Catering Services">Catering Services</option>
                                    <option value="Cleaning Services">Cleaning Services</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-lg-4 other-category-div" style="display: none;">
                            <div class="form-group">
                                <label for="otherCategoryInput" class="form-label">Other Category</label>
                                <input type="text" class="form-control other-category-input"
                                    placeholder="Enter other category">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vendorServiceArea" class="form-label">Service Area <span
                                        class="RequiredField_badge">*</span></label>
                                <input type="text" class="form-control" id="vendorServiceArea"
                                    placeholder="Enter service area" required>
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
<!-- add Vendor end -->

<?php include('footer.php') ?>

<!-- active inactive user status sitcher js -->
<script>
    const switchToggles = document.querySelectorAll(".switchToggle");
    const switchStatuses = document.querySelectorAll(".switchStatus");
    switchToggles.forEach((toggle, index) => {
        toggle.addEventListener("change", function() {
            if (this.checked) {
                switchStatuses[index].textContent = "Active";
                // Perform action for active state
            } else {
                switchStatuses[index].textContent = "Inactive";
                // Perform action for inactive state
            }
        });
    });
</script>

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

<!-- user Delete alert -->
<script>
    $(document).on("click", '.del-button', function(e) {
        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete This User ?</h5><p class="sweetaleart_description">Deleting a User will permanently remove from your Admin Panel.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete User',
            cancelButtonText: 'No, Keep User',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    html: '<div class="d-flex align-items-center"><i class="ri-delete-bin-5-fill me-2 fs-3 text-danger"></i><h5 class="text-danger mb-0">This User has been deleted!</h5></div>',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        actions: 'justify-content-start w-100',
                    },
                    buttonsStyling: false,
                })
            }
        })
    });
</script>
<!-- user Delete alert end-->

<!-- add vendor modal > other category option functionality js start -->
<script>
    $(document).ready(function() {
        // Initialize Select2 for all category dropdowns
        $('.vendor-category-select').select2();
        // Listen for the change event on any Select2 dropdown with the `vendor-category-select` class
        $(document).on('change', '.vendor-category-select', function() {
            const $parentForm = $(this).closest('form'); // Find the parent form of the dropdown
            const selectedValue = $(this).val();
            // Find the corresponding "Other Category" input field within the same form
            const $otherCategoryDiv = $parentForm.find('.other-category-div');
            const $otherCategoryInput = $parentForm.find('.other-category-input');
            if (selectedValue === 'Other') {
                $otherCategoryDiv.show(); // Show the "Other Category" input field
                $otherCategoryInput.attr('required', 'required'); // Make it required
            } else {
                $otherCategoryDiv.hide(); // Hide the "Other Category" input field
                $otherCategoryInput.removeAttr('required'); // Remove the required attribute
                $otherCategoryInput.val(''); // Clear the input value
            }
        });
    });
</script>
<!-- end -->

<!-- phone number with country code custom code js and css -->
<link rel="stylesheet" href="dist/customplugins/phonecountry/phone-with-country.css">
<script src="dist/customplugins/phonecountry/list.min.js"></script>
<script src="dist/customplugins/phonecountry/phone-with-country.js"></script>
<!-- phone number with country code custom code js and css end-->