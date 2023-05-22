<?php
include "conn.php";

session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the product from the database
    $query = "DELETE FROM `add_product` WHERE `id` = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: remove_product.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Fetch all products from the database
$query = "SELECT * FROM `add_product`";
$result = mysqli_query($conn, $query);
?>


<!-- header or navbar file attach -->
<?php

include 'dash_header_or_nav.php';

?>
<!-- header or navbar file end -->


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
    <h1>Remove Product</h1>
    
    <div class="table-responsive">
                    <table class="table table-striped">
  
        <thead>
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            while ($row = mysqli_fetch_array($result)) {
            
            ?>
                <tr>
                    <td><img src="upload/<?=$row['my_image']; ?>" alt="Product Image" width="100"></td>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><a href="remove_product.php?id=<?php echo $row['id']; ?>" class="p_remove-button">Remove</a></td>

                </tr>
            <?php 
            }
             ?>
        </tbody>
    </table>
  </div>


<!-- footer file attach -->        
<?php

include 'dash_footer.php';

?>
<!-- footer end -->

<?php mysqli_close($conn); ?>
