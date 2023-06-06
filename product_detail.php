<!DOCTYPE html>
<html>
<head>
  <title>Product Detail</title>
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/product_detail.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
  <!-- Header file -->
  <?php include 'header.php'; ?>

  <!-- Product Detail -->
  <div class="container">
    <?php
    include('conn.php');

    // Fetch the product details
    $productId = $_GET['id'];
    $query = "SELECT p.*, b.brand_name FROM add_product p
              JOIN add_brand b ON p.brand_id = b.id
              WHERE p.id = '$productId'";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);

    // Check if the product exists
    if ($product) {
      // Get the product image
      $productImage = $product['my_image'];

      // Get the product category
      $productCategory = $product['brand_name'];

      // Get the product name
      $productName = $product['product_name'];

      // Get the product price
      $productPrice = $product['price'];

      // Get the product description
      $productDescription = $product['product_detail'];

      // Get the brand name
      $brandName = $product['brand_name'];
      ?>
    <form action="manage_cart.php" method="POST">

      <div class="product-detail-container">
        <!-- Left Column (Product Image) -->
        <div class="left-column">
          <img src="Dashboard/upload/<?php echo $productImage; ?>" alt="Product Image">
        </div>

        <!-- Right Column -->
        <div class="right-column">
          <div class="product-category">
            Category: <?php echo $productCategory; ?>
          </div>
          <h1 class="product-name"><?php echo strtoupper($productName); ?></h1>
          <div class="product-description">
            <p><?php echo $productDescription; ?></p>
          </div>
          <div class="product-price">
            <span><?php echo $productPrice; ?>$</span>
          </div>
          <div class="product-actions">
            <button type="submit" class="cart-btn" name="Add_To_Cart"><i class="fas fa-cart-plus" ></i>Add to cart</button>
            <a href="#" class="buy-now-btn"><i class="fas fa-check"></i> Buy Now</a>
          </div>
          
          <input type="hidden" name="Item_Name" value="<?php echo strtoupper($productName); ?>">
          <input type="hidden" name="Price" value="<?php echo $productPrice; ?>">
          <input type="hidden" name="Product_Image" value="Dashboard/upload/<?php echo $productImage; ?>">
        </div>
      </div>
    </form>
    <?php
    } else {
      // The product does not exist
      echo "<p>The product you requested does not exist.</p>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
  </div>

  <!-- Footer file -->
  <?php include 'footer.php'; ?>

</body>
</html>
