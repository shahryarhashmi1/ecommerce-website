<?php

include 'conn.php';

?>

<!-- header file attach -->
<?php

include 'header.php';

?>



<section class="product_detail layout_padding">
      
		<?php
            $q = "SELECT * FROM `add_brand`";
            $query = mysqli_query($conn, $q);

            $row = mysqli_fetch_array($query);
          ?> 
            <div class="container">
              <div class="row">
				<div class="col-md-6">
                  <div class="img-box">
                    <img src="Dashboard/upload/<?=$row['my_image']?>" alt="image">
                  </div>
                </div>  
				
				<div class="col-md-6 col-xl-4">
                  <div class="detail-box">
                    <h1>
                    <?php echo $row['product_name']; ?>
                    </h1>
                    <p>
                    <?php echo $row['product_detail']; ?>
                    </p>
                    <div class="btn-box">
                      <a href="#cntct" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>



    </section>

<!-- footer file attach -->
<?php

include 'footer.php';

?>
<!-- footer end -->