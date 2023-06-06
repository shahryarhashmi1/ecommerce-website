<?php
include('conn.php');

// Fetch all the brands
$query = "SELECT * FROM add_brand";
$result = mysqli_query($conn, $query);
$brands = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Check if a brand is selected
if (isset($_GET['brand'])) {
  $selectedBrand = $_GET['brand'];

  if ($selectedBrand == 'all') {

    // Fetch all products if 'all' brand is selected
    $query = "SELECT * FROM add_product";
  } else {

    // Fetch products based on the selected brand
    $query = "SELECT * FROM add_product WHERE brand_id = '$selectedBrand'";
  }

  // Execute the query
  $result = mysqli_query($conn, $query);
  $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
  // No brand selected, fetch all products
  $query = "SELECT * FROM add_product";
  $result = mysqli_query($conn, $query);
  $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


mysqli_close($conn);
?>


<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Watches</title>
  <link href="css/watch-style.css" rel="stylesheet" />
  
</head>
<body>


  <!-- shop section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Watches Collection</h2>
      </div>
      
     <!-- Brand selection section -->
<div class="category_container">
  <ul class="category_list">
    <li class="category_item">
      <a href="watches.php?brand=all" class="category_link">All</a>
    </li>
    <?php if (!empty($brands)): ?>
      <?php foreach ($brands as $brand): ?>
        <li class="category_item">  
          <a href="watches.php?brand=<?php echo $brand['id']; ?>" class="category_link" data-category="<?php echo $brand['brand_name']; ?>"><?php echo $brand['brand_name']; ?></a>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>
</div>
<!-- End of Brand selection section -->

      
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
                  <a href="mycart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> </a>

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
    <br>
  </section>
  <!-- end shop section -->

  <?php include 'footer.php'; ?>

</body>
</html>
