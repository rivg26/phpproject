<?php
session_start();
require_once 'includes/functions.inc.php';
require_once 'includes/dbh.inc.php';

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
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
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');



    .carousel-caption p {
        color: white;
    }

    .carousel-caption h1 {
        color: white;
        font-family: 'Pacifico';
    }

    .carousel-caption {
        top: 50%;
        transform: translateY(-50%);
        bottom: initial;

    }

    .carousel-item {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .carousel-item::before {
        content: "";
        display: block;
        position: absolute;
        top: 0%;
        left: 0%;
        bottom: 0%;
        right: 0%;
        background: #000;
        opacity: 0.7;
    }

    #carouselview{
        border-radius: 3rem;
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
                                <a class="nav-link" href="#"><i class="fas fa-user" style="margin-right:10px;"></i><?= $username ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" style="margin-right:10px;"></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row">
                <div class="col-md-5">
                    <div class="container-fluid" id="carouselview">

                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="pictures/coffee1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1>Espresso</h1>
                                        <p>"It's a brew-tiful day to have a Starcode drink."</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="pictures/cofee2.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1>StarCode</h1>
                                        <p>"May your Starcode always be stronger than your Monday."</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="pictures/coffee3.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1>Dark Coffee</h1>
                                        <p>"Everything I brew, I brew it for you."</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>




        <!-- Popper.JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

        <script src="js/upload.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });

            });
        </script>
</body>

</html>