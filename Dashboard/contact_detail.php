
<?php

include 'dash_header_or_nav.php';

?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    Contact Details
                  </h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          
                          <th>
                            First name
                          </th>
                          
                          <th>
                            Email
                          </th>
                          
                          <th>
                            Number
                          </th>
                          
                          <th>
                            Message
                          </th>

                          <th>
                            Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          include 'conn.php'; 

                          $q = "select * from `contact_form`";

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
                            <?php echo $res['number']; ?>
                          </td>

                          <td>
                            <?php echo $res['message']; ?>
                          </td>

                          <td>
                            <button class="btn btn-danger">
                              <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">
                                Delete
                              </a>
                            </button>
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
>        
<?php
include 'dash_footer.php';
?>
