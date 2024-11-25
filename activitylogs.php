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
								<a class="contactapp-title link-dark" href="#" role="button">
									<h1>All Activity Logs</h1>
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
							<div class="userFilters onerowfilter longFiltersContainer" id="filterDiv"
								style="display: none;">
								<div class="quick-access-form-wrap nopaddingleftright">
									<form class="quick-access-form border">
										<div class="row gx-3">
											<div class="col-xxl-12">
												<div class="position-relative">

													<div class="col-lg-12">
														<div class="row gx-3">

															<div class="col-lg-2">
																<div class="form-group">
																	<label class="form-label">All Department</label>
																	<select name="department" id="department_select"
																		class="form-control">
																		<option value="" selected disabled>Select a
																			Department</option>
																		<option value="HR">Human Resources</option>
																		<option value="Finance">Finance</option>
																		<option value="IT">Information Technology
																		</option>
																		<option value="Marketing">Marketing</option>
																		<option value="Sales">Sales</option>
																		<option value="Operations">Operations</option>
																		<option value="Legal">Legal</option>
																		<option value="Customer Support">Customer
																			Support</option>
																	</select>
																</div>
															</div>

															<div class="col-lg-2">
																<div class="form-group">
																	<label class="form-label">Select User</label>
																	<select name="user" id="DepartmentUser_select"
																		class="form-control">
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

															<div class="col-md-2">

																<div class="form-group">
																	<label class="form-label">Date Range</label>
																	<input class="form-control" type="text"
																		name="daterange"
																		value="01/01/2018 - 01/15/2018" />
																	<iconify-icon icon="ion:calendar-outline"
																		class="dateinput_icon"></iconify-icon>
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
							<div class="contact-list-view">

							<table class="table common-datatable nowrap w-100 tbWithout_action">
                                    <thead>
                                        <tr>

                                            <th>User Name</th>
                                            <th>Department</th>
                                            <th>Activity Date & Time</th>
                                            <th>Activity</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png" alt="user"
                                                                class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Morgan Freeman</span>
                                                    </div>
                                                </div>
                                                </a>
                                            </td>
                                            <td class="">Finance</td>
                                            <td>18/06/2024 12:00</td>
                                            <td>moved components from all modules to in progress</td>

                                            
                                        </tr>
                                        <tr>

                                            <td>
                                            <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png" alt="user"
                                                                class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Huma Therman</span>
                                                    </div>
                                                </div>
                                                </a>
                                            </td>
                                            <td class="">Lettings</td>
                                            <td>15/03/2023 16:40</td>
                                            <td>moved components from all modules to in progress</td>
                                            
                                        </tr>
                                        <tr>

                                            <td>
                                            <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png" alt="user"
                                                                class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Charlie Chaplin</span>
                                                    </div>
                                                </div>
                                                </a>
                                            </td>
                                            <td class="">Lettings</td>
                                            <td>10/02/2024 15:15</td>
                                            <td>moved components from all modules to in progress</td>
                                            
                                        </tr>

										<tr>
    <td>
        <a href="view-user-details.php">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">Emma Watson</span>
                </div>
            </div>
        </a>
    </td>
    <td class="">Marketing</td>
    <td>25/08/2023 09:30</td>
    <td>completed the final phase of the campaign</td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">Robert Downey Jr.</span>
                </div>
            </div>
        </a>
    </td>
    <td class="">IT Support</td>
    <td>30/01/2024 14:45</td>
    <td>updated server configurations and security protocols</td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">Scarlett Johansson</span>
                </div>
            </div>
        </a>
    </td>
    <td class="">HR</td>
    <td>22/11/2023 11:10</td>
    <td>conducted annual employee evaluations</td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">Chris Hemsworth</span>
                </div>
            </div>
        </a>
    </td>
    <td class="">Operations</td>
    <td>08/09/2024 13:50</td>
    <td>oversaw logistics for new project deployment</td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">Jennifer Lawrence</span>
                </div>
            </div>
        </a>
    </td>
    <td class="">Sales</td>
    <td>05/07/2023 17:20</td>
    <td>closed a major contract with a new client</td>
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

<!-- Add enquiry modal offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="viewingSchedule"
	aria-labelledby="offcanvasTopLabel">
	<div class="offcanvas-header custom-canvas-header">
		<div class="canvas-header-title">
			<iconify-icon icon="akar-icons:schedule" width="1.2em" height="1.2em"></iconify-icon>
			Make an enquiry
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
	<form class="" action="all-Enquiries.php" method="POST">
		<div class="offcanvas-body">

			<div class="addingForm_Container ">
				<div class="add-users-modal-body-table-header text-headline-6"> Add Enquiry For Tenant</div>

				<div class="formstartcontainer">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">

								<div class="col-md-4">
									<div class="form-group">
										<label class="form-label">Select Profession</label>
										<select class="form-control select2">
											<option disabled selected value="">Please Select...</option>
											<option value="Student">Student</option>
											<option value="Professional">Professional</option>
											<option value="Family">Family</option>
										</select>
									</div>

								</div>

								<div class="col-md-4">
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

								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">First Name</label>
										<input type="text" class="form-control" value="">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Middle Name</label>
										<input type="text" class="form-control" value="">
									</div>
								</div>

								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Last Name</label>
										<input type="email" class="form-control" value="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-label">Date of Birth</label>
										<input class="form-control customdataPicker flatpickr-input" type="text" name=""
											value="" placeholder="Select DOB" readonly="readonly">
										<iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="form-label">Nationality</label>
										<select id="nationality-select" class="form-control select2">
											<option disabled selected value="">Please Select...</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-label">How Long You have lived in UK (for Non-British
											Citizens)</label>
										<select class="form-control select2">
											<option disabled selected value="">Please Select...</option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10+">10+</option>
										</select>
									</div>

								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Do you have a Valid passport</label>
										<div class="flexoneselectgroup">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="Passport"
													id="passportopt1" value="passportopt1">
												<label class="form-check-label" for="passportopt1">
													Yes
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="Passport"
													id="passportopt2" value="passportopt2">
												<label class="form-check-label" for="passportopt2">
													No
												</label>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12 passport_numberColumn">
									<div class="form-group">
										<label class="form-label">Passport Number</label>
										<input type="text" class="form-control" value="">
									</div>
								</div>

								<div class="col-lg-12 ReasonColumn">
									<div class="form-group">
										<label class="form-label">Please enter a reason why</label>
										<textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
									</div>
								</div>

								<!-- National Insurance Radio Section -->
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Do you have a National Insurance?</label>
										<div class="flexoneselectgroup">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="Insurance"
													id="insuranceopt1" value="insuranceopt1">
												<label class="form-check-label" for="insuranceopt1">Yes</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="Insurance"
													id="insuranceopt2" value="insuranceopt2">
												<label class="form-check-label" for="insuranceopt2">No</label>
											</div>
										</div>
									</div>
								</div>

								<!-- Insurance Number Input Field -->
								<div class="col-lg-12 insurance_numberColumn">
									<div class="form-group">
										<label class="form-label">Insurance Number</label>
										<input type="text" class="form-control" id="insuranceNumber" value="">
									</div>
								</div>

								<!-- Reason Input Field for National Insurance -->
								<div class="col-lg-12 insurance_reasonColumn">
									<div class="form-group">
										<label class="form-label">Please enter a reason why not</label>
										<textarea class="form-control" rows="4" placeholder="Write here..."
											id="insuranceReason"></textarea>
									</div>
								</div>

								<!-- Student NEOS Number Radio Section -->
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Do you have a Student/NUS Number?</label>
										<div class="flexoneselectgroup">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="NEOS" id="neosopt1"
													value="neosopt1">
												<label class="form-check-label" for="neosopt1">Yes</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="NEOS" id="neosopt2"
													value="neosopt2">
												<label class="form-check-label" for="neosopt2">No</label>
											</div>
										</div>
									</div>
								</div>

								<!-- NEOS Number Input Field -->
								<div class="col-lg-12 neos_numberColumn">
									<div class="form-group">
										<label class="form-label">NUS Number</label>
										<input type="text" class="form-control" id="neosNumber" value="">
									</div>
								</div>

								<!-- Reason Input Field for Student NEOS -->
								<div class="col-lg-12 neos_reasonColumn">
									<div class="form-group">
										<label class="form-label">Please enter a reason why not</label>
										<textarea class="form-control" rows="4" placeholder="Write here..."
											id="neosReason"></textarea>
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

								<div class="col-lg-3">
									<div class="form-group">
										<label class="form-label">Home Phone Number</label>
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
										<label class="form-label">Personal Email Address (Do not share University
											Email)</label>
										<input type="text" class="form-control" value="">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label class="form-label">University of Study</label>
										<input type="text" class="form-control" value="">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label class="form-label">Course Name</label>
										<input type="text" class="form-control" value="">
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label class="form-label">Year of Course Start</label>
										<select class="form-control select2" id="yearSelect">
											<option disabled selected value="">Please Select...</option>
											<!-- Options will be dynamically generated here -->
										</select>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label class="form-label">Year of Course Completion</label>
										<select class="form-control select2" id="yearCompletionSelect">
											<option disabled selected value="">Please Select...</option>
											<!-- Options will be dynamically generated here -->
										</select>
									</div>
								</div>

								<!-- <div class="col-lg-6">
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
                                        <label class="form-label">The date you are looking to start your
                                            tenancy?</label>
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
                                        <input type="phone" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Bills Inclusive/Exclusive</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Bills Inclusive">Bills Inclusive</option>
                                            <option value="Bills Exclusive">Bills Exclusive</option>

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

                                <div class="col-md-12">
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
                                </div> -->

							</div>

							<div class="address_Fields_container">
								<div class="form_seperation_title">
									<h2>Where Do You Currently Reside?</h2>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Current Address of Residence</label>
											<input class="form-control" type="text" name="" value=""
												placeholder="Select Address">
											<iconify-icon icon="material-symbols:my-location-outline"
												class="dateinput_icon"></iconify-icon>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Address Line 1</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Address Line 2</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">City</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="form-label">Country</label>
											<select class="form-control select2 countrySelect">
												<option disabled selected value="">Please Select...</option>
											</select>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Providence of State</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Postal Code (Pincode / Zip Code)</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

								</div>
							</div>

							<div class="address_Fields_container">
								<div class="form_seperation_title">
									<h2>Property Details</h2>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label class="form-label">Property Type</label>
											<select id="property-type" class="form-control select2">
												<option disabled selected value="">Please Select...</option>
												<option value="House">House</option>
												<option value="Studio">Studio</option>
												<option value="Flat">Flat</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 customproperty_add_field" style="display: none;">
										<div class="form-group">
											<label class="form-label">Add Property Type</label>
											<input type="text" id="custom-property-type" class="form-control" value="">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label class="form-label">Rented OR Own House</label>
											<select id="RentedOwnhouse_option" class="form-control select2">
												<option disabled selected value="">Please Select...</option>
												<option value="Rented Accommodation">Rented Accommodation</option>
												<option value="Parents House">Parents House</option>
												<option value="Own House">Own House</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>

									<div class="col-lg-3 anotherHouse_add_field" style="display: none;">
										<div class="form-group">
											<label class="form-label">Add House Details</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

								</div>

							</div>

							<div class="address_Fields_container" id="LandlordDetails_fields" style="display: none;">
								<div class="form_seperation_title">
									<h2>Current Landlord Details</h2>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Landlord Name</label>
											<input class="form-control" type="text" name="" value=""
												placeholder="Please Enter Fullname">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Address Line 1</label>
											<input type="text" class="form-control" value=""
												placeholder="Please Enter Full Address">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Address Line 2</label>
											<input type="text" class="form-control" value=""
												placeholder="Please Enter Full Address">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">City</label>
											<input type="text" class="form-control" value=""
												placeholder="Please Enter City Name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="form-label">Country</label>
											<select class="form-control select2 countrySelect">
												<option disabled selected value="">Please Select...</option>
											</select>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Providence of State</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Postal Code (Pincode / Zip Code)</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Landlord Email Address</label>
											<input type="text" class="form-control" value=""
												placeholder="Please Enter Email address">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Home Phone Number</label>
											<div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
												<!-- Selected prefix -->
												<button class="pn-selected-prefix"
													aria-label="Select phonenumber prefix" id="js_trigger-dropdown"
													tabindex="1">
													<img class="pn-selected-prefix__flag" id="js_selected-flag"
														src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
													<!-- prettier-ignore -->
													<svg class="pn-selected-prefix__icon"
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none" stroke="#081626"
														stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
														<polyline points="6 9 12 15 18 9" />
													</svg>
												</button>
												<!-- Phone number input -->
												<div class="pn-input">
													<div class="pn-input__container">
														<input class="pn-input__prefix" value="+31" type="text"
															name="phonenumber-prefix" id="js_number-prefix"
															tabindex="-1" />
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
													<div class="pn-list-item pn-list-item--no-results"
														style="display: none" id="js_no-results-found">
														No results found
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label class="form-label">Current Rent Term</label>
											<select class="form-control select2">
												<option disabled selected value="">Please Select...</option>
												<option value="Weekly">Weekly</option>
												<option value="Monthly">Monthly</option>
											</select>
										</div>
									</div>

								</div>
							</div>

							<div class="address_Fields_container">
								<div class="form_seperation_title">
									<h2>Home Address (for non-UK residents please provide parent's home address)</h2>
								</div>
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Address Line 1</label>
											<input type="text" class="form-control" value=""
												placeholder="Please Enter Full Address">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Address Line 2</label>
											<input type="text" class="form-control" value=""
												placeholder="Please Enter Full Address">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">City</label>
											<input type="text" class="form-control" value=""
												placeholder="Please Enter City Name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="form-label">Country</label>
											<select class="form-control select2 countrySelect">
												<option disabled selected value="">Please Select...</option>
											</select>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Providence of State</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Postal Code (Pincode / Zip Code)</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

								</div>
							</div>

							<div class="address_Fields_container">
								<div class="form_seperation_title">
									<h2>Bank/Building Society Details</h2>
								</div>
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Bank Name</label>
											<input type="text" class="form-control" value="" placeholder="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Branch Address</label>
											<input type="text" class="form-control" value="" placeholder="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">City</label>
											<input type="text" class="form-control" value="" placeholder="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="form-label">Country</label>
											<select class="form-control select2 countrySelect">
												<option disabled selected value="">Please Select...</option>
											</select>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Providence of State</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">ZIP / Postal Code</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Account Holder Name</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Account Number</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Sort Code</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

								</div>
							</div>

							<div class="address_Fields_container">
								<div class="form_seperation_title">
									<h2>Other Details</h2>
								</div>
								<div class="row">

									<div class="col-lg-12">
										<div class="form-group extrabtm_margin">
											<label class="form-label">Do You Smoke?</label>
											<div class="yesNo_opt_container">
												<div class="checkbox">
													<input id="yes1" type="radio" name="option1" value="yes">
													<label for="yes1">Yes</label>
												</div>
												<div class="checkbox">
													<input id="no1" type="radio" name="option1" value="no">
													<label for="no1">No</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group extrabtm_margin">
											<label class="form-label">Do you have any past or present CCJ, IVA, debt
												relief orders or bankruptcy?</label>
											<div class="yesNo_opt_container">
												<div class="checkbox">
													<input id="yes2" type="radio" name="option2" value="yes">
													<label for="yes2">Yes</label>
												</div>
												<div class="checkbox">
													<input id="no2" type="radio" name="option2" value="no">
													<label for="no2">No</label>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<div class="form-label-group">
												<label>Please provide names of all applicants in your group</label>
											</div>
											<textarea class="form-control" rows="4"
												placeholder="Write here..."></textarea>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<div class="form-label-group">
												<label>Is there anything else you consider to be relevant to this
													application?</label>
											</div>
											<textarea class="form-control" rows="4"
												placeholder="Write here..."></textarea>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="form-label-group">
												<label>What has attracted you to a Rent a property with Graysons
													Properties? (Please give details)</label>
											</div>
											<textarea class="form-control" rows="4"
												placeholder="Write here..."></textarea>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Do you have a Guarantor?</label>
											<select class="form-control select2" id="gurantorSelect">
												<option disabled selected value="">Please Select...</option>
												<option value="No">No</option>
												<option value="Yes">Yes</option>
											</select>
										</div>
									</div>

								</div>
							</div>

							<div class="address_Fields_container" id="GuranterAddress" style="display: none;">
								<div class="form_seperation_title">
									<h2>Guarantor Details</h2>
								</div>
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Guarantor Name</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="form-label">Guarantor Date of Birth</label>
											<input class="form-control customdataPicker flatpickr-input" type="text"
												name="" value="" placeholder="Select DOB" readonly="readonly">
											<iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
											</iconify-icon>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Guarantor Home Address</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Guarantor Street Address</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">City</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="form-label">Country</label>
											<select class="form-control select2 countrySelect">
												<option disabled selected value="">Please Select...</option>
											</select>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Providence of State</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Postal Code (Pincode / Zip Code)</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

								</div>
							</div>

							<div class="address_Fields_container" id="GuranterBank_details" style="display: none;">
								<div class="form_seperation_title">
									<h2>Guarantor Bank Details (for credit check purposes only)</h2>
								</div>
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Bank Name</label>
											<input type="text" class="form-control" value="" placeholder="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Branch Address</label>
											<input type="text" class="form-control" value="" placeholder="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">City</label>
											<input type="text" class="form-control" value="" placeholder="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="form-label">Country</label>
											<select class="form-control select2 countrySelect">
												<option disabled selected value="">Please Select...</option>
											</select>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Providence of State</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">ZIP / Postal Code</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Guarantor Account Holder Name</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Guarantor Account Number</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Guarantor Sort Code</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>

								</div>
							</div>

							<!-- 6th step -->
							<div class="address_Fields_container">
								<div class="form_seperation_title">
									<h2>Terms of use</h2>
								</div>
								<div class="row">

									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">How did you find us?</label>
											<select class="form-control select2">
												<option disabled selected value="">Please Select...</option>
												<option value="Google">Google</option>
												<option value="Existing Tenant">Existing Tenant</option>
												<option value="Referred by a friend">Referred by a friend</option>
												<option value="Rightmove">Rightmove</option>
												<option value="Zoopla">Zoopla</option>
												<option value="Accommodation For Students">Accommodation For Students
												</option>
												<option value="UniHomes">UniHomes</option>
												<option value="UniAcco">UniAcco</option>
												<option value="Amber Students">Amber Students</option>
												<option value="UHomes">UHomes</option>
												<option value="Other (please specify below)">Other (please specify
													below)</option>
											</select>
										</div>
									</div>

								</div>

								<div class="TermsContent_wrapper">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<div class="Enquiry_Terms_content">
													<h2>Declaration</h2>
													<p>I hereby confirm that I am over 18 years of age and the
														information I have provided is to the best of my knowledge true
														and accurate at the time of completion and hereby authorise the
														landlord or their agent to:</p>
													<ul>
														<li>carry out credit searches and reference checks, to contact
															employers, banks, referees, guarantors and credit reference
															agencies as appropriate.</li>
														<li>use the information obtained with third parties to assess
															credit ratings, make insurance decisions, for fraud
															prevention and tracing / debt collection.</li>
														<li>Handle all information obtained in strictest confidence and
															in accordance with the principles of the Data Protection Act
															2018 (GDPR).</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<div class="Enquiry_Terms_content">
													<h2>I acknowledge</h2>
													<p>I hereby confirm that I am over 18 years of age and the
														information I have provided is to the best of my knowledge true
														and accurate at the time of completion and hereby authorise the
														landlord or their agent to:</p>
													<ul>
														<li>that my application may be refused if the landlord is unable
															to obtain satisfactory evidence of rent affordability based
															on the information provided as part of this application. I
															accept that due to the confidential nature of this
															application, I will not be permitted access to the
															references, credit checks or any other information and I
															will not be provided with an explanation should any of the
															information indicate that I and/or my guarantor are
															unsuitable applicants</li>
														<li>that my application will be voided if the tenancy agreement
															and relevant documentation is not provided within one week
															of receiving the agreement; the property will be
															re-advertised with view to Graysons Properties finding
															another tenant</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group largeCheckGroup">
												<label for="" class="form-label">Please tick this box to agree to the
													above terms and conditions</label>
												<div class="form-check form-check-sm">
													<input type="checkbox" class="form-check-input" id="customChecks1">
													<label class="form-check-label" for="customChecks1">I agree</label>
												</div>
											</div>

										</div>

									</div>
								</div>
							</div>

							<div class="address_Fields_container">
								<div class="form_seperation_title">
									<h2>GDPR Regulations</h2>
								</div>

								<div class="TermsContent_wrapper">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<div class="Enquiry_Terms_content">
													<p>Graysons Properties complies with GDPR Regulations and will
														always act in the best interests of its clients in relation to
														Data Protection. We will use your data to contact you in
														relation to your tenancy and we may contact you with marketing
														information from time to time, but we will never allow your
														details to be shared with third parties without your consent.
													</p>
												</div>
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<div class="Enquiry_Terms_content">
													<h2>I acknowledge</h2>
													<p>I hereby confirm that I am over 18 years of age and the
														information I have provided is to the best of my knowledge true
														and accurate at the time of completion and hereby authorise the
														landlord or their agent to:</p>
													<ul>
														<li>that my application may be refused if the landlord is unable
															to obtain satisfactory evidence of rent affordability based
															on the information provided as part of this application. I
															accept that due to the confidential nature of this
															application, I will not be permitted access to the
															references, credit checks or any other information and I
															will not be provided with an explanation should any of the
															information indicate that I and/or my guarantor are
															unsuitable applicants</li>
														<li>that my application will be voided if the tenancy agreement
															and relevant documentation is not provided within one week
															of receiving the agreement; the property will be
															re-advertised with view to Graysons Properties finding
															another tenant</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group largeCheckGroup">
												<label for="" class="form-label">Please tick this box to agree to the
													above terms and conditions</label>
												<div class="form-check form-check-sm">
													<input type="checkbox" class="form-check-input" id="customChecks1">
													<label class="form-check-label" for="customChecks1">I agree</label>
												</div>
											</div>

										</div>

										<div class="col-md-12">
											<div class="form-group largeCheckGroup">
												<label class="form-label">Please tick to confirm how you would like us
													to contact you</label>
												<div class="row">

													<div class="col-auto">
														<div class="form-check form-check-sm">
															<input type="checkbox" class="form-check-input"
																id="customChecks2">
															<label class="form-check-label"
																for="customChecks2">Telephone</label>
														</div>
													</div>
													<div class="col-auto">
														<div class="form-check form-check-sm">
															<input type="checkbox" class="form-check-input"
																id="customChecks3">
															<label class="form-check-label"
																for="customChecks3">Email</label>
														</div>
													</div>
													<div class="col-auto">
														<div class="form-check form-check-sm">
															<input type="checkbox" class="form-check-input"
																id="customChecks5">
															<label class="form-check-label" for="customChecks4">Text
																Message</label>
														</div>
													</div>

												</div>

											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group largeCheckGroup">
												<label class="form-label">Please confirm what information you would like
													us to share with you</label>
												<div class="row">

													<div class="col-auto">
														<div class="form-check form-check-sm">
															<input type="checkbox" class="form-check-input"
																id="customChecks6">
															<label class="form-check-label"
																for="customChecks6">Competitions</label>
														</div>
													</div>
													<div class="col-auto">
														<div class="form-check form-check-sm">
															<input type="checkbox" class="form-check-input"
																id="customChecks7">
															<label class="form-check-label" for="customChecks7">
																Property Availability</label>
														</div>
													</div>
													<div class="col-auto">
														<div class="form-check form-check-sm">
															<input type="checkbox" class="form-check-input"
																id="customChecks8">
															<label class="form-check-label"
																for="customChecks8">Newsletters</label>
														</div>
													</div>

												</div>

											</div>
										</div>

									</div>
								</div>
							</div>

							<!-- 7th step -->
							<div class="address_Fields_container">
								<div class="form_seperation_title">
									<h2>Application Submission</h2>
								</div>
								<div class="row">

									<div class="col-lg-12">
										<div class="form-group">
											<div class="application_price">
												<h2>Price: <span class="PriceAmount">£ 125.00</span></h2>
											</div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<div class="Enquiry_Terms_content">
												<p>This is to secure the property and will be deducted from the first
													months’ rent on move in. Should the tenancy fail to proceed after 14
													days of payment (or a different deadline for the agreement in
													writing), the ‘rent advance’ does not need to be refunded if the
													tenant: Withdraws out of the agreement themselves, Fails the right
													to rent check, Has provided false or misleading information Or, the
													landlord has tried their best to get the information, but the tenant
													has failed to provide it within the 15 days.</p>
											</div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group loginlinkTitle">
											<h2>Login Link</h2>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Email</label>
											<input type="text" class="form-control" value="" placeholder="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Card number</label>
											<input type="text" class="form-control" value=""
												placeholder="1234 1234 1234 1234">
											<div class="p-CardBrandIcons p-CardBrandIcons--multiple dateinput_icon"
												aria-describedby="cardBrandIconsDesc">
												<p id="cardBrandIconsDesc" class="u-visually-hidden"></p>
												<div class="p-CardBrandIcons-item"><svg viewBox="0 0 24 16" fill="none"
														xmlns="http://www.w3.org/2000/svg" role="presentation"
														focusable="false" class="p-Logo p-Logo--md p-CardBrandIcon">
														<g>
															<rect stroke="#DDD" fill="#FFF" x=".25" y=".25" width="23.5"
																height="15.5" rx="2"></rect>
															<path
																d="M2.788 5.914A7.201 7.201 0 0 0 1 5.237l.028-.125h2.737c.371.013.672.125.77.519l.595 2.836.182.854 1.666-4.21h1.799l-2.674 6.167H4.304L2.788 5.914Zm7.312 5.37H8.399l1.064-6.172h1.7L10.1 11.284Zm6.167-6.021-.232 1.333-.153-.066a3.054 3.054 0 0 0-1.268-.236c-.671 0-.972.269-.98.531 0 .29.365.48.96.762.98.44 1.435.979 1.428 1.681-.014 1.28-1.176 2.108-2.96 2.108-.764-.007-1.5-.158-1.898-.328l.238-1.386.224.099c.553.23.917.328 1.596.328.49 0 1.015-.19 1.022-.604 0-.27-.224-.466-.882-.769-.644-.295-1.505-.788-1.491-1.674C11.878 5.84 13.06 5 14.74 5c.658 0 1.19.138 1.526.263Zm2.26 3.834h1.415c-.07-.308-.392-1.786-.392-1.786l-.12-.531c-.083.23-.23.604-.223.59l-.68 1.727Zm2.1-3.985L22 11.284h-1.575s-.154-.71-.203-.926h-2.184l-.357.926h-1.785l2.527-5.66c.175-.4.483-.512.889-.512h1.316Z"
																fill="#1434CB"></path>
														</g>
													</svg></div>
												<div class="p-CardBrandIcons-item"><svg viewBox="0 0 24 16" fill="none"
														xmlns="http://www.w3.org/2000/svg" role="presentation"
														focusable="false" class="p-Logo p-Logo--md p-CardBrandIcon">
														<rect fill="#252525" height="16" rx="2" width="24"></rect>
														<circle cx="9" cy="8" fill="#eb001b" r="5"></circle>
														<circle cx="15" cy="8" fill="#f79e1b" r="5"></circle>
														<path
															d="M12 4c1.214.912 2 2.364 2 4s-.786 3.088-2 4c-1.214-.912-2-2.364-2-4s.786-3.088 2-4z"
															fill="#ff5f00"></path>
													</svg></div>
												<div class="p-CardBrandIcons-item"><svg viewBox="0 0 24 16" fill="none"
														xmlns="http://www.w3.org/2000/svg" role="presentation"
														focusable="false" class="p-Logo p-Logo--md p-CardBrandIcon">
														<rect fill="#016fd0" height="16" rx="2" width="24"></rect>
														<path
															d="M13.764 13.394V7.692l10.148.01v1.574l-1.173 1.254 1.173 1.265v1.608h-1.873l-.995-1.098-.988 1.102z"
															fill="#fffffe"></path>
														<path
															d="M14.442 12.769v-4.45h3.772v1.026h-2.55v.695h2.49v1.008h-2.49v.684h2.55v1.037z"
															fill="#016fd0"></path>
														<path
															d="m18.195 12.769 2.088-2.227-2.088-2.222h1.616l1.275 1.41 1.28-1.41h1.546v.035l-2.043 2.187 2.043 2.164v.063H22.35l-1.298-1.424-1.285 1.424z"
															fill="#016fd0"></path>
														<path
															d="M14.237 2.632h2.446l.86 1.95v-1.95h3.02l.52 1.462.523-1.462h2.306v5.701H11.725z"
															fill="#fffffe"></path>
														<g fill="#016fd0">
															<path
																d="m14.7 3.251-1.974 4.446h1.354l.373-.89h2.018l.372.89h1.387L16.265 3.25zm.17 2.558.592-1.415.592 1.415z">
															</path>
															<path
																d="M18.212 7.696V3.25l1.903.006.98 2.733.985-2.74h1.832v4.446l-1.179.01V4.653L21.62 7.696h-1.075l-1.136-3.054v3.054z">
															</path>
														</g>
													</svg></div>
												<div class="p-CardBrandIcons-item p-CardBrandIcons-more"><svg
														viewBox="0 0 24 16" fill="none"
														xmlns="http://www.w3.org/2000/svg" role="presentation"
														focusable="false" class="p-Logo p-Logo--md p-CardBrandIcon">
														<path
															d="M21.997 15.75H22c.955.008 1.74-.773 1.751-1.746V2.006a1.789 1.789 0 0 0-.52-1.25A1.72 1.72 0 0 0 21.997.25H2.001A1.718 1.718 0 0 0 .77.757c-.33.33-.517.779-.521 1.247v11.99c.004.47.191.92.52 1.25.329.328.771.51 1.233.506h19.994Zm0 .5h-.002.002Z"
															stroke="#ddd" fill="#fff"></path>
														<path
															d="M12.612 16h9.385A1.986 1.986 0 0 0 24 14.03v-2.358A38.74 38.74 0 0 1 12.612 16Z"
															fill="#F27712"></path>
														<path
															d="M23.172 9.296h-.852l-.96-1.266h-.091v1.266h-.695V6.152H21.6c.803 0 1.266.33 1.266.927 0 .488-.29.802-.81.902l1.116 1.315Zm-1.026-2.193c0-.306-.232-.463-.662-.463h-.215v.952h.199c.446 0 .678-.166.678-.489Zm-4.005-.951h1.97v.53h-1.275v.703h1.225v.538h-1.225v.852h1.274v.53h-1.97V6.152Zm-2.235 3.227L14.4 6.143h.761l.952 2.119.96-2.119h.745L16.295 9.38h-.389Zm-6.298-.008c-1.059 0-1.887-.72-1.887-1.655 0-.91.845-1.647 1.904-1.647.298 0 .546.058.852.19v.729a1.241 1.241 0 0 0-.869-.356c-.662 0-1.167.48-1.167 1.084 0 .637.497 1.092 1.2 1.092.315 0 .555-.1.836-.347v.728a2.13 2.13 0 0 1-.869.182ZM7.506 8.336c0 .613-.505 1.035-1.233 1.035-.53 0-.91-.182-1.233-.596l.455-.389c.157.282.422.422.753.422.315 0 .538-.19.538-.438 0-.141-.066-.249-.207-.331a2.88 2.88 0 0 0-.48-.183c-.653-.206-.877-.43-.877-.868 0-.514.48-.903 1.109-.903.397 0 .753.125 1.051.356l-.364.414a.761.761 0 0 0-.563-.248c-.298 0-.513.149-.513.347 0 .166.124.257.538.398.794.248 1.026.48 1.026.993v-.009ZM4.088 6.152h.695v3.153h-.695V6.152ZM1.854 9.305H.828V6.152h1.026c1.125 0 1.903.645 1.903 1.572 0 .472-.231.919-.637 1.217-.348.248-.737.364-1.274.364h.008Zm.81-2.367c-.23-.182-.496-.248-.95-.248h-.191v2.085h.19c.447 0 .728-.083.952-.248.24-.199.38-.497.38-.803 0-.306-.14-.596-.38-.786Z"
															fill="#000"></path>
														<path
															d="M12.414 6.069c-.91 0-1.655.728-1.655 1.63 0 .96.711 1.68 1.655 1.68a1.64 1.64 0 0 0 1.655-1.655c0-.927-.72-1.655-1.655-1.655Z"
															fill="#F27712"></path>
													</svg><svg viewBox="0 0 24 16" fill="none"
														xmlns="http://www.w3.org/2000/svg" role="presentation"
														focusable="false" class="p-Logo p-Logo--md p-CardBrandIcon">
														<path
															d="M21.997 15.75H22c.955.008 1.74-.773 1.751-1.746V2.006a1.789 1.789 0 0 0-.52-1.25A1.72 1.72 0 0 0 21.997.25H2.001A1.718 1.718 0 0 0 .77.757c-.33.33-.517.779-.521 1.247v11.99c.004.47.191.92.52 1.25.329.328.771.51 1.233.506h19.994Zm0 .5h-.002.002Z"
															stroke="#ddd" fill="#fff"></path>
														<path
															d="M10.002 2.052v-.016h4v.016a6 6 0 0 1 0 11.968v.016h-4v-.016a6 6 0 0 1 0-11.968Z"
															fill="#0165AC"></path>
														<path
															d="M11.602 11.428a3.6 3.6 0 0 0 0-6.784v6.784Zm-2.4-6.784a3.6 3.6 0 0 0 0 6.784V4.644Zm1.2 8.592a5.2 5.2 0 1 1 0-10.4 5.2 5.2 0 0 1 0 10.4Z"
															fill="#FFF"></path>
													</svg><svg viewBox="0 0 24 16" fill="none"
														xmlns="http://www.w3.org/2000/svg" role="presentation"
														focusable="false"
														class="p-Logo p-Logo--md p-CardBrandIcon p-CardBrandIcon--visible">
														<path
															d="M0 16h4.8c1.092 0 2.4-1.195 2.4-2.133V0H2.4C1.308 0 0 1.195 0 3.2V16Z"
															fill="#047AB1"></path>
														<path
															d="M2.724 10.816c-.922 0-1.838-.115-2.724-.341V9.3c.687.378 1.473.591 2.28.619.924 0 1.44-.576 1.44-1.365V5.333H6v3.222c0 1.258-.744 2.261-3.276 2.261Z"
															fill="#fff"></path>
														<path
															d="M8.4 16h4.8c1.092 0 2.4-1.195 2.4-2.133V0h-4.8C9.708 0 8.4 1.195 8.4 3.2V16Z"
															fill="#D42D06"></path>
														<path
															d="M8.4 6.08c.696-.597 1.896-.97 3.84-.885 1.056.042 2.16.32 2.16.32v1.184a5.313 5.313 0 0 0-2.076-.608C10.848 5.973 9.948 6.709 9.948 8c0 1.29.9 2.027 2.376 1.92a5.387 5.387 0 0 0 2.076-.619v1.174s-1.104.288-2.16.33c-1.944.086-3.144-.288-3.84-.885V6.08Z"
															fill="#fff"></path>
														<path
															d="M16.8 16h4.8c1.092 0 2.4-1.195 2.4-2.133V0h-4.8c-1.092 0-2.4 1.195-2.4 3.2V16Z"
															fill="#67B637"></path>
														<path
															d="M22.8 9.28c0 .853-.744 1.387-1.74 1.387H16.8V5.333h3.876l.276.011c.876.043 1.524.501 1.524 1.29 0 .62-.444 1.153-1.248 1.28v.033C22.116 8 22.8 8.5 22.8 9.28Zm-3.06-3.104a1.226 1.226 0 0 0-.156-.01h-1.44v1.343h1.596c.3-.064.552-.309.552-.672a.657.657 0 0 0-.552-.661Zm.18 2.176a1.16 1.16 0 0 0-.192-.01h-1.584v1.46h1.584l.192-.02a.716.716 0 0 0 .552-.715c0-.374-.24-.64-.552-.715Z"
															fill="#fff"></path>
													</svg><svg viewBox="0 0 24 16" fill="none"
														xmlns="http://www.w3.org/2000/svg" role="presentation"
														focusable="false" class="p-Logo p-Logo--md p-CardBrandIcon">
														<path
															d="M4.546 0h5.794c.808 0 1.311.726 1.123 1.619L8.765 14.368c-.19.89-1 1.616-1.81 1.616H1.164c-.808 0-1.312-.726-1.123-1.616L2.738 1.619C2.927.726 3.736 0 4.546 0"
															fill="#dd2423"></path>
														<path
															d="M9.858 0h6.662c.809 0 .444.726.254 1.619l-2.697 12.749c-.19.89-.13 1.616-.94 1.616H6.474c-.81 0-1.312-.726-1.122-1.616L8.05 1.619C8.241.726 9.05 0 9.858 0"
															fill="#16315e"></path>
														<path
															d="M16.256 0h5.794c.81 0 1.313.726 1.122 1.619l-2.697 12.749c-.19.89-1 1.616-1.81 1.616h-5.791c-.81 0-1.313-.726-1.123-1.616l2.697-12.749C14.637.726 15.446 0 16.256 0"
															fill="#036862"></path>
														<path
															d="M6.059 4.086c-.596.006-.772 0-.828-.015l-.425 2.156c-.086.413-.15.708-.363.898a.612.612 0 0 1-.428.164c-.264 0-.418-.145-.444-.419l-.005-.094.08-.556s.423-1.86.498-2.106a.195.195 0 0 0 .006-.028c-.821.008-.967 0-.977-.015-.005.02-.025.135-.025.135l-.431 2.097-.037.178-.072.582c0 .172.03.313.092.432.196.378.756.435 1.073.435.408 0 .791-.096 1.05-.27.449-.292.566-.749.671-1.155l.049-.208s.434-1.932.508-2.183c.003-.014.004-.022.008-.028zm1.479 1.558c-.105 0-.296.028-.468.121-.063.036-.122.076-.184.117l.056-.224-.03-.037c-.365.081-.447.092-.784.144l-.028.02c-.04.358-.074.626-.22 1.328-.054.259-.112.52-.17.778l.016.033c.346-.02.45-.02.75-.015l.025-.029c.038-.215.043-.265.127-.7.04-.207.123-.66.164-.822a.523.523 0 0 1 .22-.076c.167 0 .147.162.14.226a8.84 8.84 0 0 1-.13.764l-.043.195c-.03.145-.061.285-.09.428l.012.029c.34-.02.444-.02.735-.015l.034-.029c.053-.335.068-.425.161-.914l.047-.225c.091-.44.137-.662.068-.844-.073-.203-.247-.253-.408-.253zm1.652.46c-.18.039-.296.064-.41.08-.115.021-.225.04-.4.066l-.014.014-.013.01c-.018.144-.03.268-.055.414-.02.15-.052.321-.103.567-.04.189-.06.254-.083.32-.022.067-.046.131-.09.316l.01.017.008.016c.164-.009.27-.015.38-.016.11-.004.224 0 .4.001l.015-.013.017-.016c.025-.167.03-.212.045-.293.015-.087.042-.208.107-.531.03-.152.065-.303.097-.458.033-.154.068-.306.1-.458l-.004-.018zm.004-.62c-.164-.107-.453-.073-.647.075-.194.144-.216.35-.052.458.162.104.451.073.644-.076.193-.148.217-.351.055-.457zm.994 2.473c.333 0 .674-.1.93-.4.198-.243.288-.604.32-.753.102-.493.022-.723-.078-.863-.151-.214-.42-.283-.698-.283-.167 0-.565.019-.876.334-.224.228-.327.537-.389.833-.063.302-.135.846.319 1.048.14.066.342.084.472.084zm-.026-1.109c.077-.373.167-.687.398-.687.181 0 .194.233.114.608-.014.083-.08.392-.17.524-.062.097-.136.156-.218.156-.024 0-.169 0-.17-.236a1.76 1.76 0 0 1 .046-.365zm2.107 1.061.026-.029c.037-.215.043-.265.124-.7.041-.207.126-.66.165-.822.075-.038.148-.076.221-.076.167 0 .147.162.14.226-.006.108-.067.46-.131.764l-.04.195c-.03.145-.063.285-.093.428l.013.03c.342-.021.441-.021.734-.016l.035-.029c.051-.336.065-.425.161-.914l.046-.225c.091-.44.138-.662.07-.844-.075-.203-.251-.253-.41-.253-.104 0-.297.028-.468.121a3.058 3.058 0 0 0-.182.117l.052-.224-.028-.037c-.365.081-.448.092-.784.144l-.026.02c-.041.358-.074.626-.22 1.328-.055.259-.112.52-.17.778l.016.033c.346-.02.45-.02.749-.015zm2.509.015.15-.8s.108-.5.115-.519c0 0 .034-.052.068-.073h.05c.475 0 1.01 0 1.43-.34.286-.233.481-.577.569-.996a1.65 1.65 0 0 0 .039-.346c0-.16-.03-.32-.114-.443-.214-.33-.64-.336-1.132-.338l-.243.002c-.63.009-.883.006-.986-.008l-.026.14-.225 1.154-.566 2.563c.55-.008.776-.008.87.004zm.418-2.045.239-1.145.007-.059.004-.045.096.011.506.048c.195.083.276.298.22.578-.052.255-.202.47-.396.574-.16.088-.355.095-.556.095h-.13zm1.494.99c-.064.298-.137.841.315 1.035a.81.81 0 0 0 .404.08c.139-.008.267-.085.386-.195l-.032.136.02.03c.325-.016.426-.016.778-.013l.032-.027c.052-.332.1-.655.234-1.292.065-.305.13-.606.197-.91l-.01-.033c-.364.074-.462.09-.811.144l-.027.024-.01.09a.515.515 0 0 0-.255-.23c-.156-.068-.52.019-.835.334-.22.224-.326.532-.386.827zm.763.018c.078-.366.167-.677.399-.677.146 0 .223.15.208.403l-.042.205c-.023.11-.048.217-.073.325a.823.823 0 0 1-.085.19.387.387 0 0 1-.283.151c-.024 0-.166 0-.171-.232-.002-.115.02-.234.047-.365zm3.987-1.21-.028-.036c-.36.08-.425.093-.756.142l-.024.027-.004.017v-.006c-.247.625-.24.49-.44.982l-.002-.06-.05-1.066-.032-.036c-.377.08-.385.093-.733.142l-.028.027c-.003.013-.003.027-.006.042l.003.006c.043.244.033.19.076.576.02.19.048.38.068.567.034.313.054.468.096.946-.235.426-.291.588-.517.963l.001.003-.159.278c-.018.029-.035.049-.058.057a.22.22 0 0 1-.104.017h-.089l-.13.48.45.009a.549.549 0 0 0 .519-.32l.283-.534h-.005l.03-.038c.19-.45 1.639-3.185 1.639-3.185zm-4.75 6.308h-.191l.706-2.573h.235l.074-.265.007.295c-.008.182.122.344.464.317h.395l.137-.495h-.15c-.085 0-.125-.024-.12-.075l-.007-.3h-.732v.002c-.237.005-.944.025-1.088.067-.173.049-.355.193-.355.193l.071-.265h-.685l-.143.526-.716 2.613h-.139l-.136.492h1.365l-.046.164h.672l.045-.164h.189zm-.56-2.05c-.11.034-.314.135-.314.135l.181-.658h.545l-.132.48s-.168.01-.28.043zm.01.94s-.17.023-.283.051c-.111.037-.32.154-.32.154l.188-.684h.548zm-.305 1.116h-.546l.158-.577h.545zm1.315-1.595h.787l-.113.403h-.797l-.12.44h.698l-.529.82a.223.223 0 0 1-.107.098.293.293 0 0 1-.141.045h-.194l-.133.483h.506c.264 0 .419-.132.534-.305l.362-.546.078.554a.257.257 0 0 0 .13.189c.05.028.103.076.177.083.08.004.137.007.175.007h.249l.15-.54h-.099c-.056 0-.153-.011-.17-.03-.016-.024-.016-.06-.025-.116l-.08-.556h-.322l.141-.185h.797l.122-.441h-.737l.115-.403h.735l.136-.498h-2.19zm-6.648 1.708.184-.673h.755l.138-.5h-.756l.115-.415h.739l.137-.484H9.966l-.134.484h.42l-.112.414h-.421l-.14.51h.42l-.245.89c-.033.117.015.162.046.217a.205.205 0 0 0 .135.109c.074.018.125.029.194.029h.851l.152-.555-.377.058c-.073 0-.275-.01-.253-.084zm.086-3.221-.19.38a.438.438 0 0 1-.112.16c-.03.02-.087.028-.17.028h-.1l-.134.487h.331a.7.7 0 0 0 .34-.097c.064-.037.08-.016.129-.067l.112-.107h1.035l.137-.507h-.757l.132-.277zm1.53 3.23c-.019-.027-.006-.077.021-.18l.283-1.03h1.007c.147-.003.253-.005.321-.01a.617.617 0 0 0 .243-.09.474.474 0 0 0 .176-.179c.043-.066.113-.21.173-.433l.356-1.305-1.045.007s-.321.052-.463.11a1.887 1.887 0 0 0-.347.244l.094-.358h-.645l-.904 3.298a2.21 2.21 0 0 0-.058.277c-.002.06.069.12.115.165.054.045.134.038.21.045.08.007.196.01.354.01h.496l.152-.565-.444.046a.114.114 0 0 1-.096-.052zm.487-1.907h1.057l-.067.232c-.01.005-.032-.012-.14.002h-.915zm.212-.778h1.066l-.077.28s-.502-.006-.583.01c-.354.068-.56.276-.56.276zm.802 1.787a.126.126 0 0 1-.042.071c-.022.016-.057.021-.108.021h-.151l.009-.282H12.7l-.025 1.38c-.001.1.007.158.074.204.066.058.27.065.545.065h.392l.142-.517-.342.02-.113.008c-.016-.007-.03-.014-.047-.032-.015-.016-.039-.006-.035-.106l.003-.354.358-.016c.194 0 .277-.07.347-.136.068-.063.09-.136.115-.234l.06-.313h-.493z"
															fill="#fefefe"></path>
													</svg><svg viewBox="0 0 24 16" fill="none"
														xmlns="http://www.w3.org/2000/svg" role="presentation"
														focusable="false" class="p-Logo p-Logo--md p-CardBrandIcon">
														<path
															d="M21.997 15.75H22c.956.008 1.74-.773 1.751-1.746V2.006a1.788 1.788 0 0 0-.52-1.25A1.72 1.72 0 0 0 21.997.25H2.001A1.718 1.718 0 0 0 .77.757c-.33.33-.517.779-.521 1.247v11.99c.004.47.191.92.52 1.25.329.328.771.51 1.233.506h19.994Zm0 .5h-.002.002Z"
															fill="#fff" stroke="#ddd"></path>
														<path
															d="M4.678 5.752c.244-.08.499-.12.755-.12 1.152 0 2.114.802 2.334 1.868L9.4 7.174C9.025 5.362 7.392 4 5.433 4c-.449 0-.88.072-1.283.204l.528 1.548Z"
															fill="#FFCA05"></path>
														<path
															d="M2.783 11 3.9 9.765A2.33 2.33 0 0 1 3.087 8c0-.703.314-1.333.812-1.765L2.782 5A3.959 3.959 0 0 0 1.4 8a3.96 3.96 0 0 0 1.383 3Z"
															fill="#00A4DF"></path>
														<path
															d="M7.768 8.5c-.222 1.066-1.182 1.866-2.333 1.866-.257 0-.512-.04-.756-.12l-.53 1.55A4.12 4.12 0 0 0 5.436 12C7.39 12 9.024 10.639 9.4 8.828L7.768 8.5Z"
															fill="#EE4123"></path>
														<path
															d="m14.022 9.314-.002.001-.046-.031c-.133.217-.34.393-.603.507-.498.217-.96.161-1.292-.13l-.03.046-.002-.001-.566.85c.141.098.292.181.45.247.625.261 1.265.25 1.895-.026.456-.198.813-.5 1.058-.884l-.862-.58Zm-1.767-2.098c-.526.227-.798.723-.742 1.305l2.23-.964c-.383-.453-.882-.603-1.488-.341Zm-1.48 2.59a2.913 2.913 0 0 1-.17-.327 2.412 2.412 0 0 1-.052-1.817c.238-.654.695-1.155 1.285-1.41.741-.32 1.561-.257 2.272.167.451.26.771.661 1.014 1.23.032.072.058.15.085.216l-4.435 1.94v.001ZM16.758 5v4.728l.732.298-.416.974-.807-.338a.919.919 0 0 1-.398-.336 1.06 1.06 0 0 1-.156-.586V5h1.045Zm1.896 3.523a1.34 1.34 0 0 0 .454 1.008l-.75.842a2.47 2.47 0 0 1-.828-1.85 2.468 2.468 0 0 1 .83-1.85l.751.841a1.34 1.34 0 0 0-.457 1.01Zm1.334 1.342c.644 0 1.183-.458 1.308-1.069l1.102.226a2.463 2.463 0 0 1-3.192 1.844l.359-1.07c.133.044.275.069.423.069Zm.003-3.81c1.19 0 2.181.85 2.408 1.978l-1.102.225a1.336 1.336 0 0 0-1.73-1.006l-.356-1.072c.252-.084.515-.126.78-.126Z"
															fill="#000"></path>
													</svg></div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Expiration date</label>
											<input type="text" class="form-control" value="" placeholder="MM/YY">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Security code</label>
											<input type="text" class="form-control" value="" placeholder="CVC">
											<div class="p-CardCvcIcons-group  c-InputPadding dateinput_icon"><svg
													class="p-CardCvcIcons-svg" width="24" height="24"
													viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
													fill="var(--colorIconCardCvc)" role="img" aria-labelledby="cvcDesc">
													<path opacity=".2" fill-rule="evenodd" clip-rule="evenodd"
														d="M15.337 4A5.493 5.493 0 0013 8.5c0 1.33.472 2.55 1.257 3.5H4a1 1 0 00-1 1v1a1 1 0 001 1h16a1 1 0 001-1v-.6a5.526 5.526 0 002-1.737V18a2 2 0 01-2 2H3a2 2 0 01-2-2V6a2 2 0 012-2h12.337zm6.707.293c.239.202.46.424.662.663a2.01 2.01 0 00-.662-.663z">
													</path>
													<path opacity=".4" fill-rule="evenodd" clip-rule="evenodd"
														d="M13.6 6a5.477 5.477 0 00-.578 3H1V6h12.6z"></path>
													<path fill-rule="evenodd" clip-rule="evenodd"
														d="M18.5 14a5.5 5.5 0 110-11 5.5 5.5 0 010 11zm-2.184-7.779h-.621l-1.516.77v.786l1.202-.628v3.63h.943V6.22h-.008zm1.807.629c.448 0 .762.251.762.613 0 .393-.37.668-.904.668h-.235v.668h.283c.565 0 .95.282.95.691 0 .393-.377.66-.911.66-.393 0-.786-.126-1.194-.37v.786c.44.189.88.291 1.312.291 1.029 0 1.736-.526 1.736-1.288 0-.535-.33-.967-.88-1.14.472-.157.778-.573.778-1.045 0-.738-.652-1.241-1.595-1.241a3.143 3.143 0 00-1.234.267v.77c.378-.212.763-.33 1.132-.33zm3.394 1.713c.574 0 .974.338.974.778 0 .463-.4.785-.974.785-.346 0-.707-.11-1.076-.337v.809c.385.173.778.26 1.163.26.204 0 .392-.032.573-.08a4.313 4.313 0 00.644-2.262l-.015-.33a1.807 1.807 0 00-.967-.252 3 3 0 00-.448.032V6.944h1.132a4.423 4.423 0 00-.362-.723h-1.587v2.475a3.9 3.9 0 01.943-.133z">
													</path>
												</svg></div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="form-label">Country</label>
											<select class="form-control select2 countrySelect">
												<option disabled selected value="">Please Select...</option>
											</select>
										</div>
									</div>

								</div>
							</div>
							<!-- 7th step end -->

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
<!-- Add enquiry modal end -->

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

<script>
	$("#department_select").select2({
		placeholder: "Select a Department"
	})
	$("#DepartmentUser_select").select2({
		placeholder: "Select a User"
	})
</script>