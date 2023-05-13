<!DOCTYPE html>
<html>
<head>
    <title>Add to cart</title>


    <link rel="shortcut icon" href="images/favicon.png" />

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 800px;
      margin: 30px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .product {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .product img {
      width: 100px;
      margin-right: 10px;
    }

    .product-info {
      flex-grow: 1;
    }

    .product-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .product-price {
      font-size: 16px;
      color: #888;
    }

    .add-to-cart {
      display: inline-block;
      background-color: #4caf50;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .add-to-cart:hover {
      background-color: #45a049;
    }

    .cart-notification {
      background-color: #f44336;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-top: 20px;
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Product Name</h1>
    <div class="product">
      <img src="w1.png" alt="Product Image">
      <div class="product-info">
        <div class="product-title">Product Title</div>
        <div class="product-price">$19.99</div>
      </div>
      <a href="#" class="add-to-cart">Add to Cart</a>
    </div>
    <div class="cart-notification">Item added to cart</div>
  </div>

  <script>
    const addToCartButton = document.querySelector('.add-to-cart');
    const cartNotification = document.querySelector('.cart-notification');

    addToCartButton.addEventListener('click', function(e) {
      e.preventDefault();
      cartNotification.style.display = 'block';
      setTimeout(function() {
        cartNotification.style.display = 'none';
      }, 2000);
    });
  </script>
</body>
</html>
