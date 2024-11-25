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

                                <div class="fullwidthDesktopTabs MobileScrollShow">
                                  

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

                                    </div>

                                    <div class="tab-pane fade" id="AddDevelopmenttb">
                                        <div class="nodatafount_cmn_container">
                                            <div class="nodataImageWrap">
                                                <img src="dist/img/newimages/norecord.jpg" alt="">
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
                    </form>

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