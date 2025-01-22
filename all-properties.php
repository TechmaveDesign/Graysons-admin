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
            <?php include('headers/property-header.php') ?>
            <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>All Properties </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="all-properties.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <div class="archived " id="btnproperty_archived">
                                <a href="#" class="archivedBtn" id="archivedBtnTU">
                                    <iconify-icon icon="material-symbols-light:archive-outline"></iconify-icon> Archived
                                </a>
                            </div>

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

                            <a class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                href="add-new-property.php">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Add New Property
                            </a>

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

                    <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">

                        <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#Activeproperties">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-text">Active Properties</span>

                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#archivedproperties">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-text">Archived Properties</span>

                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-9">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Address</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="23 St Bedes Terrace">23 St Bedes
                                                                            Terrace</option>
                                                                        <option value="6 Mowbray Close">6 Mowbray Close
                                                                        </option>
                                                                        <option value="9 Mowbray Close">9 Mowbray Close
                                                                        </option>
                                                                        <option value="45 Ormonde Street">45 Ormonde
                                                                            Street</option>
                                                                        <option value="43 Fordland Place">43 Fordland
                                                                            Place</option>
                                                                        <option value="1-4 Thornhill Crescent">1-4
                                                                            Thornhill Crescent</option>
                                                                        <option value="13 Glassey Terrace">13 Glassey
                                                                            Terrace</option>
                                                                        <option value="4 Glassey Terrace">4 Glassey
                                                                            Terrace</option>
                                                                        <option value="226-228 Hylton Road">226-228
                                                                            Hylton Road</option>
                                                                        <option value="55 Arbroath Road">55 Arbroath
                                                                            Road</option>
                                                                        <option value="61 Hall Farm Road">61 Hall Farm
                                                                            Road</option>
                                                                        <option value="27 Hall Farm Road">27 Hall Farm
                                                                            Road</option>
                                                                        <option value="27 Appleby Square">27 Appleby
                                                                            Square</option>
                                                                        <option value="16 Ardrossan Road">16 Ardrossan
                                                                            Road</option>
                                                                        <option value="1 Harvest Close">1 Harvest Close
                                                                        </option>
                                                                        <option value="19 Linacre Close">19 Linacre
                                                                            Close</option>
                                                                        <option value="7 The Leazes">7 The Leazes
                                                                        </option>
                                                                        <option value="3 Valiant Way">3 Valiant Way
                                                                        </option>
                                                                        <option value="26 Manor House">26 Manor House
                                                                        </option>
                                                                        <option value="57 Forsyth Road">57 Forsyth Road
                                                                        </option>
                                                                        <option value="35 Glenthorn Road">35 Glenthorn
                                                                            Road</option>
                                                                        <option value="23 Claremont Road">23 Claremont
                                                                            Road</option>
                                                                        <option value="125 Croydon Road">125 Croydon
                                                                            Road</option>
                                                                        <option value="131 Croydon Road">131 Croydon
                                                                            Road</option>
                                                                        <option value="1-7 Union Street">1-7 Union
                                                                            Street</option>
                                                                        <option value="1 Kingswood Drive">1 Kingswood
                                                                            Drive</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Area</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Sunderland">Sunderland</option>
                                                                        <option value="Bedlington">Bedlington</option>
                                                                        <option value="Newcastle upon Tyne">Newcastle
                                                                            upon Tyne</option>
                                                                        <option value="Durham">Durham</option>
                                                                        <option value="Lanchester">Lanchester</option>
                                                                        <option value="Newcastle Upon Tyne ">Newcastle
                                                                            Upon Tyne </option>
                                                                        <option value="Ponteland">Ponteland</option>
                                                                        <option value="Newcastle Upon Tyne">Newcastle
                                                                            Upon Tyne</option>
                                                                        <option value="Jesmond">Jesmond</option>
                                                                        <option value="London">London</option>
                                                                        <option value="West One">West One</option>
                                                                        <option value="Newcastle">Newcastle</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Unit Type</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Studio">Studio</option>
                                                                        <option value="Annex ">Annex </option>
                                                                        <option value="Room">Room</option>
                                                                        <option value="Basement Studios">Basement
                                                                            Studios</option>
                                                                        <option value="Flat">Flat</option>
                                                                        <option value="Cottage">Cottage</option>
                                                                        <option value="Annex Flat 1">Annex Flat 1
                                                                        </option>
                                                                        <option value="Bedroom">Bedroom</option>
                                                                        <option value="Annex Studio">Annex Studio
                                                                        </option>
                                                                        <option value="Bedrooms 1">Bedrooms 1</option>
                                                                        <option value="Bedrooms 2">Bedrooms 2</option>
                                                                        <option value="Bedrooms 3">Bedrooms 3</option>
                                                                        <option value="Bedrooms 4">Bedrooms 4</option>
                                                                        <option value="Bedrooms 5">Bedrooms 5</option>
                                                                        <option value="Bedrooms 6">Bedrooms 6</option>
                                                                        <option value="Bedrooms 7">Bedrooms 7</option>
                                                                    </select>

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
                                <div class="tab-pane fade show active" id="Activeproperties">
                                    <div class="fullwidthTabInner_content_container">
                                        <div class="contact-list-view">

                                            <table class="table common-datatable nowrap w-100 ">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="selectAllCheckbox3" value="unchecked">
                                                                <label class="form-check-label"
                                                                    for="selectAllCheckbox3"></label>
                                                            </div>
                                                        </th>
                                                        <th>Landlord</th>
                                                        <th>Address </th>
                                                        <th>Area</th>
                                                        <th>Total Properties</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" value="unchecked">
                                                                <label class="form-check-label"
                                                                    for="inlineCheckbox2"></label>
                                                            </div>
                                                        </td>
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
                                                            1 Harvest Close
                                                        </td>
                                                        <td>Sunderland</td>
                                                        <td>11</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">

                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"
                                                                        href="property-details.php"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" value="unchecked">
                                                                <label class="form-check-label"
                                                                    for="inlineCheckbox2"></label>
                                                            </div>
                                                        </td>
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
                                                                        <span class="d-block text-high-em">Huma
                                                                            Therman</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>23 Rosewood Avenue</td>
                                                        <td>Bristol</td>
                                                        <td>8</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" value="unchecked">
                                                                <label class="form-check-label"
                                                                    for="inlineCheckbox2"></label>
                                                            </div>
                                                        </td>
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
                                                                        <span class="d-block text-high-em">Morgan
                                                                            Freeman</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>17 Maple Street</td>
                                                        <td>Manchester</td>
                                                        <td>5</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" value="unchecked">
                                                                <label class="form-check-label"
                                                                    for="inlineCheckbox2"></label>
                                                            </div>
                                                        </td>
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
                                                                        <span class="d-block text-high-em">Winston
                                                                            Churchil</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>42 Elm Street</td>
                                                        <td>Leeds</td>
                                                        <td>12</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" value="unchecked">
                                                                <label class="form-check-label"
                                                                    for="inlineCheckbox2"></label>
                                                            </div>
                                                        </td>
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
                                                                        <span class="d-block text-high-em">Winston
                                                                            Churchil</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>9 Oak Lane</td>
                                                        <td>Liverpool</td>
                                                        <td>9</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" value="unchecked">
                                                                <label class="form-check-label"
                                                                    for="inlineCheckbox2"></label>
                                                            </div>
                                                        </td>
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
                                                                        <span class="d-block text-high-em">Winston
                                                                            Churchil</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>31 Willow Crescent</td>
                                                        <td>Newcastle</td>
                                                        <td>7</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
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

                                <div class="tab-pane fade" id="archivedproperties">
                                    <div class="fullwidthTabInner_content_container">
                                        <div class="contact-list-view">

                                            <table class="table common-datatable nowrap w-100 ">
                                                <thead>
                                                    <tr>
                                                        <th>Landlord</th>
                                                        <th>Address </th>
                                                        <th>Area</th>
                                                        <th>Total Properties</th>
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
                                                            1 Harvest Close
                                                        </td>
                                                        <td>Sunderland</td>
                                                        <td>11</td>
                                                        <td>Archived</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">

                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"
                                                                        href="property-details.php"><span
                                                                            class="icon"><span class="feather-icon"><i
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
                                                        <td>23 Rosewood Avenue</td>
                                                        <td>Bristol</td>
                                                        <td>8</td>
                                                        <td>Archived</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
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
                                                        <td>17 Maple Street</td>
                                                        <td>Manchester</td>
                                                        <td>5</td>
                                                        <td>Archived</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
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
                                                        <td>42 Elm Street</td>
                                                        <td>Leeds</td>
                                                        <td>12</td>
                                                        <td>Archived</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
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
                                                        <td>9 Oak Lane</td>
                                                        <td>Liverpool</td>
                                                        <td>9</td>
                                                        <td>Archived</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
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
                                                        <td>31 Willow Crescent</td>
                                                        <td>Newcastle</td>
                                                        <td>7</td>
                                                        <td>Archived</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="edit-property.php">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
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
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>

<?php include('footer.php') ?>

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

<!-- property type custom add and reflect on select2 -->
<script>
    $(document).ready(function() {
        $('#addPropertyTypeButton').on('click', function() {
            $('#newPropertyTypeDiv').toggleClass('hiddentype');
        });
        $('#savePropertyTypeButton').on('click', function() {
            var newPropertyType = $('#newPropertyType').val().trim();
            if (newPropertyType !== "") {
                var newOption = new Option(newPropertyType, newPropertyType, true, true);
                $('#propertyType').prepend(newOption).trigger('change');
                $('#newPropertyTypeDiv').addClass('hiddentype');
                $('#newPropertyType').val('');
            }
        });
    });
</script>
<!-- property type custom add and reflect on select2 -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAllCheckbox = document.getElementById('selectAllCheckbox3');
        const checkboxes = document.querySelectorAll('.common-datatable tbody .form-check-input');
        const archivedBtnTU = document.getElementById('archivedBtnTU');
        selectAllCheckbox.addEventListener('change', function() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = selectAllCheckbox.checked;
            });
        });
        archivedBtnTU.addEventListener('click', function(event) {
            event.preventDefault();
            let anyChecked = false;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    anyChecked = true;
                }
            });
            if (anyChecked) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to move this Document into the archived?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, archive it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        checkboxes.forEach(function(checkbox) {
                            if (checkbox.checked) {
                                $(checkbox.closest('tr')).fadeOut(500, function() {
                                    $(this).remove();
                                });
                            }
                        });
                        Swal.fire(
                            'Archived!',
                            'Your Document has been moved to archived.',
                            'success'
                        );
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        Swal.fire(
                            'Cancelled',
                            'Your Document is safe :)',
                            'error'
                        );
                    }
                });
            } else {
                Swal.fire(
                    'Please select Document',
                    'No Document selected.',
                    'warning'
                );
            }
        });
    });
</script>
<!-- document archived functionality end -->