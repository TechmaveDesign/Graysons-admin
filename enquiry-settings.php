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
<?php include('headers/lettings-setting-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="javascript:void(0)" role="button">
                                    <h1>Enquiry Settings </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="index.php"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                    <form action="enquiry-settings.php" method="POST">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Single_Individual">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Single Individual</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " data-bs-toggle="tab" href="#Dual_Occupancy">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Dual Occupancy</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " data-bs-toggle="tab" href="#GroupEnquiry">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Group</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Details">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Enquiry Statuses</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Map">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Enquiry Sources</span>

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
                                        <div class="tab-pane fade show active" id="Single_Individual">
                                        <div class="fullwidthTabInner_content_container">
                                        <form class="" action="all-Enquiries.php" method="POST">
                                        <div class="enqsetting_inrHeader"> 
                    <div class="tabinnerTitle">
                    <iconify-icon icon="ri:user-settings-line"></iconify-icon>  Enquiry Settings For Single Individual
                    </div> 
                 </div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Prof.">Prof.</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="">
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
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a student , Family or a young
                                            professional?</label>
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
                                                    id="gridRadios2" value="professional">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Professional
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 Guarantorselect_column">
                                    <div class="form-group">
                                        <label class="form-label">Do you have UK Home Owner Guarantor?</label>
                                        <div class="flexoneselectgroup">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp1" value="gridRadiosp1">
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
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp3" value="gridRadiosp3">
                                                <label class="form-check-label" for="gridRadiosp3">
                                                    Maybe
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 locationselect_colcontainer" style="display: none;">
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

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nationality</label>
                                        <select id="" class="form-control nationality-select select2">
                                            <option disabled selected value="">Please Select...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Preferred date to start your tenancy</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">The period of weeks you are looking to rent?</label>
                                        <input type="phone" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Your current weekly rental budget?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="£ 90.00 - £ 100.00">£ 90.00 - £ 100.00</option>
                                            <option value="£ 101.00 - £ 120.00">£ 101.00 - £ 120.00</option>
                                            <option value="£ 121.00 - £ 140.00">£ 121.00 - £ 140.00</option>
                                            <option value="£ 141.00 - £ 160.00">£ 141.00 - £ 160.00</option>
                                            <option value="£ 161.00 - £ 180.00">£ 161.00 - £ 180.00</option>
                                            <option value="£ 181.00 - £ 200.00">£ 181.00 - £ 200.00</option>
                                            <option value="£ 201.00 and above">£ 201.00 and above</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you looking for bills inclusive or bills exclusive? </label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Bills Inclusive">Bills Inclusive</option>
                                            <option value="Bills Exclusive">Bills Exclusive</option>
                                            <option value="Bills Exclusive">Explore both options</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a night or a day person?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Night Person">Night Person</option>
                                            <option value="Day Person">Day Person</option>

                                        </select>

                                    </div>
                                </div>

                                

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Enquiry Status</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="11">Enquiry Received</option>
                                            <option value="12">Information Requested</option>
                                            <option value="13">Information Sent</option>
                                            <option value="14">Viewings Requested</option>
                                            <option value="15">Viewings Booked</option>
                                            <option value="16">Awaiting Viewing Feedback</option>
                                            <option value="17">Viewing Cancelled</option>
                                            <option value="18">Viewing FTA</option>
                                            <option value="19">First Follow-up Sent</option>
                                            <option value="20">Second Follow-up Sent</option>
                                            <option value="21">Final Follow-up Sent</option>
                                            <option value="22">Tenant Applied</option>
                                            <option value="23">Application Processed</option>
                                            <option value="24">Archived</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Properties</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="1">Communal Area Inspection House 10</option>
                                            <option value="2">Communal Area Inspection House 14</option>
                                            <option value="3">Communal Area Inspection House 16</option>
                                            <option value="4">Communal Area Inspection House 18</option>
                                            <option value="5">Communal Area Inspection House 2</option>
                                            <option value="6">Communal Area Inspection House 21</option>
                                            <option value="7">Communal Area Inspection House 22</option>
                                            <option value="8">Communal Area Inspection House 23</option>
                                            <option value="9">Communal Area Inspection House 24</option>
                                            <option value="10">Communal Area Inspection House 25</option>
                                            <option value="11">Communal Area Inspection House 26</option>
                                            <option value="12">Communal Area Inspection House 27</option>
                                            <option value="13">Communal Area Inspection House 28</option>
                                            <option value="14">Communal Area Inspection House 29</option>
                                            <option value="15">Communal Area Inspection House 3</option>
                                            <option value="16">Communal Area Inspection House 49</option>
                                            <option value="17">Communal Area Inspection House 52</option>
                                            <option value="18">Communal Area Inspection House 53</option>
                                            <option value="19">Communal Area Inspection House 55</option>
                                            <option value="20">Communal Area Inspection House 58</option>
                                            <option value="21">Communal Area Inspection House 6</option>
                                            <option value="22">Communal Area Inspection House 8</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Area</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="15 Stepney Lane, Newcastle upon Tyne">15 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="Jesmond">Jesmond</option>
                                            <option value="Ponteland">Ponteland</option>
                                            <option value="Stocksfield, Northumerland">Stocksfield, Northumerland
                                            </option>
                                            <option value="Brunswick Industrial Estate, Wideopen">Brunswick Industrial
                                                Estate, Wideopen</option>
                                            <option value="Newcastle upon Tyne">Newcastle upon Tyne</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="West One">West One</option>
                                            <option value="Newcastle upon tyne">Newcastle upon tyne</option>
                                            <option value="11-13 Stepney Lane, Newcastle upon Tyne">11-13 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="5-9 Stepney Lane, Newcastle upon Tyne">5-9 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="sector 63">sector 63</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Gateshead">Gateshead</option>
                                            <option value="UP">UP</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="London">London</option>
                                            <option value="5-9 stepney lane, newcastle upon tyne">5-9 stepney lane,
                                                newcastle upon tyne</option>
                                            <option value="Bedlington">Bedlington</option>
                                            <option value="Lanchester">Lanchester</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Apartment Type</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="1 Bed Apartment">1 Bed Apartment</option>
                                            <option value="2 Bed Apartment">2 Bed Apartment</option>
                                            <option value="3 Bed Apartment">3 Bed Apartment</option>
                                            <option value="4 Bed Apartment">4 Bed Apartment</option>
                                            <option value="5 Bed Apartment">5 Bed Apartment</option>
                                            <option value="6 Bed Apartment">6 Bed Apartment</option>
                                            
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
                                                    <input type="checkbox" class="form-check-input" id="customChecks2">
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Dual_Occupancy">
                                        <div class="fullwidthTabInner_content_container">
                                        <form class="" action="all-Enquiries.php" method="POST">
                                        <div class="enqsetting_inrHeader"> 
                    <div class="tabinnerTitle">
                    <iconify-icon icon="ri:user-settings-line"></iconify-icon>  Enquiry Settings For  Dual Occupancy
                    </div> 
                 </div>


                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Prof.">Prof.</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="">
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
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a student , Family or a young
                                            professional?</label>
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
                                                    id="gridRadios2" value="professional">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Professional
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 Guarantorselect_column">
                                    <div class="form-group">
                                        <label class="form-label">Do you have UK Home Owner Guarantor?</label>
                                        <div class="flexoneselectgroup">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp1" value="gridRadiosp1">
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
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp3" value="gridRadiosp3">
                                                <label class="form-check-label" for="gridRadiosp3">
                                                    Maybe
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 locationselect_colcontainer" style="display: none;">
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

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nationality</label>
                                        <select id="" class="form-control nationality-select select2">
                                            <option disabled selected value="">Please Select...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Preferred date to start your tenancy</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">The period of weeks you are looking to rent?</label>
                                        <input type="phone" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Your current weekly rental budget?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="£ 90.00 - £ 100.00">£ 90.00 - £ 100.00</option>
                                            <option value="£ 101.00 - £ 120.00">£ 101.00 - £ 120.00</option>
                                            <option value="£ 121.00 - £ 140.00">£ 121.00 - £ 140.00</option>
                                            <option value="£ 141.00 - £ 160.00">£ 141.00 - £ 160.00</option>
                                            <option value="£ 161.00 - £ 180.00">£ 161.00 - £ 180.00</option>
                                            <option value="£ 181.00 - £ 200.00">£ 181.00 - £ 200.00</option>
                                            <option value="£ 201.00 and above">£ 201.00 and above</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you looking for bills inclusive or bills exclusive? </label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Bills Inclusive">Bills Inclusive</option>
                                            <option value="Bills Exclusive">Bills Exclusive</option>
                                            <option value="Bills Exclusive">Explore both options</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a night or a day person?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Night Person">Night Person</option>
                                            <option value="Day Person">Day Person</option>

                                        </select>

                                    </div>
                                </div>

                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Enquiry Status</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="11">Enquiry Received</option>
                                            <option value="12">Information Requested</option>
                                            <option value="13">Information Sent</option>
                                            <option value="14">Viewings Requested</option>
                                            <option value="15">Viewings Booked</option>
                                            <option value="16">Awaiting Viewing Feedback</option>
                                            <option value="17">Viewing Cancelled</option>
                                            <option value="18">Viewing FTA</option>
                                            <option value="19">First Follow-up Sent</option>
                                            <option value="20">Second Follow-up Sent</option>
                                            <option value="21">Final Follow-up Sent</option>
                                            <option value="22">Tenant Applied</option>
                                            <option value="23">Application Processed</option>
                                            <option value="24">Archived</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Properties</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="1">Communal Area Inspection House 10</option>
                                            <option value="2">Communal Area Inspection House 14</option>
                                            <option value="3">Communal Area Inspection House 16</option>
                                            <option value="4">Communal Area Inspection House 18</option>
                                            <option value="5">Communal Area Inspection House 2</option>
                                            <option value="6">Communal Area Inspection House 21</option>
                                            <option value="7">Communal Area Inspection House 22</option>
                                            <option value="8">Communal Area Inspection House 23</option>
                                            <option value="9">Communal Area Inspection House 24</option>
                                            <option value="10">Communal Area Inspection House 25</option>
                                            <option value="11">Communal Area Inspection House 26</option>
                                            <option value="12">Communal Area Inspection House 27</option>
                                            <option value="13">Communal Area Inspection House 28</option>
                                            <option value="14">Communal Area Inspection House 29</option>
                                            <option value="15">Communal Area Inspection House 3</option>
                                            <option value="16">Communal Area Inspection House 49</option>
                                            <option value="17">Communal Area Inspection House 52</option>
                                            <option value="18">Communal Area Inspection House 53</option>
                                            <option value="19">Communal Area Inspection House 55</option>
                                            <option value="20">Communal Area Inspection House 58</option>
                                            <option value="21">Communal Area Inspection House 6</option>
                                            <option value="22">Communal Area Inspection House 8</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Area</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="15 Stepney Lane, Newcastle upon Tyne">15 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="Jesmond">Jesmond</option>
                                            <option value="Ponteland">Ponteland</option>
                                            <option value="Stocksfield, Northumerland">Stocksfield, Northumerland
                                            </option>
                                            <option value="Brunswick Industrial Estate, Wideopen">Brunswick Industrial
                                                Estate, Wideopen</option>
                                            <option value="Newcastle upon Tyne">Newcastle upon Tyne</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="West One">West One</option>
                                            <option value="Newcastle upon tyne">Newcastle upon tyne</option>
                                            <option value="11-13 Stepney Lane, Newcastle upon Tyne">11-13 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="5-9 Stepney Lane, Newcastle upon Tyne">5-9 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="sector 63">sector 63</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Gateshead">Gateshead</option>
                                            <option value="UP">UP</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="London">London</option>
                                            <option value="5-9 stepney lane, newcastle upon tyne">5-9 stepney lane,
                                                newcastle upon tyne</option>
                                            <option value="Bedlington">Bedlington</option>
                                            <option value="Lanchester">Lanchester</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Apartment Type</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="1 Bed Apartment">1 Bed Apartment</option>
                                            <option value="2 Bed Apartment">2 Bed Apartment</option>
                                            <option value="3 Bed Apartment">3 Bed Apartment</option>
                                            <option value="4 Bed Apartment">4 Bed Apartment</option>
                                            <option value="5 Bed Apartment">5 Bed Apartment</option>
                                            <option value="6 Bed Apartment">6 Bed Apartment</option>
                                            
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
                                                    <input type="checkbox" class="form-check-input" id="customChecks2">
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="GroupEnquiry">
                                        <div class="fullwidthTabInner_content_container">
                                        <form class="" action="all-Enquiries.php" method="POST">
                                        <div class="enqsetting_inrHeader"> 
                    <div class="tabinnerTitle">
                    <iconify-icon icon="ri:user-settings-line"></iconify-icon>  Enquiry Settings For Group
                    </div> 
                 </div>

                

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Prof.">Prof.</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="">
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
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a student , Family or a young
                                            professional?</label>
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
                                                    id="gridRadios2" value="professional">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Professional
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 Guarantorselect_column">
                                    <div class="form-group">
                                        <label class="form-label">Do you have UK Home Owner Guarantor?</label>
                                        <div class="flexoneselectgroup">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp1" value="gridRadiosp1">
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
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp3" value="gridRadiosp3">
                                                <label class="form-check-label" for="gridRadiosp3">
                                                    Maybe
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 locationselect_colcontainer" style="display: none;">
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

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nationality</label>
                                        <select id="" class="form-control nationality-select select2">
                                            <option disabled selected value="">Please Select...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Preferred date to start your tenancy</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">The period of weeks you are looking to rent?</label>
                                        <input type="phone" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Your current weekly rental budget?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="£ 90.00 - £ 100.00">£ 90.00 - £ 100.00</option>
                                            <option value="£ 101.00 - £ 120.00">£ 101.00 - £ 120.00</option>
                                            <option value="£ 121.00 - £ 140.00">£ 121.00 - £ 140.00</option>
                                            <option value="£ 141.00 - £ 160.00">£ 141.00 - £ 160.00</option>
                                            <option value="£ 161.00 - £ 180.00">£ 161.00 - £ 180.00</option>
                                            <option value="£ 181.00 - £ 200.00">£ 181.00 - £ 200.00</option>
                                            <option value="£ 201.00 and above">£ 201.00 and above</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you looking for bills inclusive or bills exclusive? </label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Bills Inclusive">Bills Inclusive</option>
                                            <option value="Bills Exclusive">Bills Exclusive</option>
                                            <option value="Bills Exclusive">Explore both options</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Are you a night or a day person?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Night Person">Night Person</option>
                                            <option value="Day Person">Day Person</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Group Size?</label>
                                        <select id="staffSelect" class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10+</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Enquiry Status</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="11">Enquiry Received</option>
                                            <option value="12">Information Requested</option>
                                            <option value="13">Information Sent</option>
                                            <option value="14">Viewings Requested</option>
                                            <option value="15">Viewings Booked</option>
                                            <option value="16">Awaiting Viewing Feedback</option>
                                            <option value="17">Viewing Cancelled</option>
                                            <option value="18">Viewing FTA</option>
                                            <option value="19">First Follow-up Sent</option>
                                            <option value="20">Second Follow-up Sent</option>
                                            <option value="21">Final Follow-up Sent</option>
                                            <option value="22">Tenant Applied</option>
                                            <option value="23">Application Processed</option>
                                            <option value="24">Archived</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Properties</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="1">Communal Area Inspection House 10</option>
                                            <option value="2">Communal Area Inspection House 14</option>
                                            <option value="3">Communal Area Inspection House 16</option>
                                            <option value="4">Communal Area Inspection House 18</option>
                                            <option value="5">Communal Area Inspection House 2</option>
                                            <option value="6">Communal Area Inspection House 21</option>
                                            <option value="7">Communal Area Inspection House 22</option>
                                            <option value="8">Communal Area Inspection House 23</option>
                                            <option value="9">Communal Area Inspection House 24</option>
                                            <option value="10">Communal Area Inspection House 25</option>
                                            <option value="11">Communal Area Inspection House 26</option>
                                            <option value="12">Communal Area Inspection House 27</option>
                                            <option value="13">Communal Area Inspection House 28</option>
                                            <option value="14">Communal Area Inspection House 29</option>
                                            <option value="15">Communal Area Inspection House 3</option>
                                            <option value="16">Communal Area Inspection House 49</option>
                                            <option value="17">Communal Area Inspection House 52</option>
                                            <option value="18">Communal Area Inspection House 53</option>
                                            <option value="19">Communal Area Inspection House 55</option>
                                            <option value="20">Communal Area Inspection House 58</option>
                                            <option value="21">Communal Area Inspection House 6</option>
                                            <option value="22">Communal Area Inspection House 8</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Area</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="15 Stepney Lane, Newcastle upon Tyne">15 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="Jesmond">Jesmond</option>
                                            <option value="Ponteland">Ponteland</option>
                                            <option value="Stocksfield, Northumerland">Stocksfield, Northumerland
                                            </option>
                                            <option value="Brunswick Industrial Estate, Wideopen">Brunswick Industrial
                                                Estate, Wideopen</option>
                                            <option value="Newcastle upon Tyne">Newcastle upon Tyne</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="West One">West One</option>
                                            <option value="Newcastle upon tyne">Newcastle upon tyne</option>
                                            <option value="11-13 Stepney Lane, Newcastle upon Tyne">11-13 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="5-9 Stepney Lane, Newcastle upon Tyne">5-9 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="sector 63">sector 63</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Gateshead">Gateshead</option>
                                            <option value="UP">UP</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="London">London</option>
                                            <option value="5-9 stepney lane, newcastle upon tyne">5-9 stepney lane,
                                                newcastle upon tyne</option>
                                            <option value="Bedlington">Bedlington</option>
                                            <option value="Lanchester">Lanchester</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Apartment Type</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="1 Bed Apartment">1 Bed Apartment</option>
                                            <option value="2 Bed Apartment">2 Bed Apartment</option>
                                            <option value="3 Bed Apartment">3 Bed Apartment</option>
                                            <option value="4 Bed Apartment">4 Bed Apartment</option>
                                            <option value="5 Bed Apartment">5 Bed Apartment</option>
                                            <option value="6 Bed Apartment">6 Bed Apartment</option>
                                            
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
                                                    <input type="checkbox" class="form-check-input" id="customChecks2">
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Details">
                                        <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Enquiry Statuses </h2>
                                                    <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#add_enquiry_status">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Enquiry Status
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
                                                                        <th>Time to Action</th>
                                                                        <th>Count</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Enquiry Received</td>
                                                                        <td>1 </td>
                                                                        <td>2</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button type="button"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button" data-bs-toggle="modal" data-bs-target="#View_enquiry_status"><span
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
                                                                        <td>Information Requested</td>
                                                                        <td>1 </td>
                                                                        <td>0</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button type="button"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button" data-bs-toggle="modal" data-bs-target="#View_enquiry_status"><span
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
                                                                        <td>Information Sent</td>
                                                                        <td>7 </td>
                                                                        <td>0</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button type="button"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button" data-bs-toggle="modal" data-bs-target="#View_enquiry_status"><span
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

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                         
                                        </div>


                                        <div class="tab-pane fade" id="Map">
                                        <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Enquiry Sources </h2>
                                                    <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#add_enquiry_source">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Enquiry Source
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
                                                                        <th>Count</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Accommodation for Students</td>
                                                                        <td>1 </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <button type="button"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        type="button" data-bs-toggle="modal" data-bs-target="#View_enquiry_source"><span
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
                                                                        <td>RightMove</td>
                                                                        <td>1 </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a href="view-ticket.php"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " data-bs-toggle="modal" data-bs-target="#View_enquiry_source"
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
                                                                        <td>Website</td>
                                                                        <td>7 </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a href="view-ticket.php"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " data-bs-toggle="modal" data-bs-target="#View_enquiry_source"
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


<!-- add enquiry status modal-->
<div id="add_enquiry_status" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
                            <form action="enquiry-settings.php" method="post">
								<div class="modal-content">

                                <div class="ModalheaderArea">
                                <h5 class="mb-4">Add Enquiry Status</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									
                                    </div>


									<div class="modal-body">
										
										
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" type="text"/>
													</div>
												</div>

                                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            Action Required
                                            </label>
                                        </div>

                                    </div>
                                </div>
												
											</div>
										
									</div>
									<div class="canvasFooterContainer CustomModal_footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
        </div>
     
								</div>
                                </form>
							</div>
						</div>
						<!-- add enquiry status modal --> 

                        <!-- view enquiry status modal-->
<div id="View_enquiry_status" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
                            <form action="enquiry-settings.php" method="post">
								<div class="modal-content">
                                    <div class="ModalheaderArea">
                                    <h5 class="">Enquiry Status Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										
                                    </div>
									<div class="modal-body">
										
										
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" value="Enquiry Received" type="text"/>
													</div>
												</div>

                                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                            <label class="form-check-label" for="gridCheck">
                                            Action Required
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                                <div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Time to Action</label>
														<input class="form-control" value="1" type="text"/>
													</div>
												</div>

                                                

                                <div class="col-sm-12">
													<div class="form-group usedByInput">
														<label class="form-label">Used By : </label>
														<a href="all-Enquiries.php">4</a>
													</div>
												</div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="disabledcheck" >
                                            <label class="form-check-label" for="disabledcheck">
                                            Disabled
                                            </label>
                                        </div>

                                    </div>
                                </div>
												
											</div>
										
									</div>
									<div class="canvasFooterContainer CustomModal_footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
        </div>
     
								</div>
                                </form>
							</div>
						</div>
						<!-- view enquiry status modal --> 


<!-- add enquiry source modal-->
<div id="add_enquiry_source" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
                            <form action="enquiry-settings.php" method="post">
								<div class="modal-content">

                                <div class="ModalheaderArea">
                                <h5 class="mb-4">Add Enquiry Source</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									
                                    </div>


									<div class="modal-body">
										
										
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" type="text"/>
													</div>
												</div>

                                               
												
											</div>
										
									</div>
									<div class="canvasFooterContainer CustomModal_footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
        </div>
     
								</div>
                                </form>
							</div>
						</div>
						<!-- add enquiry source modal --> 

 <!-- View_enquiry_source modal start -->
 <div id="View_enquiry_source" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
                            <form action="enquiry-settings.php" method="post">
								<div class="modal-content">
                                    <div class="ModalheaderArea">
                                    <h5 class="">Enquiry Source Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										
                                    </div>
									<div class="modal-body">
										
										
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" value="RightMove" type="text"/>
													</div>
												</div>

                                               

                                <div class="col-sm-12">
													<div class="form-group usedByInput">
														<label class="form-label">Used By : </label>
														<a href="all-Enquiries.php">0</a>
													</div>
												</div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="disabledcheck" >
                                            <label class="form-check-label" for="disabledcheck">
                                            Disabled
                                            </label>
                                        </div>

                                    </div>
                                </div>
												
											</div>
										
									</div>
									<div class="canvasFooterContainer CustomModal_footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
        </div>
     
								</div>
                                </form>
							</div>
						</div>


<?php include('footer.php') ?>

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

<!-- phone number with country code custom code js and css -->
<link rel="stylesheet" href="dist/customplugins/phonecountry/phone-with-country.css">
<script src="dist/customplugins/phonecountry/list.min.js"></script>
<script src="dist/customplugins/phonecountry/phone-with-country.js"></script>
<!-- phone number with country code custom code js and css end-->

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

<!-- ********************************
Add Enquiry form dynamic data using Json start
***************************************** -->

<script>
    $(document).ready(function() {
        // Initialize Select2
        $('.select2').select2();
        // Fetch data from the JSON file
        $.ajax({
            url: 'nationalities.json', // Path to your JSON file
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                var $select = $('.nationality-select');
                $select.empty(); // Clear existing options
                $select.append(
                    '<option disabled selected value="">Please Select...</option>'
                ); // Add placeholder option
                // Iterate over the response data and populate options
                $.each(response, function(index, nationality) {
                    $select.append('<option value="' + nationality + '">' + nationality +
                        '</option>');
                });
                // Reinitialize Select2 to apply new options
                $('.select2').select2();
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch nationalities:', error);
            }
        });
    });
</script>
<!-- ********************************
Add Enquiry form dynamic data using Json end
***************************************** -->



<!-- property type custom option selection functionality -->
<script>
    $(document).ready(function() {
        $('#property-type').change(function() {
            var selectedValue = $(this).val();
            if (selectedValue === 'Other') {
                $('.customproperty_add_field').show();
            } else {
                $('.customproperty_add_field').hide();
            }
        });
    });
</script>
<!-- property type custom option selection functionality end-->


<!-- **************************
 add enquiry form option selection modal js
********************************* -->
<script>
function setWordLimit(className, wordLimit) {
    var elements = document.querySelectorAll('.' + className);
    elements.forEach(function(element) {
        var text = element.innerText;
        var words = text.split(' ');

        if (words.length > wordLimit) {
            var truncatedText = words.slice(0, wordLimit).join(' ') + '...';
            element.innerText = truncatedText;
        }
    });
}
// Set the word limit for all paragraphs with class 'multine-ellipsis'
setWordLimit('multine-ellipsis', 8);
</script>


<!-- form type select js -->
<script>
$(document).ready(function() {
  // Handle card selection
  $('.selectedtype_container .card').on('click', function() {
    var formType = $(this).data('form-type');
    
    // Mark the selected card
    $('.selectedtype_container .card').removeClass('selected');
    $(this).addClass('selected');
    
    // Check the corresponding radio button
    $(this).find('input[type="radio"]').prop('checked', true);
    
    // Update the hidden input value
    $('#selectedFormType').val(formType);

    // Close the modal after selection
    $('#createformModal').modal('hide');
  });
});
</script>

<!-- button submit loader js start -->
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
  

