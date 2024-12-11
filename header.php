<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Graysons Properties</title>
	<meta name="description" content="" />

	<!-- font awesome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
		integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />



	<!-- Favicon -->
	<link rel="shortcut icon" href="dist/img/newimages/favicon.jpg">
	<link rel="icon" href="dist/img/newimages/favicon.jpg" type="image/x-icon">

	<!-- Daterangepicker CSS -->
	<link href="vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

	<!-- Sweetalert2 CSS -->
	<link href="vendors/%40sweetalert2/theme-bootstrap-4/bootstrap-4.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="dist/css/icons.min.css">

	<!-- Bootstrap Dropify CSS -->
	<link href="vendors/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css" />

	<!-- select2 CSS -->
	<link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

	<!-- Data Table CSS -->
	<link href="vendors/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
	<link href="vendors/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
		type="text/css" />
	<link rel="stylesheet" href="dist/css/custom.css">
	<!-- CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	<link href="dist/css/custom-ank.css" rel="stylesheet" type="text/css">


	<style>
		/* Loader styles */
		.loader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 30000;
		}

		.loader.light-loader {
			background-color: #ffffffd4;
			color: #fff;
		}

		.loader.dark-loader {
			background-color: #000000d6;
			color: #fff;
		}

		/* Example loader animation */
		.loader div {}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		.loader svg {
			width: 3.25em;
			transform-origin: center;
			animation: rotate4 2s linear infinite;
		}

		.loader circle {
			fill: none;
			stroke: hsl(214, 97%, 59%);
			stroke-width: 2;
			stroke-dasharray: 1, 200;
			stroke-dashoffset: 0;
			stroke-linecap: round;
			animation: dash4 1.5s ease-in-out infinite;
		}

		@keyframes rotate4 {
			100% {
				transform: rotate(360deg);
			}
		}

		@keyframes dash4 {
			0% {
				stroke-dasharray: 1, 200;
				stroke-dashoffset: 0;
			}

			50% {
				stroke-dasharray: 90, 200;
				stroke-dashoffset: -35px;
			}

			100% {
				stroke-dashoffset: -125px;
			}
		}
	</style>

	<!-- light and dark theme loader js start -->
	<script>
		// Immediately apply the stored theme to the body class before the page loads
		(function() {
			const storedTheme = localStorage.getItem('theme');
			if (storedTheme === 'dark') {
				document.documentElement.classList.add('dark-theme');
			} else {
				document.documentElement.classList.add('light-theme');
			}
		})();
		// Function to show the appropriate loader immediately
		const showLoader = () => {
			const storedTheme = localStorage.getItem('theme');
			const lightLoader = document.getElementById('light-loader');
			const darkLoader = document.getElementById('dark-loader');
			if (storedTheme === 'dark') {
				darkLoader.style.display = 'flex';
			} else {
				lightLoader.style.display = 'flex';
			}
		};
		// Toggle theme function
		const toggleTheme = () => {
			const themeToggle = document.querySelector('.switch input[type="checkbox"]');
			const lightText = document.getElementById('light-text');
			const darkText = document.getElementById('dark-text');
			if (themeToggle.checked) {
				document.documentElement.classList.remove('light-theme');
				document.documentElement.classList.add('dark-theme');
				localStorage.setItem('theme', 'dark'); // Store the theme preference
				lightText.style.color = 'var(--text-color)';
				darkText.style.color = 'var(--background-color)';
			} else {
				document.documentElement.classList.remove('dark-theme');
				document.documentElement.classList.add('light-theme');
				localStorage.setItem('theme', 'light'); // Store the theme preference
				lightText.style.color = 'var(--background-color)';
				darkText.style.color = 'var(--text-color)';
			}
		};
		// Show loader on page load
		window.onload = () => {
			showLoader();
			const storedTheme = localStorage.getItem('theme');
			const themeToggle = document.querySelector('.switch input[type="checkbox"]');
			if (storedTheme === 'dark') {
				themeToggle.checked = true;
			} else {
				themeToggle.checked = false;
			}
			// Simulate page load
			setTimeout(() => {
				document.getElementById('light-loader').style.display = 'none';
				document.getElementById('dark-loader').style.display = 'none';
			}, 2000); // Adjust this timeout to match your actual load time
		};
	</script>
	<!-- light and dark theme loader js end -->

</head>

<body class="light-theme">

	<!-- Loaders -->
	<div id="light-loader" class="loader light-loader" style="display: none;">
		<div><svg viewBox="25 25 50 50">
				<circle r="20" cy="50" cx="50"></circle>
			</svg></div>
	</div>
	<div id="dark-loader" class="loader dark-loader" style="display: none;">
		<div><svg viewBox="25 25 50 50">
				<circle r="20" cy="50" cx="50"></circle>
			</svg></div>
	</div>

	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="collapsed" data-menu="light" data-footer="simple"
		data-hover="active">
		<!-- Top Navbar -->
		<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
			<div class="container-fluid">
				<!-- Start Nav -->
				<div class="nav-start-wrap">
					<button
						class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span
							class="icon"><span class="feather-icon"><i
									data-feather="align-left"></i></span></span></button>

					<!-- Search -->
					<form class="dropdown navbar-search">
						<div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation
							data-bs-auto-close="outside">
							<a href="javascript:void(0);"
								class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span
									class="icon"><span class="feather-icon"><i
											data-feather="search"></i></span></span></a>
							<div class="input-group d-xl-flex d-none">
								<span class="input-affix-wrapper input-search affix-border">
									<input type="text" class="form-control  bg-transparent"
										data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
									<span class="input-suffix"><span>/</span>
										<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
										<span class="spinner-border spinner-border-sm input-loader text-primary"
											role="status">
											<span class="sr-only">Loading...</span>
										</span>
									</span>
								</span>
							</div>
						</div>
						<div class="dropdown-menu p-0">
							<!-- Mobile Search -->
							<div class="dropdown-item d-xl-none bg-transparent">
								<div class="input-group mobile-search">
									<span class="input-affix-wrapper input-search">
										<input type="text" class="form-control" placeholder="Search..."
											aria-label="Search">
										<span class="input-suffix">
											<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
											<span class="spinner-border spinner-border-sm input-loader text-primary"
												role="status">
												<span class="sr-only">Loading...</span>
											</span>
										</span>
									</span>
								</div>
							</div>
							<!--/ Mobile Search -->
							<div data-simplebar class="dropdown-body p-2">
								<h6 class="dropdown-header">Recent Search
								</h6>
								<div class="dropdown-item bg-transparent">
									<a href="javascript:void(0);"
										class="badge badge-pill badge-soft-secondary">Graysons</a>
								</div>
								<div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Help
								</h6>

								<div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Users
								</h6>
								<a href="javascript:void(0);" class="dropdown-item">
									<div class="media align-items-center">
										<div class="media-head me-2">
											<div class="avatar avatar-xs avatar-rounded">
												<img src="dist/img/newimages/users/userdummy.png" alt="user"
													class="avatar-img">
											</div>
										</div>
										<div class="media-body">
											Ritesh
										</div>
									</div>
								</a>
								<a href="javascript:void(0);" class="dropdown-item">
									<div class="media align-items-center">
										<div class="media-head me-2">
											<div class="avatar avatar-xs avatar-rounded">
												<img src="dist/img/newimages/users/userdummy.png" alt="user"
													class="avatar-img">
											</div>
										</div>
										<div class="media-body">
											Rohit
										</div>
									</div>
								</a>
								<a href="javascript:void(0);" class="dropdown-item">
									<div class="media align-items-center">
										<div class="media-head me-2">
											<div class="avatar avatar-xs avatar-rounded">
												<img src="dist/img/newimages/users/userdummy.png" alt="user"
													class="avatar-img">
											</div>
										</div>
										<div class="media-body">
											Avi
										</div>
									</div>
								</a>
							</div>
							<div class="dropdown-footer d-xl-flex d-none"><a href="javascript:void(0);"><u>Search
										all</u></a></div>
						</div>
					</form>
					<!-- /Search -->
				</div>
				<!-- /Start Nav -->

				<!-- End Nav -->
				<div class="nav-end-wrap">
					<ul class="navbar-nav flex-row">

						<!-- Switch Toggle -->

						<label class="switch themeswitch">
							<span id="light-text" class="modetextWrap">Light</span>
							<input type="checkbox" onchange="toggleTheme()">
							<span class="slider round"></span>
							<span id="dark-text" class="modetextWrap">Dark</span>
						</label>

						<!-- <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
      Theme
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <li><a class="dropdown-item" href="#" onclick="setTheme('light')">Light Theme</a></li>
      <li><a class="dropdown-item" href="#" onclick="setTheme('dark')">Dark Theme</a></li>
    </ul>
  </div> -->

						<li class="nav-item">
							<div class="dropdown dropdown-notifications">
								<a href="javascript:void(0);"
									class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret"
									data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true"
									aria-expanded="false"><span class="icon"><span class="position-relative"><span
												class="feather-icon"><i data-feather="bell"></i></span><span
												class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<h6 class="dropdown-header px-4 fs-6">Notifications<a href="javascript:void(0);"
											class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span
												class="icon"><span class="feather-icon"><i
														data-feather="settings"></i></span></span></a>
									</h6>
									<div data-simplebar class="dropdown-body  p-2">
										<a href="javascript:void(0);" class="dropdown-item">
											<div class="media">
												<div class="media-head">
													<div class="avatar avatar-rounded avatar-sm">
														<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="notifications-text">Morgan Freeman accepted your
															invitation to join the team</div>
														<div class="notifications-info">
															<span class="badge badge-soft-success">Collaboration</span>
															<div class="notifications-time">Today, 10:14 PM</div>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											<div class="media">
												<div class="media-head">
													<div
														class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
														<span class="initial-wrap">
															<span class="feather-icon"><i
																	data-feather="inbox"></i></span>
														</span>
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="notifications-text">New message received from Alan
															Rickman</div>
														<div class="notifications-info">
															<div class="notifications-time">Today, 7:51 AM</div>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											<div class="media">
												<div class="media-head">
													<div
														class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
														<span class="initial-wrap">
															<span class="feather-icon"><i
																	data-feather="clock"></i></span>
														</span>
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="notifications-text">You have a follow up with
															Graysons Head on Friday, Dec 19 at 9:30 am</div>
														<div class="notifications-info">
															<div class="notifications-time">Yesterday, 9:25 PM</div>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											<div class="media">
												<div class="media-head">
													<div class="avatar avatar-sm avatar-rounded">
														<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="notifications-text">Application of Sarah Williams is
															waiting for your approval</div>
														<div class="notifications-info">
															<div class="notifications-time">Today 10:14 PM</div>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											<div class="media">
												<div class="media-head">
													<div class="avatar avatar-sm avatar-rounded">
														<img src="dist/img/avatar10.jpg" alt="user" class="avatar-img">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="notifications-text">Winston Churchil shared a
															document with you</div>
														<div class="notifications-info">
															<span class="badge badge-soft-violet">File Manager</span>
															<div class="notifications-time">2 Oct, 2021</div>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											<div class="media">
												<div class="media-head">
													<div
														class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
														<span class="initial-wrap">
															<span class="feather-icon"><i
																	data-feather="calendar"></i></span>
														</span>
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="notifications-text">Last 2 days left for the project
															to be completed</div>
														<div class="notifications-info">
															<span class="badge badge-soft-orange">Updates</span>
															<div class="notifications-time">14 Sep, 2021</div>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="dropdown-footer"><a href="javascript:void(0);"><u>View all
												notifications</u></a></div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown ps-2">
								<a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static"
									data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside"
									aria-expanded="false">
									<div class="avatar avatar-rounded avatar-xs">
										<img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="p-2">
										<div class="media">
											<div class="media-head me-2">
												<div class="avatar avatar-primary avatar-sm avatar-rounded">
													<span class="initial-wrap">GP</span>
												</div>
											</div>
											<div class="media-body">
												<div class="dropdown">
													<a href="javascript:void(0);"
														class="d-block dropdown-toggle link-dark fw-medium"
														data-bs-toggle="dropdown" data-dropdown-animation
														data-bs-auto-close="inside">Graysons</a>
													<div class="dropdown-menu dropdown-menu-end">
														<div class="p-2">
															<div class="media align-items-center active-user mb-3">
																<div class="media-head me-2">
																	<div
																		class="avatar avatar-primary avatar-xs avatar-rounded">
																		<span class="initial-wrap">GP</span>
																	</div>
																</div>
																<div class="media-body">
																	<a href="javascript:void(0);"
																		class="d-flex align-items-center link-dark">Graysons
																		<i
																			class="ri-checkbox-circle-fill fs-7 text-primary ms-1"></i></a>
																	<a href="javascript:void(0);"
																		class="d-block fs-8 link-secondary"><u>Manage
																			your account</u></a>
																</div>
															</div>

														</div>
													</div>
												</div>
												<div class="fs-7">contact@Graysonsproperties.com</div>
												<a href="login.php"
													class="d-block fs-8 link-secondary"><u>Sign Out</u></a>
											</div>
										</div>
									</div>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="javascript:void(0);">Profile</a>

									<!-- <div class="dropdown-divider"></div>
									<a class="dropdown-item" href="javascript:void(0);">Logout</a> -->

									<!-- <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i
												data-feather="settings"></i></span><span>Settings</span></a> -->

								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- /End Nav -->
			</div>
		</nav>
		<!-- /Top Navbar -->

		<!-- Vertical Nav -->
		<div class="hk-menu">
			<!-- Brand -->
			<div class="menu-header">
				<span>
					<a class="navbar-brand" href="index.php">
						<img class="brand-img img-fluid iconsmallside lightModesmIcon"
							src="dist/img/newimages/iconsmall.png" alt="brand" />
						<img class="brand-img img-fluid iconsmallsideDarkMode"
							src="dist/img/newimages/iconsmall-darkmode.png" alt="brand" />
						<img class="brand-img mainsidebarlogo img-fluid logoLightMode"
							src="dist/img/newimages/logo-dark.png" alt="brand" />
						<img class="brand-img mainsidebarlogo img-fluid logodarkmode"
							src="dist/img/newimages/logo-darkmode.png" alt="brand" />
					</a>
					<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
						<span class="icon">
							<span class="svg-icon fs-5">
								<svg xmlns="http://www.w3.org/2000/svg"
									class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24"
									viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
									stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<line x1="10" y1="12" x2="20" y2="12"></line>
									<line x1="10" y1="12" x2="14" y2="16"></line>
									<line x1="10" y1="12" x2="14" y2="8"></line>
									<line x1="4" y1="4" x2="4" y2="20"></line>
								</svg>
							</span>
						</span>
					</button>
				</span>
			</div>
			<!-- /Brand -->

			<!-- Main Menu -->
			<div data-simplebar class="nicescroll-bar">
				<div class="menu-content-wrap">
					<div class="menu-group">
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link dashmainSidemenu" href="index.php">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-template" width="24" height="24"
												viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
												stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<rect x="4" y="4" width="16" height="4" rx="1" />
												<rect x="4" y="12" width="6" height="8" rx="1" />
												<line x1="14" y1="12" x2="20" y2="12" />
												<line x1="14" y1="16" x2="20" y2="16" />
												<line x1="14" y1="20" x2="20" y2="20" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Dashboard</span>

								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
							</li>
						</ul>
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Main Menu</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link sidecoloruser" href="staff-users.php">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="icon icon-tabler icons-tabler-outline icon-tabler-user">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
												<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
										</span>
									</span>
									<span class="nav-link-text">Users</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link sidecolorStaff" href="all-staff.php">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
										<iconify-icon icon="hugeicons:user-list"></iconify-icon>
										</span>
									</span>
									<span class="nav-link-text">All Staff</span>

								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
							</li> -->

							<li class="nav-item">
								<div class="menu-group">

									<ul class="navbar-nav flex-column">
										<li class="nav-item">
											<a class="nav-link sideColor_department" href="javascript:void(0);"
												data-bs-toggle="collapse" data-bs-target="#dash_pages">
												<span class="nav-icon-wrap">
													<span class="svg-icon">
														<iconify-icon icon="mingcute:department-line"></iconify-icon>
													</span>
												</span>
												<span class="nav-link-text">Departments</span>
											</a>
											<ul id="dash_pages" class="nav flex-column collapse  nav-children">
												<li class="nav-item">
													<ul class="nav flex-column">
														<li class="nav-item ">
															<a class="nav-link sidecolorenquires custompadding_megamenu"
																href="javascript:void(0);" data-bs-toggle="collapse"
																data-bs-target="#dash_log">
																<span class="nav-icon-wrap position-relative">

																	<span class="svg-icon">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none" stroke="currentColor"
																			stroke-width="2" stroke-linecap="round"
																			stroke-linejoin="round"
																			class="icon icon-tabler icons-tabler-outline icon-tabler-user-scan">
																			<path stroke="none" d="M0 0h24v24H0z"
																				fill="none" />
																			<path
																				d="M10 9a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
																			<path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
																			<path d="M4 16v2a2 2 0 0 0 2 2h2" />
																			<path d="M16 4h2a2 2 0 0 1 2 2v2" />
																			<path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
																			<path
																				d="M8 16a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2" />
																		</svg>
																	</span>
																</span>
																<span class="nav-link-text">Lettings</span>
															</a>

															<ul id="dash_log"
																class="nav flex-column collapse  nav-children">

																<li class="nav-item">
																	<a class="nav-link" href="all-Enquiries.php">
																		<span class="nav-link-text">Enquiry &
																			Viewing</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																</li>
																<li class="nav-item">
																	<a href="calendar.php" class="nav-link"
																		data-key="add-enquiry-status"><span
																			class="nav-link-text">Calendar</span>
																	</a>
																</li>

																<li class="nav-item">
																	<a class="nav-link  " href="contract-statuses.php">

																		<span class="nav-link-text">Lettings
																			Admin</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																</li>
																<li class="nav-item">
																	<a class="nav-link  " href="enquiry-settings.php">

																		<span class="nav-link-text">Lettings
																			Settings</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																</li>

																<li class="nav-item">
																	<a class="nav-link "
																		href="property-availability.php">
																		<span class="nav-link-text">Property
																			Availability </span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																</li>

																<li class="nav-item">
																	<a class="nav-link "
																		href="tenancy-dashboard-panel.php">
																		<span class="nav-link-text">Tenancy Dashboard</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																</li>

																<li class="nav-item">
																	<a class="nav-link "
																		href="tenancy-renewal.php">
																		<span class="nav-link-text">Tenancy Renewal</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																</li>

																<li class="nav-item">
																	<a class="nav-link "
																		href="tenancy-setup.php">
																		<span class="nav-link-text">Tenancy Setup</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																</li>

																<li class="nav-item">
																	<a class="nav-link sidecolor_Account "
																		href="javascript:void(0);"
																		data-bs-toggle="collapse"
																		data-bs-target="#dash_Marketing">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<iconify-icon
																					icon="fluent:window-inprivate-account-20-regular">
																				</iconify-icon>
																			</span>
																		</span>
																		<span class="nav-link-text">Marketing</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																	<ul id="dash_Marketing"
																		class="nav flex-column collapse  nav-children">
																		<li class="nav-item">
																			<a class="nav-link sidecolorhrHub"
																				href="Social-hub.php">
																				<span
																					class="nav-icon-wrap position-relative">

																					<span class="svg-icon">
																						<iconify-icon
																							icon="carbon:ibm-event-automation">
																						</iconify-icon>
																					</span>
																				</span>
																				<span class="nav-link-text">Social
																					Hub</span>
																			</a>
																			<i
																				class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																		</li>

																		<li class="nav-item">
																			<a class="nav-link sidecolor_offer"
																				href="offers.php">
																				<span class="nav-icon-wrap">
																					<span class="svg-icon">
																						<svg xmlns="http://www.w3.org/2000/svg"
																							width="24" height="24"
																							viewBox="0 0 24 24"
																							fill="none"
																							stroke="currentColor"
																							stroke-width="2"
																							stroke-linecap="round"
																							stroke-linejoin="round"
																							class="icon icon-tabler icons-tabler-outline icon-tabler-tag">
																							<path stroke="none"
																								d="M0 0h24v24H0z"
																								fill="none" />
																							<path
																								d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
																							<path
																								d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" />
																						</svg>
																					</span>
																				</span>
																				<span class="nav-link-text">All
																					Offers</span>
																			</a>
																			<i
																				class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																		</li>

																		<li class="nav-item">
																			<a class="nav-link sidecolor_webmanage"
																				href="javascript:void(0);">
																				<span
																					class="nav-icon-wrap position-relative">

																					<span class="svg-icon">
																					<iconify-icon icon="streamline:web"></iconify-icon>
																					</span>
																				</span>
																				<span class="nav-link-text">Website Management</span>
																			</a>
																			<i
																				class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																		</li>

																	</ul>

																</li>

																<!-- sidecolor_contracts if need add this on nav-link -->

															</ul>

														</li>
														<li class="nav-item">
															<a class="nav-link sidecolor_Account custompadding_megamenu"
																href="javascript:void(0);" data-bs-toggle="collapse"
																data-bs-target="#dash_Account">
																<span class="nav-icon-wrap">
																	<span class="svg-icon">
																		<iconify-icon
																			icon="fluent:window-inprivate-account-20-regular">
																		</iconify-icon>
																	</span>
																</span>
																<span class="nav-link-text">Accounts</span>
															</a>
															<i
																class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
															<ul id="dash_Account"
																class="nav flex-column collapse  nav-children">
																<li class="nav-item">
																	<ul class="nav menu-dropdown flex-column">
																	<li class="nav-item">
																			<a href="all-rent-invoices.php" class="nav-link"
																				data-key="dispatch-invoices"><span
																					class="nav-link-text">Invoices</span></a>
																		</li>
																		<li class="nav-item">
																			<a href="#" class="nav-link"
																				data-key="dispatch-invoices"><span
																					class="nav-link-text">Damage Deposite Registration</span></a>
																		</li>
																		<li class="nav-item">
																			<a href="#" class="nav-link"
																				data-key="dispatch-invoices"><span
																					class="nav-link-text">Strip (Rent Advance)</span></a>
																		</li>
																		<li class="nav-item">
																			<a href="#" class="nav-link"
																				data-key="dispatch-invoices"><span
																					class="nav-link-text">Pay by Card</span></a>
																		</li>
																		<li class="nav-item">
																			<a href="#" class="nav-link"
																				data-key="dispatch-invoices"><span
																					class="nav-link-text">Unallocated Account</span></a>
																		</li>
																	

																	<!-- <li class="nav-item">
																			<a href="deposite-invoices.php" class="nav-link"
																				data-key="dispatch-invoices"><span
																					class="nav-link-text">RENT ALLOCATION</span></a>
																		</li>

																		<li class="nav-item">
																			<a href="accounts.php" class="nav-link"
																				data-key="dispatch-invoices"><span
																					class="nav-link-text">Ticket
																					Invoice</span></a>
																		</li>
																		<li class="nav-item">
																			<a href="millage-invoice.php"
																				class="nav-link"
																				data-key="view-invoices"><span
																					class="nav-link-text">Millage
																					Invoice </span>

																			</a>
																		</li>
																		<li class="nav-item">
																			<a href="timelog-invoice.php"
																				class="nav-link"
																				data-key="add-invoice-item-type"><span
																					class="nav-link-text">Timelog
																					Invoice </span></a>
																		</li>
																		<li class="nav-item">
																			<a href="inventory-invoice.php"
																				class="nav-link"
																				data-key="view-invoice-item-types"><span
																					class="nav-link-text">Inventory
																					Invoice </span>
																			</a>
																		</li> -->

																	</ul>
																</li>
																<li class="nav-item">
																	<a class="nav-link sidecolor_invoices"
																		href="javascript:void(0);"
																		data-bs-toggle="collapse"
																		data-bs-target="#dash_invoice">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					class="icon icon-tabler icon-tabler-file-digit"
																					width="24" height="24"
																					viewBox="0 0 24 24" stroke-width="2"
																					stroke="currentColor" fill="none"
																					stroke-linecap="round"
																					stroke-linejoin="round">
																					<path stroke="none"
																						d="M0 0h24v24H0z" fill="none" />
																					<path d="M14 3v4a1 1 0 0 0 1 1h4" />
																					<rect x="9" y="12" width="3"
																						height="5" rx="1" />
																					<path
																						d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
																					<path d="M15 12v5" />
																				</svg>
																			</span>
																		</span>
																		<span class="nav-link-text">Invoices</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																	<ul id="dash_invoice"
																		class="nav flex-column collapse  nav-children">
																		<li class="nav-item">
																			<ul class="nav menu-dropdown flex-column">

																				<li class="nav-item">
																					<a href="javascript:void(0);"
																						class="nav-link"
																						data-key="dispatch-invoices"><span
																							class="nav-link-text">Dispatch
																							Invoices</span></a>
																				</li>
																				<li class="nav-item">
																					<a href="javascript:void(0);"
																						class="nav-link"
																						data-key="view-invoices"><span
																							class="nav-link-text">View
																							Invoices</span>
																						<span
																							class="badge diebarbadge badge-pill  ">329</span>
																					</a>
																				</li>
																				<li class="nav-item">
																					<a href="javascript:void(0);"
																						class="nav-link"
																						data-key="add-invoice-item-type"><span
																							class="nav-link-text">Add
																							Invoice Item
																							Type</span></a>
																				</li>
																				<li class="nav-item">
																					<a href="javascript:void(0);"
																						class="nav-link"
																						data-key="view-invoice-item-types"><span
																							class="nav-link-text">View
																							Invoice Item Types</span>
																					</a>
																				</li>

																			</ul>
																		</li>
																	</ul>
																</li>

																<li class="nav-item">
																	<a class="nav-link sidecolor_payments"
																		href="javascript:void(0);"
																		data-bs-toggle="collapse"
																		data-bs-target="#dash_integ">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none"
																					stroke="currentColor"
																					stroke-width="2"
																					stroke-linecap="round"
																					stroke-linejoin="round"
																					class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay">
																					<path stroke="none"
																						d="M0 0h24v24H0z" fill="none" />
																					<path
																						d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
																					<path d="M3 10h18" />
																					<path d="M16 19h6" />
																					<path d="M19 16l3 3l-3 3" />
																					<path d="M7.005 15h.005" />
																					<path d="M11 15h2" /></svg>
																			</span>
																		</span>
																		<span class="nav-link-text">Payments</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																	<ul id="dash_integ"
																		class="nav flex-column collapse  nav-children">
																		<li class="nav-item">
																			<ul class="nav flex-column">
																				<li class="nav-item">
																					<a class="nav-link"
																						href="reconciliation.php"><span
																							class="nav-link-text">Reconciliation</span></a>
																				</li>

																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>

														</li>

														<li class="nav-item">
															<a class="nav-link sidecolorhr custompadding_megamenu"
																href="time-logs.php">
																<span class="nav-icon-wrap position-relative">

																	<span class="svg-icon">
																		<iconify-icon icon="hugeicons:user-list">
																		</iconify-icon>
																	</span>
																</span>
																<span class="nav-link-text">HR Hub</span>
															</a>
															<i
																class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

														</li>

														<li class="nav-item">
															<a class="nav-link sidecolorproperties custompadding_megamenu"
																href="javascript:void(0);" data-bs-toggle="collapse"
																data-bs-target="#dash_proPertiesManage">
																<span class="nav-icon-wrap">
																	<span class="svg-icon">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none" stroke="currentColor"
																			stroke-width="2" stroke-linecap="round"
																			stroke-linejoin="round"
																			class="icon icon-tabler icons-tabler-outline icon-tabler-building">
																			<path stroke="none" d="M0 0h24v24H0z"
																				fill="none" />
																			<path d="M3 21l18 0" />
																			<path d="M9 8l1 0" />
																			<path d="M9 12l1 0" />
																			<path d="M9 16l1 0" />
																			<path d="M14 8l1 0" />
																			<path d="M14 12l1 0" />
																			<path d="M14 16l1 0" />
																			<path
																				d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
																		</svg>
																	</span>
																</span>
																<span class="nav-link-text position-relative">Manage
																	Property

																</span>
															</a>
															<ul id="dash_proPertiesManage"
																class="nav flex-column collapse  nav-children">
																<li class="nav-item">
																	<a class="nav-link sidecolor_Allproperties"
																		href="all-properties.php">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none"
																					stroke="currentColor"
																					stroke-width="2"
																					stroke-linecap="round"
																					stroke-linejoin="round"
																					class="icon icon-tabler icons-tabler-outline icon-tabler-building">
																					<path stroke="none"
																						d="M0 0h24v24H0z" fill="none" />
																					<path d="M3 21l18 0" />
																					<path d="M9 8l1 0" />
																					<path d="M9 12l1 0" />
																					<path d="M9 16l1 0" />
																					<path d="M14 8l1 0" />
																					<path d="M14 12l1 0" />
																					<path d="M14 16l1 0" />
																					<path
																						d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
																				</svg>
																			</span>
																		</span>
																		<span class="nav-link-text">All
																			Properties</span>

																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
																</li>

																<li class="nav-item">
																	<a class="nav-link sidecolor_tickets"
																		href="tickets.php">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none"
																					stroke="currentColor"
																					stroke-width="2"
																					stroke-linecap="round"
																					stroke-linejoin="round"
																					class="icon icon-tabler icons-tabler-outline icon-tabler-help-hexagon">
																					<path stroke="none"
																						d="M0 0h24v24H0z" fill="none" />
																					<path
																						d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" />
																					<path d="M12 16v.01" />
																					<path
																						d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
																				</svg>
																			</span>
																		</span>
																		<span class="nav-link-text">Tickets</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																</li>
																<li class="nav-item">
																	<a class="nav-link sidecolor_Tenancies"
																		href="tenancies.php">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none"
																					stroke="currentColor"
																					stroke-width="2"
																					stroke-linecap="round"
																					stroke-linejoin="round"
																					class="icon icon-tabler icons-tabler-outline icon-tabler-home-infinity">
																					<path stroke="none"
																						d="M0 0h24v24H0z" fill="none" />
																					<path
																						d="M19 14v-2h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h2.5" />
																					<path
																						d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 1.75 1.032" />
																					<path
																						d="M15.536 17.586a2.123 2.123 0 0 0 -2.929 0a1.951 1.951 0 0 0 0 2.828c.809 .781 2.12 .781 2.929 0c.809 -.781 -.805 .778 0 0l1.46 -1.41l1.46 -1.419" />
																					<path
																						d="M15.54 17.582l1.46 1.42l1.46 1.41c.809 .78 -.805 -.779 0 0s2.12 .781 2.929 0a1.951 1.951 0 0 0 0 -2.828a2.123 2.123 0 0 0 -2.929 0" />
																				</svg>
																			</span>
																		</span>
																		<span class="nav-link-text">Tenancies</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																</li>

																<li class="nav-item">
																	<a class="nav-link sidecolor_Events"
																		href="all-events.php">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					class="icon icon-tabler icon-tabler-browser"
																					width="24" height="24"
																					viewBox="0 0 24 24" stroke-width="2"
																					stroke="currentColor" fill="none"
																					stroke-linecap="round"
																					stroke-linejoin="round">
																					<path stroke="none"
																						d="M0 0h24v24H0z" fill="none" />
																					<rect x="4" y="4" width="16"
																						height="16" rx="1" />
																					<line x1="4" y1="8" x2="20"
																						y2="8" />
																					<line x1="8" y1="4" x2="8" y2="8" />
																				</svg>
																			</span>
																		</span>
																		<span class="nav-link-text">Events</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																</li>

																<li class="nav-item">
																	<a class="nav-link sidecolor_inventory"
																		href="parking_tenancies.php">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none"
																					stroke="currentColor"
																					stroke-width="2"
																					stroke-linecap="round"
																					stroke-linejoin="round"
																					class="icon icon-tabler icons-tabler-outline icon-tabler-building-warehouse">
																					<path stroke="none"
																						d="M0 0h24v24H0z" fill="none" />
																					<path d="M3 21v-13l9 -4l9 4v13" />
																					<path d="M13 13h4v8h-10v-6h6" />
																					<path
																						d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" />
																				</svg>
																			</span>
																		</span>
																		<span class="nav-link-text">Parking Tenancies</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																</li>

																
																<li class="nav-item">
																	<a class="nav-link sidecolor_checkincheckout"
																		href="CheckIn.php">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<iconify-icon
																					icon="fluent-mdl2:date-time-mirrored">
																				</iconify-icon>
																			</span>
																		</span>
																		<span class="nav-link-text">Inspections</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																</li>

															</ul>
														</li>
														<li class="nav-item">
															<a class="nav-link sidecolor_Compliance custompadding_megamenu"
																href="all-compliance.php">
																<span class="nav-icon-wrap position-relative">

																	<span class="svg-icon">
																		<iconify-icon
																			icon="fluent-mdl2:compliance-audit">
																		</iconify-icon>
																	</span>
																</span>
																<span class="nav-link-text">Compliance</span>
															</a>
															<i
																class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

														</li>

														<li class="nav-item">
															<a class="nav-link sidecolor_Procurement custompadding_megamenu"
																href="javascript:void(0);" data-bs-toggle="collapse"
																data-bs-target="#Procurement">
																<span class="nav-icon-wrap">
																	<span class="svg-icon">
																	<iconify-icon icon="bx:purchase-tag"></iconify-icon>
																	</span>
																</span>
																<span class="nav-link-text">Procurement</span>
															</a>
															
															<ul id="Procurement"
																class="nav flex-column collapse  nav-children">
																<li class="nav-item">
																	<a class="nav-link sidecolor_material"
																		href="material-stock.php">
																		<span class="nav-icon-wrap">
																			<span class="svg-icon">
																				<iconify-icon icon="vaadin:stock">
																				</iconify-icon>
																			</span>
																		</span>
																		<span class="nav-link-text">Material
																			Stock</span>
																	</a>
																	<i
																		class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

																</li>
														
													</ul>
												</li>
											</ul>
										</li>

									</ul>
									<!-- department end -->
								</div>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link sidecolordue" href="NetworkTestDue.php">
									<span class="nav-icon-wrap position-relative">

										<span class="svg-icon">
											<iconify-icon icon="gg:calendar-due"></iconify-icon>
										</span>
									</span>
									<span class="nav-link-text">Due Reports</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

							</li> -->
							<li class="nav-item">
								<a class="nav-link sidecolorcalendar" href="calendar.php">
									<span class="nav-icon-wrap position-relative">

										<span class="svg-icon">
											<iconify-icon icon="solar:calendar-broken"></iconify-icon>
										</span>
									</span>
									<span class="nav-link-text">Calendar</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>

							</li>

							<!-- <li class="nav-item">
								<a class="nav-link sidecolorleave" href="leave-management.php" >
									<span class="nav-icon-wrap position-relative">

										<span class="svg-icon">
										<iconify-icon icon="fluent-mdl2:leave-user"></iconify-icon>
										</span>
									</span>
									<span class="nav-link-text">Leave Management</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
								
							</li> -->

							<!-- <li class="nav-item">
								<a class="nav-link sidecolorenquires" href="javascript:void(0);" data-bs-toggle="collapse"
									data-bs-target="#dash_scrumboard">
									<span class="nav-icon-wrap position-relative">

										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="icon icon-tabler icons-tabler-outline icon-tabler-user-scan">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<path d="M10 9a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
												<path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
												<path d="M4 16v2a2 2 0 0 0 2 2h2" />
												<path d="M16 4h2a2 2 0 0 1 2 2v2" />
												<path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
												<path d="M8 16a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2" /></svg>
										</span>
									</span>
									<span class="nav-link-text">Enquiries</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
								<ul id="dash_scrumboard" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a href="all-Enquiries.php" class="nav-link" data-key="enquiries"><span
														class="nav-link-text">Enquiries</span></a>
											</li>
											<li class="nav-item">
												<a href="calendar.php" class="nav-link" data-key="add-enquiry-status"><span
														class="nav-link-text">Calendar</span>
												</a>
											</li>

											<li class="nav-item">
												<a href="enquiry-settings.php" class="nav-link" data-key="enquiry-Settings"><span
														class="nav-link-text">Enquiry Settings</span>
												</a>
											</li>
											
										

										</ul>
									</li>
								</ul>
							</li> -->
							<!-- <li class="nav-item">
								<a class="nav-link sidecolor_contracts" href="contract-statuses.php" >
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="icon icon-tabler icons-tabler-outline icon-tabler-container">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<path d="M20 4v.01" />
												<path d="M20 20v.01" />
												<path d="M20 16v.01" />
												<path d="M20 12v.01" />
												<path d="M20 8v.01" />
												<path
													d="M8 4m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z" />
												<path d="M4 4v.01" />
												<path d="M4 20v.01" />
												<path d="M4 16v.01" />
												<path d="M4 12v.01" />
												<path d="M4 8v.01" /></svg>
										</span>
									</span>
									<span class="nav-link-text">Contract Statuses</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
								
							</li> -->

							<li class="nav-item">
								<a class="nav-link sidecolor_todo" href="daily-task.php">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-list-details" width="24" height="24"
												viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
												stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<path d="M13 5h8" />
												<path d="M13 9h5" />
												<path d="M13 15h8" />
												<path d="M13 19h5" />
												<rect x="3" y="4" width="6" height="6" rx="1" />
												<rect x="3" y="14" width="6" height="6" rx="1" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Daily Tasks</span>
									<!-- <span class="badge badge-soft-success ms-2">2</span> -->
								</a>

							</li>
							<li class="nav-item">
								<a class="nav-link sidecolor_approvalboard" href="approval-board.php">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<iconify-icon icon="material-symbols-light:approval-outline-sharp">
											</iconify-icon>
										</span>
									</span>
									<span class="nav-link-text">Approval Board</span>
								</a>

							</li>
							<li class="nav-item">
								<a class="nav-link sidecolor_activitylog" href="activitylogs.php">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<iconify-icon icon="eva:activity-fill"></iconify-icon>
										</span>
									</span>
									<span class="nav-link-text">Activity Log</span>
								</a>

							</li>

							<!-- <li class="nav-item">
								<a class="nav-link sidecolor_Merchants" href="merchants.php">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
												<path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
												<path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
												<path d="M17 10h2a2 2 0 0 1 2 2v1" />
												<path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
												<path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
										</span>
									</span>
									<span class="nav-link-text">Merchants</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
							</li> -->

							<li class="nav-item">
								<a class="nav-link sidecolor_System" href="email-templates.php">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<iconify-icon icon="hugeicons:solar-system-01"></iconify-icon>
										</span>
									</span>
									<span class="nav-link-text">System Configration</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
							</li>

							<li class="nav-item">
								<a class="nav-link sidecolor_Support" href="javascript:void(0);"
									data-bs-toggle="collapse" data-bs-target="#dash_Support">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="icon icon-tabler icons-tabler-outline icon-tabler-hours-24">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<path d="M4 13c.325 2.532 1.881 4.781 4 6" />
												<path d="M20 11a8.1 8.1 0 0 0 -15.5 -2" />
												<path d="M4 5v4h4" />
												<path
													d="M12 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2" />
												<path d="M18 15v2a1 1 0 0 0 1 1h1" />
												<path d="M21 15v6" /></svg>
										</span>
									</span>
									<span class="nav-link-text">Communication Center</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
								<ul id="dash_Support" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="communication-center.php"><span
														class="nav-link-text">Call Emergency
														Helpline</span></a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);"><span
														class="nav-link-text">Call
														Office</span></a>
											</li>

										</ul>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a class="nav-link sidecolor_download" href="javascript:void(0);"
									data-bs-toggle="collapse" data-bs-target="#dash_Download">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="icon icon-tabler icons-tabler-outline icon-tabler-download">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
												<path d="M7 11l5 5l5 -5" />
												<path d="M12 4l0 12" /></svg>
										</span>
									</span>
									<span class="nav-link-text">Download</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
								<ul id="dash_Download" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);"><span
														class="nav-link-text">Download
														latest Android build</span></a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);"><span
														class="nav-link-text">Android Beta
														Build</span></a>
											</li>

										</ul>
									</li>
								</ul>
							</li>

						</ul>
					</div>

					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Documentation</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link sidecolor_documentation" href="javascript:void(0);"
									data-bs-toggle="collapse" data-bs-target="#dash_Documentation">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-code" width="24" height="24"
												viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
												stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<polyline points="7 8 3 12 7 16" />
												<polyline points="17 8 21 12 17 16" />
												<line x1="14" y1="4" x2="10" y2="20" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Documentation</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
								<ul id="dash_Documentation" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);"><span
														class="nav-link-text">App User Guide
														-
														Tenants</span></a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);"><span
														class="nav-link-text">App User Guide
														-
														Staff</span></a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);"><span
														class="nav-link-text">Backend User
														Guide</span></a>
											</li>

										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link sidecolor_reports" href="javascript:void(0);">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-layout" width="24" height="24"
												viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
												stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<rect x="4" y="4" width="6" height="5" rx="2" />
												<rect x="4" y="13" width="6" height="7" rx="2" />
												<rect x="14" y="4" width="6" height="16" rx="2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Reports</span>
								</a>
								<i class="fa fa-circle text-danger-glow blink sidenabBlinker"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Main Menu -->
		</div>
		<div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
		<!-- /Vertical Nav -->
		<!-- Main Content -->
		<div class="hk-pg-wrapper">