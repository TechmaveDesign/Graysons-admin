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
    <!-- Page Header -->
    <!-- <div class="hk-pg-header  pt-7">
					<div class="d-flex">
						<div class="d-flex flex-wrap justify-content-between flex-1">
							<div class="mb-lg-0 mb-2 me-8">
								<h1 class="pg-title">Welcome back</h1>
								<p>Welcome back to your Admin Panel, where every detail of your operations awaits your command.</p>
							</div>
							<div class="pg-header-action-wrap">
								<div class="input-group w-300p">
									<span class="input-affix-wrapper">
										<span class="input-prefix"><span class="feather-icon"><i
													data-feather="calendar"></i></span></span>
										<input class="form-control form-wth-icon" name="datetimes"
											value="Aug 18,2020 - Aug 19, 2020">
									</span>
								</div>
							</div>
						</div>
					</div>
					
				</div> -->
    <!-- /Page Header -->

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
                                    <h1>Landlord Income Summary </h1>
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
                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-8">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Landlord</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Properties, Graysons">Properties,
                                                                            Graysons</option>
                                                                        <option value="Ghai, Akash">Ghai, Akash</option>
                                                                        <option value="Properties, SR">Properties, SR
                                                                        </option>
                                                                        <option value="Ghai, Harjit">Ghai, Harjit
                                                                        </option>
                                                                        <option value="Somal, Mohinder">Somal, Mohinder
                                                                        </option>
                                                                        <option value="Ghai, Shashi">Ghai, Shashi
                                                                        </option>
                                                                        <option value="Somal, Inderjeet">Somal,
                                                                            Inderjeet</option>
                                                                        <option value="Sunderland Ltd, City View">
                                                                            Sunderland Ltd, City View</option>
                                                                        <option value="Ghai Investments, Somal">Ghai
                                                                            Investments, Somal</option>
                                                                        <option value="Sunderland Ltd, Phoenix House">
                                                                            Sunderland Ltd, Phoenix House</option>
                                                                        <option value="Developments Ltd, Graystones">
                                                                            Developments Ltd, Graystones</option>
                                                                        <option value="Nayyar, Neeraj">Nayyar, Neeraj
                                                                        </option>
                                                                        <option value="Hussain, Zak">Hussain, Zak
                                                                        </option>
                                                                        <option value="Development, SSG Property">
                                                                            Development, SSG Property</option>
                                                                        <option value="Somal, Amrit">Somal, Amrit
                                                                        </option>
                                                                        <option value="Limited, Ryecroft Holdings">
                                                                            Limited, Ryecroft Holdings</option>
                                                                        <option value="Terrace Limited, Leazes">Terrace
                                                                            Limited, Leazes</option>
                                                                        <option value="Dental Education, Waterfront">
                                                                            Dental Education, Waterfront</option>
                                                                        <option value="Ghai, Anil">Ghai, Anil</option>
                                                                        <option value="Malhi, Navjit">Malhi, Navjit
                                                                        </option>
                                                                        <option value="Somal, Deepinder">Somal,
                                                                            Deepinder</option>
                                                                        <option value="Services Ltd, Union Property">
                                                                            Services Ltd, Union Property</option>
                                                                        <option value="Properties, Ellite">Properties,
                                                                            Ellite</option>
                                                                        <option value="Group, Sands">Group, Sands
                                                                        </option>
                                                                        <option
                                                                            value="Limited, Mayfair Land Management">
                                                                            Limited, Mayfair Land Management</option>
                                                                        <option
                                                                            value="DEVELOPMENTS LIMITED, NAYYAR INVESTMENTS">
                                                                            DEVELOPMENTS LIMITED, NAYYAR INVESTMENTS
                                                                        </option>
                                                                        <option
                                                                            value="LIMITED, SAA NEWCASTLE PROPERTIES">
                                                                            LIMITED, SAA NEWCASTLE PROPERTIES</option>
                                                                        <option value="Limited, Stepney Lane Newcastle">
                                                                            Limited, Stepney Lane Newcastle</option>
                                                                        <option value="Limited, Ellite Mayfair">Limited,
                                                                            Ellite Mayfair</option>
                                                                        <option value="City Council, Sunderland">City
                                                                            Council, Sunderland</option>
                                                                        <option value="Limited, Black Tusk Investments">
                                                                            Limited, Black Tusk Investments</option>
                                                                        <option value="Landlord, Testing">Landlord,
                                                                            Testing</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Property</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="23 St Bedes Terrace, Sunderland">
                                                                            23 St Bedes Terrace, Sunderland</option>
                                                                        <option
                                                                            value="Studio 1, 23 St Bedes Terrace, Sunderland">
                                                                            Studio 1, 23 St Bedes Terrace, Sunderland
                                                                        </option>
                                                                        <option
                                                                            value="Studio 3, 23 St Bedes Terrace, Sunderland">
                                                                            Studio 3, 23 St Bedes Terrace, Sunderland
                                                                        </option>
                                                                        <option
                                                                            value="Studio 4, 23 St Bedes Terrace, Sunderland">
                                                                            Studio 4, 23 St Bedes Terrace, Sunderland
                                                                        </option>
                                                                        <option
                                                                            value="Annex, 23 St Bedes Terrace, Sunderland">
                                                                            Annex, 23 St Bedes Terrace, Sunderland
                                                                        </option>
                                                                        <option
                                                                            value="Room A1, Annex, 23 St Bedes Terrace, Sunderland">
                                                                            Room A1, Annex, 23 St Bedes Terrace,
                                                                            Sunderland</option>
                                                                        <option
                                                                            value="Room A2, Annex, 23 St Bedes Terrace, Sunderland">
                                                                            Room A2, Annex, 23 St Bedes Terrace,
                                                                            Sunderland</option>
                                                                        <option
                                                                            value="Room A3, Annex, 23 St Bedes Terrace, Sunderland">
                                                                            Room A3, Annex, 23 St Bedes Terrace,
                                                                            Sunderland</option>
                                                                        <option
                                                                            value="Room A4, Annex, 23 St Bedes Terrace, Sunderland">
                                                                            Room A4, Annex, 23 St Bedes Terrace,
                                                                            Sunderland</option>
                                                                        <option
                                                                            value="Room A5, Annex, 23 St Bedes Terrace, Sunderland">
                                                                            Room A5, Annex, 23 St Bedes Terrace,
                                                                            Sunderland</option>
                                                                        <option
                                                                            value="Basement Studios, 23 St Bedes Terrace, Sunderland">
                                                                            Basement Studios, 23 St Bedes Terrace,
                                                                            Sunderland</option>
                                                                        <option
                                                                            value="Studio BS1, Basement Studios, 23 St Bedes Terrace, Sunderland">
                                                                            Studio BS1, Basement Studios, 23 St Bedes
                                                                            Terrace, Sunderland</option>
                                                                        <option
                                                                            value="Studio BS2, Basement Studios, 23 St Bedes Terrace, Sunderland">
                                                                            Studio BS2, Basement Studios, 23 St Bedes
                                                                            Terrace, Sunderland</option>
                                                                        <option
                                                                            value="Studio BS3, Basement Studios, 23 St Bedes Terrace, Sunderland">
                                                                            Studio BS3, Basement Studios, 23 St Bedes
                                                                            Terrace, Sunderland</option>
                                                                        <option
                                                                            value="Studio BS4, Basement Studios, 23 St Bedes Terrace, Sunderland">
                                                                            Studio BS4, Basement Studios, 23 St Bedes
                                                                            Terrace, Sunderland</option>
                                                                        <option
                                                                            value="Flat 1, 23 St Bedes Terrace, Sunderland">
                                                                            Flat 1, 23 St Bedes Terrace, Sunderland
                                                                        </option>
                                                                    </select>

                                                                </div>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Date Range</label>
                                                                    <input class="form-control" type="text"
                                                                        name="daterange" value="Pick a Date" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Unpaid">
                                                                            Unpaid</option>
                                                                        <option value="Paid">
                                                                            Paid
                                                                        </option>

                                                                    </select>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4">
                                                <div class="row justify-content-end">
                                                    <div class="col-auto flexcheckColumn">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckList6">
                                                                <label class="form-check-label" for="customCheckList6">
                                                                    Include Historic Debts
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
                                    </form>
                                </div>
                            </div>
                            <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>

                                            <th>Tenant</th>
                                            <th>Property</th>
                                            <th>Due Date</th>
                                            <th>Received Date</th>
                                            <th>Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Morgan Freeman</a>
                                            </td>
                                            <td class=""><a href="property-details.php">Bedroom 5, 23 Claremont Road,
                                                    Newcastle upon Tyne</a></td>
                                            <td>23/04/2025</td>

                                            <td>10/07/2023</td>
                                            <td>£2,250.00</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="vjavascript:void(0)"><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span></a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Angelina Jolie</a>
                                            </td>
                                            <td class=""><a href="property-details.php">Apartment 3A, 567 Madison Avenue, New
                                                    York</a></td>
                                            <td>15/09/2024</td>
                                            <td>28/02/2023</td>
                                            <td>£5,500.00</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="vjavascript:void(0)">
                                                            <span class="icon"><span class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Leonardo
                                                    DiCaprio</a>
                                            </td>
                                            <td class=""><a href="property-details.php">Villa 10, Beverly Hills, California</a>
                                            </td>
                                            <td>05/11/2023</td>
                                            <td>20/03/2022</td>
                                            <td>£8,000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="vjavascript:void(0)">
                                                            <span class="icon"><span class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Jennifer
                                                    Lawrence</a>
                                            </td>
                                            <td class=""><a href="property-details.php">Penthouse Suite, London, UK</a></td>
                                            <td>10/03/2025</td>
                                            <td>15/08/2022</td>
                                            <td>£6,750.00</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="vjavascript:void(0)">
                                                            <span class="icon"><span class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Brad Pitt</a>
                                            </td>
                                            <td class=""><a href="property-details.php">Mansion 7, Hollywood Hills, Los
                                                    Angeles</a></td>
                                            <td>30/06/2023</td>
                                            <td>10/12/2021</td>
                                            <td>£12,500.00</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="vjavascript:void(0)">
                                                            <span class="icon"><span class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Emma Watson</a>
                                            </td>
                                            <td class=""><a href="property-details.php">Townhouse 12B, Manhattan, New York</a>
                                            </td>
                                            <td>18/07/2024</td>
                                            <td>05/11/2021</td>
                                            <td>£4,200.00</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="vjavascript:void(0)">
                                                            <span class="icon"><span class="feather-icon"><i
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
        </div>
    </div>
    <!-- /Page Body -->
</div>

<?php include('footer.php') ?>

<!-- add user offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="offcanvasBottom"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add New User
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
    <form class="" action="users.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add New User to System</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Middle" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="Middle">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Surname" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="Surname">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="Email">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Alt Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input class="form-control customdataPicker" type="text" name=""
                                            placeholder="" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline1" class="form-label"> Address Line 1</label>
                                        <input type="text" class="form-control" id="addressline1">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline2" class="form-label"> Address Line 2</label>
                                        <input type="text" class="form-control" id="addressline2">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Town/City" class="form-label"> Town/City</label>
                                        <input type="text" class="form-control" id="Town/City">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="County" class="form-label"> County</label>
                                        <input type="text" class="form-control" id="County">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Postcode" class="form-label"> Postcode</label>
                                        <input type="text" class="form-control" id="Postcode">
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="RoleAddContiner">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Assign Role</h2>
                                    </div>

                                    <div class="card-body">
                                        <div class="RolesListContainer">
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Tenant
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Bookkeeper
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Maintenance
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Landlord
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Superuser
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Merchant
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Admin
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
<!-- add user offcanvas modal end -->

<!-- edit user offcanvas -->
<!-- <div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="edituserCanvas"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Edit this User
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
    <form class="" action="users.php">
        <div class="offcanvas-body">
            <div class="add-users-modal-body-table-header text-headline-6">Edit this User Details</div>

            <div class="addingForm_Container">

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title" value="Charlie ">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" value="Charlie">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Middle" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="Middle">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Surname" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="Surname" value="Craig">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="Email"
                                            value="charlie@leernoca.monster">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact" value="9896758687">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Alt Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact" value="9896758687">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input class="form-control customdataPicker" type="text" name="" placeholder=""
                                            value="May , 08 2024" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline1" class="form-label"> Address Line 1</label>
                                        <input type="text" class="form-control" id="addressline1"
                                            value="123 Main Street Anytown, USA">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline2" class="form-label"> Address Line 2</label>
                                        <input type="text" class="form-control" id="addressline2"
                                            value="456 Elm Avenue Somewhere City">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Town/City" class="form-label"> Town/City</label>
                                        <input type="text" class="form-control" id="Town/City" value="Oak Avenue">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="County" class="form-label"> County</label>
                                        <input type="text" class="form-control" id="County" value="America">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Postcode" class="form-label"> Postcode</label>
                                        <input type="text" class="form-control" id="Postcode" value="62701">
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="RoleAddContiner">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Assign Role</h2>
                                    </div>

                                    <div class="card-body">
                                        <div class="RolesListContainer">
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3" checked><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Tenant
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Bookkeeper
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Maintenance
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3" checked><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Landlord
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Superuser
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Merchant
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Admin
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
</div> -->
<!-- edit user offcanvas modal end -->

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