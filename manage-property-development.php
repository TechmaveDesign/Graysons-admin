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

<!-- Modal for scheduling a visit -->
<div id="schedulevisit_modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action=""  id="wizardForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Schedule a Visit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="taskAddContainer">

                        <div class="step" id="step1">
                            <div class="wizardstep_innerContainer">
                                <div class="stepheadingheader">
                                    <div class="steptitleIcon">
                                        <iconify-icon icon="carbon:ibm-event-automation"></iconify-icon>
                                    </div>
                                    <h1>Schedule a Visit for Job ID: <div class="JobId"><a href="##">CJ12345</a></div>
                                        </h2>
                                </div>

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Title</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Property Name</label>
                                            <input class="form-control" type="text"
                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House"
                                                disabled readonly>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="addmorevisitSchedule_forthesame">
                                                <button type="button" class="Addmoreproperties_selectbtn">
                                                    <iconify-icon icon="si:add-fill"></iconify-icon> Add More Properties
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" id="more-properties-dropdown" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-label">All Properties</label>
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper">
                                                <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-count">Select More Properties</span>
                                                    <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon>
                                                </button>
                                                <div
                                                    class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                    <div class="filTerSearchMain">
                                                        <input type="text" class="filterclSearch available-users-search"
                                                            placeholder="Search More Properties...">
                                                        <iconify-icon icon="basil:search-outline"></iconify-icon>
                                                    </div>
                                                    <div class="sellallitemsMain">
                                                        <div class="CustomselectallContainer">
                                                            <input type="checkbox"
                                                                class="select-all-available-users form-check-input">
                                                            Select All
                                                        </div>
                                                        <div class="clDivider_full"></div>
                                                    </div>
                                                    <div class="Customdrpitems_container">
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input"> Bedroom
                                                                3 133, Flat 3 (Floor 1, No3), City View@Phoenix House
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Bedroom 2 101, Flat 7 (Floor 2, No7), Garden
                                                                View@Emerald Apartments
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Lobby 002, Flat 1 (Ground Floor, No1), Street
                                                                View@Central Plaza
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="no-data" style="display: none;">No data found</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Date</label>
                                            <input class="form-control customdataPicker flatpickr-input" type="text"
                                                name="" value="01/06/2024" readonly="readonly">
                                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                            </iconify-icon>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Time</label>
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
                                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                                        </div>
                                    </div>

                                </div>
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

            </div>
        </form>
    </div>
</div>

<!-- Modal for upload document -->
<div id="AddReport_modal" class="modal  sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Upload Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Upload Quotation Report</label>
                            <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                data-max-file-size="3MB" data-max-files="5">
                        </div>
                    </div>
                </div>
                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container">
                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</div>

<!-- Modal for upload document -->
<div id="Addquote_document_modal" class="modal  sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" >
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Upload Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Upload Document</label>
                            <input type="file" class="filepond" id="imageInput2" name="imageInput" multiple
                                data-max-file-size="3MB" data-max-files="5">
                        </div>
                    </div>
                </div>
                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container">
                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</div>

<!-- Re Quotation Modal -->
<div class="modal sm_modalCustom fade" id="requestReQuoteModal" tabindex="-1" aria-labelledby="requestReQuoteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="reQuoteForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="modal-title" id="requestReQuoteModalLabel">Re Quotation Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="quoteTitle" class="form-label">Quotation Title</label>
                        <input type="text" class="form-control" id="quoteTitle" placeholder="Enter Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="quoteMessage" class="form-label">Quotation Message</label>
                        <textarea class="form-control" id="quoteMessage" rows="4" placeholder="Enter Message"
                            required></textarea>
                    </div>

                </div>

                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container">
                        <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            id="requotemsgSend" style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- end -->

<!--  Quotation Reject Modal -->
<div class="modal sm_modalCustom fade" id="RejectquoteModal" tabindex="-1" aria-labelledby="RejectquoteNoteLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="rejectQuoteForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="modal-title" id="RejectquoteNoteLabel">Reject Quotation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="rejectquoteMessage" class="form-label">Add Reason</label>
                        <textarea class="form-control" id="rejectquoteMessage" rows="4"
                            placeholder="Enter Message"></textarea>
                    </div>

                </div>

                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container">
                        <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            id="rejectquotemsgSend" style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- Quotation Reject end -->

<!-- Modal for scheduling a visit -->
<div id="schedulevisit_modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="" id="wizardForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Schedule a Visit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="taskAddContainer">

                        <div class="step" id="step1">
                            <div class="wizardstep_innerContainer">
                                <div class="stepheadingheader">
                                    <div class="steptitleIcon">
                                        <iconify-icon icon="carbon:ibm-event-automation"></iconify-icon>
                                    </div>
                                    <h1>Schedule a Visit for Job ID: <div class="JobId"><a href="##">CJ12345</a></div>
                                        </h2>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Title</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Date</label>
                                            <input class="form-control customdataPicker flatpickr-input" type="text"
                                                name="" value="01/06/2024" readonly="readonly">
                                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                            </iconify-icon>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Time</label>
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
                                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                                        </div>
                                    </div>

                                </div>
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

            </div>
        </form>
    </div>
</div>
<!-- end -->

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



<!-- button sybmit loader js start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission or link redirection
                // Show loading dots
                button.classList.add('btn-loading');
                button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
            });
        });
    });
</script>
<!-- button sybmit loader js end -->

<!-- add property unit table js -->
<script>
    function initializeUnitTable(containerId) {
        var $container = $("#" + containerId);

        function addRow(unitType, unitName, level, parentRow) {
            var table = $container.find("table tbody");
            var newRow = $("<tr></tr>");
            // Calculate dynamic padding for the tree view
            var padding = 20 * level; // Each level increases padding by 20px
            // Create the first cell with the unit type and apply dynamic padding
            var unitTypeDiv = $('<div><input type="text" class="sustomaddonInput" value="' +
                unitType + '" /></div>');
            var cell1 = $("<td></td>").append(unitTypeDiv).css("padding-left", padding + "px");
            // Create the second cell with the unit name
            var unitNameDiv = $('<div><input type="text" class="sustomaddonInput form-control" value="' +
                unitName + '" /></div>');
            var cell2 = $("<td></td>").append(unitNameDiv);
            // Create the additional fields
            var cell3 = $("<td></td>").append(
                '<input type="text" class="sustomaddonInput form-control" placeholder="Access Code" />');
            var cell4 = $("<td></td>").append(
                '<input type="text" class="sustomaddonInput form-control" placeholder="Office Key Label" />');
            var cell5 = $("<td></td>").append(
                '<input type="text" class="sustomaddonInput form-control" placeholder="Master Key Code" />');
            var cell6 = $("<td></td>").append(
                '<input type="text" class="sustomaddonInput form-control" placeholder="Alarm Code" />');
            // Create the action buttons cell
            var cell7 = $(`
                <td>
                    <div class="actionapndButton_container">
                        <button class="removeBtn cmntabapndBtn customtablecreation_remove" type="button">
                            <iconify-icon icon="fluent:delete-16-regular"></iconify-icon> Remove
                        </button>  
                        <button class="addBtn cmntabapndBtn customtablecreation_Add" type="button">
                            <iconify-icon icon="fluent:add-12-regular"></iconify-icon> Add Sub unit
                        </button>
                    </div>
                </td>
            `);
            // Append all cells to the new row
            newRow.append(cell1, cell2, cell3, cell4, cell5, cell6, cell7);
            // Add event listener for the remove button
            cell7.find(".removeBtn").click(function() {
                Swal.fire({
                    title: 'Confirmation',
                    text: "Are you sure you want to delete this " + unitType.toLowerCase() +
                        " and all its subunits?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var parent = $(this).closest("tr");
                        var childRows = parent.nextUntil(":not(.child)");
                        childRows.remove();
                        parent.remove();
                        Swal.fire(
                            'Deleted!',
                            'Your ' + unitType.toLowerCase() + ' has been deleted.',
                            'success'
                        );
                    }
                });
            });
            // Add event listener for the add subunit button
            cell7.find(".addBtn").click(function() {
                var parent = $(this).closest("tr");
                addRow("Sub Unit", "Sub Unit Name", level + 1, parent);
            });
            // Add the row as a child or to the main table
            if (parentRow) {
                newRow.addClass("child");
                if (!parentRow.hasClass("main-parent")) {
                    parentRow.addClass("main-parent");
                }
                parentRow.after(newRow);
            } else {
                table.append(newRow);
            }
        }
        // Add event listener for the add folder button
        $container.find(".addFolderBtn").click(function() {
            addRow("Unit Type", "Unit Name", 0);
        });
    }
    // Initialize each container
    $(document).ready(function() {
        initializeUnitTable("unitContainer1");
        initializeUnitTable("unitContainer2");
        initializeUnitTable("unitContainer3");
        initializeUnitTable("unitContainer4");
        initializeUnitTable("unitContainer5");
        initializeUnitTable("unitContainer6");
        // Add more calls for other containers as needed
    });
</script>
<!-- add property unit table js end-->

<!-- add budget fields and edit budget title js start and also have some style for this -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to initialize functionality for a single budget section
        function initializeBudgetSection(section) {
            const title = section.querySelector(".budget-title");
            const editTitleIcon = section.querySelector(".edit-title-icon");
            const editTitleContainer = section.querySelector(".edit-title-container");
            const editTitleInput = section.querySelector(".edit-title-input");
            const saveTitleButton = section.querySelector(".save-title-button");
            const addFieldButton = section.querySelector(".add-field-button");
            const budgetFieldsContainer = section.querySelector(".budget-fields-container");
            // Enable title editing
            editTitleIcon.addEventListener("click", function() {
                title.style.display = "none";
                editTitleContainer.style.display = "block";
                editTitleInput.value = title.textContent.trim(); // Set input value to the current title
            });
            // Save the updated title
            saveTitleButton.addEventListener("click", function() {
                const newTitle = editTitleInput.value;
                title.innerHTML = `${newTitle} 
                <span class="edit-title-icon" style="cursor: pointer;">
                    <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                </span>`;
                title.style.display = "block";
                editTitleContainer.style.display = "none";
                // Reinitialize the edit icon for the updated title
                const newEditTitleIcon = title.querySelector(".edit-title-icon");
                newEditTitleIcon.addEventListener("click", function() {
                    title.style.display = "none";
                    editTitleContainer.style.display = "block";
                    editTitleInput.value = newTitle;
                });
            });
            // Add a new field
            addFieldButton.addEventListener("click", function() {
                const newField = document.createElement("div");
                newField.className = "col-lg-3 budget-field";
                newField.innerHTML = `
                <div class="form-group">
                    <label contenteditable="true" class="form-label">New Budget</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            `;
                budgetFieldsContainer.appendChild(newField);
            });
        }
        // Initialize all budget sections on the page
        const budgetSections = document.querySelectorAll(".AddProperty_Budget");
        budgetSections.forEach(function(section) {
            initializeBudgetSection(section);
        });
    });
</script>

<style>
    #edit-title-container {
        margin-top: 10px;
    }

    [contenteditable="true"] {
        border: 1px dashed #ccc;
        padding: 2px;
    }

    [contenteditable="true"]:focus {
        outline: none;
        border-color: #007bff;
    }
</style>

<!-- add budget fields and edit budget title js start and also have some style for this  end -->

<!-- floor tabs custom style js start -->
<script>
    $(document).ready(function() {
        $("#floorTab .nav-link").each(function() {
            $(this).append('<span class="checkmark"><i class="bi bi-check"></i></span>');
        });
     
        $(".nav-link").on("shown.bs.tab", function() {
            $(".checkmark").hide(); 
            $(this).find(".checkmark").show(); 
        });
        $(".nav-link.active").find(".checkmark").show();
    });
</script>
<!-- floor tabs custom style js start end-->

<!--  floor create confirmationa lert -->
<script>
    document.getElementById('floorctrate_button').addEventListener('click', function() {
        const floorCountInput = document.querySelector('#floorAdd__modal input.form-control');
        const floorCount = floorCountInput.value.trim();
        if (floorCount && !isNaN(floorCount) && Number(floorCount) > 0) {
       
            Swal.fire({
                title: 'Floor Created Successfully!',
                text: `${floorCount} floor(s) created successfully.`,
                icon: 'success',
                confirmButtonText: "Close",
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: true,
                customClass: {
                    confirmButton: "my-ok-button"
                },
                willClose: () => {
                    window.location.href = 'manage-property-development.php';
                }
            });
        } else {
            Swal.fire({
                title: 'Invalid Input!',
                text: 'Please enter a valid number of floors.',
                icon: 'error',
                confirmButtonText: "Close",
                timer: 3000,
                customClass: {
                    confirmButton: "my-ok-button" 
                },
                timerProgressBar: true,
                showConfirmButton: true
            });
        }
    });
</script>
<!-- floor create confirmationa lert -->


<!-- property details property type custom option selection js start -->
<script>
$(document).ready(function () {
    $('.newPropertyTypeDiv').hide();

    $('.property-type-select').on('change', function () {
        const newPropertyTypeDiv = $(this).closest('.col-md-2').next('.newPropertyTypeDiv');

        if ($(this).val() === 'Other') {
            newPropertyTypeDiv.show();
        } else {
            newPropertyTypeDiv.hide();
        }
    });
});
</script>
<!-- property details property type custom option selection js end -->