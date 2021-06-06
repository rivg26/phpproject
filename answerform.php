<?php 
require_once 'mainHeader.php'; 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $id = null;
}
$conn = OpenCon();
$data = getPayrollAccount($conn,$id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script src="js/answerform.js" type="text/javascript"></script>
    <title>Document</title>
</head>

<body>

    <?php require_once 'includes/answerform.inc.php' ?>

    <form action="" method = "POST">
        <!-- header -->
        <section>
            <div class="container">
                <div class="row">
                    <!-- Parent Column  1-->
                    <div class="col-md-8 lg-8 sm-10 xs-10">
                        <!-- Child Container -->
                        <div class="container my-4 bg-white rounded shadow-sm ">
                            <div class="row">
                                <!-- Child Column 1 -->
                                <div class="col-md-6 sm-6 xs-12">
                                   
                                <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">First Name</label>
                                        <input type="text" class="form-control " name = "fname" id="formGroupExampleInput" value = "<?= $data['fname'] ?>" readonly>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Middle Name</label>
                                        <input type="text" class="form-control " name = "fmname" id="formGroupExampleInput" value = "<?= $data['mname']  ?>" readonly>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">SurName</label>
                                        <input type="text" class="form-control" name = "fsname" id="formGroupExampleInput" value = "<?= $data['lname']  ?>" readonly>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Civil Status</label>
                                        <input type="text" class="form-control " name = "fcivilstatus" id="formGroupExampleInput" value = "<?= $data['civil_status'] ?>" readonly>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Designation</label>
                                        <input type="text" class="form-control " name = "fdesign"  id="formGroupExampleInput" value = "<?= $data['designation']  ?>" readonly>
                                    </div>




                                </div>
                                <!-- Child Column 1 -->
                                <!-- Child Column 2 -->
                                <div class="col-md-6 sm-6 xs-12">
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Qualify Dependents Status</label>
                                        <input type="text" class="form-control " id="formGroupExampleInput" 
                                            placeholder="" name = "fqds" value = "<?= $data['dependents']  ?>">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Pay Date</label>
                                        <input type="date" class="form-control" id="formGroupExampleInput"  name = "fpaydate" value = "<?= $data['payroll_date']  ?>"
                                            placeholder="" >
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Employee Status</label>
                                        <input type="text" class="form-control " id="formGroupExampleInput"  name = "femployeestatus" value = "<?= $data['emp_status']  ?>"readonly
                                            placeholder="Job Order" >
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Employee Number</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="" name = "fen" value = "<?= $data['emp_number']  ?>"  readonly>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Department</label>
                                        <input type="text" class="form-control " id="formGroupExampleInput" value = "<?= $data['department']  ?>" name = "fdepartment"  readonly>
                                    </div>
                                   

                                </div>
                                <!-- Child Column 2 -->
                            </div>
                        </div>
                        <!-- Child Cointainer -->
                    </div>
                    <!-- Parent Column 1 -->
                    <!-- Parent Column 2 -->
                    <div class="col-md-4 lg-4 sm-2 xs-2 ">
                        <div class="container  bg-white rounded shadow-sm ">
                            <div class="row mt-4">
                                <div class="container mt-2">
                                    <img src="pictures/noimage.jpg" alt="" class="img-thumbnail imgsize" >
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Parent Column 2 -->
                </div>
            </div>
        </section>
        <!-- header -->

        <!-- body -->
        <section>
            <div class="container">
                <div class="row">
                    <!-- parent-column -->
                    <!-- Parent Column1 -->
                    <div class="col-md-6 lg-6 sm-12 xs-6">
                        <!-- Child Column1 -->
                        <div class="col-md-12 sm-12">
                            <div class="container bg-white rounded shadow-sm">
                                <h1 class="display-6 mt-4 py-4">Basic Pay</h1>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Rate/Hour</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="" name = "bpratehour" value = "<?= $data['b_rate_hour']  ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">No. of hours/Cut Off</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="" name = "bpnohcutoff" value = "<?= $data['b_num_hour'] ?>">
                                </div>
                                <div class="form-group mb-4 pb-5">
                                    <label for="formGroupExampleInput">Income Per Cut Off</label>
                                    <input type="text" class="form-control " id="formGroupExampleInput"
                                        placeholder="" name = "bpipcutoff" value = "<?= $data['b_income'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- Child Column1 -->
                        <!-- Child Column2 -->
                        <div class="col-md-12 sm-12">
                            <div class="container bg-white rounded shadow-sm">
                                <h1 class="display-6 mt-4 py-4">Honorarium</h1>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Rate/Hour</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="" name = "hratehour" value = "<?= $data['h_rate_hour'] ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">No. of hours/Cut Off</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="" name = "hnohcutoff" value = "<?= $data['h_num_hour'] ?>">
                                </div>
                                <div class="form-group mb-4 pb-5">
                                    <label for="formGroupExampleInput">Total Honorarium Pay</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="" name = "hhpay" value = "<?= $data['h_income'] ?>" readonly>
                                </div>
                            </div>
                            
                        </div>
                        <!-- Child Column2 -->
                        <!-- Child Column3 -->
                        <div class="col-md-12 sm-12">
                            <div class="container bg-white rounded shadow-sm">
                                <h1 class="display-6 mt-4 py-4">Other Income</h1>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Rate/Hour</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="" name = "oiratehour" value = "<?= $data['o_rate_hour'] ?>" >
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">No. of hours/Cut Off</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="" name = "oinohcutoff" value = "<?= $data['o_num_hour'] ?>">
                                </div>
                                <div class="form-group mb-4 pb-5">
                                    <label for="formGroupExampleInput">Total Other Income Pay   </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="" name = "oitotalincome" value = "<?= $data['o_income'] ?>" readonly>
                                </div>
                            </div>
                            
                        </div>
                        <!-- Child Column3 -->
                        <!-- Child Column4 -->
                        <div class="col-md-12 sm-12">
                            <div class="container bg-white rounded shadow-sm">
                                <h1 class="display-6 mt-4 py-4">Summary Income</h1>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Gross Income</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="" name = "grossincome" value = "<?= $data['gross_income'] ?>" readonly>
                                </div>
                                <div class="form-group mb-4 pb-5">
                                    <label for="formGroupExampleInput">Net Income</label>
                                    <input type="text" class="form-control " id="formGroupExampleInput"
                                        placeholder="" name = "netincome" value = "<?= $data['net_income'] ?>" readonly>
                                </div>

                            </div>
                            
                        </div>
                        <!-- Child Column4 -->

                    </div>
                    <!-- Parent Column1 -->


                    <!-- Parent Column2 -->
                    <div class="col-md-6 lg-6 sm-12 xs-6">
                        <!-- Child Column1 -->
                        <div class="col-md-12 sm-12">
                            <div class="container bg-white rounded shadow-sm">
                                <h1 class="display-6 mt-4 py-4">Regular Deductions</h1>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">SSS Contribution</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="0.00" name = "sss" value = "<?= $data['sss_contrib']  ?>" readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Philhealth Contribution</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="0.00" name = "philhealth" value = "<?= $data['ph_contrib']  ?>" readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">PagIbig Contribution</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="0.00" name = "pagibig" value = "<?= $data['pagibig_contrib']  ?>" readonly>
                                </div>
                                <div class="form-group mb-4 pb-5">
                                    <label for="formGroupExampleInput">Income Tax Return</label>
                                    <input type="text" class="form-control " id="formGroupExampleInput"
                                        placeholder="0.00" name = "itr" value = "<?= $data['tax_contrib']  ?>" readonly>
                                </div>
                            </div>
                            

                        </div>
                        <!-- Child Column1 -->
                        <!-- Child Column2 -->
                        <div class="col-md-12 sm-12">
                            <div class="container bg-white rounded shadow-sm">
                                <h1 class="display-6 mt-4 py-4">Other Deductions</h1>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">SSS Loan</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="0.00" name = "osssloan" value = "<?= $data['sss_loan'] ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">PAGIBIG Loan</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="0.00" name = "opagibigloan" value = "<?= $data['pagibig_loan']  ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Faculty Savings Deposit</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="0.00" name = "ofsd" value = "<?=$data['fs_deposit'] ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Faculty Savings Loan</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="0.00" name = "ofsl" value = "<?= $data['fs_loan'] ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Salary Loan</label>
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="0.00" name = "osl" value = "<?= $data['salary_loan'] ?>">
                                </div>
                                <div class="form-group mb-1">
                                    <label for="formGroupExampleInput">Others</label>
                                </div>
                                <div class="form-group mb-4 pb-5">
                                    
                                    <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput"
                                        placeholder="0.00" name = "oo" value = "<?= $data['other_loan'] ?>">
                                </div>
                            </div>

                        </div>
                        <!-- Child Column2 -->
                        <!-- Child Column3 -->
                        <div class="col-md-12 sm-12">
                            <div class="container bg-white rounded shadow-sm">
                                <h1 class="display-6 mt-4 py-4">Deduction Summary</h1>
                                <div class="form-group mb-4 p-2">
                                    <label for="formGroupExampleInput">Rate/Hour</label>
                                    <input type="text" class="form-control mb-5" id="formGroupExampleInput"
                                        placeholder="" name = "dsrh" value = "<?= $data['total_deduction'] ?> "readonly >
                                </div>

                                </div>
                            </div>
                            

                        </div>
                        <!-- Child Column3 -->
                    </div>
                    <!-- Parent Column2 -->
                    <!-- parent-column -->
                </div>
            </div>
        </section>
        <!-- body -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center my-5 ">
                            <button class="btn btn-primary" type="submit" name = "calculategi">Calculate Gross Income </button>
                            <button class="btn btn-primary " type="submit" name = "calculateni">Calculate Net Income</button>
                            <button class="btn btn-warning " type="submit" name = "new">New</button>
                            <button class="btn btn-info " type="submit" name = "printpayslip">Save Transaction</button>
                            <button class="btn btn-info " type="submit" name = "printpayslipdetails">Update Transaction</button>
                            <button class="btn btn-danger" type="submit" name = "cancel">Cancel</button>
                          </div>
                    </div>
                </div>
            </div>
        </section>

    </form>

    <!-- footer -->
  
    <?php require_once 'mainFooter.php'; ?>