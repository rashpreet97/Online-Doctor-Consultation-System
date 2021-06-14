<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<!-- <?php include('function.php'); ?> -->


	<div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search Here</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_result.php" method="post" class="form-group">

					<!-- testing -->
					<label>
						Search By:<select name="address" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Sehgal Neo Hospital,Meera Bagh(Paschim Vihar Outer Ring Road</option>
												<option>Fortis Hospital, Shalimar Bagh</option>
												<option>BLK Super Speciality Hospital,Pusa Road</option>
												<option>Sir Ganga Ram Hospital</option>
                                                                                                <option>RML Hospital</option>	
                                                                                                <option>UK Nursing Home</option>
											</select>

					</label><br><br>
					<!-- testing end-->

					<label>
						 Category:<select name="expertise" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Medicine</option>
												<option>Heart</option>
												<option>Neurologist</option>
												<option>Orthopaedics</option>
												<option>Haematology</option>
												<option>Psychiatry</option>
												<option>General Physician</option>
                                                                                                <option>Gynaecology</option>
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>




</body>
</html>