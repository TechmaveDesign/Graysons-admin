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
<?php include('headers/compliance-setting-header.php') ?>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Compliance Categories</h1>
                                </a>
                            </div>
                            <div class=" ms-3">

                                 <a href="compliance-job-form-template.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> 
                            </div>
                        </div>
                        <div class="contact-options-wrap">
                        <button id="AddInspectionTimings" class="btn btn-sm addiconiButton commonAddnewButton AddInspection_timings__property btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#createfolderModal">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Create Category
                            </button>
                            
                            
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
                                            <table class="table common-datatable nowrap w-100 ">
                                                <thead>
                                                    <tr>

                                                        <th>Category Name</th>
                                                        <th>Create Date</th>
                                                        <th>Created By </th>
                                                        <th>Last Modified Date</th>
                                                        <th>Last Modified By</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                <tr>
                                                    <td>Electrical</td>
                                                    <td>05 Oct, 2025</td>
                                                    <td>William Karlo</td>
                                                    <td>10 Oct, 2025</td>
                                                    <td>Jimmy Smith</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="#"
                                                            title="Edit Category"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#EditGroupModal">
                                                                <span class="icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Plumbing</td>
                                                    <td>12 Nov, 2025</td>
                                                    <td>Sarah Johnson</td>
                                                    <td>18 Nov, 2025</td>
                                                    <td>Michael Brown</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="#"
                                                            title="Edit Category"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#EditGroupModal">
                                                                <span class="icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Carpentry</td>
                                                    <td>20 Dec, 2025</td>
                                                    <td>David Miller</td>
                                                    <td>25 Dec, 2025</td>
                                                    <td>Emily Davis</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="#"
                                                            title="Edit Category"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#EditGroupModal">
                                                                <span class="icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Painting</td>
                                                    <td>15 Jan, 2026</td>
                                                    <td>Olivia Wilson</td>
                                                    <td>20 Jan, 2026</td>
                                                    <td>James Anderson</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="#"
                                                            title="Edit Category"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#EditGroupModal">
                                                                <span class="icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                                                </span>
                                                            </a>
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

<!-- Modal -->
<div class="addEnquiry">
  <form action="#">
    <div class="modal fade" id="createfolderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="sectionCreateBox">
            <div class="actionBtnSection text-end">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="iconImageSection">
                <img src="dist/img/newimages/category.png" alt="" class="mb-3">
                <h5>Create Category</h5>
                <p>Quickly create and organize categories with ease.</p>
              </div>
            <div class="form-group">
                  <!-- <label class="form-label" for="#">Enter Section Name</label> -->
                  <input class="form-control" type="text" placeholder="Category Name" value="">
              </div>
            </div>
             
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btnContinueProcess btn-primary ">
            <div class="buttontext">
              <div class="formediticon_modal">
                <iconify-icon icon="hugeicons:edit-02"></iconify-icon>
              </div>
              Create & Save
            </div>
            <iconify-icon icon="bi:arrow-right"></iconify-icon>
          </button>

          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Modal -->
<div class="addEnquiry">
  <form action="#">
    <div class="modal fade" id="EditGroupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="sectionCreateBox">
            <div class="actionBtnSection text-end">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="iconImageSection">
                <img src="dist/img/newimages/category.png" alt="" class="mb-3">
                <h5>Edit Category</h5>
                <p>Effortlessly update and organize your categories.</p>
              </div>
            <div class="form-group">
                  <!-- <label class="form-label" for="#">Enter Section Name</label> -->
                  <input class="form-control" type="text" placeholder="Category Name" value="Electrical">
              </div>
            </div>
             
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
            <div class="buttontext">
              <div class="formediticon_modal">
                <iconify-icon icon="hugeicons:edit-02"></iconify-icon>
              </div>
              Save & Update
            </div>
            <iconify-icon icon="bi:arrow-right"></iconify-icon>
          </button>

          </div>
        </div>
      </div>
    </div>
  </form>
</div>
    

<?php include('footer.php') ?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
      button.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent immediate action

        // Show loading dots
        button.classList.add('btn-loading');
        button.insertAdjacentHTML('beforeend', `
          <div class="loading-dots">
            <span></span><span></span><span></span>
          </div>
        `);

        // Simulate a delay before taking action
        setTimeout(function() {
          // Hide the modals when applicable
          ['createfolderModal', 'EditGroupModal'].forEach(function(modalId) {
            var modalElement = document.getElementById(modalId);
            if (modalElement) {
              var modalInstance = bootstrap.Modal.getInstance(modalElement); 
              if (modalInstance) {
                modalInstance.hide();
              }
            }
          });

          // Remove loading dots
          button.classList.remove('btn-loading');
          var loadingDots = button.querySelector('.loading-dots');
          if (loadingDots) {
            loadingDots.remove();
          }

          // If inside the EditGroupModal, only hide it
          if (button.classList.contains('saveAndContinue')) {
            return; // Stop execution here, no form submission
          }

          // Otherwise, submit the form (for "Continue to Process" button)
          button.closest("form").submit();
        }, 1000); // Adjust delay as needed
      });
    });
  });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
