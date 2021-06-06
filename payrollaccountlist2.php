<?php 

    session_start();

    require_once 'includes/functions.inc.php';
    require_once 'includes/dbh.inc.php';
    if(isset($_SESSION['username'] )){
        $username = $_SESSION['username'] ;
    }
    else{
        $username = null;
        header("Location: loginpage.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <h1 class="navbar-brand ms-3" href="#">Star Code<Center></Center></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="nav justify-content-end" >
                        <li class="nav-item ">
                            <a class="nav-link active text-white" aria-current="page" href="#"><i class="fas fa-user" style="margin-right:10px;"></i><?= $username ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt" style="margin-right:10px;"></i>Log Out</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
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
            window.location.href = "answerform2.php?id=" + id;
        });
        $("#myTable").DataTable();

    });
</script>
<?php require_once 'mainFooter.php'; ?>