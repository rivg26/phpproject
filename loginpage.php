<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rrdc-signup.css">
    <link rel="stylesheet" href="css/rrdc-signup2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center my-4">
							<h1>Star Code</h1>
						 </div>

					</div>
                   <form id = "form">
                           <div class="form-group mb-3">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="email" name="email"  class="form-control" id="sign-username" placeholder="Enter Username">
                           </div>
                           <div class="form-group mb-3">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="sign-password"  class="form-control"  placeholder="Enter Password">
                           </div>
                           <div class="form-group mt-4 ">
                              <p class="text-center ">By logging in you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center mt-4">
                              <button id= "login" type="submit" name = "submit">Log In</button>
                           </div>
                           <div class="col-md-12 my-4">
                              <ul id = "form-messages">

                              </ul>
                           </div>


                           <div class="form-group mt-5">
                              <p class="text-center">&#169;All Rights Reserved</p>
                           </div>
                        </form>
                 
				</div>
			</div>
</body>
<script type = "text/javascript" src = "js/login.js"></script>
 </html>