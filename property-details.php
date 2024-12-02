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
                                <a class="contactapp-title link-dark" href="javascript:void(0)" role="button">
                                    <h1>Property Details </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="all-properties.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0)">Import</a>
                            </div>

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
                            <div class="fullwidthDesktopTabs MobileScrollShow">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Details</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Map">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Map</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Inspections">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Inspections</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Documents">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Property Documents</span>

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

                                    <li class="nav-item">
                                        <a class="nav-link" href="property-details.php">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Parent</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Units">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Units</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Tenants">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Tenants</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Events">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Events</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Issues">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Tickets</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#communication">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Communications</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#PreferredContract">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Preferred Contracts</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#SecureCodes">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Secure Codes</span>

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
                                        <div class="tab-pane fade show active" id="Details">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Details </h2>
                                                </div>
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Address</label>
                                                                    <input type="text" class="form-control" id="Address"
                                                                        value="1-7 Union Street">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="Area" class="form-label">Area</label>
                                                                    <input type="text" class="form-control" id="Area"
                                                                        value="Sunderland">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="Postcode"
                                                                        class="form-label">Postcode</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Postcode" value="SR1 3BT">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="Type" class="form-label">Type</label>
                                                                    <input type="text" class="form-control" id="Type"
                                                                        value="Bedroom 3">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="Name" class="form-label">Name</label>
                                                                    <input type="text" class="form-control" id="Name"
                                                                        value="133">
                                                                </div>

                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label for="Name" class="form-label">&nbsp;</label>
                                                                    <div class="form-check checkWithLabel">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="gridCheck">
                                                                        <label class="form-check-label" for="gridCheck">
                                                                            Landlord Area
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="row">

                                                            <div class="col-md-3">
                                                                <div class="form-group ">
                                                                    <label for="" class="form-label"> Bedrooms</label>
                                                                    <input type="number" class="form-control" value="">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">*Access Code</label>
                                                                    <input class="form-control" type="text" name=""
                                                                        value="Post Box Code 103" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Office Key
                                                                        Label</label>
                                                                    <input type="text" class="form-control" value="">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Master Key
                                                                        Code</label>
                                                                    <input type="text" class="form-control" value="">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> *Alarm
                                                                        Code</label>
                                                                    <input type="text" class="form-control" value="">
                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label for="Name" class="form-label">&nbsp;</label>
                                                                    <div class="form-check checkWithLabel">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="gridCheck">
                                                                        <label class="form-check-label" for="gridCheck">
                                                                            Out of Service
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="row">

                                                            <div class="col-md-3">
                                                                <div class="form-group ">
                                                                    <label for="" class="form-label">Wi-Fi SSID</label>
                                                                    <input type="text" class="form-control"
                                                                        value="Phoenix House">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Wi-Fi Password</label>
                                                                    <input class="form-control" type="text" name=""
                                                                        value="Graysons61Phoenix" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Default Tenancy
                                                                        Type</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="1">Private</option>
                                                                        <option value="2" selected="">Student</option>
                                                                        <option value="4">Commercial</option>
                                                                        <option value="5">Dental</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Landlord</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="15">Properties, Graysons</option>
                                                                        <option value="19">Ghai, Akash</option>
                                                                        <option value="22">Properties, SR</option>
                                                                        <option value="27">Ghai, Harjit</option>
                                                                        <option value="239">Somal, Mohinder</option>
                                                                        <option value="301">Ghai, Shashi</option>
                                                                        <option value="302">Somal, Inderjeet</option>
                                                                        <option value="304" selected="">Sunderland Ltd,
                                                                            City
                                                                            View</option>
                                                                        <option value="310">Ghai Investments, Somal
                                                                        </option>
                                                                        <option value="320">Sunderland Ltd, Phoenix
                                                                            House
                                                                        </option>
                                                                        <option value="323">Developments Ltd, Graystones
                                                                        </option>
                                                                        <option value="364">Nayyar, Neeraj</option>
                                                                        <option value="401">Hussain, Zak</option>
                                                                        <option value="437">Development, SSG Property
                                                                        </option>
                                                                        <option value="837">Somal, Amrit</option>
                                                                        <option value="1143">Limited, Ryecroft Holdings
                                                                        </option>
                                                                        <option value="1245">Terrace Limited, Leazes
                                                                        </option>
                                                                        <option value="1759">Dental Education,
                                                                            Waterfront
                                                                        </option>
                                                                        <option value="1891">Ghai, Anil</option>
                                                                        <option value="1892">Malhi, Navjit</option>
                                                                        <option value="2087">Somal, Deepinder</option>
                                                                        <option value="2088">Services Ltd, Union
                                                                            Property
                                                                        </option>
                                                                        <option value="2143">Properties, Ellite</option>
                                                                        <option value="2343">Group, Sands</option>
                                                                        <option value="2419">Limited, Mayfair Land
                                                                            Management</option>
                                                                        <option value="2767">DEVELOPMENTS LIMITED,
                                                                            NAYYAR
                                                                            INVESTMENTS</option>
                                                                        <option value="2901">LIMITED, SAA NEWCASTLE
                                                                            PROPERTIES</option>
                                                                        <option value="3143">Limited, Stepney Lane
                                                                            Newcastle
                                                                        </option>
                                                                        <option value="3638">Limited, Ellite Mayfair
                                                                        </option>
                                                                        <option value="4239">City Council, Sunderland
                                                                        </option>
                                                                        <option value="4990">Limited, Black Tusk
                                                                            Investments
                                                                        </option>
                                                                        <option value="5276">Landlord, Testing</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Inventory</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="2"> CITY VIEW PH STANDARD STUDIO
                                                                            NEW
                                                                            2024</option>
                                                                        <option value="3">PENTHOUSE STUDIO PH NEW 2024
                                                                        </option>
                                                                        <option value="4"> STUDIO THORNHILL NEW 2024
                                                                        </option>
                                                                        <option value="5" selected=""> ENSUITE BEDROOM
                                                                            PH
                                                                            NEW 2024</option>
                                                                        <option value="6"> ENSUITE BEDROOM CVTH NEW 2024
                                                                        </option>
                                                                        <option value="7">STUDIO ST. BEDES NEW 2024
                                                                        </option>
                                                                        <option value="8">ENSUITE BEDROOM ST .BEDES NEW
                                                                            2024
                                                                        </option>
                                                                        <option value="9"> BASEMENT STUDIO STBEDES
                                                                            SUNDERLAND NEW 2024</option>
                                                                        <option value="10">COTTAGE ST. BEDES NEW 2024
                                                                        </option>
                                                                        <option value="11">6 Mowbray Close OLD ?????
                                                                        </option>
                                                                        <option value="12">9 Mowbray Closen OLD ????????
                                                                        </option>
                                                                        <option value="13"> 45 ORMONDE STREET SUNDERLAND
                                                                            NEW
                                                                            2024</option>
                                                                        <option value="14"> 43 FORTLAND PLACE SUNDERLAND
                                                                            NEW
                                                                            2024</option>
                                                                        <option value="15"> 131 CROYDON ROAD NEWCASTLE
                                                                            UPON
                                                                            TYNE NEW 2024</option>
                                                                        <option value="16"> 125 CROTYDON ROAD NEWCASTLE
                                                                            UPON
                                                                            TYNE NEW 2024</option>
                                                                        <option value="17"> 26 MANOR HOUSE NEWCASTLE
                                                                            UPON
                                                                            TYNE NEW 2024</option>
                                                                        <option value="18"> 35 GLENTHORN ROAD NEWCASTLE
                                                                            UPON
                                                                            TYNE NEW 2024</option>
                                                                        <option value="19"> 57 FORSYTH ROAD NEWCASTLE
                                                                            UPON
                                                                            TYNE NEW 2024 </option>
                                                                        <option value="20"> 23 CLAREMONT ROAD NEWCASTLE
                                                                            UPON
                                                                            TYNE NEW 2024</option>
                                                                        <option value="21"> 3 VALIANT WAY DURHAM NEW
                                                                            2024
                                                                        </option>
                                                                        <option value="22"> 19 LINACRE CLOSE NEWCASTLE
                                                                            UPON
                                                                            TYNE NEW 2024</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Inspection
                                                                        Due</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker "
                                                                        value="May, 22 2024 ">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Network Test
                                                                        Due</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker "
                                                                        value="April, 18 2024 ">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Cleaning
                                                                        Rota</label>
                                                                    <input type="text" class="form-control "
                                                                        value="Please see 'Routine Cleaning' issue. ">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Heating
                                                                        Schedule</label>
                                                                    <input type="text" class="form-control "
                                                                        value="N/A">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Fire Alarm
                                                                        Test</label>
                                                                    <input type="text" class="form-control "
                                                                        value="Monday">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Refuge
                                                                        Collection</label>
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="form-control refuge-collection-input"
                                                                            value="Friday, bins in rear area, for bulky items call Sunderland Council 0191 520 5555">
                                                                        <button
                                                                            class="btn btn-outline-secondary view-btn inputadonButton"
                                                                            type="button" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Click to view">
                                                                            <i class="bi bi-eye"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Sky
                                                                        Channels</label>
                                                                    <input type="text" class="form-control " value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Default Issue
                                                                        Assignee</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="1">Gowthorpe, Jason</option>
                                                                        <option value="15">Properties, Graysons</option>
                                                                        <option value="19">Ghai, Akash</option>
                                                                        <option value="23">Bartkute, Marina</option>
                                                                        <option value="265">Dwernicka, Ewa</option>
                                                                        <option value="271">Quinn, Lynsey</option>
                                                                        <option value="274">Jeske, Rafal</option>
                                                                        <option value="693">Zaronaitis, Sarunas</option>
                                                                        <option value="940">Kuran - Rkibi, Kasia
                                                                        </option>
                                                                        <option value="992">Sehgal, Ricky</option>
                                                                        <option value="1157">Kruszynski, Grzegorz
                                                                        </option>
                                                                        <option value="1215">Ghai, Rohan</option>
                                                                        <option value="1462">Smolinska, Anna</option>
                                                                        <option value="1623">van Antwerp, Joann</option>
                                                                        <option value="2137">Holland, Melanie</option>
                                                                        <option value="2146">Antreou, Eleni</option>
                                                                        <option value="2269">Nobre Lima, Odair Manuel
                                                                            Jesus
                                                                        </option>
                                                                        <option value="2346">DAMS Plumbing- URGENT, Gary
                                                                        </option>
                                                                        <option value="2724" selected="">Stewart,
                                                                            Shanise
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Marketing
                                                                        URL</label>
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="form-control marketing-url-input"
                                                                            value="https://graysonsproperties.co.uk/property/flat-3-flat-3-floor-1-city-viewphoenix-house-sunderland-sr1-3bt-2/">
                                                                        <button
                                                                            class="btn btn-outline-secondary copy-btn inputadonButton"
                                                                            type="button" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Copy URL">
                                                                            <i class="bi bi-clipboard"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Default Payment
                                                                        Plan</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="2">Monthly</option>
                                                                        <option value="3" selected="">Weekly</option>
                                                                        <option value="4">Custom</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Default Rental
                                                                        Payment
                                                                        Amount</label>
                                                                    <input type="text" class="form-control " value="111"
                                                                        readonly>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Default Utility
                                                                        Payment
                                                                        Amount</label>
                                                                    <input type="text" class="form-control " value="26"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="form-group">
                                                                    <label class="form-label">Appointment
                                                                        Colour:</label>
                                                                    <div class="input-group color-picker">
                                                                        <div class="input-group-text colorpicker-input-addon"
                                                                            style="background-color: rgb(0, 155, 132);">
                                                                            <input type="color"></div>
                                                                        <input type="text"
                                                                            class="form-control colorpicker-value"
                                                                            value="#009B84">
                                                                    </div>
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
                                                <button type="button" class="formdeleteButton">Delete</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Map">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Property Map </h2>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mapContainer">
                                                            <iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.6821295533673!2d138.62615907569946!3d-34.91442577397358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0c95ccb6a26d1%3A0xcd187420b921831!2s1-7%20Union%20St%2C%20Stepney%20SA%205069%2C%20Australia!5e0!3m2!1sen!2sin!4v1715164173684!5m2!1sen!2sin"
                                                                style="border:0;" allowfullscreen="" loading="lazy"
                                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="Inspections">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Inspections List </h2>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Unit</th>
                                                                        <th>Type</th>
                                                                        <th>Created</th>
                                                                        <th>updated</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            <a href="property-details.php">
                                                                                <div class="LongMesage_container">
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
                                                                                        <i class="bi bi-eye"></i> Read
                                                                                        More
                                                                                    </button>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>Check In</td>
                                                                        <td>01/09/2018 15:01</td>

                                                                        <td>22/11/2018 16:25</td>

                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">

                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Inspection Details"
                                                                                        href="view-inspection.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="eye"></i></span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="property-details.php">
                                                                                <div class="LongMesage_container">
                                                                                    <input
                                                                                        class="refuge-collection-input tableLongMessage_Input"
                                                                                        value="Bedroom 2 202, Flat 5 (Floor 2, No7), Sea View@Aqua Tower"></input>
                                                                                    <button
                                                                                        class="view-btn tablemessageview_btn"
                                                                                        type="button"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        aria-label="Click to view"
                                                                                        data-bs-original-title="Click to view Full Message">
                                                                                        <i class="bi bi-eye"></i> Read
                                                                                        More
                                                                                    </button>
                                                                                </div>
                                                                            </a>
                                                                        </td>

                                                                        <td>Check In</td>
                                                                        <td>05/12/2019 10:30</td>
                                                                        <td>10/03/2020 14:45</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Inspection Details"
                                                                                        href="view-inspection.php">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="eye"></i></span></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="property-details.php">
                                                                                <div class="LongMesage_container">
                                                                                    <input
                                                                                        class="refuge-collection-input tableLongMessage_Input"
                                                                                        value="Bedroom 1 401, Flat 8 (Floor 4, No13), Mountain View@Summit Residency"></input>
                                                                                    <button
                                                                                        class="view-btn tablemessageview_btn"
                                                                                        type="button"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        aria-label="Click to view"
                                                                                        data-bs-original-title="Click to view Full Message">
                                                                                        <i class="bi bi-eye"></i> Read
                                                                                        More
                                                                                    </button>
                                                                                </div>
                                                                            </a>
                                                                        </td>

                                                                        <td>Check In</td>
                                                                        <td>20/06/2021 09:15</td>
                                                                        <td>25/09/2021 18:00</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Inspection Details"
                                                                                        href="view-inspection.php">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="eye"></i></span></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="property-details.php">
                                                                                <div class="LongMesage_container">
                                                                                    <input
                                                                                        class="refuge-collection-input tableLongMessage_Input"
                                                                                        value="Bedroom 4 514, Flat 12 (Floor 5, No18), Park View@Green Horizon"></input>
                                                                                    <button
                                                                                        class="view-btn tablemessageview_btn"
                                                                                        type="button"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        aria-label="Click to view"
                                                                                        data-bs-original-title="Click to view Full Message">
                                                                                        <i class="bi bi-eye"></i> Read
                                                                                        More
                                                                                    </button>
                                                                                </div>
                                                                            </a>
                                                                        </td>

                                                                        <td>Check In</td>
                                                                        <td>03/05/2022 14:00</td>
                                                                        <td>08/08/2022 11:20</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Inspection Details"
                                                                                        href="view-inspection.php">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="eye"></i></span></span>
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

                                        <div class="tab-pane fade" id="Documents">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docFilterContainer">
                                                    <div class="docfilterbutton">
                                                        <h2 class="tabinnerTitle">Property Documents </h2>
                                                        <div class="RightTabinr_container">

                                                            <button
                                                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                type="button" data-bs-toggle="offcanvas"
                                                                data-bs-target="#addDocument"
                                                                aria-controls="offcanvasExample">
                                                                <iconify-icon icon="lets-icons:add-round">
                                                                </iconify-icon> Upload Document
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

                                                                        <th>Title</th>
                                                                        <th>Type</th>
                                                                        <th>Extension</th>
                                                                        <th>Uploaded By</th>
                                                                        <th>Date Added</th>
                                                                        <th>Expiry Date</th>
                                                                        <th>Visibility</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            4. How to rent guide
                                                                        </td>
                                                                        <td>Policy</td>
                                                                        <td>pdf</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Amusan, Shy</a>
                                                                        </td>
                                                                        <td>28/09/2023 19:47</td>
                                                                        <td>31/03/2024</td>
                                                                        <td>Everyone</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7. Introduction to Marketing</td>
                                                                        <td>Guidelines</td>
                                                                        <td>docx</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Smith, John</a>
                                                                        </td>
                                                                        <td>15/11/2023 10:22</td>
                                                                        <td>30/04/2024</td>
                                                                        <td>Landlord</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12. Project Management Essentials</td>
                                                                        <td>Procedure</td>
                                                                        <td>pptx</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Garcia, Maria</a>
                                                                        </td>
                                                                        <td>03/07/2023 14:55</td>
                                                                        <td>15/12/2023</td>
                                                                        <td>Managers</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>5. Employee Code of Conduct</td>
                                                                        <td>Policy</td>
                                                                        <td>pdf</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Brown, Sarah</a>
                                                                        </td>
                                                                        <td>10/02/2023 08:33</td>
                                                                        <td>31/12/2023</td>
                                                                        <td>Employees</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>9. Cybersecurity Awareness Training</td>
                                                                        <td>Training</td>
                                                                        <td>pdf</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Johnson, Michael</a>
                                                                        </td>
                                                                        <td>22/08/2023 16:10</td>
                                                                        <td>30/06/2024</td>
                                                                        <td>Landlord</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>8. Marketing Strategy Template</td>
                                                                        <td>Template</td>
                                                                        <td>doc</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Williams, David</a>
                                                                        </td>
                                                                        <td>19/05/2023 11:45</td>
                                                                        <td>31/12/2023</td>
                                                                        <td>Managers</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>11. Workplace Diversity Policy</td>
                                                                        <td>Policy</td>
                                                                        <td>pdf</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Lee, Jennifer</a>
                                                                        </td>
                                                                        <td>07/09/2023 09:30</td>
                                                                        <td>30/06/2024</td>
                                                                        <td>Staff Only</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

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

                                        <div class="tab-pane fade" id="Notes">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Notes </h2>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">

                                                        <div class="row">
                                                        <div
            class="d-flex align-items-center justify-content-between mb-2">
            <div class="title title-lg mb-0"><span>All
                    Comments</span></div>

        </div>

        <div class="comment-block">

            <div class="card card-border note-block">
                <div class="card-body">

                    <div class="media align-items-center">
                        <div class="media-head">
                            <div
                                class="avatar avatar-xs avatar-rounded">
                                <img src="dist/img/newimages/users/userdummy.png"
                                    alt="user"
                                    class="avatar-img">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="noteAuthor_title">
                                Martin Luther</div>
                            <div class="NoteTiming">
                                9 Apr, 20, 7:14 AM
                            </div>
                        </div>
                    </div>
                    <p class="NoteDescription">@<a href="#"
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

                    <div class="media align-items-center">
                        <div class="media-head">
                            <div
                                class="avatar avatar-xs avatar-rounded">
                                <img src="dist/img/newimages/users/userdummy.png"
                                    alt="user"
                                    class="avatar-img">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="noteAuthor_title">
                                Katherine Jones
                            </div>
                            <div class="NoteTiming">
                                8 Apr, 20, 5:30 PM
                            </div>
                        </div>
                    </div>
                    <p class="NoteDescription">@<a href="#"
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
                    <input class="form-control" type="text"
                        name="" placeholder="Add Title">
                </div>

                <div class="form-group">
                    <label class="form-label">Add
                        Comment</label>
                    <textarea class="form-control"
                        rows="5"></textarea>
                </div>
                <div class="NoteAction_container">
                    <div class="sendEnquiryNote_container">
                        <div class="addto_todolist">
                            <div class="form-check">
                                <input type="checkbox"
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
                                <input type="checkbox"
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
                                    id="selectDepartment">
                                    <option disabled
                                        selected value="">
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
                                    id="selectUser">
                                    <option disabled
                                        selected value="">
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
                                    Due Date</label>
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

                                        <!-- <div class="tab-pane fade" id="Parent">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="norecordFound">
                                                            <img src="dist/img/newimages/norecord.jpg"
                                                                class="lightbox-trigger" alt="">
                                                            <a href="##">

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="tab-pane fade" id="Units">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Units </h2>
                                                    <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#propertiform_modal"
                                                            aria-controls="offcanvasExample">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Unit
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Type</th>
                                                                        <th>Name</th>
                                                                        <th>Occupancy</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            Bedroom 1
                                                                        </td>
                                                                        <td>131</td>
                                                                        <td>1 / 1</td>

                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="property-details.php"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Details"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="wpf:view-file">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Living Room</td>
                                                                        <td>215</td>
                                                                        <td>2 / 2</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="property-details.php"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Details"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="wpf:view-file">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Kitchen</td>
                                                                        <td>98</td>
                                                                        <td>1 / 1</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="property-details.php"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Details"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="wpf:view-file">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Bathroom</td>
                                                                        <td>75</td>
                                                                        <td>1 / 1</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="property-details.php"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Details"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="wpf:view-file">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Office</td>
                                                                        <td>110</td>
                                                                        <td>1 / 1</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="property-details.php"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Details"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="wpf:view-file">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Dining Room</td>
                                                                        <td>150</td>
                                                                        <td>1 / 1</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="property-details.php"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Details"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="wpf:view-file">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
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

                                        <div class="tab-pane fade" id="Tenants">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Tenants </h2>

                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Name</th>
                                                                        <th>Type</th>
                                                                        <th>Start Date</th>
                                                                        <th>End Date</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Danial Craig</a>
                                                                        </td>
                                                                        <td>Student</td>
                                                                        <td>05/09/2024</td>
                                                                        <td>03/09/2024</td>

                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Tenancy Details"
                                                                                        href="tenancy.php"><span
                                                                                            class="icon"><span
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
                                                                                                    class="feather feather-eye">
                                                                                                    <path
                                                                                                        d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                                    </path>
                                                                                                    <circle cx="12"
                                                                                                        cy="12" r="3">
                                                                                                    </circle>
                                                                                                </svg></span></span></a>
                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Emma Watson</a>
                                                                        </td>
                                                                        <td>Student</td>
                                                                        <td>05/10/2024</td>
                                                                        <td>03/10/2024</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="View Tenancy Details"
                                                                                        href="tenancy.php"><span
                                                                                            class="icon"><span
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
                                                                                                    class="feather feather-eye">
                                                                                                    <path
                                                                                                        d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                                    </path>
                                                                                                    <circle cx="12"
                                                                                                        cy="12" r="3">
                                                                                                    </circle>
                                                                                                </svg></span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">John Doe</a>
                                                                        </td>
                                                                        <td>Student</td>
                                                                        <td>05/11/2024</td>
                                                                        <td>03/11/2024</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="View Tenancy Details"
                                                                                        href="tenancy.php"><span
                                                                                            class="icon"><span
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
                                                                                                    class="feather feather-eye">
                                                                                                    <path
                                                                                                        d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                                    </path>
                                                                                                    <circle cx="12"
                                                                                                        cy="12" r="3">
                                                                                                    </circle>
                                                                                                </svg></span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl"> Alice Johnson</a>
                                                                        </td>
                                                                        <td>Student</td>
                                                                        <td>05/12/2024</td>
                                                                        <td>03/12/2024</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="View Tenancy Details"
                                                                                        href="tenancy.php"><span
                                                                                            class="icon"><span
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
                                                                                                    class="feather feather-eye">
                                                                                                    <path
                                                                                                        d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                                    </path>
                                                                                                    <circle cx="12"
                                                                                                        cy="12" r="3">
                                                                                                    </circle>
                                                                                                </svg></span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl"> Michael Smith</a>
                                                                        </td>
                                                                        <td>Student</td>
                                                                        <td>05/13/2024</td>
                                                                        <td>03/13/2024</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="View Tenancy Details"
                                                                                        href="tenancy.php"><span
                                                                                            class="icon"><span
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
                                                                                                    class="feather feather-eye">
                                                                                                    <path
                                                                                                        d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                                    </path>
                                                                                                    <circle cx="12"
                                                                                                        cy="12" r="3">
                                                                                                    </circle>
                                                                                                </svg></span></span></a>
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

                                        <div class="tab-pane fade" id="Events">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">All Events </h2>
                                                    <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#AddEventModal"
                                                            aria-controls="offcanvasExample">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Event
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Type</th>
                                                                        <th>Short Message</th>
                                                                        <th>Message</th>
                                                                        <th>Created Date</th>
                                                                        <th>Expires</th>
                                                                        <th>Recipients</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Custom</td>
                                                                        <td>Student</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class=" refuge-collection-input  tableLongMessage_Input"
                                                                                    value=" Good afternoon, tenants who have an
                                                                                    appointment with Steve, please be
                                                                                    patient as he is running behind
                                                                                    schedule.">

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
                                                                        <td>03/05/2024 21:33</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#viewRecipients"
                                                                                        aria-controls="offcanvasExample"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span></span></button>
                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Custom</td>
                                                                        <td>Landlord</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
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
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <td>05/07/2024 10:15</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#viewRecipients"
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
                                                                        <td>Custom</td>
                                                                        <td>Student</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Reminder: Rent payments are due by the end of the week. Please make sure to submit your payments on time to avoid late fees."></input>
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
                                                                        <td>05/08/2024 09:45</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#viewRecipients"
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
                                                                        <td>Custom</td>
                                                                        <td>Landlord</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Dear tenants, please note that there will be temporary water shut-offs for maintenance purposes next Monday. We apologize for any inconvenience this may cause."></input>
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
                                                                        <td>05/09/2024 14:20</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#viewRecipients"
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
                                                                        <td>Custom</td>
                                                                        <td>Student</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Attention all residents: The gym will be closed for maintenance from 1 PM to 3 PM today. We apologize for any inconvenience."></input>
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
                                                                        <td>05/10/2024 12:30</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#viewRecipients"
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
                                                                        <td>Custom</td>
                                                                        <td>Landlord</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Dear tenants, please be advised that there will be a pest control inspection in all units tomorrow morning. Ensure your pets are secured and your unit is accessible."></input>
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
                                                                        <td>05/11/2024 08:55</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#viewRecipients"
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

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Issues">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">All Tickets List </h2>
                                                    <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#addissueModal"
                                                            aria-controls="offcanvasExample">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Ticket
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Ticket Title</th>
                                                                        <th>Property</th>
                                                                        <th>Department</th>
                                                                        <th>Category</th>
                                                                        <th>Sub Category</th>
                                                                        <th>Status</th>
                                                                        <th>Created Date</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Routine Cleaning</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
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
                                                                        <td>Accounts</td>
                                                                        <td>Bathroom</td>
                                                                        <td>Wall</td>
                                                                        <td><span
                                                                                class="badge badge-soft-success  my-1  me-2">Completed</span>
                                                                        </td>

                                                                        <td>09/04/2024 17:19</td>

                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a href="view-ticket.php"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Routine Cleaning</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
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
                                                                        <td>Maintenance</td>
                                                                        <td>Living Room</td>
                                                                        <td>Floor</td>
                                                                        <td><span
                                                                                class="badge badge-soft-warning my-1 me-2">Pending</span>
                                                                        </td>
                                                                        <td>09/04/2024 14:45</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a href="view-ticket.php"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Deep Cleaning</td>
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
                                                                        <td>Operations</td>
                                                                        <td>Kitchen</td>
                                                                        <td>Ceiling</td>
                                                                        <td><span
                                                                                class="badge badge-soft-danger my-1 me-2">Overdue</span>
                                                                        </td>
                                                                        <td>08/04/2024 11:30</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a href="view-ticket.php"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>General Inspection</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza">
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
                                                                        <td>Security</td>
                                                                        <td>Lobby</td>
                                                                        <td>Windows</td>
                                                                        <td><span
                                                                                class="badge badge-soft-info my-1 me-2">In
                                                                                Progress</span></td>
                                                                        <td>09/04/2024 09:15</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a href="view-ticket.php"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Emergency Repair</td>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Hallway 305, Flat 15 (Floor 3, No15), River View@Riverside Residences">
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
                                                                        <td>Maintenance</td>
                                                                        <td>Hallway</td>
                                                                        <td>Door</td>
                                                                        <td><span
                                                                                class="badge badge-soft-danger my-1 me-2">Critical</span>
                                                                        </td>
                                                                        <td>09/04/2024 12:00</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a href="view-ticket.php"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="teenyicons:eye-outline">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>
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

                                        <div class="tab-pane fade" id="PreferredContract">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Preferred Contract</h2>
                                                    <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#AddContractmodal"
                                                            aria-controls="offcanvasExample">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Contract
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Type</th>
                                                                        <th>Name </th>
                                                                        <th>Mobile Number</th>
                                                                        <th>Email Address</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Electrician</td>
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
                                                                        <td>1234567890</td>
                                                                        <td>student@gmail.com</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editpreffered_contract"
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
                                                                    <tr>
                                                                        <td>Plumber</td>
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
                                                                                            class="d-block text-high-em">John
                                                                                            Smith</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>9876543210</td>
                                                                        <td>johnsmith@example.com</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editpreffered_contract"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Carpenter</td>
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
                                                                                            class="d-block text-high-em">Jane
                                                                                            Doe</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>1122334455</td>
                                                                        <td>janedoe@example.com</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editpreffered_contract"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Mechanic</td>
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
                                                                                            class="d-block text-high-em">Michael
                                                                                            Jordan</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>2233445566</td>
                                                                        <td>michaeljordan@example.com</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editpreffered_contract"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Painter</td>
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
                                                                                            class="d-block text-high-em">Sarah
                                                                                            Connor</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>3344556677</td>
                                                                        <td>sarahconnor@example.com</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editpreffered_contract"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Cleaner</td>
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
                                                                                            class="d-block text-high-em">Lisa
                                                                                            Simpson</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>4455667788</td>
                                                                        <td>lisasimpson@example.com</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editpreffered_contract"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Gardener</td>
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
                                                                                            class="d-block text-high-em">Tony
                                                                                            Stark</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>5566778899</td>
                                                                        <td>tonystark@example.com</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editpreffered_contract"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
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

                                        </div>

                                        <div class="tab-pane fade" id="SecureCodes">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Secure Codes </h2>
                                                    <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="modal"
                                                            data-bs-target="#AddSecureCodes">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Secure Code
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Code</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Surveillance Cameras
                                                                        </td>
                                                                        <td>SEC001</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#EditSecureCodes">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span></span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Alarm Systems
                                                                        </td>
                                                                        <td>SEC002</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#EditSecureCodes">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span></span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Access Control System
                                                                        </td>
                                                                        <td>SEC003</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#EditSecureCodes">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span></span>
                                                                                    </button>
                                                                                </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Motion Sensors
                                                                        </td>
                                                                        <td>SEC004</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#EditSecureCodes">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span></span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            Security Fences
                                                                        </td>
                                                                        <td>SEC005</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#EditSecureCodes">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="fluent:edit-16-regular">
                                                                                                </iconify-icon>
                                                                                            </span></span>
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

                                        <div class="tab-pane fade" id="communication">
                                            <div class="fullwidthTabInner_content_container">

                                                <div class="chatapp-wrap chatapp-info-active">
                                                    <div class="chatapp-content">
                                                        <div class="chatapp-aside">
                                                            <header class="aside-header">
                                                                <div class="chatapp-title link-dark">
                                                                    <h1>Communications</h1>
                                                                </div>

                                                            </header>
                                                            <div data-simplebar class="aside-body">
                                                                <form class="aside-search" role="search">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Search Chats">
                                                                </form>

                                                                <ul
                                                                    class="chat-contacts-list list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <div class="media">
                                                                            <div class="media-head">
                                                                                <div
                                                                                    class="avatar avatar-sm avatar-rounded position-relative">
                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                        alt="user" class="avatar-img">
                                                                                    <span
                                                                                        class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div>
                                                                                    <div class="user-name">Morgan
                                                                                        Freeman</div>
                                                                                    <div class="user-last-chat">
                                                                                        morgan@outlook.com</div>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="last-chat-time">
                                                                                        Yesterday</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- <li class="list-group-item">
										<div  class="media read-chat active-user">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Huma Therman</div>
													
												</div>	
												<div>
													<div class="last-chat-time">10:25 PM</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded">
													<img src="dist/img/avatar13.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Charlie Chaplin</div>
													<div class="user-last-chat">Hello mike, thank you for inviting</div>
												</div>	
												<div>
													<div class="last-chat-time">5 min</div>
													<div class="badge badge-primary badge-sm badge-pill">2</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="media  read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
													<span class="initial-wrap">W</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Winston Churchil</div>
													<div class="user-last-chat">Show me what reports you have left</div>
												</div>	
												<div>
													<div class="last-chat-time">3:15 PM</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-primary position-relative avatar-rounded">
													<img src="dist/img/avatar1.jpg" alt="user" class="avatar-img">
													<div class="badge-icon badge-circle badge-icon-xxs text-white position-bottom-end-overflow-1">
														<div class="badge-icon-wrap">
															<i class="ri-group-fill text-light"></i>
														</div>
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 127">
															<g data-name="Ellipse 302" transform="translate(8 8)" stroke-width="3">
															<circle cx="55.5" cy="55.5" r="55.5" stroke="currentColor"></circle>
															<circle cx="55.5" cy="55.5" r="59.5" fill="currentColor"></circle>
															</g>
														</svg>
													</div>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">😐 Office Board</div>
													<div class="user-last-chat">Huma: great work <span class="text-primary">@jaquiline</span> you have done a great job</div>
												</div>	
												<div>
													<div class="last-chat-time">Yesterday</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar15.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Boss Baby</div>
													<div class="user-last-chat">Meeting in the morning</div>
												</div>	
												<div>
													<div class="last-chat-time">5:23 AM</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-primary avatar-rounded">
													<span class="initial-wrap">H</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Hencework</div>
													<div class="user-last-chat">give me the last copy of jampack</div>
												</div>	
												<div>
													<div class="last-chat-time">24 Jan</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Jaquiline Joker</div>
													<div class="user-last-chat">This is my test chat msg last one</div>
												</div>	
												<div>
													<div class="last-chat-time">4:05 AM</div>
													<div class="badge badge-primary badge-sm badge-pill">37</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar7.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Tom Cruz</div>
													<div class="user-last-chat text-danger"><span class="feather-icon fe-x me-1"><i data-feather="phone-call"></i></span>Missed call</div>
												</div>	
												<div>
													<div class="last-chat-time">7:40PM</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded">
													<img src="dist/img/avatar9.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Katherine Jones</div>
													<div class="user-last-chat">Hi!!! I was wondering if you are free</div>
												</div>	
												<div>
													<div class="last-chat-time">Yesterday</div>
													
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-soft-info avatar-rounded">
													<span class="initial-wrap">D</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Danial Craig</div>
													<div class="user-last-chat">Boss is looking for you in the office</div>
												</div>	
												<div>
													<div class="last-chat-time">3:15PM</div>
													
												</div>
											</div>
										</div>
									</li> -->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="chatapp-single-chat">
                                                            <header class="chat-header">
                                                                <a id="back_user_list"
                                                                    class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover back-user-list"
                                                                    href="#">
                                                                    <span class="icon"><span class="feather-icon"><i
                                                                                data-feather="chevron-left"></i></span></span>
                                                                </a>
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div
                                                                            class="avatar avatar-sm avatar-rounded position-relative">
                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="avatar-img">
                                                                            <span
                                                                                class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="user-name">Morgan Freeman</div>

                                                                    </div>
                                                                </div>
                                                                <div class="chat-options-wrap">

                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover chatapp-info-toggle active"
                                                                        href="#"><span class="icon"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title=""
                                                                            data-bs-original-title="Info"><span
                                                                                class="feather-icon"><i
                                                                                    data-feather="info"></i></span></span></a>

                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-none d-xl-block"
                                                                        href="#" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title=""
                                                                        data-bs-original-title="Collapse">
                                                                        <span class="icon">
                                                                            <span class="feather-icon"><i
                                                                                    data-feather="chevron-up"></i></span>
                                                                            <span class="feather-icon d-none"><i
                                                                                    data-feather="chevron-down"></i></span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </header>
                                                            <div data-simplebar id="chat_body" class="chat-body">
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
                                                                                    <p>Cool, lets talk about it tomorrow
                                                                                    </p>
                                                                                    <span class="chat-time">10:52
                                                                                        PM</span>
                                                                                </div>

                                                                            </div>
                                                                            <div class="msg-box">
                                                                                <div>
                                                                                    <p>Images for new marketing pages
                                                                                        have been sent</p>
                                                                                    <span class="chat-time">10:53
                                                                                        PM</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="day-sep">
                                                                        <span>Today</span>
                                                                    </li>
                                                                    <li class="media sent">
                                                                        <div class="media-body">
                                                                            <div class="msg-box">
                                                                                <div>
                                                                                    <p>Anyways, I am working on
                                                                                        something that you would like to
                                                                                        know. This project is based on
                                                                                        angular js and you are the keeda
                                                                                        in it. I need you help in it.
                                                                                    </p>
                                                                                    <span class="chat-time">11:52
                                                                                        PM</span>
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
                                                                                    <p>Hey Ben, just a reminder that you
                                                                                        are coming for the meeting today
                                                                                        in the conference. We are
                                                                                        proposing a change in the client
                                                                                        briefing.</p>
                                                                                    <span class="chat-time">9:20
                                                                                        AM</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <footer class="chat-footer">
                                                                <!-- <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover flex-shrink-0"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="icon"><span class="feather-icon"><i data-feather="share"></i></span></span>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-icon avatar-xs avatar-soft-primary avatar-rounded me-3">
												<span class="initial-wrap">
													<i class="ri-image-line"></i>
												</span>
											</div>
											<div>
												<span class="h6 mb-0">Photo or Video Library</span>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="#">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-icon avatar-xs avatar-soft-info avatar-rounded me-3">
												<span class="initial-wrap">
													<i class="ri-file-4-line"></i>
												</span>
											</div>
											<div>
												<span class="h6 mb-0">Documents</span>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="#">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-icon avatar-xs avatar-soft-success avatar-rounded me-3">
												<span class="initial-wrap">
													<i class="ri-map-pin-line"></i>
												</span>
											</div>
											<div>
												<span class="h6 mb-0">Location</span>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="#">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-icon avatar-xs avatar-soft-blue avatar-rounded me-3">
												<span class="initial-wrap">
													<i class="ri-contacts-line"></i>
												</span>
											</div>
											<div>
												<span class="h6 mb-0">Contact</span>
											</div>
										</div>
									</a>
								</div> -->
                                                                <div class="input-group">
                                                                    <span class="input-affix-wrapper">
                                                                        <input type="text" id="input_msg_send_chatapp"
                                                                            name="send-msg"
                                                                            class="input-msg-send form-control rounded-input"
                                                                            placeholder="Type your message...">
                                                                        <span class="input-suffix">
                                                                            <button
                                                                                class="btn btn-icon btn-flush-primary btn-rounded btn-send">
                                                                                <span class="icon"><span
                                                                                        class="feather-icon"><i
                                                                                            data-feather="arrow-right"></i></span></span>
                                                                            </button>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <!-- <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover">
									<span class="icon"><span class="feather-icon"><i data-feather="smile"></i></span></span>
								</button> -->
                                                            </footer>
                                                            <div class="chat-info">
                                                                <div data-simplebar class="nicescroll-bar">
                                                                    <button type="button" class="info-close btn-close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                    <div class="text-center">
                                                                        <div class="avatar avatar-xxl avatar-rounded">
                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="avatar-img">
                                                                        </div>
                                                                        <div class="cp-name text-truncate mt-2">Morgan
                                                                            Freeman</div>
                                                                        <p class="text-truncate">morgan@outlook.com</p>
                                                                    </div>

                                                                    <div class="tab-content mt-4">
                                                                        <div class="tab-pane fade show active"
                                                                            id="tab_info">

                                                                            <div class="collapse-simple mt-3">
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <a role="button"
                                                                                            data-bs-toggle="collapse"
                                                                                            href="#gn_info"
                                                                                            aria-expanded="true">General
                                                                                            Info</a>
                                                                                    </div>
                                                                                    <div id="gn_info"
                                                                                        class="collapse show">
                                                                                        <div class="card-body">
                                                                                            <ul class="cp-info">
                                                                                                <li>
                                                                                                    <a
                                                                                                        href="javascript:void(0);">
                                                                                                        <span
                                                                                                            class="cp-icon-wrap"><span
                                                                                                                class="feather-icon"><i
                                                                                                                    data-feather="briefcase"></i></span></span>
                                                                                                        Landlord
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a
                                                                                                        href="javascript:void(0);">
                                                                                                        <span
                                                                                                            class="cp-icon-wrap"><span
                                                                                                                class="feather-icon"><i
                                                                                                                    data-feather="mail"></i></span></span>
                                                                                                        <span
                                                                                                            class="text-primary">morgan@outlook.com</span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a
                                                                                                        href="javascript:void(0);">
                                                                                                        <span
                                                                                                            class="cp-icon-wrap"><span
                                                                                                                class="feather-icon"><i
                                                                                                                    data-feather="phone"></i></span></span>
                                                                                                        +91-25-4125-2365
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a
                                                                                                        href="javascript:void(0);">
                                                                                                        <span
                                                                                                            class="cp-icon-wrap"><span
                                                                                                                class="feather-icon"><i
                                                                                                                    data-feather="map-pin"></i></span></span>
                                                                                                        Oslo, Canada
                                                                                                    </a>
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

<!-- add document offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addDocument"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="line-md:document-remove" width="1.2em" height="1.2em"></iconify-icon>
            Add New document
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New document</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Document Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Invoice</option>
                                            <option value="2">Statement</option>
                                            <option value="3">Receipt</option>
                                            <option value="4">Warranty</option>
                                            <option value="5">Council Tax</option>
                                            <option value="6">Building Development</option>
                                            <option value="7">Expired</option>
                                            <option value="8">Maintenance</option>
                                            <option value="9">ID</option>
                                            <option value="10">Tenancy</option>
                                            <option value="11">Qualification</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Expiry Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Visibility</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Everyone</option>
                                            <option value="2">Staff Only</option>
                                            <option value="3">Landlord</option>
                                            <option value="4">Tenant</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Document</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- add document offcanvas modal end -->

<!-- add ticket offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addissueModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="pajamas:issue-type-incident" width="1.2em" height="1.2em"></iconify-icon>
            Add Ticket
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Ticket</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Visible to Tenants</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">None</option>
                                            <option value="2">Room Tenant</option>
                                            <option value="3">Unit Tenants</option>

                                        </select>

                                    </div>
                                </div> -->

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Department</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Maintenance</option>
                                            <option value="2">Accounts</option>
                                            <option value="3">General</option>
                                            <option value="4">Complaints Ticket</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Communal Area Inspection House 10</option>
                                            <option value="1147">Communal Area Inspection House 8</option>
                                            <option value="1151">Bedroom A, Apartment Apartment 2, City View @ Stepney
                                                Lane, Dulcie House, 11-13 Stepney Lane, Newcastle upon Tyne </option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Bathroom</option>
                                            <option value="1147">Bedroom</option>
                                            <option value="1151">Dining Room</option>
                                            <option value="1154">Kitchen</option>
                                            <option value="1161">Living Room</option>
                                            <option value="1165">Lighting</option>
                                            <option value="1169">Flooring</option>
                                            <option value="1170">Interior Walls</option>
                                            <option value="1171">Alarms</option>
                                            <option value="1175">Fire</option>
                                            <option value="1176">Leak</option>
                                            <option value="1177">Heating</option>
                                            <option value="1178">Exterior</option>
                                            <option value="1182">Roof</option>
                                            <option value="1183">Windows</option>
                                            <option value="1186">Doors</option>
                                            <option value="1189">Utilities &amp; Services</option>
                                            <option value="1194">Pests/Vermin</option>
                                            <option value="1198">Shared/Communal Facilities</option>
                                            <option value="1203">Other</option>
                                            <option value="1210">Boiler</option>
                                            <option value="1242">Fire Extinguisher</option>
                                            <option value="1244">Heatworx</option>
                                            <option value="1248">ILS (Ian Smith)</option>
                                            <option value="1255">Kevin (Electrician)</option>
                                            <option value="1267">Garry (Electrician)</option>
                                            <option value="1273">UK Lifts</option>
                                            <option value="1274">MacDonald Martin</option>
                                            <option value="1279">GEMS (Peter Goldwater)</option>
                                            <option value="1282">TLJ</option>
                                            <option value="1283">Kwik Flow</option>
                                            <option value="1290">Rafal Jeske</option>
                                            <option value="1295">Emergency Call Out</option>
                                            <option value="1296">Ashbrooke Audio Visual</option>
                                            <option value="1298">Computers/Printers</option>
                                            <option value="1299">Lights</option>
                                            <option value="1300">Routine Cleaning</option>
                                            <option value="1302">Property Inspection</option>
                                            <option value="1303">Portable Heaters</option>
                                            <option value="1307">Hot Water</option>
                                            <option value="1308">Service Report Recommendations</option>
                                            <option value="1309">Routine Fire Alarm Testing</option>
                                            <option value="1310">Routine Emergency Light Testing</option>
                                            <option value="1311">Legionella Test</option>
                                            <option value="1312">Fire Extinguinsher Check</option>
                                            <option value="1315">CG Plumbing and Heating</option>
                                            <option value="1316">Check Out Appointment</option>
                                            <option value="1317">Check-In Appointment</option>
                                            <option value="1318">Furniture Renewal</option>
                                            <option value="1319">Tenant Lock Out</option>
                                            <option value="1320">Air BND</option>
                                            <option value="1321">Viewing</option>
                                            <option value="1322">Welcome Letter</option>
                                            <option value="1323">Expansion Vessel Inspection</option>
                                            <option value="1324">Late Payment Charge</option>
                                            <option value="1325">Rent</option>
                                            <option value="1326">General Enquiries</option>
                                            <option value="1327">Cancellation of Tenancy Contract</option>
                                            <option value="1328">Marketing</option>
                                            <option value="1329">Emergency Call Out</option>
                                            <option value="1330">Student Exemption Certificates</option>
                                            <option value="1331">New Tenant</option>
                                            <option value="1332">Dental</option>
                                            <option value="1333">Council Tax</option>
                                            <option value="1338">Corridors</option>
                                            <option value="1339">PCC Room</option>
                                            <option value="1350">Office Time </option>
                                            <option value="1351">Staff Holidays </option>
                                            <option value="1352">Laundry Credit Cards</option>
                                            <option value="1353">Unable to Clean</option>
                                            <option value="1354">Tenancy Renewal</option>
                                            <option value="1356">Monthly Washing Machine Clean</option>
                                            <option value="1357">Order Cleaning Products</option>
                                            <option value="1359">Require Vacuum</option>
                                            <option value="1360">Post Tenancy Key Return</option>
                                            <option value="1361">Self Isolation</option>
                                            <option value="1365">Presentation Room Leazes Terraces Reservation</option>
                                            <option value="1371">PAT Testing</option>
                                            <option value="1373">Overtime Claim Back</option>
                                            <option value="1374">Sick Leave</option>
                                            <option value="1375">Guest Overnight Stay</option>
                                            <option value="1376">Green Push Button</option>
                                            <option value="1379">End of Term Departure</option>
                                            <option value="1380">Emergency On Call</option>
                                            <option value="1381">Lock Laundry room between 10-12PM</option>
                                            <option value="1382">Jopling House Communal Rooms</option>
                                            <option value="1412">Mental Wellbeing &amp; Counselling</option>
                                            <option value="1415">Order Building Materials</option>
                                            <option value="1416">Cleaning Stock List</option>
                                            <option value="1417">Laundry Coins</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Sub Category</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Bathroom</option>
                                            <option value="1147">Bedroom</option>
                                            <option value="1151">Dining Room</option>
                                            <option value="1154">Kitchen</option>
                                            <option value="1161">Living Room</option>
                                            <option value="1165">Lighting</option>
                                            <option value="1169">Flooring</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Ticket Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Description</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Upload Images</label>
                                        <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                            data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="container">
                                            <label class="form-label">Upload Videos</label>
                                            <input type="file" class="filepondVideo" id="videoInput" name="videoInput"
                                                multiple data-max-file-size="50MB" data-max-files="10">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Request presence during maintenance?
                                            </label>
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
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit Ticket</button>
        </div>
    </form>
</div>
<!-- add issue offcanvas modal end -->

<!-- add Event offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddEventModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="material-symbols:event-upcoming-outline" width="1.2em" height="1.2em"></iconify-icon>
            Add Event
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Event</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Short Message (Push Notifications Only)</label>
                                        <input type="text" class="form-control" id="" value="">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="2">Viewing</option>
                                            <option value="7">Custom</option>
                                            <option value="21">Happy Birthday</option>
                                            <option value="22">Appointment Cancelled</option>
                                            <option value="25">Enquiry Received</option>
                                            <option value="26">Viewing Booked</option>
                                            <option value="27">Viewing Complete</option>
                                            <option value="28">Viewing Cancelled</option>
                                            <option value="29">Viewing Missed</option>
                                            <option value="30">Viewing Follow Up</option>

                                        </select>

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

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Image</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Request Acknowledgement
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Send SMS Message
                                            </label>
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
<!-- add Event offcanvas modal end -->

<!-- add property Unit offcanvas modal start -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="propertiform_modal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="iconoir:unity" width="1.2em" height="1.2em"></iconify-icon>
            Add Property Unit
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Property Unit </div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" value="1-7 Union Street">
                                    </div>

                                </div>
                                <div class=" col-md-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">Area</label>
                                        <input type="text" class="form-control" value="Sunderland">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">Postcode</label>
                                        <input type="text" class="form-control" id="" value="SR1 3BT">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">Unit Type</label>
                                        <input type="text" class="form-control" id="">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">Unit Name</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">Access Code</label>
                                        <input type="phone" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">Alarm Code</label>
                                        <input type="phone" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Default Tenancy Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Private</option>
                                            <option value="2">Student</option>
                                            <option value="4">Commercial</option>
                                            <option value="5">Dental</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Landlord</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="15">Properties, Graysons</option>
                                            <option value="19">Ghai, Akash</option>
                                            <option value="22">Properties, SR</option>
                                            <option value="27">Ghai, Harjit</option>
                                            <option value="239">Somal, Mohinder</option>
                                            <option value="301">Ghai, Shashi</option>
                                            <option value="302">Somal, Inderjeet</option>
                                            <option value="304">Sunderland Ltd, City View</option>
                                            <option value="310">Ghai Investments, Somal</option>
                                            <option value="320">Sunderland Ltd, Phoenix House</option>
                                            <option value="323">Developments Ltd, Graystones</option>
                                            <option value="364">Nayyar, Neeraj</option>
                                            <option value="401">Hussain, Zak</option>
                                            <option value="437">Development, SSG Property</option>
                                            <option value="837">Somal, Amrit</option>
                                            <option value="1143">Limited, Ryecroft Holdings</option>
                                            <option value="1245">Terrace Limited, Leazes</option>
                                            <option value="1759">Dental Education, Waterfront</option>
                                            <option value="1891">Ghai, Anil</option>
                                            <option value="1892">Malhi, Navjit</option>
                                            <option value="2087">Somal, Deepinder</option>
                                            <option value="2088">Services Ltd, Union Property</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Appointment
                                            Colour</label>
                                        <div class="input-group color-picker">
                                            <div class="input-group-text colorpicker-input-addon"
                                                style="background-color: rgb(0, 155, 132);">
                                                <input type="color"></div>
                                            <input type="text" class="form-control colorpicker-value" value="#009B84">
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

                                        <button class="btn btn-primary" type="button" id="addFolderBtn">
                                            <iconify-icon icon="fluent:chat-add-16-regular"></iconify-icon> Add Unit
                                            here <i class="bi bi-arrow-up-right-down-duotone"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <table id="folderTable" class="table  nowrap table-advance">
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- add property Unit offcanvas modal end -->

<!-- view Recipients offcanvas modal-->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="viewRecipients"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="solar:user-check-line-duotone"></iconify-icon>
            View Recipients
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer offcanvasDatatable OffCanvasDatatable_form">
                <div class="formstartcontainer">
                    <div class="contact-list-view">

                        <table class="table common-datatable withoutbuttontable  nowrap w-100 ">
                            <thead>
                                <tr>

                                    <th>Recipient</th>
                                    <th>Viewed</th>
                                    <th>Acknowledged</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Danial Craig</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Emma Watson</a>
                                        </div>
                                    </td>
                                    <td>20/03/2024 06:52</td>

                                    <td>16/04/2023 02:38</td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">John Doe</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Jane Smith</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 09:15</td>
                                    <td>10/05/2024 09:30</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Michael Johnson</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Sophia Brown</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 11:45</td>
                                    <td>10/05/2024 12:00</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Christopher Lee</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Jessica Parker</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 14:20</td>
                                    <td>10/05/2024 14:35</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">David Brown</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Emily White</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 16:50</td>
                                    <td>10/05/2024 17:05</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Robert Smith</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Olivia Johnson</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 19:30</td>
                                    <td>10/05/2024 19:45</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">William Taylor</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Amelia Martinez</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 21:10</td>
                                    <td>10/05/2024 21:25</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">James Anderson</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Ava Wilson</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 23:20</td>
                                    <td>10/05/2024 23:35</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Daniel Williams</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Ella Thompson</a>
                                        </div>
                                    </td>
                                    <td>11/05/2024 08:45</td>
                                    <td>_ _ _</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Nathan Harris</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Grace Carter</a>
                                        </div>
                                    </td>
                                    <td>11/05/2024 10:30</td>
                                    <td>_ _ _</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Sophie Baker</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Lucas Adams</a>
                                        </div>
                                    </td>
                                    <td>11/05/2024 12:15</td>
                                    <td>_ _ _</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Ethan Richardson</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Lily Evans</a>
                                        </div>
                                    </td>
                                    <td>11/05/2024 14:00</td>
                                    <td>_ _ _</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>

        </div>
    </form>
</div>
<!-- view Recipients offcanvas modal end -->

<!--add preffered contract offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddContractmodal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="pajamas:issue-type-incident" width="1.2em" height="1.2em"></iconify-icon>
            Add Contract
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Contract</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Maintenance</option>
                                            <option value="2">Accounts</option>
                                            <option value="3">General</option>
                                            <option value="4">Complaints Ticket</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" id="Name">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control" id="Name">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="text" class="form-control" id="Name">
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
<!-- add preffered contracr offcanvas modal end -->

<!--Edit preffered contract offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Editpreffered_contract"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="pajamas:issue-type-incident" width="1.2em" height="1.2em"></iconify-icon>
            Edit Contract
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Edit this Contract</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Maintenance</option>
                                            <option value="2">Accounts</option>
                                            <option value="3">General</option>
                                            <option value="4">Complaints Ticket</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" id="Name">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control" id="Name">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="text" class="form-control" id="Name">
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
<!-- Edit preffered contracr offcanvas modal end -->

<!-- add source code modal-->
<div id="AddSecureCodes" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="property-details.php" method="post">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Add Secure Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Secure Code</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>

                    </div>

                </div>
                <div class="canvasFooterContainer CustomModal_footer">
                    <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                        data-bs-dismiss="offcanvas">Cancel</button>
                    <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- add source code  modal -->
<!-- add source code modal-->
<div id="EditSecureCodes" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="property-details.php" method="post">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Edit Secure Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Secure Code</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>

                    </div>

                </div>
                <div class="canvasFooterContainer CustomModal_footer">
                    <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                        data-bs-dismiss="offcanvas">Cancel</button>
                    <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- Edit source code  modal -->

<?php include('footer.php') ?>

<!-- add note script -->
<!-- --------------------------------------------------------- 
 assign note task to department from the left side under note js Functionality to 
  hide the assign selection option  start
  -------------------------------------------------------->

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

<!-- --------------------------------------------------------- 
 assign note task to department from the left side under note js Functionality to 
  hide the assign selection option  end
  -------------------------------------------------------->

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

<!-- marketing input url copy js -->
<script>
    $(document).ready(function() {
        // Initialize Bootstrap Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // Copy URL when copy button is clicked
        $('.copy-btn').on('click', function() {
            var inputElement = $(this).siblings('.marketing-url-input')[0];
            inputElement.select();
            document.execCommand('copy');
            $(this).attr('data-bs-original-title', 'Copied!').tooltip('show');
        });
    });
</script>
<!-- marketing input url copy js end-->

<!-- detail tab form Delete alert -->
<script>
    $(document).on("click", '.formdeleteButton', function(e) {
        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete This Details ?</h5><p class="sweetaleart_description">Deleting a Details will permanently remove from your Admin Panel.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete Detail',
            cancelButtonText: 'No, Keep Detail',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    html: '<div class="d-flex align-items-center"><i class="ri-delete-bin-5-fill me-2 fs-3 text-danger"></i><h5 class="text-danger mb-0">This Detail has been deleted!</h5></div>',
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
<!-- detail tab Delete alert end-->

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
<!-- add sub unit custom  tree view table end -->

<!-- multiple video File Uploader js -->
<!-- NOTE: Dont add this code in footer section -->
<!-- filepond for videos uploader -->
<link href="dist/customplugins/file-uploader/filepond.css" rel="stylesheet">
<link href="dist/customplugins/file-uploader/filepond-plugin-media-preview.min.css" rel="stylesheet">
<script src="dist/customplugins/file-uploader/filepond.js"></script>
<script src="dist/customplugins/file-uploader/filepond-plugin-file-validate-type.js"></script>
<script src="dist/customplugins/file-uploader/filepond-plugin-media-preview.min.js"></script>
<script src="dist/customplugins/file-uploader/lg-video.min.js"></script>
<!-- filepond for images uploader -->
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

<!-- filepond video js -->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginMediaPreview
    );
    // Create a FilePond instance
    const inputElement = document.querySelector('#videoInput');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['video/*'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            resolve(type);
        })
    });
    // Optional: FilePond configuration
    FilePond.setOptions({
        allowMultiple: true,
        maxFiles: 10
    });
    // Handle video previews
    pond.on('addfile', (error, file) => {
        if (error) {
            console.error('Error adding file', error);
            return;
        }
    });
</script>
<!-- filepond video js end -->

<!-- filepod image uploader start-->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput'), {
        acceptedFileTypes: ['image/*'],
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>
<!-- filepod image uploader end-->

