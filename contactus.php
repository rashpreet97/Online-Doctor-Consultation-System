<?php include('header.php'); ?>

	<div class="contact us"  style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#008000;color: #ffff;">Contact Us</h3>

		
		
		<div class="main_content">
			<div class="col-md-6" style="border-right: 2px solid blue;">
				<article>
					<h2>Rashpreet Kaur <h2><h4>Studied MCA in Computer Science Engineering</h4>
							<h5>Institute of Information in Technology and Management,Janakpuri.</h5>
						        <p> https://portfolio.developerRashpreet.com <br>
							https://github.com/rashpreet97 <br>
                                                        https://www.linkedin.com/in/rashpreet-kaur-b93480150 <br>
							https://www.facebook.com/rashpreet.kaur.37017 <br>
							Phone Number: +91 9717425987</p><br>
				</article>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Your Message</h2>
				<form action="" method="post" class="text-center">
						<label>
								First Name: <input type="text" name="firstname" value="">
						</label><br><br>

						<label>
								Last Name: <input type="text" name="lastname" value="">
						</label><br><br>	

						<label>
								Email: <input type="email" name="email"  value="">
						</label><br><br>
						<label>
								Your comment: <textarea name="comment" id="" cols="30" rows="4" required></textarea> 
						</label><br><br>
								
						<input type="submit" value="Send Us" name="submit" style="margin-top: 75px;border-radius: 2px;"/>
						<!-- <button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
 -->
					</form><br><br><br>
			</div>

          
 		</div>

	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
<!-- contact information inserting -->
					<?php

						include('config.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO contact (firstname, lastname,email,comment)
							VALUES ('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('success.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					?> 



	
</body>
</html>

