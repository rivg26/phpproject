<?php
require_once 'includes/functions.inc.php';
require_once 'includes/dbh.inc.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/erp1.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    thead th {
        font-size: 15px;
    }

    #loader-img {
        width: 100px;
        height: 100px;
        position: absolute;
        top: calc(50% - 50px);
        left: calc(50% - 50px);
        z-index: 1;
        display: none;
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
                    <a href="" class= "mainNav" link= "home">Home</a>
                </li>
                <li id="empNavBtn">
                    <a href="#" class= "mainNav" link = "employee">Employee</a>
                </li>
                <li>
                    <a href="#" class= "mainNav" link = "payroll">Payroll</a>
                </li>
                <li>
                    <a href="#" class= "mainNav" link = "pos a">Point of Sale A</a>
                </li>
                <li>
                    <a href="#" class= "mainNav" link = "pos b">Point of Sale B</a>
                </li>
                <li>
                    <a href="#" class= "mainNav" link = "sales pos a">Sales Point of Sale A</a>
                </li>
                <li>
                    <a href="#" class= "mainNav" link = "sales pos b">Sales Point of Sale B</a>
                </li>
                <li>
                    <a href="#" class= "mainNav" link = "user account">User Account</a>
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
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container mt-5 contain">
                <img src="pictures/rocket.gif" id = "loader-img" alt="">

            </div>


        </div>

        <div class="overlay"></div>


        <!-- Popper.JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
        <script src="js/upload.js"></script>
        <script type="text/javascript" src="js/control.js"></script>

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

                $(document).on('click', '.mainNav', function(){
                    $('.loader-img').fadeIn();
                    var self = this;
                    setTimeout(function(){
                        var link = $(self).attr('link');
                        switch(link){
                            case 'home':
                                var component = "";
                                break;
                            case 'employee':
                                var component = "employeelist.php";
                                break;
                            case 'payroll':
                                var component = "answerform.php";
                                break;
                        }
                        if(component){
                            $(".contain").load(component,function(){
                                $('.loader-img').fadeOut();
                            });
                        }
                        else{
                            $(".loader-img").hide();
                        }
                    },1000);
                    return false;
                });
            });
        </script>
</body>

</html>