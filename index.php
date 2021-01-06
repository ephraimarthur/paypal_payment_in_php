<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Belitech Shop</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="logo" src="img/logo.png" alt="">
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent ">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a style="color:#fff !important;font-weight:bold" class="nav-link active " aria-current="page" href="./">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a style="color:#fff !important;font-weight:bold" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a  class="dropdown-item " href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a style="color:#fff !important;font-weight:bold" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>



    <!-- Display products here-->
    <div class="container products_container">
          <div class="row">
              <div class="col-md-3 boxes">
                  <div align="center" class="products_cards">
                       <a href="#"><img class="img-thumbnail img-responsive" src="img/img_1.jpg" alt="img_1"></a>
                        <h1>Nike Shoes</h1>
                        <p class="price">Price: $40</p>
                        <p class="description">
                          et, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore
                        </p>
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">

                            <!-- Identify the merchenat emails address of the paypal account-->
                            <input type="hidden" name="business" value="sb-laxrj3538160@business.example.com">

                            <!--Specify a buy now button-->
                            <input type="hidden" name="cmd" value="_xclick">

                            <!-- Specify the details of the item the buyer will purchase-->
                            <input type="hidden" name="item_name" value="Nike Shoes">
                            <input type="hidden" name="item_number" value="34467">
                            <input type="hidden" name="amount" value="40">
                            <input type="hidden" name="currency_code" value="USD">

                            <!-- Specify thr callback urls -->
                            <input type="hidden" name="return" value="http://localhost/Belitech_YT/paypal_express_pay/success.php">
                            <input type="hidden" name="cancel_return" value="http://localhost/Belitech_YT/paypal_express_pay/cancel.php">

                            <br>
                            <!-- Display the payment button-->
                          <!-- <button type="button" class="btn btn-block btn-info btn-lg" name="button">Buy Now</button> -->
                          <input type="image" style="width:150px;height:auto" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                        </form>
                  </div>
              </div>

              <div class="col-md-1"></div>


              <div class="col-md-3 boxes">
                  <div align="center" class="products_cards">
                       <a href="#"><img class="img-thumbnail img-responsive" src="img/img_2.jpg" alt="img_1"></a>
                        <h1>Flat Screen Tv</h1>
                        <p class="price">Price: $200</p>
                        <p class="description">
                          et, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore
                        </p>
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">

                            <!-- Identify the merchenat emails address of the paypal account-->
                            <input type="hidden" name="business" value="sb-laxrj3538160@business.example.com">

                            <!--Specify a buy now button-->
                            <input type="hidden" name="cmd" value="_xclick">

                            <!-- Specify the details of the item the buyer will purchase-->
                            <input type="hidden" name="item_name" value="Flat Screen Tv">
                            <input type="hidden" name="item_number" value="34454">
                            <input type="hidden" name="amount" value="200">
                            <input type="hidden" name="currency_code" value="USD">

                            <!-- Specify thr callback urls -->
                            <input type="hidden" name="return" value="http://localhost/Belitech_YT/paypal_express_pay/success.php">
                            <input type="hidden" name="cancel_return" value="http://localhost/Belitech_YT/paypal_express_pay/cancel.php">

                            <br>
                            <!-- Display the payment button-->
                          <!-- <button type="button" class="btn btn-block btn-info btn-lg" name="button">Buy Now</button> -->
                          <input type="image" style="width:150px;height:auto" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                        </form>
                  </div>
              </div>


              <div class="col-md-1"></div>


              <div class="col-md-3 boxes">
                  <div align="center" class="products_cards">
                       <a href="#"><img class="img-thumbnail img-responsive" src="img/img_3.jpg" alt="img_1"></a>
                        <h1>iPhone12 Pro</h1>
                        <p class="price">Price: $1000</p>
                        <p class="description">
                          et, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore
                        </p>
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">

                            <!-- Identify the merchenat emails address of the paypal account-->
                            <input type="hidden" name="business" value="sb-laxrj3538160@business.example.com">

                            <!--Specify a buy now button-->
                            <input type="hidden" name="cmd" value="_xclick">

                            <!-- Specify the details of the item the buyer will purchase-->
                            <input type="hidden" name="item_name" value="Flat Screen Tv">
                            <input type="hidden" name="item_number" value="4567">
                            <input type="hidden" name="amount" value="1000">
                            <input type="hidden" name="currency_code" value="USD">

                            <!-- Specify thr callback urls -->
                            <input type="hidden" name="return" value="http://localhost/Belitech_YT/paypal_express_pay/success.php">
                            <input type="hidden" name="cancel_return" value="http://localhost/Belitech_YT/paypal_express_pay/cancel.php">

                            <br>
                            <!-- Display the payment button-->
                          <!-- <button type="button" class="btn btn-block btn-info btn-lg" name="button">Buy Now</button> -->
                          <input type="image" style="width:150px;height:auto" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                        </form>
                  </div>
              </div>

              <div class="col-md-1"></div>



          </div>
    </div>





<br><br><br><br>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
