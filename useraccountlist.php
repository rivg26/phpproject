<?php require_once 'mainHeader.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <div class="container mt-5">
        <table class="display table table-light table-striped table-hover table-bordered" id="myTable">
            <thead class="table-primary align-middle">
                <tr>
                    <th>Employee Number</th>
                    <th>Employee Name</th>
                    <th>Username</th>
                    <th>User Type</th>
                    <th>User Status</th>
                    <th>Department</th>
                    <th>Designation</th>
                </tr>
            </thead>
            <?php
            require_once 'includes/dbh.inc.php';
            require_once 'includes/functions.inc.php';

            $conn = OpenCon();
            employeeQuery($conn);

            ?>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.userAccClick').click(function() {
            let id = $(this).attr('row.id');
            window.location.href = "useraccount.php?id=" + id;
        });
        $("#myTable").DataTable();

    });
</script>
<?php require_once 'mainFooter.php'; ?>