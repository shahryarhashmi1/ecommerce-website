<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Main Page</title>
  <style>
    
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: rgb(255, 255, 255);
      color: blue;
      padding: 20px;
    
    }

    .header h1 {
      margin: 0;
      font-size: 30px;
      font-weight: bold 700;
    }

    .content {
      background-color: rgb(255, 255, 255);
      padding: 20px;
    }

    .dashboard-card {
      background-color: #fff;
      border-radius: 6px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
    }

    .dashboard-card h2 {
      margin: 0;
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }

    .dashboard-card p {
      margin-top: 10px;
      color: #777;
    }

    .dashboard-card .card-icon {
      font-size: 36px;
      color: rgb(255, 0, 0); /* red */
      margin-bottom: 10px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin: -10px;
    }

    .col-sm-6 {
      width: 50%;
      padding: 10px;
    }

    @media (max-width: 767px) {
      .col-sm-6 {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <?php include 'dash_header_or_nav.php'; ?>

  <!-- Dashboard Main Page -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="header">
        <h1>Welcome, Admin Sherry</h1>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-sm-6">
            <div class="dashboard-card">
              <i class="card-icon">📊</i>
              <h2>Analytics</h2>
              <p>View and analyze website data and statistics.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="dashboard-card">
              <i class="card-icon">💼</i>
              <h2>Orders</h2>
              <p>Manage and track customer orders and purchases.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="dashboard-card">
              <i class="card-icon">📝</i>
              <h2>Content</h2>
              <p>Create and edit website content and pages.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="dashboard-card">
              <i class="card-icon">📧</i>
              <h2>Messages</h2>
              <p>Read and reply to customer messages and inquiries.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include 'dash_footer.php'; ?>
</body>
</html>
