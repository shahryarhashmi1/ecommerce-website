<?php

include "conn.php";

?>

<!-- header file attach -->
<?php

include 'header.php';

?>
<!-- header end -->

    <!-- collatory -->

    <section class="category_section">

      <div class="categories">
        <nav>
        <ul id="category-list">
            <?php

        $q = "SELECT * FROM `add_brand`";

        $query = mysqli_query($conn, $q);

        while ($row = mysqli_fetch_array($query)) {

          ?> 
          <li class="category_link" onclick="changeColor(this)" data-category="<?php echo $row['brand_name']; ?>"><?php echo $row['brand_name']; ?></li>
          <?php
        }
        ?>
        </ul>
      </nav>
      </div>
      
    </section>

    <!--end collatory -->
    

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <main class="product-list">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Watches
        </h2>
      </div>

      <div class="row">

        <?php

        $q = "SELECT * FROM `add_product`";

        $query = mysqli_query($conn, $q);

        while ($row = mysqli_fetch_array($query)) {

          ?>
          <div class="col-sm-6 col-xl-3">
            
              <div class="product-item" data-category="<?php echo $row['product_name']; ?>">
            <div class="box">
              <div class="img-box" >
                <img src="Dashboard/upload/<?=$row['my_image']?>" alt="content">
              </div>
              <div class="detail-box">
                <h6>
                  <?php echo $row['product_name']; ?>
                </h6>
                <h6>
                  Price: <span style=" color: black;">$</span>
                  <span>
                    <?php echo $row['price']; ?>
                  </span>
                </h6>
              </div>
            <div class="cart_button">
              <a href="cart.php">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
            </div>
              <button style="border: none; background-color:red;" onclick="location.href='detail.php';" class="new">
                <span>
                  Buy Now
                </span>
              </button>
              </div>
            </div>
          </div>

          <?php
        }
        ?>

      </div>
    </div>
    </main>
  </section>

  <!-- end shop section -->
    <!-- category js -->
<script src="js/category.js"></script>

<!-- footer file attach -->
  <?php

    include 'footer.php';

  ?>
<!-- footer end -->
  