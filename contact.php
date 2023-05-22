<?php

include 'conn.php';

if(isset($_POST['done']))
	{

		$fullname = $_POST['fullname'];
		$email    = $_POST['email'];
		$message  = $_POST['message'];

		$q = " INSERT INTO `contact_form`(`fullname`, `email`, `message`) VALUES ('$fullname', '$email', '$message')";

		$query = mysqli_query($conn, $q);
		header("location:contact.php");
		
	}

?>


<!-- header file attach -->
<?php

include 'header.php';

?>
<!-- header end -->

  <!-- contact section -->

  <section id="cntct" class="contact_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>

            <form method="post">
              <div>
                <input type="text" placeholder="Full Name" id="fullname" name="fullname" autocomplete="off" required>
              </div>
              
              <div>
                <input type="email" placeholder="Email"  id="email" name="email" autocomplete="off" required>
              </div>
              
              <div>
                <input type="text" class="message-box" placeholder="Message" id="message" name="message" autocomplete="off" required>
              </div>
              
              <div class="d-flex ">
                <button type="submit" name="done">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- footer file attach -->
  <?php

    include 'footer.php';

  ?>
<!-- footer end -->