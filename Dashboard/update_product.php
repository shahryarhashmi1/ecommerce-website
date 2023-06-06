<?php
include "conn.php";

session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: login.php");
    exit();
}

// Handle product update
if (isset($_POST['update'])) {
    $id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $product_detail = $_POST['product_detail'];
    $brand_id = $_POST['brand_id'];

    // Check if a new image file is uploaded
    if ($_FILES['product_image']['tmp_name']) {
        $image = $_FILES['product_image']['name'];
        $target = "upload/" . basename($image);
        move_uploaded_file($_FILES['product_image']['tmp_name'], $target);

        // Update the product image and brand in the database
        $query = "UPDATE `add_product` SET `product_name`='$product_name', `price`='$price', `product_detail`='$product_detail', `my_image`='$image', `brand_id`='$brand_id' WHERE `id`='$id'";
    } else {
        // Update the product details and brand without changing the image
        $query = "UPDATE `add_product` SET `product_name`='$product_name', `price`='$price', `product_detail`='$product_detail', `brand_id`='$brand_id' WHERE `id`='$id'";
    }

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: update_product.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Fetch all products and brands 
$productQuery = "SELECT p.*, b.brand_name FROM `add_product` p INNER JOIN `add_brand` b ON p.brand_id = b.id";
$productResult = mysqli_query($conn, $productQuery);

$brandQuery = "SELECT * FROM `add_brand`";
$brandResult = mysqli_query($conn, $brandQuery);
?>


<?php include 'dash_header_or_nav.php'; ?>

<head>
    <style>
        /* Update page product image size */
        .table td img {
            width: 45px !important;
            height: 69px !important;
            border-radius: 100%;
        }

        .p_update-button {
            background-color: red;
            color: white;
            padding: 10px 10px;
            border-radius: 5px;
            text-decoration: none;
            border: none;
        }
    </style>
</head>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h1>Update Product</h1>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Detail</th>
                                        <th>Brand</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($productResult)) { ?>
                                        <tr>
                                            <td><img src="upload/<?= $row['my_image']; ?>" alt="Product Image"></td>
                                            <td><?= $row['product_name']; ?></td>
                                            <td><?= $row['price']; ?></td>
                                            <td><?= $row['product_detail']; ?></td>
                                            <td><?= $row['brand_name']; ?></td>
                                            <td>
                                                <a href="#" class="p_update-button" data-toggle="modal" data-target="#updateModal<?= $row['id']; ?>">Update</a>
                                            </td>
                                        </tr>

                                        <!-- Update Modal -->
                                        <div class="modal fade" id="updateModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="updateModalLabel">Update Product</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="update_product.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="product_id" value="<?= $row['id']; ?>">
                                                            <div class="form-group">
                                                                <label for="updateProductName">Product Name</label>
                                                                <input type="text" class="form-control" id="updateProductName" name="product_name" value="<?= $row['product_name']; ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="updateProductPrice">Price</label>
                                                                <input type="number" class="form-control" id="updateProductPrice" name="price" value="<?= $row['price']; ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="updateProductDetail">Product Detail</label>
                                                                <textarea class="form-control" id="updateProductDetail" name="product_detail" required><?= $row['product_detail']; ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="updateProductBrand">Brand</label>
                                                                <select class="form-control" id="updateProductBrand" name="brand_id">
                                                                    <?php while ($brandRow = mysqli_fetch_array($brandResult)) { ?>
                                                                        <option value="<?= $brandRow['id']; ?>" <?php if ($brandRow['id'] == $row['brand_id']) echo "selected"; ?>><?= $brandRow['brand_name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="updateProductImage">Product Image</label>
                                                                <input type="file" class="form-control-file" id="updateProductImage" name="product_image">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" name="update">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Update Modal -->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- js for logout-->
  <script src="vendors/js/vendor.bundle.base.js"></script>
<!-- no need offooter -->
</div>

<?php
mysqli_close($conn);
?>
