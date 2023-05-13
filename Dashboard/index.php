<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    TZW Admin
  </title>
  <link rel="stylesheet" href="vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="css/vertical-layout-light/style.css">

  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
          data-toggle="minimize">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="typcn typcn-user-outline mr-0"></i>
              <span class="nav-profile-name">
                Sherry
              </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="login.php" class="dropdown-item">
                <i class="typcn typcn-power text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <div class="d-flex sidebar-profile">
              <div class="sidebar-profile-image">
                <img src="images/faces/face29.png" alt="image">
                <span class="sidebar-status-indicator"></span>
              </div>
              <div class="sidebar-profile-name">
                <p class="sidebar-name">
                  Sherry
                </p>
                <p class="sidebar-designation">
                  Welcome
                </p>
              </div>
            </div>

            <p class="sidebar-menu-title">Dash menu</p>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-briefcase menu-icon"></i>
              <span class="menu-title">Contact Details</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="contact_detail.php">Contact Detail</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.php">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.php">Typography</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
              aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="add_product.php">Add Product</a></li>
                <li class="nav-item"><a class="nav-link" href="remove_product.php">Remove Product</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="chartjs.php">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="basic-table.php">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="typcn typcn-compass menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="mdi.php">Mdi icons</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="typcn typcn-globe-outline menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="error-404.php"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="error-500.php"> 500 </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0 font-weight-bold">Admin Sherry</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-3 d-flex grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between">
                    <h4 class="card-title mb-3">Sessions by Channel</h4>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="d-flex justify-content-between mb-4">
                            <div class="font-weight-medium">Empolyee Name</div>
                            <div class="font-weight-medium">This Month</div>
                          </div>
                          <div class="d-flex justify-content-between mb-4">
                            <div class="text-secondary font-weight-medium">Connor Chandler</div>
                            <div class="small">$ 4909</div>
                          </div>
                          <div class="d-flex justify-content-between mb-4">
                            <div class="text-secondary font-weight-medium">Russell Floyd</div>
                            <div class="small">$857</div>
                          </div>
                          <div class="d-flex justify-content-between mb-4">
                            <div class="text-secondary font-weight-medium">Douglas White</div>
                            <div class="small">$612 </div>
                          </div>
                          <div class="d-flex justify-content-between mb-4">
                            <div class="text-secondary font-weight-medium">Alta Fletcher </div>
                            <div class="small">$233</div>
                          </div>
                          <div class="d-flex justify-content-between mb-4">
                            <div class="text-secondary font-weight-medium">Marguerite Pearson</div>
                            <div class="small">$233</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 d-flex grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between">
                    <h4 class="card-title mb-3">Sales Analytics</h4>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="d-md-flex mb-4">
                        <div class="mr-md-5 mb-4">
                          <h5 class="mb-1"><i class="typcn typcn-globe-outline mr-1"></i>Online</h5>
                          <h2 class="text-primary mb-1 font-weight-bold">23,342</h2>
                        </div>
                        <div class="mr-md-5 mb-4">
                          <h5 class="mb-1"><i class="typcn typcn-archive mr-1"></i>Offline</h5>
                          <h2 class="text-secondary mb-1 font-weight-bold">13,221</h2>
                        </div>
                        <div class="mr-md-5 mb-4">
                          <h5 class="mb-1"><i class="typcn typcn-tags mr-1"></i>Marketing</h5>
                          <h2 class="text-warning mb-1 font-weight-bold">1,542</h2>
                        </div>
                      </div>
                      <canvas id="salesanalyticChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 d-flex grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between">
                    <h4 class="card-title mb-3">Card Title</h4>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-5">
                        <div class="mr-1">
                          <div class="text-info mb-1">
                            Total Earning
                          </div>
                          <h2 class="mb-2 mt-2 font-weight-bold">287,493$</h2>
                          <div class="font-weight-bold">
                            1.4% Since Last Month
                          </div>
                        </div>
                        <hr>
                        <div class="mr-1">
                          <div class="text-info mb-1">
                            Total Earning
                          </div>
                          <h2 class="mb-2 mt-2  font-weight-bold">87,493</h2>
                          <div class="font-weight-bold">
                            5.43% Since Last Month
                          </div>
                        </div>
                      </div>
                      <canvas id="barChartStacked"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- partial:partials/_footer.php -->
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
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/progressbar.js/progressbar.min.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>