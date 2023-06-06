<?php
include 'conn.php';
session_start();
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.scss" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

    <!-- header section strats -->
    <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <img src="images/timezonewatches.png" alt="" width="100px">
        </a>

      <!-- for mobile view -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="watches.php">Watches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <form method="POST" class="navbar-form navbar-left" action="search.php">
          <div class="input-group">
              <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
              <span class="input-group-btn" id="searchBtn" style="display:none;">
                  <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
              </span>
          </div>
        </form>
          </ul>

            
      <div class="navbar-custom-menu">
        <ul class="navbar-nav">
            <!-- Menu toggle button -->
            
            <li class="nav-link"><a href="Dashboard/login.php">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a></li>

          <li class="dropdown messages-menu nav-link">
            <!-- Menu toggle button -->
          
      <?php 
      

      if(isset($_SESSION['cart']))
      {
        $count=0;
        $count=count($_SESSION['cart']);
      }
      ?>
        <li class="nav-link"><a href="mycart.php">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i><sup><?php echo $count; ?></sup>
            </a></li>

            <?php
              if(isset($_SESSION['registratin_form'])){
                echo '
                      <li>
                          <a class="nav-link" href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                      </li>
                ';
              }
              else{
                echo "
                  <li><a class='nav-link' href='signin.php'>LOGIN</a></li>
                  <li><a class='nav-link' href='register.php'>SIGNUP</a></li>
                ";
              }
            ?>
        </ul>
      </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->


  