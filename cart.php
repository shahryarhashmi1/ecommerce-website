<!-- cart style -->
<link href="css/cart.css" rel="stylesheet" />

<!-- header file attach -->
<?php

include 'header.php';

?>
<!-- header end -->

      <!-- Start Cart Section  -->


  <section class="cart_section">

    <div class="cart-items">
      <div class="cart-item">
        <div class="item-image">
          <img src="images/w1.png" alt="item 1">
        </div>
        <div class="item-details">
          <h3 class="item-title">Item 1</h3>
          <p class="item-price">$15.00</p>
          <div class="item-quantity">
            <input type="number" value="1" min="1" max="3">
            <button class="remove-item">Remove</button>
          </div>
          <p class="item-total">$15.00</p>
        </div>
      </div>

      <div class="cart-item">
        <div class="item-image">
          <img src="images/w2.png" alt="Item 2">
        </div>
        <div class="item-details">
          <h3 class="item-title">Item 2</h3>
          <p class="item-price">$15.00</p>
          <div class="item-quantity">
            <input type="number" value="1" min="1" max="3">
            <button class="remove-item">Remove</button>
          </div>
          <p class="item-total">$15.00</p>
        </div>
      </div>
    </div>

    <div class="cart-summary">
      <div class="subtotal">
        <span class="subtotal-text">Subtotal:</span>
        <span class="subtotal-amount">$25.00</span>
      </div>
      <div class="checkout">
        <button class="checkout-btn">Proceed to Checkout</button>
      </div>
    </div>
    
  </section>
    
  <script src="js/cart.js"></script>

<!-- End Cart Section -->
   
   
  <!-- footer file attach -->
<?php

include 'footer.php';

?>
<!-- footer end -->
