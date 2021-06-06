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
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/mainpage.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/erp1.css">
    <!-- Font Awesome JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<style>
    thead th {
        font-size: 15px;
    }

    .dataTables_filter {
        margin-bottom: 30px;
    }
</style>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Star Code</h3>
            </div>

            <ul class="list-unstyled components">
                <p><em>Administrator Menu</em></p>
                <li>
                    <a href="homepage.php" class="mainNav" link="home">Home</a>
                </li>
                <li id="empNavBtn">
                    <a href="employeelist.php" class="mainNav" link="employee">Employee</a>
                </li>
                <li>
                    <a href="payrollaccountlist.php" class="mainNav" link="payroll">Payroll</a>
                </li>
                <li>
                    <a href="Milktea.php" class="mainNav" link="pos a">Point of Sale A</a>
                </li>
                <li>
                    <a href="pg.php" class="mainNav" link="pos b">Point of Sale B</a>
                </li>
                <li>
                    <a href="#" class="mainNav" link="sales pos a">Sales Point of Sale A</a>
                </li>
                <li>
                    <a href="#" class="mainNav" link="sales pos b">Sales Point of Sale B</a>
                </li>
                <li>
                    <a href="useraccountlist.php" class="mainNav" link="user account">User Account</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>

                </li>
                <li>

                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto ">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-user" style="margin-right:10px;"></i><?= $username?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" style="margin-right:10px;"></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid mt-5 contain">