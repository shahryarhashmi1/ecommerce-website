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
                  <h4 class="card-title">
                    User Info
                  </h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          
                          <th>
                            Name
                          </th>
                          
                          <th>
                            Email
                          </th>
                          
                          <th>
                          Country
                          </th>
                          
                          <th>
                            Password
                          </th>

                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          include 'conn.php'; 

                          $q = "select * from `registration_form`";

                          $query = mysqli_query($conn,$q);

                          while($res = mysqli_fetch_array($query))
                          {
                        ?>
                        
                        <tr>
                          <td class="py-1">
                            <?php echo $res['id']; ?>
                          </td>

                          <td>
                            <?php echo $res['fullname']; ?>
                          </td>
                          
                          <td>
                            <?php echo $res['email']; ?>
                          </td>

                          <td>
                            <?php echo $res['counrty']; ?>
                          </td>

                          <td>
                            <?php echo $res['password']; ?>
                          </td>

                          <td>
                           
                          </td>
                        </tr>

                        <?php
                            
                          }

                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          
<!-- footer file attach -->        
<?php

include 'dash_footer.php';

?>
<!-- footer end -->