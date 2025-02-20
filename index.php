<?php include('header.php') ?>

<div class="container-xxl custompaddingContainer">
	<!-- Page Header -->
	<div class="hk-pg-header  pt-4">
		<div class="d-flex">
			<div class="d-flex flex-wrap justify-content-between flex-1">
				<div class="mb-lg-0 mb-2 me-8">
					<h1 class="pg-title">Welcome back</h1>
					<p>Welcome back to your Admin Panel, where every detail of your operations awaits your command.</p>
				</div>

				<div class="hometoprightTExt">
				<div class="currentLoginTime">
										<div class="LastLogintimeTitle">
										<iconify-icon icon="hugeicons:clock-05"></iconify-icon>
											<span class="badge-label d-inline-block">Last Login Time</span>
										</div>
										<span
												id="lastLogin"></span>
									</div>
				</div>

			</div>
		</div>
	</div>
	<!-- /Page Header -->

	<!-- Page Body -->
	<div class="hk-pg-body homebodyContainer">
		<div class="tab-content">
			<div class="tab-pane fade show active" id="tab_block_1">
				<div class="row">
					<div class="col-xxl-12 col-lg-12 col-md-12 mb-md-4 mb-3">
						

						<div class="card card-border mb-0 ">
							<div class="card-header card-header-action">
								<h6>Modules Progress Overview </h6>
								<div class="Header_right_Filters">
								<div class="form-group frmgroup_withicon formgroup_noMargin cardheaderDate_filter">
                                          <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                          <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                   </div>
								   <div class="card-action-wrap customdropdown_menu rightAction_margin_left">
												<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#">Last 24 hour</a>
													<a class="dropdown-item" href="#">Past Week</a>
													<a class="dropdown-item" href="#">Last 30 Days</a>
													
												</div>
											</div>
								</div>
							</div>
							<div class="card-body">
								<div class="flex-grow-1 ms-lg-3 userdashcards">
									<div class="row">
										<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3 cardDash">
											<span class="d-block fw-medium fs-7">Total Properties</span>
											<div class="d-flex align-items-center">
												<span class="d-block fs-4 fw-medium text-dark mb-0">8.8k</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 7.5%
												</span>
											</div>
										</div>
										<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3 cardDash">
											<span class="d-block fw-medium fs-7">Total Events</span>
											<div class="d-flex align-items-center">
												<span class="d-block fs-4 fw-medium text-dark mb-0">439</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 7.2%
												</span>
											</div>
										</div>
										<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3 cardDash">
											<span class="d-block fw-medium fs-7">Total Users</span>
											<div class="d-flex align-items-center">
												<span class="d-block fs-4 fw-medium text-dark mb-0">287</span>
												<span class="badge badge-sm badge-soft-danger ms-1">
													<i class="bi bi-arrow-down"></i> 0.2%
												</span>
											</div>
										</div>
										<div class="col-xxl-3 col-sm-6 cardDash">
											<span class="d-block fw-medium fs-7">Total Reports</span>
											<div class="d-flex align-items-center">
												<span class="d-block fs-4 fw-medium text-dark mb-0">59</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 10.8%
												</span>
											</div>
										</div>
									</div>

									<div class="row dashrowcare2">
										<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3 cardDash">
											<span class="d-block fw-medium fs-7">
												Total Tenancies</span>
											<div class="d-flex align-items-center">
												<span class="d-block fs-4 fw-medium text-dark mb-0">8709</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 7.5%
												</span>
											</div>
										</div>
										<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3 cardDash">
											<span class="d-block fw-medium fs-7">New Enquiries</span>
											<div class="d-flex align-items-center">
												<span class="d-block fs-4 fw-medium text-dark mb-0">42</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 7.2%
												</span>
											</div>
										</div>
										<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3 cardDash">
											<span class="d-block fw-medium fs-7">
												Total Inventory</span>
											<div class="d-flex align-items-center">
												<span class="d-block fs-4 fw-medium text-dark mb-0">1989</span>
												<span class="badge badge-sm badge-soft-danger ms-1">
													<i class="bi bi-arrow-down"></i> 0.2%
												</span>
											</div>
										</div>
										<div class="col-xxl-3 col-sm-6 cardDash">
											<span class="d-block fw-medium fs-7">Total Merchants</span>
											<div class="d-flex align-items-center">
												<span class="d-block fs-4 fw-medium text-dark mb-0">498</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 10.8%
												</span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card enquiryDahsboard_table card-border mb-0 ">
							<div class="card-header card-header-action">
								<h6>New Enquiries
									<span class="badge badge-sm badge-light ms-1">240</span>
								</h6>
								<div class="Header_right_Filters">
								<div class="card-action-wrap">
								<button class="btn btn-sm btn-outline-light ms-3"><span><span class="icon"><span
								class="feather-icon"><i data-feather="eye"></i></span></span><span class="btn-text">View All Enquiries</span></span></button>
								
								</div>

								<div class="form-group frmgroup_withicon formgroup_noMargin cardheaderDate_filter">
                                          <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                          <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                </div>

								<div class="card-action-wrap customdropdown_menu rightAction_margin_left">
												<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#">Last 24 hour</a>
													
												</div>
								</div>
								</div>
								
							</div>
							<div class="card-body">

								<div class="contact-list-view smalltableStyle">
									<table class="table common-datatable nowrap w-100 ">
										<thead>
											<tr>

												<th>Name</th>
												<th>Budget</th>
												<th>Move In Date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/users/userdummy.png"
																	alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="text-high-em">Danial Craig</div>
															<div class="fs-7"><a href="#"
																	class="table-link-text link-medium-em">danialcraig@gmail.com</a>
															</div>
														</div>
													</div>
												</td>
												<td>
													£300.00
												</td>
												<td>10 June, 2024</td>
												<td>Viewings Booked</td>

												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Enquiry" href="#"><span
																class="icon"><span class="feather-icon"><i
																		data-feather="eye"></i></span></span></a>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/users/userdummy.png"
																	alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="text-high-em">Dean Shaw
															</div>
															<div class="fs-7"><a href="#"
																	class="table-link-text link-medium-em">dean-shaw@poww.me</a>
															</div>
														</div>
													</div>
												</td>
												<td>
													£5500.00
												</td>
												<td>09 July, 2024</td>
												<td>For Rent</td>
												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Enquiry" href="#"><span
																class="icon"><span class="feather-icon"><i
																		data-feather="eye"></i></span></span></a>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/users/userdummy.png"
																	alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="text-high-em">Huma Therman</div>
															<div class="fs-7"><a href="#"
																	class="table-link-text link-medium-em">huma@clariesup.au</a>
															</div>
														</div>
													</div>
												</td>
												<td>
													£250.00
												</td>
												<td>24 Aug, 2024</td>
												<td>Viewings Booked</td>

												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Enquiry" href="#"><span
																class="icon"><span class="feather-icon"><i
																		data-feather="eye"></i></span></span></a>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/users/userdummy.png"
																	alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="text-high-em">Jaquiline Joker</div>
															<div class="fs-7"><a href="#"
																	class="table-link-text link-medium-em">jaquljoker@graysons.com</a>
															</div>
														</div>
													</div>
												</td>
												<td>
													£430.00
												</td>
												<td>17 May, 2024</td>
												<td>Viewings Booked</td>

												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Enquiry" href="#"><span
																class="icon"><span class="feather-icon"><i
																		data-feather="eye"></i></span></span></a>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/users/userdummy.png"
																	alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="text-high-em">Morgan Freeman</div>
															<div class="fs-7"><a href="#"
																	class="table-link-text link-medium-em">morgan@graysons.com</a>
															</div>
														</div>
													</div>
												</td>
												<td>
													£800.00
												</td>
												<td>13 July, 2024</td>
												<td>For Rent</td>

												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Enquiry" href="#"><span
																class="icon"><span class="feather-icon"><i
																		data-feather="eye"></i></span></span></a>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/users/userdummy.png"
																	alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="text-high-em">Tom Cruz</div>
															<div class="fs-7"><a href="#"
																	class="table-link-text link-medium-em">tomcz@graysons.com</a>
															</div>
														</div>
													</div>
												</td>
												<td>
													£250.00
												</td>
												<td>14 July, 2024</td>
												<td>Viewings Booked</td>

												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" data-placement="top" title=""
															data-bs-original-title="View Enquiry" href="#"><span
																class="icon"><span class="feather-icon"><i
																		data-feather="eye"></i></span></span></a>

													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card card-border mb-0  mt-3">

                            <div class="dashboardTodo_panel">

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card dashtodoleft_controlpanel">
                                            <div class="card-body">

                                                <div class="TododashManage notes-dash">
                                                    <div class="notes-top-head">
                                                        <h5> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-file-text">
                                                                <path
                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                </path>
                                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                                <polyline points="10 9 9 9 8 9"></polyline>
                                                            </svg> Todo List</h5>
                                                    </div>

                                                    <div class="notes-top-head-submenu">
                                                        <div class="nav flex-column nav-pills todo-inbox "
                                                            id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            <button class="nav-link todo-tab todo-inbox active"
                                                                id="v-pills-profile-tab" data-bs-toggle="pill"
                                                                data-bs-target="#v-pills-profile" type="button"
                                                                role="tab" aria-controls="v-pills-profile"
                                                                aria-selected="false" tabindex="-1"> <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-inbox">
                                                                    <polyline
                                                                        points="22 12 16 12 14 15 10 15 8 12 2 12">
                                                                    </polyline>
                                                                    <path
                                                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                                                    </path>
                                                                </svg>Inbox <span class="ms-2">1</span></button>
                                                            <button class="nav-link todo-tab todo-inbox"
                                                                id="v-pills-home-tab" data-bs-toggle="pill"
                                                                data-bs-target="#v-pills-home" type="button" role="tab"
                                                                aria-controls="v-pills-home" aria-selected="false"
                                                                tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-check-circle">
                                                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                                </svg>Done</button>
                                                            
                                                            <button class="nav-link todo-tab todo-inbox mb-0 "
                                                                id="v-pills-settings-tab" data-bs-toggle="pill"
                                                                data-bs-target="#v-pills-settings" type="button"
                                                                role="tab" aria-controls="v-pills-settings"
                                                                aria-selected="true"> <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>Trash</button>
                                                        </div>
                                                    </div>

                                                    <div class="content-submenu-tag">
                                                        <h6>Tags</h6>
                                                        <ul class="tags-list">
                                                            <li class="personal">
                                                                <a href="javascript:void(0);">
                                                                    <span><i class="fas fa-square"></i></span>
                                                                    Pending
                                                                </a>
                                                            </li>
                                                            <li class="social">
                                                                <a href="javascript:void(0);">
                                                                    <span><i class="fas fa-square"></i></span>
                                                                    Onhold
                                                                </a>
                                                            </li>
                                                            <li class="public">
                                                                <a href="javascript:void(0);">
                                                                    <span><i class="fas fa-square"></i></span>
                                                                    Inprogress
                                                                </a>
                                                            </li>

                                                            <li class="work">
                                                                <a href="javascript:void(0);">
                                                                    <span><i class="fas fa-square"></i></span>
                                                                    Done
                                                                </a>
                                                            </li>

                                                        </ul>

                                                        <h6>Priority</h6>
                                                        <ul class="priority-list">
                                                            <li class="medium">
                                                                <a href="javascript:void(0);">
                                                                    <span><i class="fas fa-square"></i></span>
                                                                    Medium
                                                                </a>
                                                            </li>
                                                            <li class="high">
                                                                <a href="javascript:void(0);">
                                                                    <span><i class="fas fa-square"></i></span>
                                                                    High
                                                                </a>
                                                            </li>
                                                            <li class="low">
                                                                <a href="javascript:void(0);">
                                                                    <span><i class="fas fa-square"></i></span>
                                                                    Low
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="task-detail-body">

                                                    <ul class="nav nav-justified nav-light nav-tabs nav-segmented-tabs active-theme mt-4"
                                                        role="tablist" id="dashtasklefttabs">

                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#tab_comments" aria-selected="false" tabindex="-1"
                                                                role="tab">
                                                                <span class="nav-link-text badge-on-text">Add
                                                                    Note</span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#tab_activity" aria-selected="false" tabindex="-1"
                                                                role="tab">
                                                                <span
                                                                    class="nav-link-text badge-on-text">Activity</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">

                                                        <div class="tab-pane fade show active" id="tab_comments"
                                                            role="tabpanel">
                                                            <form action="">
                                                                <div class="mainuserFilesds_tabpaneContainer">

                                                                    <div class="dashtaskcmntTab_inrtitle">
                                                                        <h2 class="tabinnerTitle">Add New Note</h2>
                                                                    </div>

                                                                    <div class="AddNoteEnuSection" id="AddNote1">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Note
                                                                                header</label>
                                                                            <input class="form-control note-title"
                                                                                type="text" placeholder="Add Title">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="form-label">Add
                                                                                Comment</label>
                                                                            <textarea class="form-control note-comment"
                                                                                rows="5"></textarea>
                                                                        </div>

                                                                        <div class="NoteAction_container">
                                                                            <div class="">
                                                                                <div class="addto_todolist">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input customCheckList-todo">
                                                                                        <label
                                                                                            class="form-check-label">Add
                                                                                            to ToDo List <span
                                                                                                class="done-strikethrough"></span></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=" setAlert_container">
                                                                                <div class="addto_todolist">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input setAlertInput">
                                                                                        <label
                                                                                            class="form-check-label">Set
                                                                                            As Alert <span
                                                                                                class="done-strikethrough"></span></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="Showing_departmentand_users"
                                                                            style="display: none;">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Select
                                                                                            Department</label>
                                                                                        <select
                                                                                            class="form-control select2 select-department">
                                                                                            <option disabled selected
                                                                                                value="">Please
                                                                                                Select...</option>
                                                                                            <option
                                                                                                value="Account Department">
                                                                                                Account Department
                                                                                            </option>
                                                                                            <option
                                                                                                value="HR Department">HR
                                                                                                Department</option>
                                                                                            <option
                                                                                                value="Contract Department">
                                                                                                Contract Department
                                                                                            </option>
                                                                                            <option
                                                                                                value="Lettings Department">
                                                                                                Lettings Department
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Select
                                                                                            Users</label>
                                                                                        <select
                                                                                            class="form-control select2 select-user">
                                                                                            <option disabled selected
                                                                                                value="">Please
                                                                                                Select...</option>
                                                                                            <option value="John Doe">
                                                                                                John Doe</option>
                                                                                            <option value="Jane Smith">
                                                                                                Jane Smith</option>
                                                                                            <option
                                                                                                value="Alice Johnson">
                                                                                                Alice Johnson</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Select
                                                                                            Due Date</label>
                                                                                        <input
                                                                                            class="form-control customdataPicker"
                                                                                            type="text" name="" value=""
                                                                                            placeholder="Due Date" />
                                                                                        <iconify-icon
                                                                                            icon="ion:calendar-outline"
                                                                                            class="dateinput_icon">
                                                                                        </iconify-icon>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="savechangesformContainer DashTBTaskNote_buttoncntr">
                                                                            <button type="button"
                                                                                class="sendBtn_common_main addenun_noteBtn send-note">Save</button>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane fade" id="tab_activity" role="tabpanel">
                                                            <div class=" mb-2">
                                                                <div class="title title-lg mb-0"><span>Latest
                                                                        activity</span></div>
                                                            </div>
                                                            <div class="collapse-simple">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <a role="button" data-bs-toggle="collapse"
                                                                            href="#activity_1"
                                                                            aria-expanded="true">Today</a>
                                                                    </div>
                                                                    <div id="activity_1" class="collapse show">
                                                                        <div class="card-body">
                                                                            <ul
                                                                                class="activity-list list-group list-group-flush">
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-primary avatar-rounded">
                                                                                                <span
                                                                                                    class="initial-wrap">H</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span
                                                                                                    class="text-dark">Graysons</span>
                                                                                                on Documentation link is
                                                                                                working now - <a
                                                                                                    href="#"
                                                                                                    class="link-url"><u>https://Graysons.com</u></a>
                                                                                            </p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Oct 15, 2021, 12:34 PM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/avatar2.jpg"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span class="text-dark">Morgan
                                                                                                    Fregman</span>
                                                                                                completed react
                                                                                                conversion of <a
                                                                                                    href="#"
                                                                                                    class="link-default"><u>components</u></a>
                                                                                            </p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 16, 2021, 4:54 PM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/avatar13.jpg"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span class="text-dark">Jimmy
                                                                                                    Carry</span>completed
                                                                                                side bar menu on <a
                                                                                                    href="#"
                                                                                                    class="link-default"><u>elements</u></a>
                                                                                            </p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 10, 2021, 10:13 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/avatar7.jpg"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span class="text-dark">Charlie
                                                                                                    Chaplin</span>
                                                                                                deleted empty cards on
                                                                                                <a href="#"
                                                                                                    class="link-default"><u>completed</u></a>
                                                                                            </p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 10, 2021, 10:13 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <a role="button" data-bs-toggle="collapse"
                                                                            href="#activity_2"
                                                                            aria-expanded="true">Yesterday</a>
                                                                    </div>
                                                                    <div id="activity_2" class="collapse show">
                                                                        <div class="card-body">
                                                                            <ul
                                                                                class="activity-list list-group list-group-flush">
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-soft-danger avatar-rounded">
                                                                                                <span
                                                                                                    class="initial-wrap">W</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span class="text-dark">Winston
                                                                                                    Churchills</span>
                                                                                                created a note on UI
                                                                                                components task list</p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 2, 2021, 9:23 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/avatar2.jpg"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span class="text-dark">Morgan
                                                                                                    Fregman</span>
                                                                                                completed react
                                                                                                conversion of <a
                                                                                                    href="#"
                                                                                                    class="link-default"><u>components</u></a>
                                                                                            </p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 16, 2021, 4:54 PM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/avatar13.jpg"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span class="text-dark">Jimmy
                                                                                                    Carry</span>added
                                                                                                shared components to <a
                                                                                                    href="#"
                                                                                                    class="link-default"><u>basic
                                                                                                        structure</u></a>
                                                                                            </p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 10, 2021, 10:13 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-primary avatar-rounded">
                                                                                                <span
                                                                                                    class="initial-wrap">H</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span
                                                                                                    class="text-dark">Graysons</span>
                                                                                                commented on <a href="#"
                                                                                                    class="link-default"><u>basic
                                                                                                        structure</u></a>
                                                                                            </p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 10, 2021, 10:13 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/avatar7.jpg"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span class="text-dark">Charlie
                                                                                                    Chaplin</span> moved
                                                                                                components from all
                                                                                                modules to in progress
                                                                                            </p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 10, 2021, 10:13 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="media">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-soft-danger avatar-rounded">
                                                                                                <span
                                                                                                    class="initial-wrap">W</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <p><span class="text-dark">Winston
                                                                                                    Churchills</span>
                                                                                                created a note on UI
                                                                                                components task list</p>
                                                                                            <div
                                                                                                class="last-activity-time">
                                                                                                Sep 10, 2021, 10:13 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
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
                                    <div class="col-lg-9">
                                        <div class="righhtDashTodoLists">

                                            <div class="todo-toolbar dashtaskTolbar">

                                                <div class="dashtoolleft">
                                                    <select class="form-select form-select-sm select2">
                                                        <option selected="">Bulk actions</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <button class="btn btn-sm btn-light ms-2">Apply</button>
                                                    <select
                                                        class="d-xxl-inline-block d-none  form-select form-select-sm mx-2 select2">
                                                        <option selected="">Sort by date</option>
                                                        <option value="1">Sort By Time</option>
                                                        <option value="3">Sort By Priority</option>
                                                        <option value="4">Sort By Title</option>
                                                    </select>
                                                </div>

                                                <div class="dashTasktoolsRight">
                                                    <button
                                                        class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#AddHubEvent">
                                                        <iconify-icon icon="lets-icons:add-round">
                                                        </iconify-icon> Add New Task
                                                    </button>
                                                </div>

                                            </div>

                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-profile"
                                                    role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="collapse-simple">
                                                        <div class="card">

                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_1" aria-expanded="true"
                                                                    class="">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-today-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">Today</h5>
                                                                        <h6>1</h6>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_1" class="collapse show" style="">
                                                                <div class="card-body">
                                                                    <ul id="todo_list" class="advance-list">
                                                                        <li
                                                                            class="advance-list-item single-task-list active-todo">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo1">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo1"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span
                                                                                            class="todo-star marked"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Video
                                                                                            conference with Canada
                                                                                            Team</span>
                                                                                        <span
                                                                                            class="badge badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-primary me-3">Tomorrow</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo2">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo2"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Client
                                                                                            objective meeting</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-danger me-3">Yesterday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar9.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse-simple">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_2" aria-expanded="true">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-yesterday-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">Yesterday</h5>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_2" class="collapse show">
                                                                <div class="card-body">
                                                                    <ul id="todo_list_1" class="advance-list">
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo8">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo8"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Fix
                                                                                            tooltip word wrap/break
                                                                                            rules</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-danger me-3">4
                                                                                        Days ago</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar2.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo9">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo9"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Redesigning
                                                                                            the base model</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Urgent</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">2
                                                                                        Aug, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar13.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo10">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo10"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span
                                                                                            class="todo-star marked"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-gold badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Configure
                                                                                            security analysis
                                                                                            feature</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-orange badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Medium</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">8
                                                                                        Aug, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo11">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo11"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Remove
                                                                                            notifications panel from
                                                                                            inbox</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Urgent</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">24
                                                                                        Sep, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar15.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse-simple">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_3" aria-expanded="true">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-yesterday-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">15 July, 20</h5>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_3" class="collapse show">
                                                                <div class="card-body">
                                                                    <ul id="todo_list_2" class="advance-list">
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo12">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo12"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Send
                                                                                            an invite to join
                                                                                            project</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-warning badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Low</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-danger me-3">Yesterday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo13">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo13"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Connect
                                                                                            to software tools</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">Saturday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar10.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo14">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo14"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Speed
                                                                                            up project review with
                                                                                            planner</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">15
                                                                                        Oct, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar9.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-sm-12">
                                                            <div class="float-end text-end">
                                                                <ul
                                                                    class="pagination custom-pagination pagination-simple active-theme">
                                                                    <li
                                                                        class="dt-paging-button page-item previous disabled">
                                                                        <a href="#" class="page-link"><i
                                                                                class="ri-arrow-left-s-line"></i></a>
                                                                    </li>
                                                                    <li class="dt-paging-button page-item active"><a
                                                                            href="#" class="page-link">1</a></li>
                                                                    <li class="dt-paging-button page-item "><a href="#"
                                                                            class="page-link">2</a></li>
                                                                    <li class="dt-paging-button page-item "><a href="#"
                                                                            class="page-link">3</a></li>
                                                                    <li class="dt-paging-button page-item next"><a
                                                                            href="#" class="page-link"><i
                                                                                class="ri-arrow-right-s-line"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-home" role="tabpanel"
                                                    aria-labelledby="v-pills-home-tab">
                                                    <div class="collapse-simple">
                                                        <div class="card">

                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_1" aria-expanded="true"
                                                                    class="">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-today-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">Today</h5>
                                                                        <h6>1</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_1" class="collapse show" style="">
                                                                <div class="card-body">
                                                                    <ul id="todo_list" class="advance-list">
                                                                        <li
                                                                            class="advance-list-item single-task-list active-todo">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo1">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo1"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span
                                                                                            class="todo-star marked"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Video
                                                                                            conference with Canada
                                                                                            Team</span>
                                                                                        <span
                                                                                            class="badge badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-primary me-3">Tomorrow</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse-simple">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_2" aria-expanded="true">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-yesterday-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">Yesterday</h5>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_2" class="collapse show">
                                                                <div class="card-body">
                                                                    <ul id="todo_list_1" class="advance-list">
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo8">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo8"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Fix
                                                                                            tooltip word wrap/break
                                                                                            rules</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-danger me-3">4
                                                                                        Days ago</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar2.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo9">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo9"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Redesigning
                                                                                            the base model</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Urgent</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">2
                                                                                        Aug, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar13.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse-simple">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_3" aria-expanded="true">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-yesterday-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">15 July, 20</h5>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_3" class="collapse show">
                                                                <div class="card-body">
                                                                    <ul id="todo_list_2" class="advance-list">
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo12">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo12"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Send
                                                                                            an invite to join
                                                                                            project</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-warning badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Low</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-danger me-3">Yesterday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-sm-12">
                                                            <div class="float-end text-end">
                                                                <ul
                                                                    class="pagination custom-pagination pagination-simple active-theme">
                                                                    <li
                                                                        class="dt-paging-button page-item previous disabled">
                                                                        <a href="#" class="page-link"><i
                                                                                class="ri-arrow-left-s-line"></i></a>
                                                                    </li>
                                                                    <li class="dt-paging-button page-item active"><a
                                                                            href="#" class="page-link">1</a></li>
                                                                    <li class="dt-paging-button page-item "><a href="#"
                                                                            class="page-link">2</a></li>
                                                                    <li class="dt-paging-button page-item "><a href="#"
                                                                            class="page-link">3</a></li>
                                                                    <li class="dt-paging-button page-item next"><a
                                                                            href="#" class="page-link"><i
                                                                                class="ri-arrow-right-s-line"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                    aria-labelledby="v-pills-settings-tab">
                                                    <div class="collapse-simple">
                                                        <div class="card">

                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_1" aria-expanded="true"
                                                                    class="">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-today-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">Today</h5>
                                                                        <h6>1</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_1" class="collapse show" style="">
                                                                <div class="card-body">
                                                                    <ul id="todo_list" class="advance-list">
                                                                        <li
                                                                            class="advance-list-item single-task-list active-todo">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo1">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo1"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span
                                                                                            class="todo-star marked"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Video
                                                                                            conference with Canada
                                                                                            Team</span>
                                                                                        <span
                                                                                            class="badge badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-primary me-3">Tomorrow</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo2">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo2"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Client
                                                                                            objective meeting</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-danger me-3">Yesterday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar9.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo3">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo3"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Target
                                                                                            market trend analysis on the
                                                                                            go</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-primary me-3">Today</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo4">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo4"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span
                                                                                            class="todo-star marked"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-gold badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Send
                                                                                            revised proposal to Mr. Dow
                                                                                            Jones</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-warning badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Low</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">Saturday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar10.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>
                                                                                    <span
                                                                                        class="badge badge-orange ms-3 d-md-inline-block d-none">Project</span>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo5">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo5"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Set
                                                                                            up first call for
                                                                                            demo</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">Sunday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-primary avatar-rounded d-md-inline-block d-none">
                                                                                        <span
                                                                                            class="initial-wrap">H</span>
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo6">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo6"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span
                                                                                            class="todo-star marked"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Upgrade
                                                                                            dependency on
                                                                                            resouces</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-orange badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Medium</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">27
                                                                                        Nov, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar15.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo7">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo7"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Update
                                                                                            contribution guidelines and
                                                                                            licence</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-primary me-3">Today</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar15.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse-simple">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_2" aria-expanded="true">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-yesterday-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">Yesterday</h5>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_2" class="collapse show">
                                                                <div class="card-body">
                                                                    <ul id="todo_list_1" class="advance-list">
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo8">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo8"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Fix
                                                                                            tooltip word wrap/break
                                                                                            rules</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-danger me-3">4
                                                                                        Days ago</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar2.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo9">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo9"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Redesigning
                                                                                            the base model</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Urgent</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">2
                                                                                        Aug, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar13.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo10">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo10"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span
                                                                                            class="todo-star marked"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-gold badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Configure
                                                                                            security analysis
                                                                                            feature</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-orange badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Medium</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">8
                                                                                        Aug, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo11">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo11"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Remove
                                                                                            notifications panel from
                                                                                            inbox</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Urgent</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">24
                                                                                        Sep, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar15.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse-simple">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    href="#todo_collapse_3" aria-expanded="true">
                                                                    <div
                                                                        class="notes-header CmnTAskdate_header todo-yesterday-header">
                                                                        <span>
                                                                            <iconify-icon icon="solar:calendar-broken">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <h5 class="mb-0">15 July, 20</h5>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="todo_collapse_3" class="collapse show">
                                                                <div class="card-body">
                                                                    <ul id="todo_list_2" class="advance-list">
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo12">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo12"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-warning badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Send
                                                                                            an invite to join
                                                                                            project</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-warning badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>Low</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none text-danger me-3">Yesterday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar7.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo13">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo13"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Connect
                                                                                            to software tools</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">Saturday</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar10.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="advance-list-item single-task-list">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="form-check">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="customCheckTodo14">
                                                                                        <label class="form-check-label"
                                                                                            for="customCheckTodo14"></label>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="todo-star"><span
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
                                                                                                    class="feather feather-star">
                                                                                                    <polygon
                                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                                    </polygon>
                                                                                                </svg></span></span>
                                                                                        <span
                                                                                            class="badge badge-danger badge-indicator badge-indicator-xl"></span>
                                                                                        <span
                                                                                            class="todo-text text-dark text-truncate">Speed
                                                                                            up project review with
                                                                                            planner</span>
                                                                                        <span
                                                                                            class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                                    class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                                    <span
                                                                                        class="todo-time d-lg-inline-block d-none me-3">15
                                                                                        Oct, 2020</span>
                                                                                    <div
                                                                                        class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
                                                                                        <img src="dist/img/avatar9.jpg"
                                                                                            alt="user"
                                                                                            class="avatar-img">
                                                                                    </div>

                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
                                                                                            aria-expanded="false"
                                                                                            data-bs-toggle="dropdown"><span
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
                                                                                                        class="feather feather-more-vertical">
                                                                                                        <circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="5"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                        <circle cx="12"
                                                                                                            cy="19"
                                                                                                            r="1">
                                                                                                        </circle>
                                                                                                    </svg></span></span></button>
                                                                                        <div role="menu"
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item edit-task"
                                                                                                href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#EditTaskdah">Edit
                                                                                                Task</a>
                                                                                            <a class="dropdown-item view-task"
                                                                                                href="Task-details.php">View
                                                                                                Task</a>
                                                                                            <a class="dropdown-item delete-task"
                                                                                                href="#">Delete Task</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-sm-12">
                                                            <div class="float-end text-end">
                                                                <ul
                                                                    class="pagination custom-pagination pagination-simple active-theme">
                                                                    <li
                                                                        class="dt-paging-button page-item previous disabled">
                                                                        <a href="#" class="page-link"><i
                                                                                class="ri-arrow-left-s-line"></i></a>
                                                                    </li>
                                                                    <li class="dt-paging-button page-item active"><a
                                                                            href="#" class="page-link">1</a></li>
                                                                    <li class="dt-paging-button page-item "><a href="#"
                                                                            class="page-link">2</a></li>
                                                                    <li class="dt-paging-button page-item "><a href="#"
                                                                            class="page-link">3</a></li>
                                                                    <li class="dt-paging-button page-item next"><a
                                                                            href="#" class="page-link"><i
                                                                                class="ri-arrow-right-s-line"></i></a>
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
					<div class="col-xxl-3 col-lg-4 col-md-5 mb-md-4 mb-3">

						<!-- <div class="card alertCard">
							<div class="card-header alertCodeHeader card-header-action">
								<h6> <i class="fa fa-circle text-danger-glow blink"></i> Alert Messages</h6>
								<div class="alertFilters">
								<div class="form-group">
																	<div id="reportrange" class=" text-truncate weekmonthFilter">
																	<iconify-icon icon="fontisto:date" class="dateclanderIco"></iconify-icon> <span>May 24, 2024 - May 30, 2024</span> <iconify-icon icon="ep:arrow-down-bold" class="arrowdownIco"></iconify-icon>
																	</div>
																</div>
							</div>
							</div>
							
							<div class="card-body text-center">

							

								<div class="alerttodoContainer">
									<ul id="todo_list" class="advance-list">

										<li class="advance-list-item single-task-list">
											<div class="alertmainCard">
												<div class="inneralertData">

													<div class="alertTextmsg_data">
														<div class="form-check">
															<input type="checkbox" class="form-check-input"
																id="customCheckTodo1">
															<label class="form-check-label"
																for="customCheckTodo1"></label>
														</div>
														<span
															class="badge badge-warning badge-indicator badge-indicator-xl"></span>
														<span class="todo-text text-dark ">Target market trend analysis
															on the go</span>
													</div>

												</div>

											</div>
										</li>
										<li class="advance-list-item single-task-list">
											<div class="alertmainCard">
												<div class="inneralertData">

													<div class="alertTextmsg_data">
														<div class="form-check">
															<input type="checkbox" class="form-check-input"
																id="customCheckTodo1">
															<label class="form-check-label"
																for="customCheckTodo1"></label>
														</div>
														<span
															class="badge badge-warning badge-indicator badge-indicator-xl"></span>
														<span class="todo-text text-dark ">Send revised proposal to Mr.
															Dow Jones</span>
													</div>

												</div>

											</div>
										</li>
										<li class="advance-list-item single-task-list">
											<div class="alertmainCard">
												<div class="inneralertData">

													<div class="alertTextmsg_data">
														<div class="form-check">
															<input type="checkbox" class="form-check-input"
																id="customCheckTodo1">
															<label class="form-check-label"
																for="customCheckTodo1"></label>
														</div>
														<span
															class="badge badge-warning badge-indicator badge-indicator-xl"></span>
														<span class="todo-text text-dark ">Set up first call for
															demo</span>
													</div>

												</div>

											</div>
										</li>
										<li class="advance-list-item single-task-list">
											<div class="alertmainCard">
												<div class="inneralertData">

													<div class="alertTextmsg_data">
														<div class="form-check">
															<input type="checkbox" class="form-check-input"
																id="customCheckTodo1">
															<label class="form-check-label"
																for="customCheckTodo1"></label>
														</div>
														<span
															class="badge badge-warning badge-indicator badge-indicator-xl"></span>
														<span class="todo-text text-dark ">Upgrade dependency on
															resouces</span>
													</div>

												</div>

											</div>
										</li>
										<li class="advance-list-item single-task-list">
											<div class="alertmainCard">
												<div class="inneralertData">

													<div class="alertTextmsg_data">
														<div class="form-check">
															<input type="checkbox" class="form-check-input"
																id="customCheckTodo1">
															<label class="form-check-label"
																for="customCheckTodo1"></label>
														</div>
														<span
															class="badge badge-warning badge-indicator badge-indicator-xl"></span>
														<span class="todo-text text-dark ">Update contribution
															guidelines and licence</span>
													</div>

												</div>

											</div>
										</li>
									</ul>
								</div>

							</div>
						</div> -->

						<!-- <div class="card card-border mb-0 ">
							<div class="card-header card-header-action">
								<h6>Returning Customers</h6>

							</div>
							<div class="card-body text-center">

								<div class="d-inline-block mt-4">

									<div id="clock">
										<div class="number" style="top: 10px; left: 50%;">12</div>
										<div class="number" style="right: 10px; top: 50%;">3</div>
										<div class="number" style="bottom: -2%; left: 50%;">6</div>
										<div class="number" style="left: 10px; top: 50%;">9</div>
										<div class="number" style="top: 15%; left: 25%;">11</div>
										<div class="number" style="top: 30%; left: 12%;">10</div>
										<div class="number" style="bottom: 5%; left: 25%;">7</div>
										<div class="number" style="bottom: 22%; left: 10%;">8</div>
										<div class="number" style="top: 29%; right: 9%;">2</div>
										<div class="number" style="top: 14%; right: 23%;">1</div>
										<div class="number" style="bottom: 22%; right: 10%;">4</div>
										<div class="number" style="bottom: 5%; right: 25%;">5</div>
										<div class="clockcenterpoints">
											<div class="centercircle"></div>
											<div class="hand" id="hourHand"></div>
											<div class="hand" id="minuteHand"></div>
											<div class="hand" id="secondHand"></div>
										</div>
									</div>

									

									
							
								</div>
							</div>
						</div> -->

						
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- /Page Body -->
</div>

<?php include('footer.php') ?>

<!-- dashboard last login times script -->

<script>
	function updateClock() {
		var now = new Date();
		var hours = now.getHours() % 12;
		var minutes = now.getMinutes();
		var seconds = now.getSeconds();
		var hourAngle = (hours * 30) + (0.5 * minutes); // 30 degrees per hour, 0.5 degrees per minute
		var minuteAngle = (minutes * 6) + (0.1 * seconds); // 6 degrees per minute, 0.1 degrees per second
		var secondAngle = seconds * 6; // 6 degrees per second
		document.getElementById('hourHand').style.transform = `rotate(${hourAngle}deg)`;
		document.getElementById('minuteHand').style.transform = `rotate(${minuteAngle}deg)`;
		document.getElementById('secondHand').style.transform = `rotate(${secondAngle}deg)`;
		setTimeout(updateClock, 1000);
	}
	updateClock(); // Call the function to update the clock
</script>


<!-- todo add js start -->
<script>
    function addItem() {
        var inputValue = document.getElementById("todo-input").value;
        if (inputValue === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Enter a valid todo..!'
            });
            return;
        }
        // Creating items
        var container = document.createElement('div');
        container.classList.add('item' , 'advance-list-item' , 'single-task-list');
        var todoText = document.createElement('p');
        todoText.textContent = inputValue;
        var buttonsDiv = document.createElement('div');
        buttonsDiv.classList.add('buttons');
        // Delete button
        var deleteButton = document.createElement('button');
        deleteButton.classList.add('btn', 'btn-icon', 'btn-sm', 'badge',  'badge-sm', 'badge-soft-danger', 'delete-todo');   
        deleteButton.innerHTML = '<i class="ph-trash"></i>';
        deleteButton.addEventListener('click', function() {
            container.remove();
        });
        // Edit button
        var updateButton = document.createElement('button');
        updateButton.classList.add('btn', 'btn-icon', 'btn-sm', 'badge',  'badge-sm', 'badge-soft-success', 'edit-todo');
        updateButton.innerHTML = '<i class="ph-pencil"></i>';
        updateButton.addEventListener('click', function() {
            document.getElementById("todo-input").value = todoText.textContent;
            var btn = document.getElementById('add-button');
            btn.innerHTML = 'Update';
            btn.removeEventListener("click", addItem);
            btn.addEventListener('click', function updateItem() {
                todoText.textContent = document.getElementById("todo-input").value;
                document.getElementById('add-button').innerHTML = 'Add';
                document.getElementById("todo-input").value = '';
                btn.removeEventListener("click", updateItem);
                btn.addEventListener("click", addItem);
            });
        });
        // Appending buttons to div
        buttonsDiv.appendChild(deleteButton);
        buttonsDiv.appendChild(updateButton);
        // Appending items to container
        container.appendChild(todoText);
        container.appendChild(buttonsDiv);
        var listContainer = document.getElementById('list-container');
        listContainer.appendChild(container);
        // After adding task, removing the text content of the input
        document.getElementById("todo-input").value = '';
        // Add event listeners to the buttons of the newly added item
        deleteButton.addEventListener('click', function() {
            container.remove();
        });
        updateButton.addEventListener('click', function() {
            document.getElementById("todo-input").value = todoText.textContent;
            var btn = document.getElementById('add-button');
            btn.innerHTML = 'Update';
            btn.removeEventListener("click", addItem);
            btn.addEventListener('click', function updateItem() {
                todoText.textContent = document.getElementById("todo-input").value;
                document.getElementById('add-button').innerHTML = 'Add';
                document.getElementById("todo-input").value = '';
                btn.removeEventListener("click", updateItem);
                btn.addEventListener("click", addItem);
            });
        });
    }
    // Add event listeners to default added item buttons
    document.querySelectorAll('.delete-todo').forEach(item => {
        item.addEventListener('click', function() {
            item.closest('.item').remove();
        });
    });
    document.querySelectorAll('.edit-todo').forEach(item => {
        item.addEventListener('click', function() {
            var todoText = item.closest('.item').querySelector('p').textContent;
            document.getElementById("todo-input").value = todoText;
            var btn = document.getElementById('add-button');
            btn.innerHTML = 'Update';
            btn.removeEventListener("click", addItem);
            btn.addEventListener('click', function updateItem() {
                item.closest('.item').querySelector('p').textContent = document
                    .getElementById("todo-input").value;
                document.getElementById('add-button').innerHTML = 'Add';
                document.getElementById("todo-input").value = '';
                btn.removeEventListener("click", updateItem);
                btn.addEventListener("click", addItem);
            });
        });
    });
    document.getElementById('add-button').addEventListener('click', addItem);
</script>

<!-- todo add js end -->


<!-- last login time js start -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to fetch last login time from server or local storage
        function fetchLastLoginTime() {
            // Simulating fetching last login time from server
            // In real-world scenario, replace this with actual fetching logic
            return new Promise(function(resolve, reject) {
                // Simulated AJAX call
                setTimeout(function() {
                    // Sample last login time (you should replace this with actual fetching logic)
                    var currentTime = new Date();
                    var lastLoginTime = formatTime(currentTime);
                    resolve(lastLoginTime);
                }, 1000); // Simulating delay of 1 second
            });
        }
        // Format time
        function formatTime(date) {
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            return `${hours}:${minutes}:${seconds}`;
        }
        // Update last login time
        function updateLastLoginTime() {
            fetchLastLoginTime().then(function(lastLoginTime) {
                document.getElementById("lastLogin").innerText = lastLoginTime;
            });
        }
        // Initial update
        updateLastLoginTime();
        // Update last login time every 1 second
        setInterval(updateLastLoginTime, 1000); // Update every 1 second
    });
</script>
<!-- end -->