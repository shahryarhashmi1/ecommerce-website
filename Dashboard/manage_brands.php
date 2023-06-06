<?php
include "conn.php";

session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: login.php");
    exit();
}

// Add new brand
if (isset($_POST['add_brand'])) {
    $brand_name = $_POST['brand_name'];

    $brand_name = $_POST['brand_name'];

// Check if the brand name already exists
$check_query = mysqli_query($conn, "SELECT * FROM `add_brand` WHERE `brand_name` = '$brand_name'");
if (mysqli_num_rows($check_query) > 0) {
    echo '<script>alert("Brand already exists. Please add a different brand."); window.location.href = "manage_brands.php";</script>';
    exit;
} else {
    // Insert the new brand into the database
    $insert_query = "INSERT INTO `add_brand` (`brand_name`) VALUES ('$brand_name')";
    mysqli_query($conn, $insert_query);
    header("Location: manage_brands.php");
    exit;
}

}

// Remove brand

if (isset($_GET['remove_brand'])) {
    $brand_id = $_GET['remove_brand'];

    // Delete brand from the database
    $query = "DELETE FROM `add_brand` WHERE `id` = $brand_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: manage_brands.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Update brand 

if (isset($_POST['update_brand'])) {
    $brand_id = $_POST['brand_id'];
    $new_brand_name = $_POST['brand_name'];

    // Check if the brand ID is valid
    $check_query = mysqli_query($conn, "SELECT * FROM `add_brand` WHERE `id` = $brand_id");
    if (mysqli_num_rows($check_query) == 0) {
        $message = "Invalid brand ID.";
    } else {
        // Check if the new brand name already exists (excluding the current brand being updated)
        $check_query = mysqli_query($conn, "SELECT * FROM `add_brand` WHERE `brand_name` = '$new_brand_name' AND `id` != $brand_id");
        if (mysqli_num_rows($check_query) > 0) {
            $message = "Brand already exists. Please update with a different brand name.";
        } else {
            // Escape the brand name
            $new_brand_name = mysqli_real_escape_string($conn, $new_brand_name);

            // Update the brand name in the database
            $update_query = "UPDATE `add_brand` SET `brand_name` = '$new_brand_name' WHERE `id` = $brand_id";
            $result = mysqli_query($conn, $update_query);

            if ($result) {
                header("Location: manage_brands.php");
                exit;
            } else {
                $message = "Failed to update the brand name. Please try again.";
            }
        }
    }
}


// Fetch all brands from the database
$query = "SELECT * FROM `add_brand`";
$result = mysqli_query($conn, $query);
?>

<?php include 'dash_header_or_nav.php'; ?>

<!-- HTML code for manage_brands page -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h1 style="text-align: center;">Manage Brands</h1>
                    <br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Add Brand Form -->
                                <form action="manage_brands.php" method="post">
                                    <div class="form-group">
                                        <label for="brandName">Brand Name</label>
                                        <input type="text" class="form-control" id="brandName" name="brand_name" required placeholder="Enter brand Name ">

                                    </div>
                                    <button type="submit" class="btn btn-primary" name="add_brand">Add Brand</button>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <!-- Brands Table -->
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Brand Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                                            <tr>
                                                <td><?= $row['brand_name']; ?></td>
                                                <td>
                                                    <a class="b_edit_button" href="#" data-toggle="modal" data-target="#editModal<?= $row['id']; ?>">Edit</a> |
                                                    <a class="b_remove_button" href="manage_brands.php?remove_brand=<?= $row['id']; ?>" onclick="return confirm('Are you sure you want to remove this brand?')">Remove</a>
                                                </td>
                                            </tr>
                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Brand</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="manage_brands.php" method="post">
                                                                <input type="hidden" name="brand_id" value="<?= $row['id']; ?>">
                                                                <div class="form-group">
                                                                    <label for="editBrandName">Brand Name</label>
                                                                    <input type="text" class="form-control" id="editBrandName" name="brand_name" value="<?= $row['brand_name']; ?>" required>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary" name="update_brand">Update</button>
                                                                    
                                                                    <?php if (isset($message)) { ?>
                                                                    <script>
                                                                        alert("<?php echo $message; ?>");
                                                                        window.location.href = "manage_brands.php";
                                                                        </script>
                                                                        <?php } ?>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Edit Modal -->
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
</div>


<!-- js for logout-->
<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- no need offooter -->

<?php mysqli_close($conn); ?>
