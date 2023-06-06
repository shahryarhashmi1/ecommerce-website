<?php
include "conn.php";

$q = "SELECT id, brand_name FROM add_brand";
$result = mysqli_query($conn, $q);
$brands = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php
include 'conn.php';

if (isset($_POST['brand_name'])) {
  $brand_name = $_POST['brand_name'];

  $q = "INSERT INTO `add_brand`(`brand_name`) VALUES ('$brand_name')";
  $query = mysqli_query($conn, $q);
  header("location: add_product.php");
  exit();
}

if (isset($_POST['done'])) {
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $product_detail = $_POST['product_detail'];
  $brand_id = $_POST['brand_id'];

  // Image Upload 
  $image = $_FILES['my_image']['name'];
  $tmp_image = $_FILES['my_image']['tmp_name'];
  $image_path = 'upload/' . $image;
  move_uploaded_file($tmp_image, $image_path);

  $q = "INSERT INTO `add_product`(`my_image`, `product_name`, `price`, `product_detail`,`brand_id`)
        VALUES ('$image', '$product_name', '$price', '$product_detail','$brand_id')";

  $query = mysqli_query($conn, $q);
  if ($query) {
    header("location: add_product.php");
    exit();
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>

<?php include 'dash_header_or_nav.php'; ?>


<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Product</h4>
            <form class="forms-sample" action="add_product.php" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label>Image upload</label>
                <input type="file" name="my_image" class="file-upload-default" autocomplete="off" required>
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" autocomplete="off" required>
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Watch Name</label>
                <input type="text" name="product_name" class="form-control" id="exampleInputName1" placeholder="Enter Watch Name" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">Price</label>
                <input type="number" name="price" class="form-control" id="exampleInputCity1" placeholder="Enter Price" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label for="exampleInputdetail1">Watch Details</label>
                <input type="text" name="product_detail" class="form-control" id="exampleInputdetail1" placeholder="Enter Watch Details" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label for="exampleInputBrand1">Brand</label>
                <select name="brand_id" class="form-control" id="exampleInputBrand1" required>
                  <option value="">Select Brand</option>
                  <?php foreach ($brands as $brand) { ?>
                    <option value="<?php echo $brand['id']; ?>"><?php echo $brand['brand_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <input type="submit" name="done" class="btn btn-primary mr-2" value="Add">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright ©
      <a href="" target="_blank">TZW.com</a> 2023</span>
  </div>
</footer>


<!--  scripts  -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
<script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="vendors/select2/select2.min.js"></script>
<script src="js/file-upload.js"></script>
<script src="js/typeahead.js"></script>
<script src="js/select2.js"></script>
</body>

</html>
