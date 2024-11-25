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
		<div class="todoapp-wrap todoapp-info-active">
			
			<div class="todoapp-content">
				<div class="todoapp-detail-wrap">
					<header class="todo-header">
						<div class="d-flex align-items-center">
							<a class="todoapp-title  link-dark">
								<h1>All Tasks</h1>
							</a>

						</div>
						<div class="todo-options-wrap">
							<a id="refreshButton"
								class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
								href="#" data-bs-toggle="tooltip" data-placement="top" title=""
								data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
											data-feather="refresh-cw"></i></span></span></a>
							<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable"
								href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
								data-bs-original-title="Collapse">
								<span class="icon">
									<span class="feather-icon"><i data-feather="chevron-up"></i></span>
									<span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
								</span>
							</a>
						</div>

						<div class="sustomdividerLedtArrow"></div>
					</header>
					<div class="todo-body">
						<div data-simplebar class="nicescroll-bar">
							<div class="container">
								<div class="todo-toolbar">
									<div class="todoDataFilter_options">
									<select name="department" id="department_select" class="form-control">
    <option value="" selected disabled>Select a Department</option>
    <option value="HR">Human Resources</option>
    <option value="Finance">Finance</option>
    <option value="IT">Information Technology</option>
    <option value="Marketing">Marketing</option>
    <option value="Sales">Sales</option>
    <option value="Operations">Operations</option>
    <option value="Legal">Legal</option>
    <option value="Customer Support">Customer Support</option>
</select>

<select name="user" id="DepartmentUser_select" class="form-control">
    <option value="" selected disabled>Select a User</option>
    <option value="user1">John Doe</option>
    <option value="user2">Jane Smith</option>
    <option value="user3">Michael Johnson</option>
    <option value="user4">Emily Davis</option>
    <option value="user5">Chris Brown</option>
    <option value="user6">Jessica Williams</option>
    <option value="user7">David Miller</option>
    <option value="user8">Sophia Wilson</option>
</select>

										<button class="btn btn-sm btn-light ms-2">Apply</button>
									</div>
									
								</div>
								<div class="collapse-simple ">
									<div class="card">
										<div class="card-header">
											<a role="button" data-bs-toggle="collapse" href="#todo_collapse_1"
												aria-expanded="true">
												<h5 class="mb-0">Recently Assigned</h5>
											</a>
										</div>
										<div id="todo_collapse_1" class="collapse show">
											<div class="card-body">
												<ul id="todo_list" class="advance-list">
													<li class="advance-list-item single-task-list active-todo">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo1">
																	<label class="form-check-label"
																		for="customCheckTodo1"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Video
																		conference with Canada Team</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none text-primary me-3">Tomorrow</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar7.jpg" alt="user"
																		class="avatar-img">
																</div>
															
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo2">
																	<label class="form-check-label"
																		for="customCheckTodo2"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Client
																		objective meeting</span>
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none text-danger me-3">Yesterday</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar9.jpg" alt="user"
																		class="avatar-img">
																</div>
																
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo3">
																	<label class="form-check-label"
																		for="customCheckTodo3"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Target
																		market trend analysis on the go</span>
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none text-primary me-3">Today</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar7.jpg" alt="user"
																		class="avatar-img">
																</div>
																
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo4">
																	<label class="form-check-label"
																		for="customCheckTodo4"></label>
																</div>
																<div>

																	<span class="todo-text text-dark text-truncate">Send
																		revised proposal to Mr. Dow Jones</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none me-3">Saturday</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar10.jpg" alt="user"
																		class="avatar-img">
																</div>
																
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo5">
																	<label class="form-check-label"
																		for="customCheckTodo5"></label>
																</div>
																<div>

																	<span class="todo-text text-dark text-truncate">Set
																		up first call for demo</span>
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none me-3">Sunday</span>
																<div
																	class="avatar avatar-xs avatar-primary avatar-rounded d-md-inline-block d-none">
																	<span class="initial-wrap">H</span>
																</div>
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo6">
																	<label class="form-check-label"
																		for="customCheckTodo6"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Upgrade
																		dependency on resouces</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span class="todo-time d-lg-inline-block d-none me-3">27
																	Nov, 2020</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar15.jpg" alt="user"
																		class="avatar-img">
																</div>
															
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo7">
																	<label class="form-check-label"
																		for="customCheckTodo7"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Update
																		contribution guidelines and licence</span>
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none text-primary me-3">Today</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar15.jpg" alt="user"
																		class="avatar-img">
																</div>
																
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
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
								<div class="collapse-simple ">
									<div class="card">
										<div class="card-header">
											<a role="button" data-bs-toggle="collapse" href="#todo_collapse_2"
												aria-expanded="true">
												<h5 class="mb-0">Yesterday</h5>
											</a>
										</div>
										<div id="todo_collapse_2" class="collapse show">
											<div class="card-body">
												<ul id="todo_list_1" class="advance-list">
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo8">
																	<label class="form-check-label"
																		for="customCheckTodo8"></label>
																</div>
																<div>

																	<span class="todo-text text-dark text-truncate">Fix
																		tooltip word wrap/break rules</span>
																
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none text-danger me-3">4
																	Days ago</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar2.jpg" alt="user"
																		class="avatar-img">
																</div>
																
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo9">
																	<label class="form-check-label"
																		for="customCheckTodo9"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Redesigning
																		the base model</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span class="todo-time d-lg-inline-block d-none me-3">2
																	Aug, 2020</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar13.jpg" alt="user"
																		class="avatar-img">
																</div>
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo10">
																	<label class="form-check-label"
																		for="customCheckTodo10"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Configure
																		security analysis feature</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span class="todo-time d-lg-inline-block d-none me-3">8
																	Aug, 2020</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar7.jpg" alt="user"
																		class="avatar-img">
																</div>
															
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo11">
																	<label class="form-check-label"
																		for="customCheckTodo11"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Remove
																		notifications panel from inbox</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span class="todo-time d-lg-inline-block d-none me-3">24
																	Sep, 2020</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar15.jpg" alt="user"
																		class="avatar-img">
																</div>
																
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
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
								<div class="collapse-simple ">
									<div class="card">
										<div class="card-header">
											<a role="button" data-bs-toggle="collapse" href="#todo_collapse_3"
												aria-expanded="true">
												<h5 class="mb-0">15 July, 20</h5>
											</a>
										</div>
										<div id="todo_collapse_3" class="collapse show">
											<div class="card-body">
												<ul id="todo_list_2" class="advance-list">
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo12">
																	<label class="form-check-label"
																		for="customCheckTodo12"></label>
																</div>
																<div>

																	<span class="todo-text text-dark text-truncate">Send
																		an invite to join project</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none text-danger me-3">Yesterday</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar7.jpg" alt="user"
																		class="avatar-img">
																</div>
																
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo13">
																	<label class="form-check-label"
																		for="customCheckTodo13"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Connect
																		to software tools</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span
																	class="todo-time d-lg-inline-block d-none me-3">Saturday</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar10.jpg" alt="user"
																		class="avatar-img">
																</div>
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
																		<a class="dropdown-item delete-task"
																			href="#">Delete Task</a>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="advance-list-item single-task-list">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input"
																		id="customCheckTodo14">
																	<label class="form-check-label"
																		for="customCheckTodo14"></label>
																</div>
																<div>

																	<span
																		class="todo-text text-dark text-truncate">Speed
																		up project review with planner</span>
																	
																</div>
															</div>
															<div class="d-flex flex-shrink-0 align-items-center ms-3">
																<span class="todo-time d-lg-inline-block d-none me-3">15
																	Oct, 2020</span>
																<div
																	class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																	<img src="dist/img/avatar9.jpg" alt="user"
																		class="avatar-img">
																</div>
															
																<div class="dropdown">
																	<button
																		class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																		aria-expanded="false"
																		data-bs-toggle="dropdown"><span
																			class="icon"><span class="feather-icon"><i
																					data-feather="more-vertical"></i></span></span></button>
																	<div role="menu"
																		class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item edit-task showonMobileEdit" href="#">Change Status</a>
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
											<ul class="pagination custom-pagination pagination-simple active-theme">
												<li class="dt-paging-button page-item previous disabled"><a href="#"
														class="page-link"><i class="ri-arrow-left-s-line"></i></a></li>
												<li class="dt-paging-button page-item active"><a href="#"
														class="page-link">1</a></li>
												<li class="dt-paging-button page-item "><a href="#"
														class="page-link">2</a></li>
												<li class="dt-paging-button page-item "><a href="#"
														class="page-link">3</a></li>
												<li class="dt-paging-button page-item next"><a href="#"
														class="page-link"><i class="ri-arrow-right-s-line"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="task-info">
						<div data-simplebar class="nicescroll-bar">
							<header class="task-header">
								<div class="TODO_statusContainer">

									<div class="manage_todoStatus">
										<h2>Manage Status</h2>
									</div>
									<div class="todoStatus_change_container">

										<select name="" id="" class="form-control select2">
											<option value="" selected readonly>
												Select Status</option>
											<option value="Complete">Complete</option>
											<option value="In Progress">In Progress</option>
										</select>
									</div>
									<button
										class="btn btn-icon btn-light btn-rounded d-lg-none d-lg-inline-block ms-1"><span><span
												class="icon"><span class="feather-icon"><i
														data-feather="link"></i></span></span></span></button>

														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover close-task-info" href="#"><span class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></span></a>
								</div>

							</header>
							<div class="task-detail-body">
								<ul class="nav nav-justified nav-light nav-tabs nav-segmented-tabs active-theme mt-2">

									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#tab_comments">
											<span class="nav-link-text badge-on-text">Comments</span>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#tab_activity">
											<span class="nav-link-text badge-on-text">Activity</span>
										</a>
									</li>
								</ul>
								<div class="tab-content mt-3">

									<div class="tab-pane fade show active" id="tab_comments">

										<div class="comment-block">
											<form>
												<div class="form-group">
													<label class="form-label">Add Comment</label>
													<textarea class="form-control" rows="5"></textarea>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-primary">Send</button>

												</div>
											</form>
										</div>
									</div>

									<div class="tab-pane fade" id="tab_activity">
										<div class="mt-3 mb-2">
											<div class="title title-lg mb-0"><span>Latest activity</span></div>
										</div>
										<div class="collapse-simple">
											<div class="card">
												<div class="card-header">
													<a role="button" data-bs-toggle="collapse" href="#activity_1"
														aria-expanded="true">Today</a>
												</div>
												<div id="activity_1" class="collapse show">
													<div class="card-body">
														<ul class="activity-list list-group list-group-flush">
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div
																			class="avatar avatar-xs avatar-primary avatar-rounded">
																			<span class="initial-wrap">H</span>
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Hencework</span> on
																			Documentation link is working now </p>
																		<div class="last-activity-time">Oct 15, 2021,
																			12:34 PM</div>
																	</div>
																</div>
															</li>
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/avatar2.jpg" alt="user"
																				class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Morgan Fregman</span>
																			completed react conversion of </p>
																		<div class="last-activity-time">Sep 16, 2021,
																			4:54 PM</div>
																	</div>
																</div>
															</li>
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/avatar13.jpg" alt="user"
																				class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Jimmy
																				Carry</span>completed side bar menu on
																		</p>
																		<div class="last-activity-time">Sep 10, 2021,
																			10:13 AM</div>
																	</div>
																</div>
															</li>
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/avatar7.jpg" alt="user"
																				class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Charlie
																				Chaplin</span> deleted empty cards on
																		</p>
																		<div class="last-activity-time">Sep 10, 2021,
																			10:13 AM</div>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a role="button" data-bs-toggle="collapse" href="#activity_2"
														aria-expanded="true">Yesterday</a>
												</div>
												<div id="activity_2" class="collapse show">
													<div class="card-body">
														<ul class="activity-list list-group list-group-flush">
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div
																			class="avatar avatar-xs avatar-soft-danger avatar-rounded">
																			<span class="initial-wrap">W</span>
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Winston
																				Churchills</span> created a note on UI
																			components task list</p>
																		<div class="last-activity-time">Sep 2, 2021,
																			9:23 AM</div>
																	</div>
																</div>
															</li>
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/avatar2.jpg" alt="user"
																				class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Morgan Fregman</span>
																			completed react conversion of</p>
																		<div class="last-activity-time">Sep 16, 2021,
																			4:54 PM</div>
																	</div>
																</div>
															</li>
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/avatar13.jpg" alt="user"
																				class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Jimmy
																				Carry</span>added shared components to
																		</p>
																		<div class="last-activity-time">Sep 10, 2021,
																			10:13 AM</div>
																	</div>
																</div>
															</li>
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div
																			class="avatar avatar-xs avatar-primary avatar-rounded">
																			<span class="initial-wrap">H</span>
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Hencework</span>
																			commented on </p>
																		<div class="last-activity-time">Sep 10, 2021,
																			10:13 AM</div>
																	</div>
																</div>
															</li>
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/avatar7.jpg" alt="user"
																				class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Charlie
																				Chaplin</span> moved components from all
																			modules to in progress</p>
																		<div class="last-activity-time">Sep 10, 2021,
																			10:13 AM</div>
																	</div>
																</div>
															</li>
															<li class="list-group-item">
																<div class="media">
																	<div class="media-head">
																		<div
																			class="avatar avatar-xs avatar-soft-danger avatar-rounded">
																			<span class="initial-wrap">W</span>
																		</div>
																	</div>
																	<div class="media-body">
																		<p><span class="text-dark">Winston
																				Churchills</span> created a note on UI
																			components task list</p>
																		<div class="last-activity-time">Sep 10, 2021,
																			10:13 AM</div>
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
				<!-- Edit Info -->
				<div id="add_new_task" class="modal fade add-new-contact" tabindex="-1" role="dialog"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
								<h5 class="mb-4">Add New Task</h5>
								<form>
									<div class="title title-xs title-wth-divider text-primary text-uppercase mt-1 mb-4">
										<span>Basic Info</span></div>
									<div class="row gx-3">
										<div class="col-sm-8">
											<div class="form-group">
												<label class="form-label">Name</label>
												<input class="form-control" type="text" />
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="form-label">Code</label>
												<input class="form-control" type="text" />
											</div>
										</div>
									</div>
									<div class="row gx-3">
										<div class="col-md-12">
											<div class="form-group">
												<div class="form-label-group">
													<label class="form-label">Note/Description</label>
													<small class="text-muted">200</small>
												</div>
												<textarea class="form-control" rows="3"></textarea>
											</div>
										</div>
									</div>
									<div class="row gx-3">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="form-label">Start Date</label>
												<input class="form-control" name="single-date-pick" type="text" />
												<div class="form-check form-check-sm mt-2">
													<input type="checkbox" class="form-check-input" checked="">
													<label class="form-check-label">Mark as milestone</label>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="form-label">Start Time</label>
												<input class="form-control input-single-timepicker"
													name="input-timepicker" type="text" />
											</div>
										</div>
									</div>
									<div class="row gx-3">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="form-label">End Date</label>
												<input class="form-control" name="single-date-pick" type="text" />
												<div class="form-check form-check-sm mt-2">
													<input type="checkbox" class="form-check-input" checked="">
													<label class="form-check-label">Mark as milestone</label>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="form-label">End Time</label>
												<input class="form-control input-single-timepicker" type="text" />
											</div>
										</div>
									</div>
									<div class="row gx-3">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="form-label">Category</label>
												<select class="form-control custom-select">
													<option selected="">Project</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="form-label">Status</label>
												<select class="form-control custom-select">
													<option selected="">To-Do</option>
													<option value="1">On Hold</option>
													<option value="1">In Progress</option>
													<option value="2">Done</option>
													<option value="3">Pending</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row gx-3">
										<div class="col-sm-12">
											<div class="form-inline">
												<div class="form-group">
													<label class="form-label">Set priority:</label>
													<div class="form-check form-check-inline ms-2">
														<div class="custom-control custom-radio radio-primary">
															<input type="radio" id="customRadioc2" name="customRadioc2"
																class="form-check-input">
															<label class="form-check-label"
																for="customRadioc2">High</label>
														</div>
													</div>
													<div class="form-check form-check-inline">
														<div class="custom-control custom-radio radio-primary">
															<input type="radio" id="customRadioc3" name="customRadioc2"
																class="form-check-input">
															<label class="form-check-label"
																for="customRadioc3">Medium</label>
														</div>
													</div>
													<div class="form-check form-check-inline">
														<div class="custom-control custom-radio radio-primary">
															<input type="radio" id="customRadioc4" name="customRadioc2"
																class="form-check-input">
															<label class="form-check-label"
																for="customRadioc4">Low</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
										<span>Assign to</span></div>
									<div class="repeater">
										<div data-repeater-list="category-group">
											<div class="d-flex">
												<div class="row gx-3 flex-1">
													<div class="col-sm-6 form-group mb-0">
														<label class="form-label">Add Person</label>
													</div>
													<div class="col-sm-6 form-group mb-0">
														<label class="form-label">Role</label>
													</div>
												</div>
												<a href="#" class="btn btn-xs btn-icon btn-rounded btn-light mb-2"
													data-repeater-create data-bs-toggle="tooltip"
													data-bs-placement="top" title=""
													data-bs-original-title="Add Person"><span class="icon"><span
															class="feather-icon"><i
																data-feather="plus"></i></span></span></a>
											</div>
											<div class="d-flex" data-repeater-item>
												<div class="row gx-3 flex-1">
													<div class="col-sm-6 form-group">
														<input class="form-control" placeholder="--" type="text" />
													</div>
													<div class="col-sm-6 form-group">
														<input class="form-control" placeholder="--" type="text" />
													</div>
												</div>
												<a href="#" class="btn btn-xs btn-icon btn-rounded btn-light ms-2 mt-1"
													data-repeater-delete><span class="icon"><i
															class="ri-delete-bin-6-line"></i></span></a>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer align-items-center">
								<button type="button" class="btn btn-secondary">Discard</button>
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Info -->
			</div>
		</div>
	</div>
	<!-- /Page Body -->
</div>

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