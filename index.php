<?php

include 'conn.php';

//shop Section
$query = "SELECT * FROM add_product";
$result = mysqli_query($conn, $query);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

//contact us section
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

<?php

include 'header.php';

?>


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
        <h2>Latest Watches</h2>
      </div>
      <div class="row">
        <?php if (!empty($products)): ?>
          <?php foreach ($products as $product): ?>
            <div class="col-sm-6 col-xl-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="Dashboard/upload/<?php echo $product['my_image']; ?>" alt="Product Image">
                  </div>
                  <div class="detail-box">
                    <h6><?php echo $product['product_name']; ?></h6>
                    <h6>Price: <span><?php echo '$' . number_format($product['price'], 2); ?></span></h6>
                  </div>
                  <a href="product_detail.php?id=<?php echo $product['id']; ?>" class="new">
  <span>Buy Now</span>
</a>
<a href="" class="cart-btn"><i class="fas fa-shopping-cart"></i> </a>



              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p>No products found.</p>
        <?php endif; ?>
      </div>
      <div class="btn-box">
        <a href="watches.php">View All</a>
      </div>
    </div>
    <br><br>
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