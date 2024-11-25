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
	.select2-container--open .select2-dropdown--below {
	z-index: 10000;
}

</style>

<div class="container-xxl">

	<!-- Page Body -->
	<div class="hk-pg-body py-0">
		<div class="contactapp-wrap">

			<div class="contactapp-content">
				<div class="contactapp-detail-wrap">
				<div class="Count_Numbers_container">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="pending-tasks.php">
								<div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-logo avatar-rounded">
                                                    <span class="initial-wrap cardiconBGColor_1">
													<iconify-icon icon="hugeicons:task-01"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Pending Tasks</div>
                                                <div class="NumberCountCard">82</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
								</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="completed-tasks.php">
								<div class="card card-border spipeline-card Active">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-logo avatar-rounded">
                                                    <span class="initial-wrap cardiconBGColor_2">
													<iconify-icon icon="hugeicons:task-done-01"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">All Completed Tasks</div>
                                                <div class="NumberCountCard">1014</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
								</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="inprogress-tasks.php">
								<div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-logo avatar-rounded">
                                                    <span class="initial-wrap cardiconBGColor_3">
													<iconify-icon icon="carbon:task-asset-view"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name"> In Progress Tasks</div>
                                                <div class="NumberCountCard">98 </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
								</a>
                            </div>
                        </div>

                    </div>

					<header class="contact-header">
						<div class="d-flex align-items-center">
							<div class="dropdown">
								<a class="contactapp-title link-dark" href="#" role="button">
									<h1>All Completed Tasks</h1>
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
							<button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
								data-bs-toggle="modal" data-bs-target="#AddHubEvent">
								<iconify-icon icon="lets-icons:add-round">
								</iconify-icon> Add New Task
							</button>
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
											<div class="col-xxl-12">
												<div class="position-relative">

													<div class="col-lg-12">
														<div class="row gx-3">

															<div class="col-lg-2">
																<div class="form-group">
																	<label class="form-label">Department</label>
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
																	<label class="form-label">Status</label>
																	<select name="" id="Status"
																		class="form-control select2">
																		<option value="" selected disabled>Select an
																			Option</option>
																		<option value="Pending">Pending</option>
																		<option value="Completed">
																			Completed</option>
																		<option value="In Processing">In Processing
																		</option>

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

															<div class="col-md-2">

																<div class="form-group">
																	<label class="form-label">Due Date</label>
																	<input
																		class="form-control customdataPicker flatpickr-input"
																		type="text" name="" value="01/06/2024" />
																	<iconify-icon icon="ion:calendar-outline"
																		class="dateinput_icon"></iconify-icon>
																</div>
															</div>

															<div class="col-lg-2">
																<div class="form-group">
																	<label class="form-label">Assigned Users</label>
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

															<div class="col-lg-2">
																<div class="form-group">
																	<label class="form-label">Task Category</label>
																	<select name="" id="EnquirySource"
																		class="form-control select2">
																		<option value="" selected disabled>Select an
																			Option</option>
																		<option value="Enquiries">Enquiries</option>
																		<option value="Contract Management">Contract
																			Management</option>

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
							<div class="contact-list-view">

								<table class="table common-datatable nowrap w-100">
									<thead>
										<tr>
											<th>Date</th>
											<th>Task Assigned</th>
											<th>Department</th>
											<th>Assigned User</th>
											<th>Task Category</th>
											<th>Due Date</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>10/09/2024</td>
											<td>Review Contract Draft</td>
											<td>lettings Department</td>
											<td>John Doe</td>
											<td>Contract Management</td>
											<td>2024-09-15</td>
											<td> <span class="badge bg-success">Completed</span></td>
											<td>
												<div class="d-flex align-items-center ActionDropdown">
													<div class="d-flex">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Task Details"
															href="Task-details.php"><span class="icon"><span
																	class="feather-icon">
																	<iconify-icon icon="formkit:eye"></iconify-icon>
																</span></span></a>

													</div>

												</div>
											</td>
										</tr>
										<tr>
											<td>09/09/2024</td>
											<td>Follow Up on Client Enquiry</td>
											<td>Sales</td>
											<td>Jane Smith</td>
											<td>Enquiries</td>
											<td>2024-09-12</td>
											<td> <span class="badge bg-success">Completed</span></td>
											<td>
												<div class="d-flex align-items-center ActionDropdown">
													<div class="d-flex">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Task Details"
															href="Task-details.php"><span class="icon"><span
																	class="feather-icon">
																	<iconify-icon icon="formkit:eye"></iconify-icon>
																</span></span></a>

													</div>

												</div>
											</td>
										</tr>
										<tr>
											<td>08/09/2024</td>
											<td>Prepare New Contract</td>
											<td>lettings Department</td>
											<td>Sam Wilson</td>
											<td>Contract Management</td>
											<td>2024-09-11</td>
											<td> <span class="badge bg-success">Completed</span></td>
											<td>
												<div class="d-flex align-items-center ActionDropdown">
													<div class="d-flex">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Task Details"
															href="Task-details.php"><span class="icon"><span
																	class="feather-icon">
																	<iconify-icon icon="formkit:eye"></iconify-icon>
																</span></span></a>

													</div>

												</div>
											</td>
										</tr>
										<tr>
											<td>07/09/2024</td>
											<td>Respond to Client Enquiry</td>
											<td>Customer Support</td>
											<td>Mary Johnson</td>
											<td>Enquiries</td>
											<td>2024-09-10</td>
											<td> <span class="badge bg-success">Completed</span></td>
											<td>
												<div class="d-flex align-items-center ActionDropdown">
													<div class="d-flex">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Task Details"
															href="Task-details.php"><span class="icon"><span
																	class="feather-icon">
																	<iconify-icon icon="formkit:eye"></iconify-icon>
																</span></span></a>

													</div>

												</div>
											</td>
										</tr>
										<tr>
											<td>07/09/2024</td>
											<td>Renew Existing Contract</td>
											<td>lettings Department</td>
											<td>Alex Brown</td>
											<td>Contract Management</td>
											<td>2024-09-13</td>
											<td> <span class="badge bg-success">Completed</span></td>
											<td>
												<div class="d-flex align-items-center ActionDropdown">
													<div class="d-flex">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Task Details"
															href="Task-details.php"><span class="icon"><span
																	class="feather-icon">
																	<iconify-icon icon="formkit:eye"></iconify-icon>
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
	<!-- /Page Body -->
</div>

<!-- add task code modal-->
<div id="AddHubEvent" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<form action="" method="post" id="wizardForm">
			<div class="modal-content">

				<div class="ModalheaderArea">
					<h5 class="mb-4">Add New Task</h5>
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
									<h1>What's your task about?</h2>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label class="form-label">Task Title</label>
											<input class="form-control" type="text">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Date From</label>
											<input class="form-control customdataPicker flatpickr-input" type="text"
												name="" value="01/06/2024" readonly="readonly">
											<iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
											</iconify-icon>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Date To</label>
											<input class="form-control customdataPicker flatpickr-input" type="text"
												name="" value="01/06/2024" readonly="readonly">
											<iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
											</iconify-icon>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Start Time</label>
											<input type="text" name="time" value=""
													class="form-control time__pickers" id="timepicker"
													placeholder="Select Time" required="" readonly="">
                                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">End Time</label>
											<input type="text" name="time" value=""
													class="form-control time__pickers" id="timepicker"
													placeholder="Select Time" required="" readonly="">
                                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
										</div>
									</div>

									<div class="col-lg-12">
    <div class="form-group">
        <label class="form-label">Duration</label>
        <select name="" id="durationSelect" class="form-control select2">
            <option value="" selected disabled readonly>Select an Option</option>
            <option value="15 Min">15 Min</option>
            <option value="20 Min">20 Min</option>
            <option value="1 hour">1 hour</option>
            <option value="Custom" class="custominpField_option">Custom</option>
        </select>
    </div>
</div>

<div class="col-sm-12 customTile_field" style="display:none;">
<div class="form-group">
        <label class="form-label">Add Duration (in Min)</label>
        <input id="timeInput" class="form-control" type="text" value="">
		<div id="timeOutput"></div>
    </div>
   
</div>
									

									

								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">

                                    <div class="eventSubmit_container">
                                    
                                <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter" style="display: inline-block;">Submit</button>
                                    </div>
                            </div>

			</div>
		</form>
	</div>
</div>
<!-- add task modal end-->

<?php include('footer.php') ?>

<!-- don't Remove this scripts these all Required Scripts for this page  -->
<!-- Repeater JS -->
<script src="vendors/jquery.repeater/jquery.repeater.min.js"></script>
<!-- Drag JS -->
<script src="vendors/dragula/dist/dragula.min.js"></script>
<script src="dist/js/todo-data.js"></script>

<script>
	$("#department_select").select2({
		placeholder: "Select a Department"
	})
	$("#DepartmentUser_select").select2({
		placeholder: "Select a User"
	})
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

<!-- custom task duration  field functionality js -->
<script>
    $(document).ready(function() {
        // Initialize Select2
        $('#durationSelect').select2({
            minimumResultsForSearch: Infinity // This disables the search box if you don't need it
        });

        // Hide custom field by default
        $('.customTile_field').hide();
        
        // Show/hide custom field based on selected option
        $('#durationSelect').on('change', function() {
            if ($(this).val() === 'Custom') {
                $('.customTile_field').show();
            } else {
                $('.customTile_field').hide();
            }
        });
    });
</script>
 <!-- custom task duration  field functionality js end-->

 <!--  custom field numver validation and time calculation js -->
 <script>
    $(document).ready(function() {
        // Restrict input to digits only
        $('#timeInput').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');  // Only allow numbers

            var minutes = parseInt(this.value) || 0;  // Convert to integer or default to 0 if empty
            var hours = Math.floor(minutes / 60);     // Calculate hours
            var remainingMinutes = minutes % 60;      // Calculate remaining minutes

            // Display the result in "X hr Y min" format
            if (minutes > 0) {
                var timeFormatted = (hours > 0 ? hours + " hr " : "") + (remainingMinutes > 0 ? remainingMinutes + " min" : "");
                $('#timeOutput').text(timeFormatted);
            } else {
                $('#timeOutput').text('');  // Clear the output if input is empty
            }
        });
    });
</script>
 <!--  custom field numver validation and time calculation js end-->