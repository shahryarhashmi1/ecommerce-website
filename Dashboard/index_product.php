<?php

include "conn.php";

$q = "SELECT my_image, product_name, product_detail, FROM index_product";



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
            

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    Add Product to Index Page
                  </h4>

                  <form class="forms-sample" action="index_upload.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      <label>
                        Image upload
                      </label>

                      <input type="file" name="my_image" class="file-upload-default" autocomplete="off" Required>

                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image"
                          autocomplete="off" Required>

                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">
                            Upload
                          </button>
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">
                        Watch Name
                      </label>
                      <input type="text" name="product_name" class="form-control" id="exampleInputName1"
                        placeholder="Enter Watch Name" autocomplete="off" Required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputdetail1">
                        Watch Details
                      </label>
                      <input type="text" name="product_detail" class="form-control" id="exampleInputdetail1"
                        placeholder="Enter Watch Details" autocomplete="off" Required>
                    </div>


                    <input type="submit" name="done" class="btn btn-primary mr-2" Value="Add">

                    <!-- <button class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->



        <!--brand partial -->
        <div class="content-wrapper">
          <div class="row">
          


  <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href=""
                target="_blank">TZW.com</a> 2023</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>