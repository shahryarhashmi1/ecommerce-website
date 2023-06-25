<?php include 'header.php'; ?>
	

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
	  <?php
	       			
		include('conn.php');

			$keyword = $_POST['keyword'];

			// Query to search for products
			$query = "SELECT * FROM add_product WHERE product_name LIKE '%$keyword%'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
			?>
        <h2>Search results for <?php echo $keyword; ?></h2>
      </div>
	  
	 
	        <div class="row">
	            <?php
	       			
				include('conn.php');

					$keyword = $_POST['keyword'];

					// Query to search for products
					$query = "SELECT * FROM add_product WHERE product_name LIKE '%$keyword%'";
					$result = mysqli_query($conn, $query);

	       			// Display the search results
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<div class='col-sm-6 col-xl-3'>";
	       						echo "
								   <div class='box'>
								   <a href=''>
									 <div class='img-box'>
									   <img src='Dashboard/upload/".$row['my_image']."' alt='Product Image'>
									 </div>
									 <div class='detail-box'>
									   <h6>".$row['product_name']."</h6>
									   <h6>Price: <span>'$' ".number_format($row['price'], 2)."</span></h6>
									 </div>
									 <a href='product_detail.php?id=".$row['id']."' class='new'>
											<span>Buy Now</span>
									 </a>
									 <a href='mycart.php' class='cart-btn'><i class='fas fa-shopping-cart'></i> </a>
				   
								 </div>
							   </div>
	       						";
							}
					} 
					else {
						echo "No products found.";
					}
					
					// Close the database connection
					mysqli_close($conn);
					?>
	        	</div>
	        	
	        </div>
			<br><br>
	      </section>

<?php include 'footer.php'; ?>
