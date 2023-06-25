<?php
include 'conn.php';
session_start();

// Add item to cart
if (isset($_POST['Add_To_Cart'])) {
    $item = array(
        'Item_Name' => $_POST['Item_Name'],
        'Price' => $_POST['Price'],
        'Product_Image' =>$_POST['Product_Image'],
        'Quantity' => 1
    );

    // Check if cart is empty or not
    if (isset($_SESSION['cart'])) {
        // If item already exists in cart, increase the quantity
        $itemExists = false;
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] === $item['Item_Name']) {
                $_SESSION['cart'][$key]['Quantity'] += 1;
                $itemExists = true;
                break;
            }
        }

        // If item doesn't exist in cart, add it to the cart
        if (!$itemExists) {
            array_push($_SESSION['cart'], $item);
        }
    } else {
        // If cart is empty, create a new cart and add the item to it
        $_SESSION['cart'] = array($item);
    }

    // Redirect to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

// Remove item from cart
if (isset($_POST['Remove_Item'])) {
    $itemName = $_POST['Item_Name'];

    // Loop through the cart and remove the item by name
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] === $itemName) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
        
        // Reset array keys after removing item
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    // Redirect to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
