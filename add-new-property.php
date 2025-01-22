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
    .canvasFooterContainer {
        position: fixed !important;
        width: calc(100% - 70px) !important;
        height: 70px;
        left: 70px;
    }
</style>

<div class="container-xxl">

    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
            <!-- sub menu header -->
               <!-- sub menu header -->
            <?php include('headers/add-property-header.php') ?>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Add New Property </h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="all-properties.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">
                            <button id="scheduleInspectionBtn"
                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 ScheduleAddBtnfor_property hidden"
                                type="button" data-bs-toggle="modal" data-bs-target="#property_inspection_modal">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Schedule Inspection
                            </button>
                            <button id="AddInspectionTimings"
                                class="btn btn-sm addiconiButton commonAddnewButton AddInspection_timings__property btn-primary ms-3 hidden"
                                data-bs-toggle="offcanvas" data-bs-target="#addinventorymodal"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Add Inspection Times
                            </button>

                            <button id="Addproperty_development"
                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 ScheduleAddBtnfor_property hidden"
                                type="button" data-bs-toggle="modal" data-bs-target="#Addproperty__modal">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Add New Property
                            </button>

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
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

                    <form action="all-properties.php">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">

                                

                            </div>
                            <div class="nicescroll-bar">
                                <div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                    <div class="quick-access-form-wrap nopaddingleftright">

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
                                            <div class="col-xxl-3">
                                                <div class="row justify-content-end">
                                                    <div class="col-auto flexcheckColumn">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckList6">
                                                                <label class="form-check-label" for="customCheckList6">
                                                                    Show Out of Service
                                                                    <span class="done-strikethrough"></span>
                                                                </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <button type="button"
                                                                class="btn btn-block btn-primary ">Filter
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="fullwidthTabInner_content_container">

<div class="card propertaddcards_wrap">
<div class="card-header flexheaderLeftWrap">
    <h1 class="budget-title">
                        Basic Details
                    </h1>
                    <div class="flexheader_right_action">
                    <button type="button" class="add-field-button">
                        <iconify-icon icon="si:add-fill">
                        </iconify-icon> Add
                        Field
                    </button>
                </div>
    </div>
    <div class="card-body">
    <div class="customcardbody_wrap">
             
    <div class="row">
                        <div class="col-lg-12">
                            <div class="row ">
                                <div class="col-md-3">
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
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label
                                            class="form-label">Address</label>
                                        <input type="text"
                                            class="form-control" value="">
                                    </div>

                                </div>
                                <div class=" col-md-3">
                                    <div class="form-group">
                                        <label for=""
                                            class="form-label">Area</label>
                                        <input type="text"
                                            class="form-control" value="">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""
                                            class="form-label">Postcode</label>
                                        <input type="text"
                                            class="form-control" id=""
                                            value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Assign
                                            Staff</label>
                                        <select name=""
                                            class="form-control select2">
                                            <option value="" selected
                                                disable readonly>
                                                Select an Option
                                            </option>
                                            <option value="Danial Craig">
                                                Danial Craig
                                            </option>
                                            <option value="Emma Watson">
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""
                                            class="form-label">Access
                                            Code</label>
                                        <input type="text"
                                            class="form-control" id="">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""
                                            class="form-label">Alarm
                                            Code</label>
                                        <input type="phone"
                                            class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Default
                                            Tenancy Type</label>
                                        <select name="" id=""
                                            class="form-control select2">
                                            <option disabled="" selected=""
                                                value="">Please
                                                Select...</option>
                                            <option value="1">Private
                                            </option>
                                            <option value="2">Student
                                            </option>
                                            <option value="4">Commercial
                                            </option>
                                            <option value="5">Dental
                                            </option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Select
                                            Property Type</label>
                                        <select name=""
                                            class="form-control select2 property-type-select">
                                            <option disabled selected
                                                value="">Please Select...
                                            </option>
                                            <option value="Building">
                                                Building</option>
                                            <option value="Apartment">
                                                Apartment</option>
                                            <option value="House">House
                                            </option>
                                            <option value="Other">Other
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 newPropertyTypeDiv">
                                    <div class="form-group">
                                        <label class="form-label">Add New
                                            Property Type</label>
                                        <div
                                            class="addpropertyTypeContainer">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="New Property Type">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
              
    </div>
        
    </div>
    <div class="card-footer crdpropertfooter">
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

<div class="card propertaddcards_wrap">
    <div class="card-header flexheaderLeftWrap">
        <h1 class="budget-title">
            Add Budgets
        </h1>
        <div class="flexheader_right_action">
            <button type="button" class="add-field-button">
                <iconify-icon icon="si:add-fill"></iconify-icon> Add Field
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="customcardbody_wrap">
            <div class="row budget-fields-container">
            <div class="col-lg-3">
                    <div class="form-group">
                        <label 
                            class="form-label">Compliances
                            Budget</label>
                        <input type="text" class="form-control"
                            placeholder="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label 
                            class="form-label">Compliances
                            Budget</label>
                        <input type="text" class="form-control"
                            placeholder="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label 
                            class="form-label">Labour
                            Budget</label>
                        <input type="text" class="form-control"
                            placeholder="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label 
                            class="form-label">Material
                            Budget</label>
                        <input type="text" class="form-control"
                            placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer crdpropertfooter">
        <div class="savechangesformContainer">
            <button type="submit" class="buttonInfOUpdate">
                <iconify-icon icon="fluent:save-32-regular"></iconify-icon> Save Changes
            </button>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
    <h1 class="budget-title">
    Compliances</h1>
    </div>
    <div class="card-body">
      
    </div>
    <div class="card-footer crdpropertfooter">
            <div class="savechangesformContainer">
                <button type="submit" class="buttonInfOUpdate">
                    <iconify-icon icon="fluent:save-32-regular">
                    </iconify-icon>
                    Save Changes
                </button>
            </div>
        </div>
</div>

<div class="card">
    <div class="card-header">
    <h1 class="budget-title">
                        Documents
                    </h1>
    </div>
    <div class="card-body">
      
    </div>
    <div class="card-footer crdpropertfooter">
            <div class="savechangesformContainer">
                <button type="submit" class="buttonInfOUpdate">
                    <iconify-icon icon="fluent:save-32-regular">
                    </iconify-icon>
                    Save Changes
                </button>
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
                <button class=" addFolderBtn AddpropertyUnit addFloorsForpr"
                    type="button" data-bs-toggle="modal"
                    data-bs-target="#floorAdd__modal">
                    <iconify-icon icon="stash:list-add-light">
                    </iconify-icon> Add Floor
                    <i class="bi bi-arrow-up-right-down-duotone"></i>
                </button>
            </div>
        </div>

        <div class="" id="FloorInrTabs">
            <!-- Floor Tabs -->
            <ul class="nav nav-pills custom-floor-tabs" id="floorTab2"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="gfloor2-tab"
                        data-bs-toggle="pill" data-bs-target="#gfloor2"
                        type="button" role="tab" aria-controls="gfloor2"
                        aria-selected="true">
                        <i class="bi bi-building"></i> G
                        Floor
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="firstfloor2-tab"
                        data-bs-toggle="pill" data-bs-target="#firstfloor2"
                        type="button" role="tab" aria-controls="firstfloor2"
                        aria-selected="false">
                        <i class="bi bi-building"></i> 1st
                        Floor
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="secondfloor2-tab"
                        data-bs-toggle="pill" data-bs-target="#secondfloor2"
                        type="button" role="tab"
                        aria-controls="secondfloor2" aria-selected="false">
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

                <div class="SubuNitAddContainer" id="unitContainer4">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="docfilterbutton">
                                    <div class="flexheaderLeftWrap">
                                        <h1 class="budget-title">
                                            Add Property
                                            Units</h1>
                                    </div>
                                    <div class="flexheader_right_action">
                                        <button
                                            class="btn btn-primary addFolderBtn AddpropertyUnit"
                                            type="button" id="addFolderBtn">
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

                        <table id="folderTable" class="table Unitaddtable">
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
            <div class="tab-pane fade" id="firstfloor2" role="tabpanel"
                aria-labelledby="firstfloor2-tab">
                <div class="SubuNitAddContainer" id="unitContainer5">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="docfilterbutton">
                                    <div class="flexheaderLeftWrap">
                                        <h1 class="budget-title">
                                            Add Property
                                            Units</h1>
                                    </div>
                                    <div class="flexheader_right_action">
                                        <button
                                            class="btn btn-primary addFolderBtn AddpropertyUnit"
                                            type="button" id="addFolderBtn">
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

                        <table id="folderTable" class="table Unitaddtable">
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
            <div class="tab-pane fade" id="secondfloor2" role="tabpanel"
                aria-labelledby="secondfloor2-tab">
                <div class="SubuNitAddContainer" id="unitContainer6">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="docfilterbutton">
                                    <div class="flexheaderLeftWrap">
                                        <h1 class="budget-title">
                                            Add Property
                                            Units</h1>
                                    </div>
                                    <div class="flexheader_right_action">
                                        <button
                                            class="btn btn-primary addFolderBtn AddpropertyUnit"
                                            type="button" id="addFolderBtn">
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

                        <table id="folderTable" class="table Unitaddtable">
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
<div class="canvasFooterContainer">
<button type="button" class="canvascancel_button commonCanvas_buttonFooter"
    data-bs-dismiss="offcanvas">Cancel</button>
<button type="submit"
    class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
</div>
                                
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
    <!-- /Page Body -->

</div>


<!-- Add property modal-->
<div id="Addproperty__modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="manage-property-development.php" method="post" id="addpropertyModal">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Add Properties</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="AddpropertforClient_mdWrap">
                        <div class="stepheadingheader">
                            <div class="steptitleIcon">
                                <iconify-icon icon="ph:building"></iconify-icon>
                            </div>
                            <h1>Select a Landlord and enter the number of properties to add</h2>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Select Landlord</label>
                                    <select name="" id="" class="form-control select2">
                                        <option disabled="" selected="" value="">Please Select...</option>
                                        <option value="1">Danial Craig</option>
                                        <option value="2">Emily Blunt</option>
                                        <option value="3">John Doe</option>
                                        <option value="4">Sophia Turner</option>
                                        <option value="5">Michael Jordan</option>
                                        <option value="6">Olivia Smith</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Number of Properties you want to add</label>
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
                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- Add property modal end-->

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


<script>
    $(document).ready(function() {
        // Function to handle the addition of new fields
        $(".add-field-button").on("click", function() {
            var budgetFieldsContainer = $(this).closest('.card').find(".budget-fields-container");
            var newField = `
                <div class="col-lg-3 budget-field">
                    <div class="form-group">
                        <label class="form-label" contenteditable="false">
                            New Budget
                            <button type="button" class="edit-label-btn"><iconify-icon icon="bi:pencil-fill"></iconify-icon></button>
                        </label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            `;
            budgetFieldsContainer.append(newField);
        });

        // Edit label functionality
        $(document).on("click", ".edit-label-btn", function() {
    var label = $(this).closest('label');
    var editButton = $(this);

    // Make the label editable
    label.attr("contenteditable", "true").focus();

    // Hide the edit button and add a save button
    editButton.hide();
    if (!label.find(".save-label-btn").length) {
        label.append('<button type="button" class="save-label-btn">Save</button>');
    }
});

$(document).on("click", ".save-label-btn", function() {
    var label = $(this).closest('label');
    var saveButton = $(this);

    // Get the updated label text
    var updatedText = label.text().replace('Save', '').trim(); // Remove the "Save" text
    label.attr("contenteditable", "false").text(updatedText);

    // Re-add the edit button after the text
    if (!label.find(".edit-label-btn").length) {
        label.append('<button type="button" class="edit-label-btn"><iconify-icon icon="bi:pencil-fill"></iconify-icon></button>');
    }

    // Remove the save button
    saveButton.remove();
});


    });
</script>

<style>
    .edit-label-btn, .save-label-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: #007bff;
        font-size: 14px;
        margin-left: 5px;
    }

    .edit-label-btn:hover, .save-label-btn:hover {
        text-decoration: underline;
    }

    .form-label[contenteditable="true"] {
        border: 1px solid #cbcbe6;
  padding: 0px 10px;
  border-radius: 2px;
    }

    .form-label[contenteditable="true"]:focus {
        outline: none;
    }
</style>


<!-- add budget fields and edit budget title js start and also have some style for this  end -->

<!-- property details property type custom option selection js start -->
<script>
    $(document).ready(function() {
        $('.newPropertyTypeDiv').hide();
        $('.property-type-select').on('change', function() {
            const newPropertyTypeDiv = $(this).closest('.col-md-3').next('.newPropertyTypeDiv');
            if ($(this).val() === 'Other') {
                newPropertyTypeDiv.show();
            } else {
                newPropertyTypeDiv.hide();
            }
        });
    });
</script>
<!-- property details property type custom option selection js end -->

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
                    window.location.href = 'add-new-property.php';
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