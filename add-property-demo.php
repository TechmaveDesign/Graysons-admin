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
        /* .canvasFooterContainer {
            margin-left: -90px;
        } */
    }
</style>

<div class="container-xxl">

    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
            <!-- sub menu header -->
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
                            <!-- <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button> -->

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
                            <div class="nicescroll-bar" id="nopaddingTop">
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

                                <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">

                                    <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#AddPropertytb">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Add Property</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#AddDevelopmenttb">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Add Development</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#AddInspectionTime">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Add Inspection Time</span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="AddPropertytb">
                                        <div class="fullwidthTabInner_content_container">

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="contact-list-view">
                                                        <div class="addFropertyform_Container">

                                                            <div class="formstartcontainer">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
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
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for=""
                                                                                        class="form-label">Access
                                                                                        Code</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id="">
                                                                                </div>

                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for=""
                                                                                        class="form-label">Alarm
                                                                                        Code</label>
                                                                                    <input type="phone"
                                                                                        class="form-control" id="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
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

                                                                            <div class="col-md-4">
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

                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Select
                                                                                        Property Type</label>
                                                                                    <select name="" id="propertyType"
                                                                                        class="form-control select2">
                                                                                        <option disabled="" selected=""
                                                                                            value="">Please
                                                                                            Select...</option>
                                                                                        <option value="Building">
                                                                                            Building</option>
                                                                                        <option value="Apartment">
                                                                                            Apartment</option>
                                                                                        <option value="House">House
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-auto customcenterCol">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="form-label">&nbsp;</label>
                                                                                    <button type="button"
                                                                                        id="addPropertyTypeButton"
                                                                                        class="btn btn-icon btn-rounded btn-primary form-control">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="eva:plus-fill">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 hiddentype"
                                                                                id="newPropertyTypeDiv">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Add New
                                                                                        Property Type</label>
                                                                                    <div
                                                                                        class="addpropertyTypeContainer">
                                                                                        <input type="text"
                                                                                            id="newPropertyType"
                                                                                            class="form-control"
                                                                                            placeholder="New Property Type">
                                                                                        <button type="button"
                                                                                            id="savePropertyTypeButton"
                                                                                            class="btn btn-primary ">Save</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="AddProperty_Budget">
                                                                        <div class="tabtable_tbHeading">
                                                                            <h1>Add Budgets</h1>
                                                                        </div>
                                                                        <div class="row">

                                                                            <div class="col-lg-3">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleFormControlInput1"
                                                                                        class="form-label">Compliances
                                                                                        Budget</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id=""
                                                                                        vlaue="" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleFormControlInput1"
                                                                                        class="form-label">Compliances
                                                                                        Budget</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id=""
                                                                                        vlaue="" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleFormControlInput1"
                                                                                        class="form-label">Labour
                                                                                        Budget</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id=""
                                                                                        vlaue="" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleFormControlInput1"
                                                                                        class="form-label">Material
                                                                                        Budget</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id=""
                                                                                        vlaue="" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="SubuNitAddContainer">
                                                                    <div class="container mt-5">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="addSubUnitButton">

                                                                                    <button
                                                                                        class="btn btn-primary addFolderBtn AddpropertyUnit"
                                                                                        type="button" id="addFolderBtn">
                                                                                        <iconify-icon
                                                                                            icon="stash:list-add-light">
                                                                                        </iconify-icon> Add Unit
                                                                                        <i
                                                                                            class="bi bi-arrow-up-right-down-duotone"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <table id="folderTable"
                                                                            class="table  nowrap table-advance">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Unit Type</th>
                                                                                    <th>Unit Name</th>
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
                                        <div class="canvasFooterContainer">
                                <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                                    data-bs-dismiss="offcanvas">Cancel</button>
                                <button type="submit"
                                    class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                            </div>
                                    </div>

                                    <div class="tab-pane fade" id="AddDevelopmenttb">
                                        <div class="nodatafount_cmn_container">
                                            <div class="nodataImageWrap">
                                                <img src="dist/img/newimages/norecord.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="AddInspectionTime">
                                        <div class="addTimingsButtonBox">
                                            <a class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" href="#" data-bs-toggle="offcanvas"
                                            data-bs-target="#addinventorymodal" aria-controls="offcanvasExample">
                                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Add Inspection Times
                                            </a>
                                        </div>
                                    <div class="contact-list-view">
                                            <table class="table common-datatable nowrap w-100 ">
                                                <thead>
                                                    <tr>

                                                        <th>Address </th>
                                                        <th>Area</th>
                                                        <th>Unit Type</th>
                                                        <th>Unit Name</th>
                                                        <th>Inspection Time's</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1 Harvest Close
                                                        </td>
                                                        <td>Sunderland</td>
                                                        <td>Flat 1</td>
                                                        <td>11</td>
                                                        <td>12:00 PM</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="offcanvas" data-bs-target="#Editinventorymodal" aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top" title=""
                                                                        data-bs-original-title="View Property Details"
                                                                        href="property-details.php"><span class="icon"><span
                                                                                class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>23 Rosewood Avenue</td>
                                                        <td>Bristol</td>
                                                        <td>Apartment 3B</td>
                                                        <td>8</td>
                                                        <td>02:00 PM</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="offcanvas" data-bs-target="#Editinventorymodal" aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top" title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17 Maple Street</td>
                                                        <td>Manchester</td>
                                                        <td>Flat 2A</td>
                                                        <td>5</td>
                                                        <td>10:00 AM</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="offcanvas" data-bs-target="#Editinventorymodal" aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top" title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>42 Elm Street</td>
                                                        <td>Leeds</td>
                                                        <td>House 5C</td>
                                                        <td>12</td>
                                                        <td>12:20 PM</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="offcanvas" data-bs-target="#Editinventorymodal" aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top" title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>9 Oak Lane</td>
                                                        <td>Liverpool</td>
                                                        <td>Flat 5D</td>
                                                        <td>9</td>
                                                        <td>03:00 PM</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="offcanvas" data-bs-target="#Editinventorymodal" aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top" title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>31 Willow Crescent</td>
                                                        <td>Newcastle</td>
                                                        <td>Apartment 2C</td>
                                                        <td>7</td>
                                                        <td>11:00 PM</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="offcanvas" data-bs-target="#Editinventorymodal" aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top" title=""
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
                    </form>

                </div>

            </div>

        </div>

    </div>
    <!-- /Page Body -->

</div>


<!-- add user offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addinventorymodal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add Inspection Timings
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
    <form class="" action="inventories.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">

                <div class="formstartcontainer mt-5">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Property </label>
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
                    <div class="col-lg-12">
                    <div id="UnitTimeContainer">
                        <div class="UnitTimeBox">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Property Unit Name</label>
                                        <select name="" class="form-control select2">
                                            <option value="" selected disable readonly>Select an Option</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Start Time</label>
                                        <input type="text" name="time" value="" class="form-control time__pickers" id="timepicker" placeholder="Select Time" required="" readonly="">
                                        <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        
                    </div>
                    
                    

                        <!-- Add more button -->
                        <div class="col-lg-12">
                            <div class="addMoreInven_btn">
                                <button type="button" class="btnaddMoreicon badge badge-soft-success" id="addMoreButton">
                                    <iconify-icon icon="material-symbols-light:library-add-outline"></iconify-icon> Add More
                                </button>
                            </div>
                        </div>


                        <!-- <div class="contact-list-view mt-4" id="timingAddList">
                            <table class="table  nowrap w-100 ">
                                <thead>
                                    <tr>

                                        <th>Property</th>
                                        <th>Unit Name</th>
                                        <th>Inspection Time's</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1 Harvest Close
                                        </td>
                                        <td>11</td>
                                        <td>12:00 PM</td>
                                        <td>
                                            <div class="d-flex align-items-center ActionDropdown">
                                                <div class="d-flex">
                                                
                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#">
                                                        <span class="icon">
                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                            </iconify-icon>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="#" id="deleteTable">
                                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="tabler:trash"></iconify-icon></span></span></a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            

                                </tbody>
                            </table>
                            </div> -->

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
<!-- add user offcanvas modal end -->


<!-- add user offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Editinventorymodal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Edit Inspection Timings
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
    <form class="" action="inventories.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">

                <div class="formstartcontainer mt-5">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Property </label>
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
                    <div class="col-lg-12">
                    <div id="EditUnitTimeContainer">
    <!-- Default UnitTimeBox 1 -->
    <div class="UnitTimeBox" id="UnitTimeBox_1">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-label">Property Unit Name</label>
                    <select name="" class="form-control select2">
                        <option value="" selected disable readonly>Select an Option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Start Time</label>
                    <input type="text" name="time" value="10:00 AM" class="form-control time__pickers" placeholder="Select Time" required="" readonly="">
                    <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-danger removeTime">
            <iconify-icon icon="tabler:trash"></iconify-icon>
        </button>
    </div>

    <!-- Default UnitTimeBox 2 -->
    <div class="UnitTimeBox" id="UnitTimeBox_2">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-label">Property Unit Name</label>
                    <select name="" class="form-control select2">
                        <option value="" selected disable readonly>Select an Option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Start Time</label>
                    <input type="text" name="time" value="11:30 AM" class="form-control time__pickers" placeholder="Select Time" required="" readonly="">
                    <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-danger removeTime">
            <iconify-icon icon="tabler:trash"></iconify-icon>
        </button>
    </div>
</div>

                        
                    </div>
                    
                    

                        <!-- Add more button -->
                        <div class="col-lg-12">
                            <div class="addMoreInven_btn">
                                <button type="button" class="btnaddMoreicon badge badge-soft-success" id="addEditMoreButton">
                                    <iconify-icon icon="material-symbols-light:library-add-outline"></iconify-icon> Add More
                                </button>
                            </div>
                        </div>


                        <!-- <div class="contact-list-view mt-4" id="timingAddList">
                            <table class="table  nowrap w-100 ">
                                <thead>
                                    <tr>

                                        <th>Property</th>
                                        <th>Unit Name</th>
                                        <th>Inspection Time's</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1 Harvest Close
                                        </td>
                                        <td>11</td>
                                        <td>12:00 PM</td>
                                        <td>
                                            <div class="d-flex align-items-center ActionDropdown">
                                                <div class="d-flex">
                                                
                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#">
                                                        <span class="icon">
                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                            </iconify-icon>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="#" id="deleteTable">
                                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="tabler:trash"></iconify-icon></span></span></a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            

                                </tbody>
                            </table>
                            </div> -->

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
<!-- add user offcanvas modal end -->

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
    $(document).ready(function() {
        // Function to add a new row to the table
        function addRow(unitType, unitName, level, parentRow) {
            var table = $("#folderTable tbody");
            var newRow = $("<tr></tr>");
            // Add indentation based on the level of nesting
            var indent = '&nbsp;'.repeat(level * 4);
            // Div element for the unit type
            var unitTypeDiv = $("<div>" + indent + '<input type="text" class="sustomaddonInput" value="' +
                unitType + '" />' + "</div>");
            var cell1 = $("<td></td>").append(unitTypeDiv);
            // Div element for the unit name
            var unitNameDiv = $("<div>" + indent + '<input type="text" class="sustomaddonInput" value="' +
                unitName + '" />' + "</div>");
            var cell2 = $("<td></td>").append(unitNameDiv);
            // Always include remove button for each row
            var cell3 = $(
                '<td><div class="actionapndButton_container"><button class="removeBtn cmntabapndBtn customtablecreation_remove" type="button"><iconify-icon icon="fluent:delete-16-regular"></iconify-icon> Remove</button>  <button class="addBtn cmntabapndBtn customtablecreation_Add" type="button"><iconify-icon icon="fluent:add-12-regular"></iconify-icon> Add Sub unit</button></div></td>'
            );
            newRow.append(cell1);
            newRow.append(cell2);
            newRow.append(cell3);
            // Add event listener for the remove button
            cell3.find(".removeBtn").click(function() {
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
                        // Remove all child rows recursively
                        var parent = $(this).closest("tr");
                        var childRows = parent.nextUntil(":not(.child)");
                        childRows.remove();
                        parent.remove();
                        Swal.fire(
                            'Deleted!',
                            'Your ' + unitType.toLowerCase() + ' has been deleted.',
                            'success'
                        )
                    }
                })
            });
            // Add event listener for the add subunit button
            cell3.find(".addBtn").click(function() {
                var parent = $(this).closest("tr");
                addRow("Sub Unit", "Sub Unit Name", level + 1, parent);
            });
            if (parentRow) {
                newRow.addClass("child");
                if (!parentRow.hasClass("main-parent")) {
                    // Add class to the main parent row
                    parentRow.addClass("main-parent");
                }
                parentRow.after(newRow);
            } else {
                table.append(newRow);
            }
        }
        // Add event listener for the add folder button
        $("#addFolderBtn").click(function() {
            addRow("Unit Type", "Unit Name", 0);
        });
    });
</script>
<!-- add property unit table js end-->

<!-- Edit property unit table js -->
<script>
    $(document).ready(function() {
        // Function to add a new row to the table
        function addRow(unitType, unitName, level, parentRow) {
            var table = $("#folderTable2 tbody");
            var newRow = $("<tr></tr>");
            // Add indentation based on the level of nesting
            var indent = '&nbsp;'.repeat(level * 4);
            // Div element for the unit type
            var unitTypeDiv = $("<div>" + indent + '<input type="text" class="sustomaddonInput" value="' +
                unitType + '" />' + "</div>");
            var cell1 = $("<td></td>").append(unitTypeDiv);
            // Div element for the unit name
            var unitNameDiv = $("<div>" + indent + '<input type="text" class="sustomaddonInput" value="' +
                unitName + '" />' + "</div>");
            var cell2 = $("<td></td>").append(unitNameDiv);
            // Always include remove button for each row
            var cell3 = $(
                '<td><div class="actionapndButton_container"><button class="removeBtn cmntabapndBtn customtablecreation_remove" type="button"><iconify-icon icon="fluent:delete-16-regular"></iconify-icon> Remove</button>  <button class="addBtn cmntabapndBtn customtablecreation_Add" type="button"><iconify-icon icon="fluent:add-12-regular"></iconify-icon> Add Sub unit</button></div></td>'
            );
            newRow.append(cell1);
            newRow.append(cell2);
            newRow.append(cell3);
            // Add event listener for the remove button
            cell3.find(".removeBtn").click(function() {
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
                        // Remove all child rows recursively
                        var parent = $(this).closest("tr");
                        var childRows = parent.nextUntil(":not(.child)");
                        childRows.remove();
                        parent.remove();
                        Swal.fire(
                            'Deleted!',
                            'Your ' + unitType.toLowerCase() + ' has been deleted.',
                            'success'
                        )
                    }
                })
            });
            // Add event listener for the add subunit button
            cell3.find(".addBtn").click(function() {
                var parent = $(this).closest("tr");
                addRow("Sub Unit", "Sub Unit Name", level + 1, parent);
            });
            if (parentRow) {
                newRow.addClass("child");
                if (!parentRow.hasClass("main-parent")) {
                    // Add class to the main parent row
                    parentRow.addClass("main-parent");
                }
                parentRow.after(newRow);
            } else {
                table.append(newRow);
            }
        }
        // Add event listener for the add folder button
        $("#addFolderBtn2").click(function() {
            addRow("Unit Type", "Unit Name", 0);
        });
    });
</script>
<!-- edit property unit table js end-->

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
  $(document).ready(function () {
    // Initialize Select2 for existing elements
    $(".select2").select2();

    // Initialize mdtimepicker for existing elements
    $(".time__pickers").mdtimepicker();

    // Add more UnitTimeBox
    $("#addMoreButton").click(function () {
        const newUnitTimeBox = `
            <div class="UnitTimeBox">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Property Unit Name</label>
                            <select name="" class="form-control select2">
                                <option value="" selected disable readonly>Select an Option</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Start Time</label>
                            <input type="text" name="time" value="" class="form-control time__pickers" placeholder="Select Time" required="" readonly="">
                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-danger removeTime">
                    <iconify-icon icon="tabler:trash"></iconify-icon>
                </button>
            </div>`;
        // Append the new UnitTimeBox
        $("#UnitTimeContainer").append(newUnitTimeBox);

        // Reinitialize Select2 for new elements
        $(".select2").select2();

        // Reinitialize mdtimepicker for new elements
        $(".time__pickers").mdtimepicker();
    });

    // Remove UnitTimeBox
    $(document).on("click", ".removeTime", function () {
        $(this).closest(".UnitTimeBox").remove();
    });
});


</script>


<script>
    $(document).ready(function () {
    // Initialize Select2 for default and new elements
    $("#EditUnitTimeContainer .select2").select2();

    // Initialize mdtimepicker for default and new elements
    $("#EditUnitTimeContainer .time__pickers").mdtimepicker();

    // Add more UnitTimeBox for editing
    $("#addEditMoreButton").click(function () {
        // Generate a unique ID for the new UnitTimeBox
        const uniqueId = `UnitTimeBox_${Date.now()}`;

        const newUnitTimeBox = `
            <div class="UnitTimeBox" id="${uniqueId}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Property Unit Name</label>
                            <select name="" class="form-control select2">
                                <option value="" selected disable readonly>Select an Option</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Start Time</label>
                            <input type="text" name="time" value="" class="form-control time__pickers" placeholder="Select Time" required="" readonly="">
                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-danger removeTime">
                    <iconify-icon icon="tabler:trash"></iconify-icon>
                </button>
            </div>`;

        // Append the new UnitTimeBox
        $("#EditUnitTimeContainer").append(newUnitTimeBox);

        // Reinitialize Select2 for the new elements
        $(`#${uniqueId} .select2`).select2();

        // Reinitialize mdtimepicker for the new elements
        $(`#${uniqueId} .time__pickers`).mdtimepicker();
    });

    // Remove UnitTimeBox
    $(document).on("click", "#EditUnitTimeContainer .removeTime", function () {
        $(this).closest(".UnitTimeBox").remove();
    });
});

</script>
<!-- style for submit form action container dont remove this -->
<style>
    .canvasFooterContainer {
        position: fixed !important;
        width: 100% !important;
        height: 70px;
        margin-left: -70px;
    }

    .hk-wrapper[data-layout="vertical"][data-layout-style="default"] .canvasFooterContainer {
        position: fixed !important;
        width: 100% !important;
        height: 70px;
        margin-left: -270px;
    }
</style>
<!-- end -->