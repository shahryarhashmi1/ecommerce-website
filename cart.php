<?php

session_start();

// Check sesion
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
  $cartItems = $_SESSION['cart'];
} else {
  $cartItems = array();
}

// Remove item from cart
if (isset($_GET['remove'])) {
  $removeId = $_GET['remove'];
  if (array_key_exists($removeId, $cartItems)) {
    unset($cartItems[$removeId]);
    $_SESSION['cart'] = $cartItems;
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/cart-style.css" rel="stylesheet" />
</head>
<body>
  
  <?php include 'header.php'; ?>

  <!-- Cart section -->
  <div class="container">
    <div class="heading_container">
      <h2>Cart</h2>
    </div>
    <div class="cart_container">
      <?php if (!empty($cartItems)) : ?>
        <table class="cart_table">
          <thead>
            <tr>
              <th>Product</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $totalPrice = 0;
            foreach ($cartItems as $itemId => $item) :
              $productName = $item['name'];
              $productPrice = $item['price'];
              $quantity = $item['quantity'];
              $total = $productPrice * $quantity;
              $totalPrice += $total;
            ?>
              <tr>
                <td class="product_image"><img src="Dashboard/upload/<?php echo $itemId; ?>.jpg" alt="Product Image"></td>
                <td><?php echo $productName; ?></td>
                <td><?php echo $productPrice; ?></td>
                <td><?php echo $quantity; ?></td>
                <td><?php echo $total; ?></td>
                <td class="action"><a href="cart.php?remove=<?php echo $itemId; ?>">Remove</a></td>
              </tr>
            <?php endforeach; ?>
            <tr class="total_row">
              <td colspan="4" class="total_label">Total</td>
              <td colspan="2" class="total_value"><?php echo $totalPrice; ?></td>
            </tr>
          </tbody>
        </table>
        <div class="cart_buttons">
          <a href="watches.php" class="continue_button">Continue Shopping</a>
          <a href="checkout.php" class="checkout_button">Checkout</a>
        </div>
      <?php else : ?>
        <p>Your cart is empty.</p>
        <a href="watches.php" class="continue_button">Continue Shopping</a>
      <?php endif; ?>
    </div>
  </div>

  
  <?php include 'footer.php'; ?>
