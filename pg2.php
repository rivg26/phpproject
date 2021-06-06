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
    <link rel="stylesheet" href="css/yay.css">
    <link rel="stylesheet" href="css/sa.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/pg.js"></script>
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

    <section>
        <div class="container-fluid">
            <div class="row">
                <!-- Parent Divider 1 -->
                <div class="col-lg-4 md-4 xs-2 order-2">
                    <div class="container sticky-top">
                        <div class="row">
                            <div class="container bg-white rounded shadow m-4 p-3">
                                <div class="row">
                                    <div class="col-md-12 lg-12 xs-12">
                                        <div class="form-group mb-2">
                                            <label for="formGroupExampleInput">Name of an Item</label>
                                            <input type="text" class="form-control itemname " id="formGroupExampleInput" placeholder="" name="nameofanitem" value="" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="cold-md-12">
                                                <div class="form-group mb-1">
                                                    <label for="formGroupExampleInput">Quantity</label>
                                                    <input type="text" class="form-control bg-white rounded shadow-sm quantity" id="formGroupExampleInput" placeholder="0" name="quantity">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="cold-md-12">
                                                <div class="form-group mb-1">
                                                    <label for="formGroupExampleInput">Price</label>
                                                    <input type="text" class="form-control price" id="formGroupExampleInput" placeholder="0.00" name="price" value="" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="cold-md-12">
                                                <div class="form-group mb-1">
                                                    <label for="formGroupExampleInput">Discount Amount</label>
                                                    <input type="text" class="form-control discountamount" id="formGroupExampleInput" placeholder="0.00" name="discountamount" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="cold-md-12">
                                                <div class="form-group mb-1">
                                                    <label for="formGroupExampleInput">Discounted Amount</label>
                                                    <input type="text" class="form-control discountedamount" id="formGroupExampleInput" placeholder="0.00" name="discountedamount" readonly>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="container bg-white rounded shadow m-4 p-3">
                                <h3 class="mb-3">Summary</h3>
                                <div class="form-group mb-2">
                                    <label for="formGroupExampleInput">Total Quantity</label>
                                    <input type="text" class="form-control tq" id="formGroupExampleInput" placeholder="0.00" name="totalquantity" readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="formGroupExampleInput">Total Discount Given</label>
                                    <input type="text" class="form-control tdg" id="formGroupExampleInput" placeholder="0.00" name="totaldiscountgiven" readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="formGroupExampleInput">Total Discounted Amount</label>
                                    <input type="text" class="form-control tda" id="formGroupExampleInput" placeholder="0.00" name="totaldiscountedamount" readonly>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="container bg-white rounded shadow m-4 p-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="text-center">Cash Given</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="text-center">Change</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control bg-white rounded shadow-sm cashgiven" id="formGroupExampleInput" placeholder="" name="cashgiven">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control  changeinput" id="formGroupExampleInput" placeholder="" name="changeinput" readonly>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="container bg-white rounded shadow m-4 p-4">
                                <div class="row ">
                                    <div class="col-4 po-1">
                                        <button type="button" class="enter">Enter</button>
                                    </div>
                                    <div class="col-6 po-2">
                                        <div class="row button-sizeyay">
                                            <button type="button">/</button>
                                            <button type="button">*</button>
                                            <button type="button">-</button>
                                            <button type="button">+</button>
                                        </div>
                                        <div class="row button-sizeyay">
                                            <button type="button">6</button>
                                            <button type="button">7</button>
                                            <button type="button">8</button>
                                            <button type="button">9</button>
                                        </div>
                                        <div class="row button-sizeyay">
                                            <button type="button">2</button>
                                            <button type="button">3</button>
                                            <button type="button">4</button>
                                            <button type="button">5</button>
                                        </div>
                                        <div class="row button-sizeyay2">
                                            <button type="button">0</button>
                                            <button type="button">.</button>
                                            <button type="button">1</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-xs radiocus">

                                        <input class="form-check-input radiob radiosenior" type="radio" name="radbutton" value="seniorcitizen" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">Senior Citizen</label>

                                        <input class="form-check-input radiob radiodisc" type="radio" name="radbutton" value="withdisccard" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">With Disc Card</label>

                                        <input class="form-check-input radiob radioemp" type="radio" name="radbutton" value="employeedisc" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">Employee Disc</label>

                                        <input class="form-check-input radiob radionum" type="radio" name="radbutton" value="nodisc" id="flexRadioDefault1" name="nodiscount">
                                        <label class="form-check-label" for="flexRadioDefault1">No Discount</label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container buttoncommand">
                                        <button type="submit" name="calculate" id="calculate">Calculate</button>
                                        <button type="submit" name="new" id="new">New</button>
                                        <button type="submit" name="cancel" id="cancel">Cancel</button>
                                        <button type="button" name="exit">Exit</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <!-- Parent Divider 2 -->
                <div class="col-lg-8 md-4 xs-10 order-1 tried ">

                    <div class="container m-4 p-3 ">

                        <div class="row g-5">

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza1.jpg" alt="" class="img-fluid card-img-top" id="picpizza1">
                                <div class="p-4">
                                    <label id="pizza1">Pizza al taglio</label>
                                    <img src="picturerating/rate1.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza2.jpg" alt="" class="img-fluid card-img-top" id="picpizza2">
                                <div class="p-4">
                                    <label id="pizza2">Pizzette </label>
                                    <img src="picturerating/rate2.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza3.jpg" alt="" class="img-fluid card-img-top" id="picpizza3">
                                <div class="p-4">
                                    <label id="pizza3">Sicilian Pizza</label>
                                    <img src="picturerating/rate2.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza4.jpg" alt="" class="img-fluid card-img-top" id="picpizza4">
                                <div class="p-4">
                                    <label id="pizza4">Manakish</label>
                                    <img src="picturerating/rate4.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza5.jpg" alt="" class="img-fluid card-img-top" id="picpizza5">
                                <div class="p-4">
                                    <label id="pizza5">Tarte flambee</label>
                                    <img src="picturerating/rate5.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza6.jpg" alt="" class="img-fluid card-img-top" id="picpizza6">
                                <div class="p-4">
                                    <label id="pizza6">Primavera</label>
                                    <img src="picturerating/rate6.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza7.jpg" alt="" class="img-fluid card-img-top" id="picpizza7">
                                <div class="p-4">
                                    <label id="pizza7">Pizza Romana</label>
                                    <img src="picturerating/rate7.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza8.jpg" alt="" class="img-fluid card-img-top" id="picpizza8">
                                <div class="p-4">
                                    <label id="pizza8">Proscuitto</label>
                                    <img src="picturerating/rate8.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza9.jpg" alt="" class="img-fluid card-img-top" id="picpizza9">
                                <div class="p-4">
                                    <label id="pizza9">Grizzled Pizza</label>
                                    <img src="picturerating/rate9.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza10.jpg" alt="" class="img-fluid card-img-top" id="picpizza10">
                                <div class="p-4">
                                    <label id="pizza10">Pinsa Romana</label>
                                    <img src="picturerating/rate10.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza11.jpg" alt="" class="img-fluid card-img-top" id="picpizza11">
                                <div class="p-4">
                                    <label id="pizza11">Pizza Fritta</label>
                                    <img src="picturerating/rate11.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza12.jpg" alt="" class="img-fluid card-img-top" id="picpizza12">
                                <div class="p-4">
                                    <label id="pizza12">Padellino</label>
                                    <img src="picturerating/rate12.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza13.jpg" alt="" class="img-fluid card-img-top" id="picpizza13">
                                <div class="p-4">
                                    <label id="pizza13">Fugazza</label>
                                    <img src="picturerating/rate13.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza14.jpg" alt="" class="img-fluid card-img-top" id="picpizza14">
                                <div class="p-4">
                                    <label id="pizza14">Grandma Pie</label>
                                    <img src="picturerating/rate4.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza15.jpg" alt="" class="img-fluid card-img-top" id="picpizza15">
                                <div class="p-4">
                                    <label id="pizza15">Stuffed Pizza</label>
                                    <img src="picturerating/rate10.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza16.jpg" alt="" class="img-fluid card-img-top" id="picpizza16">
                                <div class="p-4">
                                    <label id="pizza16">Apizza</label>
                                    <img src="picturerating/rate11.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza17.jpg" alt="" class="img-fluid card-img-top" id="picpizza17">
                                <div class="p-4">
                                    <label id="pizza17">Fugazetta</label>
                                    <img src="picturerating/rate12.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza18.jpg" alt="" class="img-fluid card-img-top" id="picpizza18">
                                <div class="p-4">
                                    <label id="pizza18">Pizza Rustica</label>
                                    <img src="picturerating/rate15.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza19.jpg" alt="" class="img-fluid card-img-top" id="picpizza19">
                                <div class="p-4">
                                    <label id="pizza19">Garlic Fingers</label>
                                    <img src="picturerating/rate16.png" class="img-fluid mb-2">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 bg-white rounded shadow-sm conb">
                                <img src="picturepizza/pizza20.jpg" alt="" class="img-fluid card-img-top" id="picpizza20">
                                <div class="p-4">
                                    <label id="pizza20">Alla Pala</label>
                                    <img src="picturerating/rate17.png" class="img-fluid mb-2">
                                </div>
                            </div>



                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>