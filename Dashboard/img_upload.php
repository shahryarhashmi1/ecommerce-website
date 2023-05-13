<?php 
		
	include "conn.php";

	if (isset($_POST['sent']) && isset($_FILES['my_image']))
	{

		$heading = $_POST['heading'];
		
        $short_desc = $_POST['short_desc'];

		echo "<pre>";
		print_r($_FILES['my_image']);
		echo "</pre>";

		$img_name = $_FILES['my_image']['name'];
		$img_size = $_FILES['my_image']['size'];
		$tmp_name = $_FILES['my_image']['tmp_name'];
		$error = $_FILES['my_image']['error'];

		if ($error === 0)
		{
			if ($img_size > 12500000)
			{
				$em = "Sorry, your file is too large.";
				
				header("Location: add_product.php?error=$em");
			}
			else
			{
				$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
				
				$img_ex_lc = strtolower($img_ex);

				$allowed_exs = array("jpg", "jpeg", "png"); 

				if (in_array($img_ex_lc, $allowed_exs))
				{
					$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
					
					$img_upload_path = 'upload/'.$new_img_name;
					
					move_uploaded_file($tmp_name, $img_upload_path);

					// Insert into Database
					$sql = "INSERT INTO `punjab`(my_image, heading, short_desc) VALUES ('$new_img_name', '$heading', '$short_desc')";

					mysqli_query($conn, $sql);

					header("Location: add_product.php");
				}
				else
				{
					$em = "You can't upload files of this type";
					
					header("Location: add_product.php?error=$em");
				}
			}
		}
		else
		{
			$em = "unknown error occurred!";
			
			header("Location: add_product.php?error=$em");
		}

	}
	else
	{
		header("Location: add_product.php");
	}
?>