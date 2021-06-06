<?php

require_once 'mainHeader.php';
$conn = OpenCon();

$id = $_GET['id'];
$data = getUserAccount($conn, $id);
$picPath = $data['picpath'];
$newPicPath = str_replace("../", "", $picPath);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container shadow p-5 mb-5 bg-body rounded">
        <div class="row">
            <div class="col-md-3">
                <img src="<?= $newPicPath ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-9">
                <form action="includes/useraccount.inc.php" method="POST">
                    <div class="row">
                        <div class="col-md-3 sm-12">
                            <input type="hidden" name="yepid" value="<?= $id  ?>">
                            <label for="formGroupExampleInput">First Name</label>
                            <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="firstname" value="<?= $data['fname'] ?>" disabled>
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Middle Name</label>
                            <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="middlename" value="<?= $data['mname'] ?>" disabled>
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Last Name</label>
                            <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="lastname" value="<?= $data['lname'] ?>" disabled>
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Suffix</label>
                            <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="suffix" value="<?= $data['suffix'] ?>" disabled>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Department</label>
                            <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="department" value="<?= $data['department'] ?>" disabled>
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Designation</label>
                            <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="designation" value="<?= $data['designation'] ?>" disabled>
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="username" value="<?= $data['username'] ?>">
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Password</label>
                            <input type="password" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="password">
                        </div>


                    </div>

                    <div class="row mt-3">
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Confirm Password</label>
                            <input type="password" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="confirmpassword">
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">User Type</label>
                            <select class="form-select" aria-label="Default select example" name="usertype" >
                                <option value="" <?= $data['user_type'] == null ? 'selected="selected"' : ''; ?> >Select</option>
                                <option value="cashier one"  <?= $data['user_type'] == "cashier one" ? 'selected="selected"' : ''; ?> >Cashier One</option>
                                <option value="cashier two"  <?= $data['user_type'] == "cashier two" ? 'selected="selected"' : ''; ?>>Cashier Two</option>
                                <option value="accounting"  <?= $data['user_type'] == "accounting" ? 'selected="selected"' : ''; ?>>Accounting Staff</option>
                                <option value="administrator"  <?= $data['user_type'] == "administrator" ? 'selected="selected"' : ''; ?>>Administrator</option>
                            </select>
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">User Status</label>
                            <!-- <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="userstatus" value="> -->
                            <select class="form-select" aria-label="Default select example" name="userstatus" >
                                <option value="" <?= $data['user_type'] == null ? 'selected="selected"' : ''; ?> >Select</option>
                                <option value="active"  <?= $data['user_status'] == "active" ? 'selected="selected"' : ''; ?> >Active</option>
                                <option value="disabled"  <?= $data['user_status'] == "disabled" ? 'selected="selected"' : ''; ?>>Disabled</option>
                            </select>
                        </div>
                        <div class="col-md-3 sm-12">
                            <label for="formGroupExampleInput">Employee Number</label>
                            <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name="empnum" value="<?= $data['emp_number'] ?>" readonly>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <button type="submit" name="update" class="btn btn-primary col-md-3 mx-3">Update</button>
                        <button type="submit" name="delete" class="btn btn-warning col-md-3 mx-3">Delete</button>
                        <button type="submit" name="cancel" class="btn btn-outline-secondary col-md-3 mx-3">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php require_once 'mainFooter.php'; ?>