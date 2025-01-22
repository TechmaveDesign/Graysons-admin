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

    .innerfix_navigation {
        position: fixed !important;
        width: 100% !important;
        height: 70px;
        left: 0px;
    }

    .hk-wrapper[data-layout="vertical"][data-layout-style="default"] .canvasFooterContainer {
        position: fixed !important;
        width: 100% !important;
        height: 70px;
    }
    #edit-title-container {
        margin-top: 10px;
    }

    [contenteditable="true"] {
        padding: 2px;
    }

    [contenteditable="true"]:focus {
        outline: none;
        border-color: #007bff;
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
                                    <h1>Manage Properties</h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="add-new-property.php"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block "
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block "></div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title=""
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

                    <form action="view-all-property-quotations.php" method="">
                        <div class="contact-body">

                            <div class="nicescroll-bar">
                                <div class="fullwidthTabInner_content_container">
                                    <div class="card card-border mb-lg-4 mb-3">
                                        <div class="card-header card-header-action">
                                            <div class="media align-items-center">
                                                <div class="media-head me-2">
                                                    <div class="avatar avatar-sm avatar-rounded">
                                                        <img src="dist/img/newimages/users/userdummy.png" alt="user"
                                                            class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="fw-medium text-dark"> Winston Churchil

                                                    </div>
                                                    <div class="fs-7"><a
                                                            href="view-user-details.php">winstonchurchil@gmail.com</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="enquiryRight_header_data TaskAction_wrapper">
                                                <div class="enquiryDate dueDate_container">
                                                    <iconify-icon icon="ion:calendar-outline">
                                                    </iconify-icon>
                                                    <div class="duedatelabel">Properties Added on : </div> Nov
                                                    20, 2024
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="fullwidthTabInner_content_container">

                                            <!-- Tabs -->
                                            <ul class="nav nav-tabs nav-line nav-icon autoloadTabs fullwidthCustom_tabsUL nav-light"
                                                id="propertylistingTabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="property1-tab"
                                                        data-bs-toggle="tab" data-bs-target="#property1" type="button"
                                                        role="tab" aria-controls="property1" aria-selected="true">
                                                        <iconify-icon icon="ph:building-light"></iconify-icon> Property 1
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="property2-tab" data-bs-toggle="tab"
                                                        data-bs-target="#property2" type="button" role="tab"
                                                        aria-controls="property2" aria-selected="false">
                                                        <iconify-icon icon="ph:building-light"></iconify-icon> Property 2
                                                    </button>
                                                </li>
                                            </ul>

                                            <!-- Tab Content -->
                                            <div class="tab-content mt-3" id="myTabContent">
                                                <div class="tab-pane fade show active" id="property1" role="tabpanel"
                                                    aria-labelledby="property1-tab">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="contact-list-view">
                                                                <div class="addFropertyform_Container">

                                                                    <div class="formstartcontainer">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Address</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class=" col-md-4">
                                                                                        <div class="form-group">
                                                                                            <label for=""
                                                                                                class="form-label">Area</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group">
                                                                                            <label for=""
                                                                                                class="form-label">Postcode</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="" value="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group">
                                                                                            <label for=""
                                                                                                class="form-label">Access
                                                                                                Code</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="">
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group">
                                                                                            <label for=""
                                                                                                class="form-label">Alarm
                                                                                                Code</label>
                                                                                            <input type="phone"
                                                                                                class="form-control"
                                                                                                id="">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Default
                                                                                                Tenancy Type</label>
                                                                                            <select name="" id=""
                                                                                                class="form-control select2">
                                                                                                <option disabled=""
                                                                                                    selected=""
                                                                                                    value="">Please
                                                                                                    Select...</option>
                                                                                                <option value="1">
                                                                                                    Private
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                    Student
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                    Commercial
                                                                                                </option>
                                                                                                <option value="5">Dental
                                                                                                </option>

                                                                                            </select>

                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="form-label">Landlord</label>
                                                                                    <select name="" id=""
                                                                                        class="form-control select2">
                                                                                        <option disabled="" selected=""
                                                                                            value="">Please
                                                                                            Select...</option>
                                                                                        <option value="15">Properties,
                                                                                            Graysons</option>
                                                                                        <option value="19">Ghai, Akash
                                                                                        </option>
                                                                                        <option value="22">Properties,
                                                                                            SR</option>
                                                                                        <option value="27">Ghai, Harjit
                                                                                        </option>
                                                                                        <option value="239">Somal,
                                                                                            Mohinder</option>
                                                                                        <option value="301">Ghai, Shashi
                                                                                        </option>
                                                                                        <option value="302">Somal,
                                                                                            Inderjeet</option>
                                                                                        <option value="304">Sunderland
                                                                                            Ltd, City View</option>
                                                                                        <option value="310">Ghai
                                                                                            Investments, Somal</option>
                                                                                        <option value="320">Sunderland
                                                                                            Ltd, Phoenix House
                                                                                        </option>
                                                                                        <option value="323">Developments
                                                                                            Ltd, Graystones
                                                                                        </option>
                                                                                        <option value="364">Nayyar,
                                                                                            Neeraj</option>
                                                                                        <option value="401">Hussain, Zak
                                                                                        </option>
                                                                                        <option value="437">Development,
                                                                                            SSG Property</option>
                                                                                        <option value="837">Somal, Amrit
                                                                                        </option>
                                                                                        <option value="1143">Limited,
                                                                                            Ryecroft Holdings</option>
                                                                                        <option value="1245">Terrace
                                                                                            Limited, Leazes</option>
                                                                                        <option value="1759">Dental
                                                                                            Education, Waterfront
                                                                                        </option>
                                                                                        <option value="1891">Ghai, Anil
                                                                                        </option>
                                                                                        <option value="1892">Malhi,
                                                                                            Navjit</option>
                                                                                        <option value="2087">Somal,
                                                                                            Deepinder</option>
                                                                                        <option value="2088">Services
                                                                                            Ltd, Union Property
                                                                                        </option>
                                                                                    </select>

                                                                                </div>
                                                                            </div> -->

                                                                            <div class="col-md-2">
    <div class="form-group">
        <label class="form-label">Select Property Type</label>
        <select name="" class="form-control select2 property-type-select">
            <option disabled selected value="">Please Select...</option>
            <option value="Building">Building</option>
            <option value="Apartment">Apartment</option>
            <option value="House">House</option>
            <option value="Other">Other</option>
        </select>
    </div>
</div>

<div class="col-md-3 newPropertyTypeDiv">
    <div class="form-group">
        <label class="form-label">Add New Property Type</label>
        <div class="addpropertyTypeContainer">
            <input type="text" class="form-control" placeholder="New Property Type">
        </div>
    </div>
</div>


                                                                                    <div class="col-lg-3">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Assign
                                                                                                Staff</label>
                                                                                            <select name=""
                                                                                                class="form-control select2">
                                                                                                <option value=""
                                                                                                    selected disable
                                                                                                    readonly>
                                                                                                    Select an Option
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Danial Craig">
                                                                                                    Danial Craig
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Emma Watson">
                                                                                                    Emma
                                                                                                    Watson</option>
                                                                                                <option
                                                                                                    value="Jennifer Lawrence">
                                                                                                    Jennifer Lawrence
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Scarlett Johansson">
                                                                                                    Scarlett Johansson
                                                                                                </option>
                                                                                            </select>

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

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="AddProperty_Budget">
                                                                <div class="docfilterbutton">
                                                                    <div class="flexheaderLeftWrap">
                                                                        <h1 class="budget-title">
                                                                            Add Budgets
                                                                            <!-- <span class="edit-title-icon"
                                                                                style="cursor: pointer;">
                                                                                <iconify-icon
                                                                                    icon="fluent:edit-16-regular">
                                                                                </iconify-icon>
                                                                            </span> -->
                                                                        </h1>
                                                                        <div class="edit-title-container"
                                                                            style="display: none;">
                                                                            <input type="text"
                                                                                class="edit-title-input form-control"
                                                                                value="Add Budgets"
                                                                                style="width: 70%; display: inline-block;" />
                                                                            <button type="button"
                                                                                class="save-title-button btn btn-success">Save</button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="flexheader_right_action">
                                                                        <button type="button" class="add-field-button">
                                                                            <iconify-icon icon="si:add-fill">
                                                                            </iconify-icon> Add
                                                                            Field
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <div class="row budget-fields-container">
                                                                    <div class="col-lg-3 budget-field">
                                                                        <div class="form-group">
                                                                            <label contenteditable="true"
                                                                                class="form-label">Compliances
                                                                                Budget</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 budget-field">
                                                                        <div class="form-group">
                                                                            <label contenteditable="true"
                                                                                class="form-label">Compliances
                                                                                Budget</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 budget-field">
                                                                        <div class="form-group">
                                                                            <label contenteditable="true"
                                                                                class="form-label">Labour
                                                                                Budget</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 budget-field">
                                                                        <div class="form-group">
                                                                            <label contenteditable="true"
                                                                                class="form-label">Material
                                                                                Budget</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="docfilterbutton">
                                                                <div class="flexheaderLeftWrap">
                                                                    <h1 class="budget-title">Manage Floor's
                                                                    </h1>
                                                                </div>
                                                                <div class="flexheader_right_action">
                                                                    <button
                                                                        class=" addFolderBtn AddpropertyUnit addFloorsForpr"
                                                                        type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#floorAdd__modal">
                                                                        <iconify-icon icon="stash:list-add-light">
                                                                        </iconify-icon> Add Floor
                                                                        <i
                                                                            class="bi bi-arrow-up-right-down-duotone"></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div id="FloorInrTabs">
                                                                <!-- Floor Tabs -->
                                                                <ul class="nav nav-pills custom-floor-tabs"
                                                                    id="floorTab" role="tablist">
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link active" id="gfloor-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#gfloor" type="button"
                                                                            role="tab" aria-controls="gfloor"
                                                                            aria-selected="true">
                                                                            <i class="bi bi-building"></i> G
                                                                            Floor
                                                                        </button>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link" id="firstfloor-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#firstfloor" type="button"
                                                                            role="tab" aria-controls="firstfloor"
                                                                            aria-selected="false">
                                                                            <i class="bi bi-building"></i> 1st
                                                                            Floor
                                                                        </button>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link" id="secondfloor-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#secondfloor" type="button"
                                                                            role="tab" aria-controls="secondfloor"
                                                                            aria-selected="false">
                                                                            <i class="bi bi-building"></i> 2nd
                                                                            Floor
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <!-- Tab Content -->
                                                            <div class="tab-content mt-3" id="floorTabContent">
                                                                <div class="tab-pane fade show active" id="gfloor"
                                                                    role="tabpanel" aria-labelledby="gfloor-tab">

                                                                    <div class="SubuNitAddContainer"
                                                                        id="unitContainer1">
                                                                        <div class="container mt-5">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">

                                                                                    <div class="docfilterbutton">
                                                                                        <div class="flexheaderLeftWrap">
                                                                                            <h1 class="budget-title">
                                                                                                Add Property
                                                                                                Units</h1>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flexheader_right_action">
                                                                                            <button
                                                                                                class="btn btn-primary addFolderBtn AddpropertyUnit"
                                                                                                type="button"
                                                                                                id="addFolderBtn">
                                                                                                <iconify-icon
                                                                                                    icon="stash:list-add-light">
                                                                                                </iconify-icon>
                                                                                                Add Unit
                                                                                                <i
                                                                                                    class="bi bi-arrow-up-right-down-duotone"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <table id="folderTable"
                                                                                class="table Unitaddtable">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Unit Type</th>
                                                                                        <th>Unit Name</th>
                                                                                        <th>Access Code</th>
                                                                                        <th>Office Key Label
                                                                                        </th>
                                                                                        <th>Master Key Code
                                                                                        </th>
                                                                                        <th>Alarm Code</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Table rows will be added dynamically using JavaScript -->
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="firstfloor"
                                                                    role="tabpanel" aria-labelledby="firstfloor-tab">
                                                                    <div class="SubuNitAddContainer"
                                                                        id="unitContainer2">
                                                                        <div class="container mt-5">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">

                                                                                    <div class="docfilterbutton">
                                                                                        <div class="flexheaderLeftWrap">
                                                                                            <h1 class="budget-title">
                                                                                                Add Property
                                                                                                Units</h1>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flexheader_right_action">
                                                                                            <button
                                                                                                class="btn btn-primary addFolderBtn AddpropertyUnit"
                                                                                                type="button"
                                                                                                id="addFolderBtn">
                                                                                                <iconify-icon
                                                                                                    icon="stash:list-add-light">
                                                                                                </iconify-icon>
                                                                                                Add Unit
                                                                                                <i
                                                                                                    class="bi bi-arrow-up-right-down-duotone"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <table id="folderTable"
                                                                                class="table Unitaddtable">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Unit Type</th>
                                                                                        <th>Unit Name</th>
                                                                                        <th>Access Code</th>
                                                                                        <th>Office Key Label
                                                                                        </th>
                                                                                        <th>Master Key Code
                                                                                        </th>
                                                                                        <th>Alarm Code</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Table rows will be added dynamically using JavaScript -->
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="secondfloor"
                                                                    role="tabpanel" aria-labelledby="secondfloor-tab">
                                                                    <div class="SubuNitAddContainer"
                                                                        id="unitContainer3">
                                                                        <div class="container mt-5">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">

                                                                                    <div class="docfilterbutton">
                                                                                        <div class="flexheaderLeftWrap">
                                                                                            <h1 class="budget-title">
                                                                                                Add Property
                                                                                                Units</h1>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flexheader_right_action">
                                                                                            <button
                                                                                                class="btn btn-primary addFolderBtn AddpropertyUnit"
                                                                                                type="button"
                                                                                                id="addFolderBtn">
                                                                                                <iconify-icon
                                                                                                    icon="stash:list-add-light">
                                                                                                </iconify-icon>
                                                                                                Add Unit
                                                                                                <i
                                                                                                    class="bi bi-arrow-up-right-down-duotone"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <table id="folderTable"
                                                                                class="table Unitaddtable">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Unit Type</th>
                                                                                        <th>Unit Name</th>
                                                                                        <th>Access Code</th>
                                                                                        <th>Office Key Label
                                                                                        </th>
                                                                                        <th>Master Key Code
                                                                                        </th>
                                                                                        <th>Alarm Code</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Table rows will be added dynamically using JavaScript -->
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="property2" role="tabpanel"
                                                    aria-labelledby="property2-tab">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="contact-list-view">
                                                                <div class="addFropertyform_Container">

                                                                    <div class="formstartcontainer">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Address</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class=" col-md-4">
                                                                                        <div class="form-group">
                                                                                            <label for=""
                                                                                                class="form-label">Area</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group">
                                                                                            <label for=""
                                                                                                class="form-label">Postcode</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="" value="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group">
                                                                                            <label for=""
                                                                                                class="form-label">Access
                                                                                                Code</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="">
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group">
                                                                                            <label for=""
                                                                                                class="form-label">Alarm
                                                                                                Code</label>
                                                                                            <input type="phone"
                                                                                                class="form-control"
                                                                                                id="">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Default
                                                                                                Tenancy Type</label>
                                                                                            <select name="" id=""
                                                                                                class="form-control select2">
                                                                                                <option disabled=""
                                                                                                    selected=""
                                                                                                    value="">Please
                                                                                                    Select...</option>
                                                                                                <option value="1">
                                                                                                    Private
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                    Student
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                    Commercial
                                                                                                </option>
                                                                                                <option value="5">Dental
                                                                                                </option>

                                                                                            </select>

                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="form-label">Landlord</label>
                                                                                    <select name="" id=""
                                                                                        class="form-control select2">
                                                                                        <option disabled="" selected=""
                                                                                            value="">Please
                                                                                            Select...</option>
                                                                                        <option value="15">Properties,
                                                                                            Graysons</option>
                                                                                        <option value="19">Ghai, Akash
                                                                                        </option>
                                                                                        <option value="22">Properties,
                                                                                            SR</option>
                                                                                        <option value="27">Ghai, Harjit
                                                                                        </option>
                                                                                        <option value="239">Somal,
                                                                                            Mohinder</option>
                                                                                        <option value="301">Ghai, Shashi
                                                                                        </option>
                                                                                        <option value="302">Somal,
                                                                                            Inderjeet</option>
                                                                                        <option value="304">Sunderland
                                                                                            Ltd, City View</option>
                                                                                        <option value="310">Ghai
                                                                                            Investments, Somal</option>
                                                                                        <option value="320">Sunderland
                                                                                            Ltd, Phoenix House
                                                                                        </option>
                                                                                        <option value="323">Developments
                                                                                            Ltd, Graystones
                                                                                        </option>
                                                                                        <option value="364">Nayyar,
                                                                                            Neeraj</option>
                                                                                        <option value="401">Hussain, Zak
                                                                                        </option>
                                                                                        <option value="437">Development,
                                                                                            SSG Property</option>
                                                                                        <option value="837">Somal, Amrit
                                                                                        </option>
                                                                                        <option value="1143">Limited,
                                                                                            Ryecroft Holdings</option>
                                                                                        <option value="1245">Terrace
                                                                                            Limited, Leazes</option>
                                                                                        <option value="1759">Dental
                                                                                            Education, Waterfront
                                                                                        </option>
                                                                                        <option value="1891">Ghai, Anil
                                                                                        </option>
                                                                                        <option value="1892">Malhi,
                                                                                            Navjit</option>
                                                                                        <option value="2087">Somal,
                                                                                            Deepinder</option>
                                                                                        <option value="2088">Services
                                                                                            Ltd, Union Property
                                                                                        </option>
                                                                                    </select>

                                                                                </div>
                                                                            </div> -->

                                                                            <div class="col-md-2">
    <div class="form-group">
        <label class="form-label">Select Property Type</label>
        <select name="" class="form-control select2 property-type-select">
            <option disabled selected value="">Please Select...</option>
            <option value="Building">Building</option>
            <option value="Apartment">Apartment</option>
            <option value="House">House</option>
            <option value="Other">Other</option>
        </select>
    </div>
</div>

<div class="col-md-3 newPropertyTypeDiv">
    <div class="form-group">
        <label class="form-label">Add New Property Type</label>
        <div class="addpropertyTypeContainer">
            <input type="text" class="form-control" placeholder="New Property Type">
        </div>
    </div>
</div>

                                                                                    <div class="col-lg-3">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Assign
                                                                                                Staff</label>
                                                                                            <select name=""
                                                                                                class="form-control select2">
                                                                                                <option value=""
                                                                                                    selected disable
                                                                                                    readonly>
                                                                                                    Select an Option
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Danial Craig">
                                                                                                    Danial Craig
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Emma Watson">
                                                                                                    Emma
                                                                                                    Watson</option>
                                                                                                <option
                                                                                                    value="Jennifer Lawrence">
                                                                                                    Jennifer Lawrence
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Scarlett Johansson">
                                                                                                    Scarlett Johansson
                                                                                                </option>
                                                                                            </select>

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

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="AddProperty_Budget">
                                                                <div class="docfilterbutton">
                                                                    <div class="flexheaderLeftWrap">
                                                                        <h1 class="budget-title">
                                                                            Add Budgets
                                                                            <span class="edit-title-icon"
                                                                                style="cursor: pointer;">
                                                                                <iconify-icon
                                                                                    icon="fluent:edit-16-regular">
                                                                                </iconify-icon>
                                                                            </span>
                                                                        </h1>
                                                                        <div class="edit-title-container"
                                                                            style="display: none;">
                                                                            <input type="text"
                                                                                class="edit-title-input form-control"
                                                                                value="Add Budgets"
                                                                                style="width: 70%; display: inline-block;" />
                                                                            <button type="button"
                                                                                class="save-title-button btn btn-success">Save</button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="flexheader_right_action">
                                                                        <button type="button" class="add-field-button">
                                                                            <iconify-icon icon="si:add-fill">
                                                                            </iconify-icon> Add
                                                                            Field
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <div class="row budget-fields-container">
                                                                    <div class="col-lg-3 budget-field">
                                                                        <div class="form-group">
                                                                            <label contenteditable="true"
                                                                                class="form-label">Compliances
                                                                                Budget</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 budget-field">
                                                                        <div class="form-group">
                                                                            <label contenteditable="true"
                                                                                class="form-label">Compliances
                                                                                Budget</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 budget-field">
                                                                        <div class="form-group">
                                                                            <label contenteditable="true"
                                                                                class="form-label">Labour
                                                                                Budget</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 budget-field">
                                                                        <div class="form-group">
                                                                            <label contenteditable="true"
                                                                                class="form-label">Material
                                                                                Budget</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="docfilterbutton">
                                                                <div class="flexheaderLeftWrap">
                                                                    <h1 class="budget-title">Manage Floor's
                                                                    </h1>
                                                                </div>
                                                                <div class="flexheader_right_action">
                                                                    <button
                                                                        class=" addFolderBtn AddpropertyUnit addFloorsForpr"
                                                                        type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#floorAdd__modal">
                                                                        <iconify-icon icon="stash:list-add-light">
                                                                        </iconify-icon> Add Floor
                                                                        <i
                                                                            class="bi bi-arrow-up-right-down-duotone"></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="" id="FloorInrTabs">
                                                                <!-- Floor Tabs -->
                                                                <ul class="nav nav-pills custom-floor-tabs"
                                                                    id="floorTab2" role="tablist">
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link active" id="gfloor2-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#gfloor2" type="button"
                                                                            role="tab" aria-controls="gfloor2"
                                                                            aria-selected="true">
                                                                            <i class="bi bi-building"></i> G
                                                                            Floor
                                                                        </button>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link" id="firstfloor2-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#firstfloor2" type="button"
                                                                            role="tab" aria-controls="firstfloor2"
                                                                            aria-selected="false">
                                                                            <i class="bi bi-building"></i> 1st
                                                                            Floor
                                                                        </button>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link" id="secondfloor2-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#secondfloor2" type="button"
                                                                            role="tab" aria-controls="secondfloor2"
                                                                            aria-selected="false">
                                                                            <i class="bi bi-building"></i> 2nd
                                                                            Floor
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <!-- Tab Content -->
                                                            <div class="tab-content mt-3" id="floorTabContent">
                                                                <div class="tab-pane fade show active" id="gfloor2"
                                                                    role="tabpanel" aria-labelledby="gfloor2-tab">

                                                                    <div class="SubuNitAddContainer"
                                                                        id="unitContainer4">
                                                                        <div class="container mt-5">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">

                                                                                    <div class="docfilterbutton">
                                                                                        <div class="flexheaderLeftWrap">
                                                                                            <h1 class="budget-title">
                                                                                                Add Property
                                                                                                Units</h1>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flexheader_right_action">
                                                                                            <button
                                                                                                class="btn btn-primary addFolderBtn AddpropertyUnit"
                                                                                                type="button"
                                                                                                id="addFolderBtn">
                                                                                                <iconify-icon
                                                                                                    icon="stash:list-add-light">
                                                                                                </iconify-icon>
                                                                                                Add Unit
                                                                                                <i
                                                                                                    class="bi bi-arrow-up-right-down-duotone"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <table id="folderTable"
                                                                                class="table Unitaddtable">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Unit Type</th>
                                                                                        <th>Unit Name</th>
                                                                                        <th>Access Code</th>
                                                                                        <th>Office Key Label
                                                                                        </th>
                                                                                        <th>Master Key Code
                                                                                        </th>
                                                                                        <th>Alarm Code</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Table rows will be added dynamically using JavaScript -->
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="firstfloor2"
                                                                    role="tabpanel" aria-labelledby="firstfloor2-tab">
                                                                    <div class="SubuNitAddContainer"
                                                                        id="unitContainer5">
                                                                        <div class="container mt-5">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">

                                                                                    <div class="docfilterbutton">
                                                                                        <div class="flexheaderLeftWrap">
                                                                                            <h1 class="budget-title">
                                                                                                Add Property
                                                                                                Units</h1>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flexheader_right_action">
                                                                                            <button
                                                                                                class="btn btn-primary addFolderBtn AddpropertyUnit"
                                                                                                type="button"
                                                                                                id="addFolderBtn">
                                                                                                <iconify-icon
                                                                                                    icon="stash:list-add-light">
                                                                                                </iconify-icon>
                                                                                                Add Unit
                                                                                                <i
                                                                                                    class="bi bi-arrow-up-right-down-duotone"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <table id="folderTable"
                                                                                class="table Unitaddtable">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Unit Type</th>
                                                                                        <th>Unit Name</th>
                                                                                        <th>Access Code</th>
                                                                                        <th>Office Key Label
                                                                                        </th>
                                                                                        <th>Master Key Code
                                                                                        </th>
                                                                                        <th>Alarm Code</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Table rows will be added dynamically using JavaScript -->
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="secondfloor2"
                                                                    role="tabpanel" aria-labelledby="secondfloor2-tab">
                                                                    <div class="SubuNitAddContainer"
                                                                        id="unitContainer6">
                                                                        <div class="container mt-5">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">

                                                                                    <div class="docfilterbutton">
                                                                                        <div class="flexheaderLeftWrap">
                                                                                            <h1 class="budget-title">
                                                                                                Add Property
                                                                                                Units</h1>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flexheader_right_action">
                                                                                            <button
                                                                                                class="btn btn-primary addFolderBtn AddpropertyUnit"
                                                                                                type="button"
                                                                                                id="addFolderBtn">
                                                                                                <iconify-icon
                                                                                                    icon="stash:list-add-light">
                                                                                                </iconify-icon>
                                                                                                Add Unit
                                                                                                <i
                                                                                                    class="bi bi-arrow-up-right-down-duotone"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <table id="folderTable"
                                                                                class="table Unitaddtable">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Unit Type</th>
                                                                                        <th>Unit Name</th>
                                                                                        <th>Access Code</th>
                                                                                        <th>Office Key Label
                                                                                        </th>
                                                                                        <th>Master Key Code
                                                                                        </th>
                                                                                        <th>Alarm Code</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Table rows will be added dynamically using JavaScript -->
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
                            <div class="canvasFooterContainer innerfix_navigation">
                                <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                                    data-bs-dismiss="offcanvas">Cancel</button>
                                <button type="submit"
                                    class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                            </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Body -->
</div>



<!-- Aadd floor modal-->
<div id="floorAdd__modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="manage-property-development.php" method="" id="addpropertyModal">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4 modaltitlewith_icon">
                        <iconify-icon icon="ph:building"></iconify-icon> Add Floors
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="AddpropertforClient_mdWrap">
                        <div class="stepheadingheader">
                            <h1>Please enter the number of floors you want to create for this Property</h2>
                        </div>

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Enter Floor Count</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">

                    <div class="eventSubmit_container">
                        <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" id="floorctrate_button"
                            class="submitButton  canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- add floor modal end-->

<?php include('footer.php') ?>

