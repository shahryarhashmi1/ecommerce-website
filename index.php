<?php

include 'conn.php';

if(isset($_POST['done']))
	{

		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$q = " INSERT INTO `contact_form`(`fullname`, `email`, `message`) VALUES ('$fullname', '$email', '$message')";

		$query = mysqli_query($conn, $q);
		header("location:index.php");
		
	}

?>

<!-- header file attach -->
<?php

include 'header.php';

?>
<!-- header end -->

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

<!-------------------- slider 1---------------- -->
        <?php

            $q = "SELECT * FROM `index_product`";

            $query = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_array($query)) {

        ?>
          <div class="carousel-item active">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                    <?php echo $row['product_name']; ?>
                    </h1>
                    <p>
                    <?php echo $row['product_detail']; ?>
                    </p>
                    <div class="btn-box">
                      <a href="#cntct" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="img-box">
                    <img src="Dashboard/upload/<?=$row['my_image']?>" alt="image" height="350px">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
            }
          ?>

<!-- ---------------slider 2---------------- -->
          <?php

          $q = "SELECT * FROM `index_product`";

          $query = mysqli_query($conn, $q);

          while ($row = mysqli_fetch_array($query)) {

          ?>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                  <h1>
                  <?php echo $row['product_name']; ?>
                    </h1>
                    <p>
                    <?php echo $row['product_detail']; ?>
                    </p>
                    <div class="btn-box">
                      <a href="#cntct" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="img-box">
                    <img src="Dashboard/upload/<?=$row['my_image']?>" alt="image" height="350px">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>

<!-- --------------slider 3---------------- -->
          <?php

          $q = "SELECT * FROM `index_product`";

          $query = mysqli_query($conn, $q);

          while ($row = mysqli_fetch_array($query)) {

          ?>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                  <h1>
                  <?php echo $row['product_name']; ?>
                    </h1>
                    <p>
                    <?php echo $row['product_detail']; ?>
                    </p>
                    <div class="btn-box">
                      <a href="#cntct" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="img-box">
                    <img src="Dashboard/upload/<?=$row['my_image']?>" alt="image" height="350px">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
            }
          ?>

        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Watches
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $300
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Featured
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $125
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $110
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $145
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w5.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $195
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6  col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $170
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $230
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="watches.php">
          View All
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 col-lg-5 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- contact section -->

  <section id="cntct" class="contact_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>

            <form method="post">
              <div>
                <input type="text" placeholder="Full Name" id="fullname" name="fullname" autocomplete="off" required>
              </div>
              
              <div>
                <input type="email" placeholder="Email"  id="email" name="email" autocomplete="off" required>
              </div>
              
              <div>
                <input type="text" class="message-box" placeholder="Message" id="message" name="message" autocomplete="off" required>
              </div>
              
              <div class="d-flex ">
                <button type="submit" name="done">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

<!-- footer file attach -->
  <?php

    include 'footer.php';

  ?>
<!-- footer end -->