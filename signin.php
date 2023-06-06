<?php

    include "conn.php";

    if(isset($_POST['done']))
    {
        $query = "SELECT * FROM `registration_form` WHERE `fullname` = '$_POST[fullname]' AND `password` = '$_POST[password]'";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['AdminLoginId']=$_POST['fullname'];

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
  <link rel="stylesheet" href="Dashboasrd/vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="Dashboasrd/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="Dashboard/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
				<h3>&nbsp</h3>
              </div>
              <h4>
                Hello! let's get started
              </h4>

              <form class="pt-3" method="post">
                <div class="form-group"  for="exampleInputEmail1" >
                  <input type="fullname" autocomplete="off" required id="exampleInputEmail1" name="fullname" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                
                <div class="form-group">
                  <input type="password"  name="password" placeholder="Enter Password" autocomplete="off" required class="form-control form-control-lg" id="exampleInputPassword1">
                </div>

                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="done" href="index.php" value="LOGIN IN">
                </div>

                  <div class="mt-3">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                  </div>
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