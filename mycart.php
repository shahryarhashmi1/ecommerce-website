<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Update page product image size */
        .table td img {
            width: 45px !important;
            height: 69px !important;
            border-radius: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

    <div class="col-lg-9">
      <table class="table">
        <thead class="text-center">
          <tr>
            <th scope="col">Serial No.</th>
            <th scope="col">Product Image</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Price</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>

        <tbody class="text-center">
          <?php
          include('conn.php');
    

          $total=0;
          if(isset($_SESSION['cart']))
          {
              foreach($_SESSION['cart'] as $key => $value)
              {
                $sr=$key + 1;
                $total=($total+$value['Price'] *$value['Quantity']);
                echo"
                    <tr>
                        <td>$sr</td>
                        <td><img src='".$value['Product_Image']."' alt='Product Image' w></td>
                        <td>$value[Item_Name]</td>
                        <td>$value[Price]<span>$</span></td>
                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                        <td>
                          <form action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                          </form>
                        </td>
                    </tr>
                ";
              }
        }
      // }
          ?>

        </tbody>
      </table>
            </div>
            
      <div class="col-lg-3">
          <div class="border bg-light rounded p-4">
          <h4>Total:</h4>
          <h5 class="text-right"><?php echo $total ?></h5>
          <br>
          <form action="">  
              <br>
            <button class="btn btn-primary btn-block">Make Purchase</button>
          </form>
        </div>
      </div>

      
        </div>
        <br><br>
    </div>
    
    <?php include 'footer.php'; ?>

</body>
</html>