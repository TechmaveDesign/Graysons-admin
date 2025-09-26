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
    
.form-builder-overlay {
    z-index: 1000;
}
.form-builder-dialog.data-dialog {
    z-index: 1000;
}
.form-builder-dialog {

    z-index: 9999;
  
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
                                    <h1>Create Compliance Job Form Template</h1>
                                </a>
                            </div>
                            <div class=" ms-3">

                                 <a href="property-viewing-settings.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> 
                            </div>
                        </div>
                        <div class="contact-options-wrap">
                        <!-- <button id="AddInspectionTimings" class="btn btn-sm addiconiButton commonAddnewButton AddInspection_timings__property btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#createfolderModal">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Create Template
                            </button> -->
                            
                            
                            <!-- <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button> -->
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

                    </header>

                    

                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="contact-list-view">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="builderContainer">
                                            <div class="setDataWrap mb-3 hidden">
                                                <button id="getXML" type="button" class="btn btn-primary">Get XML Data</button>
                                                <button id="getJSON" type="button" class="btn btn-primary">Get JSON Data</button>
                                                <button id="getJS" type="button" class="btn btn-primary">Get JS Data</button>
                                            </div>
                                            <div id="build-wrap" class="border"></div>
                                        </div>

                                        
                                    </div>
                                </div>

                                <div class="form-actionsbtns">
                                    <button type="button" id="frmb-1681279599896-clear-action" class="canvascancel_button commonCanvas_buttonFooter">Clear</button>
                                    <button id="previewForm" type="button" class="btn btn formpreview_button commonCanvas_buttonFooter" data-bs-toggle="modal" data-bs-target="#previewModal">
                                        <iconify-icon icon="simple-line-icons:eye"></iconify-icon> Preview Form
                                    </button>
                                    <button type="submit" id="frmb-1681279599896-save-action" class="btn btn-primary canvasSubmit_button commonCanvas_buttonFooter">
                                        <div class="buttontext">Submit</div>
                                    </button>
                                </div>
                            </form>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Form Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="preview-form"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

<script>
    jQuery(function ($) {
        var fbEditor = document.getElementById('build-wrap');
        
        // Ensure the container exists before initializing formBuilder
        if (fbEditor) {
            var formBuilder = $(fbEditor).formBuilder({
                disableFields: ['autocomplete', 'button', 'paragraph', 'hidden']
            });
        
            document.getElementById('getXML')?.addEventListener('click', function () {
                alert(formBuilder.actions.getData('xml'));
            });
            document.getElementById('getJSON')?.addEventListener('click', function () {
                alert(formBuilder.actions.getData('json'));
            });
            document.getElementById('getJS')?.addEventListener('click', function () {
                alert('Check console');
                console.log(formBuilder.actions.getData());
            });

            document.getElementById('previewForm')?.addEventListener('click', function () {
                var formData = formBuilder.actions.getData('json');
                previewForm(formData);
            });

            function previewForm(formData) {
                if (formData) {
                    var formRenderOpts = { formData };
                    $('#preview-form').formRender(formRenderOpts);
                }
            }
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formFieldsList = document.querySelectorAll('#formfields__list li');
        const noFormCreateBox = document.querySelector('.whennoform_create');

        if (formFieldsList.length > 0 && noFormCreateBox) {
            formFieldsList.forEach(item => {
                item.addEventListener('click', function () {
                    noFormCreateBox.style.display = 'none';
                });
            });
        }
    });
</script>


    <!-- button sybmit loader js start -->
 <script>
  document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.canvasSubmit_button').forEach(function(button) {
    button.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default form submission or link redirection
      
      // Show loading dots
      button.classList.add('btn-loading');
      button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
      
      // Simulate a delay before redirection
      setTimeout(function() {
        window.location.href = 'view-compliance-job-form-template.php'; // Change this to your desired URL
      }, 3000); // Change the delay time as needed (3000ms = 3 seconds)
    });
  });
});
 </script>
 <!-- button sybmit loader js end -->