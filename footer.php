<!-- Page Footer -->
<div class="hk-footer">
    <footer class="container-xxl footer">
        <div class="row">
            <div class="col-xl-8">
                <p class="footer-text"><span class="copy-text">Graysons © 2024 All rights reserved.</span> </p>
            </div>
            <div class="col-xl-4">
                <a href="https://techmavesoftware.com" class="footer-extr-link link-default"><span
                        class="feather-icon"><i data-feather="external-link"></i></span><u>Design & Developed By
                        TechMave Software</u></a>
            </div>
        </div>
    </footer>
</div>
<!-- / Page Footer -->

</div>
<!-- /Main Content -->
</div>
<!-- /Wrapper -->



<!---------------------------------------------------------------
    js script start
    -----------------------------------------------------------  -->
<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Sweetalert JS -->
<script src="vendors/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="dist/js/sweetalert-data.js"></script>
<!-- Bootstrap Core JS -->
<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FeatherIcons JS -->
<script src="dist/js/feather.min.js"></script>
<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>
<!-- Simplebar JS -->
<script src="vendors/simplebar/dist/simplebar.min.js"></script>
<!-- Data Table JS -->
<script src="vendors/datatables.net/js/dataTables.min.js"></script>
<script src="vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="vendors/datatables.net-select/js/dataTables.select.min.js"></script>

<link rel="stylesheet" type="text/css" href="dist/customplugins/buttons.dataTables.min.css">
<script type="text/javascript" src="dist/customplugins/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="dist/customplugins/jszip.min.js"></script>
<script type="text/javascript" src="hdist/customplugins/pdfmake.min.js"></script>
<script type="text/javascript" src="dist/customplugins/vfs_fonts.js"></script>
<script type="text/javascript" src="dist/customplugins/buttons.html5.min.js"></script>
<script type="text/javascript" src="dist/customplugins/buttons.colVis.min.js"></script>

<!-- Daterangepicker JS -->
<script src="vendors/moment/min/moment.min.js"></script>
<script src="vendors/daterangepicker/daterangepicker.js"></script>
<script src="dist/js/daterangepicker-data.js"></script>

<!-- Amcharts Maps JS -->
<script src="../../../../cdn.amcharts.com/lib/5/index.js"></script>
<script src="../../../../cdn.amcharts.com/lib/5/map.js"></script>
<script src="../../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="../../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Apex JS -->
<script src="vendors/apexcharts/dist/apexcharts.min.js"></script>

<!-- color picker -->
<script src="dist/js/color-picker-data.js"></script>

<!-- Init JS -->
<script src="dist/js/init.js"></script>
<script src="dist/js/chips-init.js"></script>
<script src="dist/js/dashboard-data.js"></script>

<!-- Select2 JS -->
<script src="vendors/select2/dist/js/select2.full.min.js"></script>
<script src="dist/js/select2-data.js"></script>

<!-- Dropify JS -->
<script src="vendors/dropify/dist/js/dropify.min.js"></script>
<script src="dist/js/dropify-data.js"></script>
<!-- Init JS -->
<script src="dist/js/contact-data.js"></script>

<!-- Repeater JS -->
<script src="vendors/jquery.repeater/jquery.repeater.min.js"></script>

<!-- Tinymce JS -->
<script src="vendors/tinymce/tinymce.min.js"></script>

<!-- Dropify JS -->
<script src="vendors/dropify/dist/js/dropify.min.js"></script>
<script src="dist/js/dropify-data.js"></script>



<!-- slick slider for incpection image and function call in required pages only -->
<link rel="stylesheet" type="text/css" href="dist/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="dist/slick/slick-theme.css"/>
<script src="dist/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<!-- slick slider and light box end -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- sidebar document search bar functionality js start -->
<script>
    // JavaScript for search functionality
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('searchInput');
        const menuDropdown = document.querySelector('.menu-dropdown');
        const navLinks = menuDropdown.querySelectorAll('.nav-link');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.trim().toLowerCase();
            navLinks.forEach(function(navLink) {
                const text = navLink.textContent.trim().toLowerCase();
                if (text.includes(searchTerm)) {
                    navLink.style.display = 'block';
                } else {
                    navLink.style.display = 'none';
                }
            });
        });
    });
</script>
<!-- sidebar document search bar functionality js end -->

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


<!-- page refresh on click refresh button  -->
<script>
  document.getElementById('refreshButton').addEventListener('click', function() {
    location.reload();
  });
</script>
<!-- page refresh on click refresh button  end -->



<!-- light dark theme js start -->
<!-- <script>
    const toggleTheme = () => {
      const body = document.body;
      const themeToggle = document.querySelector('.switch input[type="checkbox"]');
      const lightText = document.getElementById('light-text');
      const darkText = document.getElementById('dark-text');
      
      if (themeToggle.checked) {
        body.classList.remove('light-theme');
        body.classList.add('dark-theme');
        localStorage.setItem('theme', 'dark'); 
        lightText.style.color = 'var(--text-color)';
        darkText.style.color = 'var(--background-color)';
      } else {
        body.classList.remove('dark-theme');
        body.classList.add('light-theme');
        localStorage.removeItem('theme'); 
        lightText.style.color = 'var(--background-color)';
        darkText.style.color = 'var(--text-color)';
      }
    };

    window.onload = () => {
      const storedTheme = localStorage.getItem('theme');
      if (storedTheme === 'dark') {
        const themeToggle = document.querySelector('.switch input[type="checkbox"]');
        themeToggle.checked = true;
        toggleTheme();
      }
    };
  </script> -->
<!-- light dark theme js end -->



<!-- ------------------------------------
Time Picker custom plughin start
-------------------------------------- -->
<link rel="stylesheet" type="text/css" href="dist/customplugins/timepicker/mdtimepicker.css">
	<!-- <link rel="stylesheet" type="text/css" href="dist/customplugins/timepicker/mdtimepicker-theme.css"> -->
    <script type="text/javascript" src="dist/customplugins/timepicker/mdtimepicker.js"></script>
    <script>
        $(document).ready(function() {
            $('.time__pickers').mdtimepicker(); //Initializes the time picker
        });
    </script>
    <!-- ------------------------------------
Time Picker custom plughin end
-------------------------------------- -->



    <!-- ------------------------------------
submit trigger processing js
-------------------------------------- -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const forms = document.querySelectorAll('form');

  forms.forEach(form => {
    form.addEventListener('submit', function(event) {
      const submitButton = form.querySelector('button[type="submit"].canvasSubmit_button');
      if (submitButton) {
        event.preventDefault(); // Prevent default form submission
        showLoader(submitButton);

        // Simulate form submission for demonstration purposes
        setTimeout(() => {
          hideLoader(submitButton);
          form.submit(); // Submit the form after processing (e.g., AJAX call)
        }, 2000); // Simulate a delay for form submission
      }
    });
  });

  function showLoader(button) {
    button.dataset.originalText = button.innerHTML; // Save original button text
    button.innerHTML = 'Processing <span class="loaderButton_custom"></span>';
    button.disabled = true; // Disable the button to prevent multiple clicks
  }

  function hideLoader(button) {
    button.innerHTML = button.dataset.originalText; // Restore original button text
    button.disabled = false; // Enable the button
  }
});
</script>
    <!-- ------------------------------------
submit trigger processing js end
-------------------------------------- -->


<!-- subheader active menu js start  -->
<script>
    // Get the current URL
    var currentURL = window.location.href;

    // Get all menu items
    var menuItems = document.querySelectorAll('.subHeaderContainer li a');

    // Flag to check if any menu item is active
    var isActive = false;

    // Loop through each menu item and check if its href matches the current URL
    menuItems.forEach(function(item) {
        // If the href matches, add 'active' class to the parent <li> element
        if (item.href === currentURL) {
            item.parentNode.classList.add('active');
            isActive = true;
        }
    });

    // If no menu item is active, set 'Home' as active by default
    if (!isActive) {
        document.querySelector('.subHeaderContainer li a:first-child').parentNode.classList.add('active');
    }
</script>
<!-- subheader active menu js end -->

<!-- subheader active menu js start  -->
<script>
    // Get the current URL
    var currentURL = window.location.href;

    // Get all menu items
    var menuItems = document.querySelectorAll('.navbar-nav li a');

    // Flag to check if any menu item is active
    var isActive = false;

    // Loop through each menu item and check if its href matches the current URL
    menuItems.forEach(function(item) {
        // If the href matches, add 'active' class to the parent <li> element
        if (item.href === currentURL) {
            item.parentNode.classList.add('active');
            isActive = true;
        }
    });

    // If no menu item is active, set 'Home' as active by default
    if (!isActive) {
        document.querySelector('.navbar-nav li a:first-child').parentNode.classList.add('active');
    }
</script>
<!-- subheader active menu js end -->


    <!-- inspector code  -->
<!-- <script>
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        document.addEventListener('keydown', function(e) {
            if (
                e.keyCode == 123 || // F12
                (e.ctrlKey && e.shiftKey && e.keyCode == 73) || 
                (e.ctrlKey && e.shiftKey && e.keyCode == 74) || 
                (e.ctrlKey && e.keyCode == 85) || 
                (e.ctrlKey && e.keyCode == 83) 
            ) {
                e.preventDefault();
                return false;
            }
        });

        var _0x2354=["\x57\x65\x6C\x63\x6F\x6D\x65\x20\x74\x6F\x20\x74\x68\x65\x20\x41\x64\x6D\x69\x6E\x20\x50\x61\x6E\x65\x6C"];;
    </script> -->
    <!-- inspector code  -->


 <!-- system alert message automatically open -->
 <audio id="bellSound" src="dist/img/newimages/message-alert.mp3"  preload="auto"></audio>
   
    <script>
    // Simulated User ID (use actual user ID in a real system)
    const userId = 'user_122';

    // Function to play bell sound
    function playBellSound() {
      const bellSound = document.getElementById('bellSound');
      
      // Ensuring the sound plays immediately when the alert appears
      bellSound.play().catch((error) => {
        console.log('Audio playback prevented by browser:', error);
      });
    }

    // Function to show the SweetAlert
    function showTaskAlert() {
      // Show the SweetAlert
      Swal.fire({
        title: 'Task Assignment Alert',
        html: `
          <div style="font-size: 40px; margin-bottom: 10px;">
         <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.95"><path stroke-dasharray="56" stroke-dashoffset="56" d="M12 4c4.42 0 8 3.58 8 8c0 4.42 -3.58 8 -8 8c-4.42 0 -8 -3.58 -8 -8c0 -4.42 3.58 -8 8 -8"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.54s" values="56;0"/></path><path stroke-dasharray="20" stroke-dashoffset="20" d="M4.22 4.22c-4.29 4.3 -4.29 11.26 0 15.56"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.63s" dur="0.18s" values="20;0"/></path><path stroke-dasharray="20" stroke-dashoffset="20" d="M19.78 4.22c4.29 4.3 4.29 11.26 0 15.56"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.81s" dur="0.18s" values="20;0"/></path><path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8v4"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.99s" dur="0.18s" values="6;0"/></path><path stroke-dasharray="2" stroke-dashoffset="2" d="M12 16v0.01"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.17s" dur="0.18s" values="2;0"/></path></g></svg>
          </div>
          You have been assigned a new task. Please take action.
        `,
        showCancelButton: false,
        confirmButtonText: 'Okay',
        customClass: {
          popup: 'systemalertpopup' // Adding custom class to the popup
        },
        didOpen: () => {
          // Play sound once the alert is opened
          playBellSound();
        }
      }).then((result) => {
        if (result.isConfirmed) {
          // Update localStorage to prevent the alert from showing again
          localStorage.setItem(`alertAcknowledged_${userId}`, 'true');
        }
      });
    }

    // Check localStorage to see if the alert has already been acknowledged
    function checkAcknowledgement() {
      const hasAcknowledged = localStorage.getItem(`alertAcknowledged_${userId}`);

      // If not acknowledged, show the SweetAlert with sound
      if (!hasAcknowledged) {
        showTaskAlert();
      }
    }

    // Call the function when the page is loaded
    $(document).ready(function () {
      checkAcknowledgement();
    });
  </script>



</body>

</html>