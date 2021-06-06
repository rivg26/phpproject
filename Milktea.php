<?php require_once 'mainHeader.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style5.css">
    <script type = "text/javascript" src = "js/milktea.js"></script>
  <title>Document</title>
</head>
<style>

div.trystick{
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

</style>
<body>



    <form action="">
      <div class="row m-3 ">


        <!-- Food Order Selection -->
  
        <div class="col-md-4 p-5">
          <div class="container-md trystick">
            <!-- Food Bundle Selection -->
            <div class="container-md mt-3 p-5 bg-white rounded shadow-sm ">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <h3>Coffee Bundle </h3>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundlea" type="radio" name="flexRadioDefault " id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Coffee Bundle A
                    </label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundleb" type="radio" name="flexRadioDefault " id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Coffee Bundle B
                    </label>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Food Bundle A Choices -->
            <div class="container-md mt-3 p-5 bg-white rounded shadow-sm">
              <div class="row">
                <div class="col-m2-12 mb-3">
                  <h3>Coffee Bundle A</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundlea" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                     Espresso Short (hot only, 8oz)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12 ">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundlea" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Cortado Tall (12oz)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundlea" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">
                      Lungo Grande (16oz)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundlea" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Cappuccino Venti (hot, 20oz)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundlea" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Doppio Venti (iced, 24oz)
                    </label>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Food Bundle B Choices -->
            <div class="container-md mt-3 p-5 bg-white rounded shadow-sm">
              <div class="row">
                <div class="col-m2-12 mb-3">
                  <h3>Coffee Bundle B</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundleb" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">
                     Mocha Grande (16oz)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundleb" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">
                    Bicerin Venti (iced, 24oz)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundleb" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">
                      Mazagran Tall (12oz)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundleb" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">
                    Chai Latte Tall (16oz)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-m2-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input bundleb" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">
                      Lunggo (16oz)
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
  
        <!-- Pizza choices -->
        <div class="col-md-8 p-5">
          <div class="container-md bg-white rounded shadow-sm">
            <div class="row mt-4">
              <div class="col-md-12">
                <h1 class="display-5 my-5 mx-3 cofeecontainer">Coffee Selection</h1>
              </div>
            </div>
            <div class="row">
              <div class="photo-gallery">
                <div class="container-fluid">
                  <div class="px-lg-5">
  
                    <div class="row">
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/1.png" alt=""
                            class="img-fluid card-img-top" id = "coffeepic1">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Espresso</a></h5>
                            <p class="small text-muted mb-0">Most popular in European countries and now in all over the
                              world. the most common misconception that people come across is that espresso is a roasted
                              coffee.</p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2 "><input type="checkbox" class = "coffeeclass" id = "coffee1"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/2.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Cortado</a></h5>
                            <p class="small text-muted mb-0">This drink is usually not found in every cafes of your place
                              or country. As, it is very rare in India to get but you can try and get it. <br><br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee2"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/3.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Macchiato</a></h5>
                            <p class="small text-muted mb-0">Macchiato is popular in all coffee cafes. It is because many
                              like it or attract to its name and order, then become a fan for its savor. <br><br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee3"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/4.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Lungo</a></h5>
                            <p class="small text-muted mb-0">Lungo or long shot is a shot which is more than single one or
                              less than double shot of espresso.<br><br><br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee4"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/5.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Cappuccino</a></h5>
                            <p class="small text-muted mb-0">Cappucino is a common and famous among all the coffee drinks.
                              It got that name because the color of it is similar to the robes of Capuchin monks.
                              <br><br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee5"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/6.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Doppio</a></h5>
                            <p class="small text-muted mb-0">Double shot of espresso is basically Doppio with the use of
                              double coffee filter and double the amount of boldness through one cup of
                              coffee.<br><br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee6"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/7.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Ristretto</a></h5>
                            <p class="small text-muted mb-0">The clear form of espresso is called Ristretto. The boldest
                              flavor you could ever encounter. It is prepared using the portafilter and hot water through
                              beans.<br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee7"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/8.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Chai Latte</a></h5>
                            <p class="small text-muted mb-0">The chai latte which is conquering all the Starbucks outlets
                              in western countries. The Indian things are swinging across the world. The chai is popular
                              and included in the menu of many restaurants.<br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee8" ><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/9.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Caffe Shakerato</a></h5>
                            <p class="small text-muted mb-0">Shakerato is usually made from espresso shots and ice cubes
                              shaking in a cocktail shaker with chocolate syrup. Frothy consistency is formed.<br><br><br>
                            </p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee9"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/10.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Black Eye</a></h5>
                            <p class="small text-muted mb-0">This coffee drink is not just espresso and ice cubes it is
                              more than that and people love to drink it again and again.<br><br><br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee10"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/11.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Latte Macchiato</a></h5>
                            <p class="small text-muted mb-0">You can expect a mixture of balanced flavors and delicate
                              flavors from latte Macchiato and you won’t be disappointed at all. The milk and espresso are
                              so perfectly balanced.<br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee11"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/12.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Mocha</a></h5>
                            <p class="small text-muted mb-0">Chocolate everyone’s favorite and when added with coffee
                              gives you the product which everyone can love and drink again. It’s basically espresso and
                              hot milk and sweetness through cocoa powder </p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee12"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                        <!-- End -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="row">
              <div class="photo-gallery">
                <div class="container-fluid">
                  <div class="px-lg-5">
  
                    <div class="row">
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/13.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Café Corretto</a></h5>
                            <p class="small text-muted mb-0">Everything has to be tried with different things to give it a
                              new touch. This time we can add grappa to the drink it is obviously given to you on the
                              side<br><br><br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee13"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/14.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Frappe</a></h5>
                            <p class="small text-muted mb-0">It was accidentally invented as most of the coffee drinks. It
                              was invented by Nescafe and served in may cafes across the world. It is served with Greek
                              foam that gives the coffee new touch and popularly had in France</p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee14"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/15.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Bicerin</a></h5>
                            <p class="small text-muted mb-0">Bicerin was traditionally served in Italy and it became
                              famous all over the world. Being a traditional drink you can definitely spot the difference
                              between the newly formed coffee drinks and cold coffee drinks.</p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee15"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/16.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Irish Coffee</a></h5>
                            <p class="small text-muted mb-0">Irish coffee is so different when it comes to a coffee
                              recipe. They just don’t add espresso and sugar and give it to you. Irish coffee is made
                              using hot coffee, Irish , brown sugar, and thick cream <br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee16"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/17.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Espresso Romano</a></h5>
                            <p class="small text-muted mb-0">This coffee drink is made with a shot of espresso blended
                              with sugar and lemon rind. The lemon gives it a hit which is loved by many.<br><br>
  
                            </p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee17"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/18.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Turkish Coffee</a></h5>
                            <p class="small text-muted mb-0">Turkish coffee is prepared with a different approach. The
                              sugar is added during the boiling of water and do not make it vapored off.<br><br><br> </p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee18"><span
                                  class="checkbox-check mx-2"></span>Add to cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/19.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Mazagran</a></h5>
                            <p class="small text-muted mb-0">This is that unpopular beverage that wasn’t able to compete
                              with other beverages and was not able to face the failure.<br><br><br></p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee19"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
  
                      <!-- Gallery item -->
                      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="pictures/20.png" alt=""
                            class="img-fluid card-img-top">
                          <div class="p-4">
                            <h5> <a href="#" class="text-dark">Caffe Medici</a></h5>
                            <p class="small text-muted mb-0"> Doppio is taken and poured above orange peel also lemon peel
                              can be used. The chocolate syrup is added to it and topped with stirred cream to avoid bitte
                              savor of espresso. </p>
                            <div
                              class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <label class="checkbox mx-2"><input type="checkbox" class = "coffeeclass" id = "coffee20"><span
                                  class="checkbox-check mx-2"></span>Add to Cart</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="container-md">
            <div class="row align-items-center">
              <div class="col-md-6 p-5 bg-white rounded shadow-sm mt-2">
                <div class="row">
                  <div class="container-md mb-5">
                    <div class="col-md-12">
                      <h3 class="display-6">
                        Price Breakdown
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-2">
                    <div class="col-md-12">
                      <div class="input-group input-group-sm mb-1">
                        <span class="input-group-text bg-white rounded shadow-sm" id="inputGroup-sizing-sm">
                          <p class="break-alignment-p"><strong>Price</strong></p>
                        </span>
                        <input type="text" class="form-control" id = "price" aria-label="Sizing example input"
                          aria-describedby="inputGroup-sizing-sm" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <div class="input-group input-group-sm mb-1 ">
                        <span class="input-group-text bg-white rounded shadow-sm" id="inputGroup-sizing-sm">
                          <p class="break-alignment-p"><strong>Quantity</strong></p>
                        </span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id = "quantity"
                          aria-describedby="inputGroup-sizing-sm">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group input-group-sm mb-1">
                      <span class="input-group-text bg-white rounded shadow-sm" id="inputGroup-sizing-sm">
                        <p class="break-alignment-p"><strong>Discount Amount</strong></p>
                      </span>
                      <input type="text" class="form-control" aria-label="Sizing example input" id = "discountamount"
                        aria-describedby="inputGroup-sizing-sm" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group input-group-sm mb-1">
                      <span class="input-group-text bg-white rounded shadow-sm" id="inputGroup-sizing-sm">
                        <p class="break-alignment-p"><strong>Discounted Amount</strong></p>
                      </span>
                      <input type="text" class="form-control" aria-label="Sizing example input" id = "discountedamount"
                        aria-describedby="inputGroup-sizing-sm" readonly>
                    </div>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-md-12 ">
                    <div class="input-group input-group-sm mb-1 ">
                      <span class="input-group-text bg-white rounded shadow-sm" id="inputGroup-sizing-sm">
                        <p class="break-alignment-p"><strong>Total Bills</strong></p>
                      </span>
                      <input type="text" class="form-control" aria-label="Sizing example input" id = "totalbills"
                        aria-describedby="inputGroup-sizing-sm" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group input-group-sm mb-1">
                      <span class="input-group-text bg-white rounded shadow-sm" id="inputGroup-sizing-sm">
                        <p class="break-alignment-p"><strong>Total Quantity</strong></p>
                      </span>
                      <input type="text" class="form-control" aria-label="Sizing example input" id = "totalquantity"
                        aria-describedby="inputGroup-sizing-sm" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group input-group-sm mb-1">
                      <span class="input-group-text bg-white rounded shadow-sm" id="inputGroup-sizing-sm">
                        <p class="break-alignment-p"><strong>Cash Given</strong></p>
                      </span>
                      <input type="text" class="form-control" aria-label="Sizing example input" id ="cashgiven"
                        aria-describedby="inputGroup-sizing-sm">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group input-group-sm mb-1">
                      <span class="input-group-text bg-white rounded shadow-sm" id="inputGroup-sizing-sm">
                        <p class="break-alignment-p"><strong>Change</strong></p>
                      </span>
                      <input type="text" class="form-control " aria-label="Sizing example input" id = "change"
                        aria-describedby="inputGroup-sizing-sm" readonly>
                    </div>
                  </div>
                </div>
  
              </div>
  
              <div class="col-md-6 ">
                <div class="container-md">
                  <div class="row">
                    <h3>Order Summary </h3>
                    <div class="col-md-6 p-5 bg-white rounded-4 shadow-sm">
                        <p id = "orderinfo"></p>
                    </div>
                    <div class="col-md-6 p-5 bg-white rounded shadow-sm" id = "displayPicture">

                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-6">
                      <div class="d-grid gap-2 col-12 mx-auto">
                        <button class="btn btn-outline-success" type="submit" id = "calculate">Calculate Bills</button>
                        <button class="btn btn-outline-success" type="submit">Print Transaction</button>
                        <button class="btn btn-outline-success" type="submit">Remove Order</button>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 col-12 mx-auto ">
                        <button class="btn btn-outline-success" type="submit" id = "changebtn">Change</button>
                        <button class="btn btn-outline-success" type="submit" id = "new">New</button>
                        <button class="btn btn-outline-success" type="submit">Exit</button>
  
                      </div>
  
                    </div>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
      </div> <!-- containerfluid -->
  
    </form>



</body>

<?php require_once 'mainFooter.php'?>