<?php

include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Time Zone Watches
  </title>

  <style>
    html
    {
      scroll-behavior: smooth;
    }
  </style>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/timezonewatches.png" alt="" width="100px">
          </a>

        

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="watches.php"> Watches </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signin.php"> signin </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Sign Up</a>
              </li>
            </ul>
            <div class="user_option-box">
              <a href="Dashboard/login.php">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a href="cart.php">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->


    <!-- ------------single product detail------------ -->

    <section class="single_product">

    <div class="small-container single-product">
        <div class="row">
            <div class="col2">
                <img src="images/products/Featured Products/f1.jpeg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/products/Featured Products/f1.jpeg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/products/Featured Products/f2.jpeg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/products/Featured Products/f3.jpeg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/products/Featured Products/f4.jpeg" width="100%" class="small-img">
                    </div>
                </div>





            </div>
            <div class="col2">
                <p>Home / Formal-Shirt</p>
                <h1>Classic formal shirt</h1>
                <h4>$100.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta sunt nihil, blanditiis repellat eos
                    quo reiciendis excepturi sequi nostrum reprehenderit. Fugiat eveniet aperiam est </p>
            </div>
        </div>
    </div>
    <!-- ------------title------------ -->
    <div class="small-container">
        <div class="row row2">
            <h2>Releted Products</h2>
            <p>View More</p>
        </div>
    </div>



    <!-- --------------product-------------- -->
    <div class="small-container">
        <div class="row">
            <div class="col4">
                <img src="images/products/Latest/shirt.jpg">
                <h4>Classic shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$100.00</p>
            </div>
            <div class="col4">
                <img src="images/products/Latest/shoes.jpg">
                <h4>Bucik Men's Tan Lace-up Derby Formal Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$150.00</p>
            </div>
            <div class="col4">
                <img src="images/products/Latest/dress.jpg">
                <h4>Westchic Plain Black Georgette Maxi Dress for Women/Girl</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$80.00</p>
            </div>
            <div class="col4">
                <img src="images/products/Shoes/flip-flop.jpg">
                <h4>Flip-Flop</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$100.00</p>
            </div>
        </div>


    </div>

    </section>
    
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with
            </p>

            <!-- <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div> -->
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Peshawar Saddar
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +92 31234567
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  tzw99@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Follow Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <span>
                  Twitter
                </span>
              </a>

              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>
                  Facebook
                </span>
              </a>

              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <span>
                  Instagram
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Our Pages
            </h4>
            <div class="contact_link_box">
              <a href="index.php">
                <span>
                  Home
                </span>
              </a>

              <a href="watches.php">
                <span>
                  Watches
                </span>
              </a>

              <a href="about.php">
                <span>
                  About
                </span>
              </a>

              <a href="contact.php">
                <span>
                  Contact
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="#">Sherry</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->



  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

    <!---------------js of toggle menu------------>
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- -------------js for product gallery----------- -->

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function () {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function () {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function () {
            ProductImg.src = SmallImg[2].src;
        }



    </script>



</body>

</html>