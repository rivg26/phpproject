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
                    <th>Civil Status</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Employee Status</th>
                    <th>Department Status</th>
                </tr>
            </thead>
            <?php
            require_once 'includes/dbh.inc.php';
            require_once 'includes/functions.inc.php';

            $conn = OpenCon();
            payrollQuery($conn);

            ?>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.payrollAccClick').click(function() {
            let id = $(this).attr('row.id');
            window.location.href = "answerform.php?id=" + id;
        });
        $("#myTable").DataTable();

    });
</script>
<?php require_once 'mainFooter.php'; ?>