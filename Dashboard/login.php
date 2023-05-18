<?php

    include "conn.php";

    if(isset($_POST['done']))
    {
        $query = "SELECT * FROM `loginform` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['AdminLoginId']=$_POST['username'];

            header("location:index.php");
        }
        else
        {
            echo"Invalid Username and Password...";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TZW Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/timezonewatches.png" alt="logo">
              </div>
              <h4>
                Hello! let's get started
              </h4>

              <form class="pt-3" method="post">
                <div class="form-group"  for="exampleInputEmail1" >
                  <input type="username" autocomplete="off" required id="exampleInputEmail1" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                
                <div class="form-group">
                  <input type="password"  name="password" placeholder="Enter Password" autocomplete="off" required class="form-control form-control-lg" id="exampleInputPassword1">
                </div>

                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="done" href="index.php" value="LOGIN IN">
                </div>

                <center>
                  <div class="mt-3">
                    <a class="btn btn-secondary btn-primary btn-lg font-weight-medium auth-form-btn" href="../index.php">
                      Go Back
                    </a>
                  </div>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
</body>

</html>
