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
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Invoice Details</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

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

                            <div class="topinvoiceHeader">
                                <div class="grow">
                                    <h5 class="invoiceNo">
                                        <iconify-icon icon="uil:invoice"></iconify-icon> Invoice No. <span>2678</span>
                                    </h5>

                                </div>

                                <div class="invoiceAmount">
                                    <h6>Balance Due</h6>
                                    <h2>£229.69</h2>
                                </div>
                            </div>

                            <div class="userFilters" id="filterDiv">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-12">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Staff Name</label>
                                                                    <select name="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="1">Gowthorpe, Jason</option>
                                                                        <option value="2">Properties, Graysons</option>
                                                                        <option value="3">Ghai, Akash</option>
                                                                        <option value="4">Dwernicka, Ewa
                                                                        </option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Staff Email</label>
                                                                    <input type="text" class="form-control"
                                                                        value="example@gmail.com" placeholder=""
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Invoice Date</label>
                                                                    <input type="text" class="form-control"
                                                                        value="05 June, 2024" placeholder=""
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Date Range</label>
                                                                    <input type="text" class="form-control"
                                                                        value="25 June, 2024 - 25 July, 2024"
                                                                        placeholder="" readonly="readonly">
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

                                <table class="table common-datatable nowrap w-100 " id="coloredTableRows">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="selectAllTb">
                                                    <label class="form-check-label" for="">
                                                    </label>
                                                </div>
                                            </th>
                                            <th>Ticket Id</th>
                                                    <th>Title</th>
                                                    <th>Start</th>
                                                    <th>End</th>
                                                    <th>Time Allocated</th>
                                                    <th>Time Spent</th>
                                                    <th>Target Met</th>
                                                    <th>Comment</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr class="TargetWarning">
                                            <td>
                                                <input type="checkbox"
                                                    class="form-check-input inpTH_custom  rowCheckbox">
                                            </td>
                                            <td><a href="view-ticket.php" class="text-high-em">#2201</a></td>
                                                <td class="sorting_1">
                                                    Bathroom &gt; Routine Cleaning
                                                </td>
                                                <td class="">08/05/2024 <br>18:56</td>
                                                <td>08/05/2024 <br> 21:30</td>
                                                <td>30</td>
                                                <td>20</td>
                                                <td>10</td>
                                                <td>
                                                    <div class="LongMesage_container" style="position: relative;">
                                                        <input class="refuge-collection-input tableLongMessage_Input" value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                        <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i> 
                                                        </button>
                                                        <div class="custom-tooltip"></div>
                                                    </div>
                                                    </td>
                                            <td>
                                                <span class="badge badge-soft-success  my-1  me-2">Approved</span>
                                            </td>
                                            <td>
                                                £9.69
                                            </td>
                                        </tr>
                                        <tr class="TargetDanger">
                                            <td>
                                                <input type="checkbox"
                                                    class="form-check-input inpTH_custom  rowCheckbox">
                                                <!-- Individual row checkbox -->
                                            </td>
                                            <td><a href="view-ticket.php" class="text-high-em">#2201</a></td>
                                                <td class="sorting_1">
                                                    Bathroom &gt; Routine Cleaning
                                                </td>
                                                <td class="">08/05/2024 <br>18:56</td>
                                                <td>08/05/2024 <br> 21:30</td>
                                                <td>30</td>
                                                <td>20</td>
                                                <td>10</td>
                                                <td>
                                                    <div class="LongMesage_container" style="position: relative;">
                                                        <input class="refuge-collection-input tableLongMessage_Input" value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                        <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i> 
                                                        </button>
                                                        <div class="custom-tooltip"></div>
                                                    </div>
                                                    </td>
                                            <td>
                                                <span class="badge badge-soft-success  my-1  me-2">Approved</span>
                                            </td>
                                            <td>
                                                £9.69
                                            </td>
                                        </tr>
                                        <tr class="TargetSuccess">
                                            <td>
                                                <input type="checkbox"
                                                    class="form-check-input inpTH_custom  rowCheckbox">
                                                <!-- Individual row checkbox -->
                                            </td>
                                            <td><a href="view-ticket.php" class="text-high-em">#2201</a></td>
                                                <td class="sorting_1">
                                                    Bathroom &gt; Routine Cleaning
                                                </td>
                                                <td class="">08/05/2024 <br>18:56</td>
                                                <td>08/05/2024 <br> 21:30</td>
                                                <td>30</td>
                                                <td>20</td>
                                                <td>10</td>
                                                <td>
                                                    <div class="LongMesage_container" style="position: relative;">
                                                        <input class="refuge-collection-input tableLongMessage_Input" value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                        <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i> 
                                                        </button>
                                                        <div class="custom-tooltip"></div>
                                                    </div>
                                                    </td>
                                            <td>
                                                <span class="badge badge-soft-success  my-1  me-2">Approved</span>
                                            </td>
                                            <td>
                                                £9.69
                                            </td>
                                        </tr>
                                        

                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-lg-12 px-0">
                                        <div class="card invoice_subtotalAccount">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Message on Invoice</label>
                                                            <textarea class="form-control" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="form-group">
                                                            <label class="form-label">Message on Statement</label>
                                                            <textarea class="form-control" rows="5"></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-4">
                                                        <table class="table totalSummartTable">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Subtotal</th>
                                                                    <td>£229.69</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>VAT @ 20% on £229.69</th>
                                                                    <td> <input type="text" class="tableInput"
                                                                            value="£100.05"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total</th>
                                                                    <td>£329.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Balance Due</th>
                                                                    <th>£329.00</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="FormSubmit_fix_container">
                                   
                                    <div class="form-check">
                                        <input id="checkboxOutline8" checked class="form-check-input" type="checkbox"
                                            value="">
                                        <label for="checkboxOutline8" class="form-check-label">Send to Quick
                                            Book</label>
                                    </div>

                                    <button type="button" id="sav&send"
                                        class="btn btn-sm commonAddnewButton btn-primary ms-3">
                                        <iconify-icon icon="carbon:send-alt"></iconify-icon> Save & Send
                                    </button>

                                    <button type="button"
                                        class="btn btn-sm commonAddnewButton btn-primary ms-3 printButton">
                                        <iconify-icon icon="material-symbols:print-outline"></iconify-icon> Print
                                    </button>

                                    <button type="button"
                                        class="btn btn-sm commonAddnewButton btn-primary ms-3 btnfixCancel">
                                        Cancel
                                    </button>

                                </div>
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


    <script>
    document.getElementById('sav&send').addEventListener('click', function() {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Send the invoice to Quick Book successfully'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'timelog-invoice.php';
            }
        });
    });
</script>

<!-- table data select functionality -->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const selectAllCheckbox = document.getElementById('selectAllTb');
    const rowCheckboxes = document.querySelectorAll('.rowCheckbox');

    selectAllCheckbox.addEventListener('change', function() {
        rowCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    rowCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (!this.checked) {
                selectAllCheckbox.checked = false;
            } else if (document.querySelectorAll('.rowCheckbox:checked').length === rowCheckboxes.length) {
                selectAllCheckbox.checked = true;
            }
        });
    });
});

</script>

<!-- input lenthy content show js -->
<script>
    $(document).ready(function() {
        // Initialize Bootstrap Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // Show input value content in tooltip on view button click
        $('.view-btn').on('mouseenter', function() {
            var inputValue = $(this).siblings('.refuge-collection-input').val();
            $(this).attr('data-bs-original-title', inputValue).tooltip('show');
        });
    });
</script>
<!-- input lenthy content show js end-->
