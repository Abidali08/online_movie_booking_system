<?php
include('header.php');
?>


<!-- login sesion check -->
<?php 

if(!$_SESSION['ux']){
 
    echo 
      "
      <script>window.location.assign('signin.php')</script>
      ";
    
    
   }
?>
<!-- login sesion check -->


<?php

// getting specific movie id for booking
$mov_book_id=$_GET['movbook'];


$fetch_mov_book=mysqli_query($con,"select * from addmovie where movie_id='$mov_book_id'");
$movie_booking_details=mysqli_fetch_assoc($fetch_mov_book);

?>








<!-- book ticket content -->
<div class="container" style="margin-top:100px;">
<h1 class="text-center text-white my-5 pt-5">MOVIE SCHEDULES</h1>
<div class="col-12 col-sm-12 col-lg-12">
							<div class="card card--list" style="background:transparent;border:none;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php  echo "Admin/upload-images/".$movie_booking_details['movie_img'] ?>" alt="">
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div>
											<h3  class="display-5  text-white"><?php  echo $movie_booking_details['movie_name']; ?> (3D)</h3>

											</div>
											<!-- indus , lang  -->

											<div class="card__description">

										<!-- cinema  -->
										   <p style="color:white;"> Cinema Name :

										        <?php 
													
													$cin_res=mysqli_query($con,"select cinema_name from cinema where cin_id='$movie_booking_details[movie_cin_id]'");
													$cin_data=mysqli_fetch_assoc($cin_res);
													echo "<h3 class='text-white'>".$cin_data['cinema_name']."</h3>";
													
													
												?>

										    </p>
										<!-- cinema  -->

										  <!-- time  -->
										  <p style="color:white;"> Movie Timimgs :
                                         
                                         <?php 
                                         	
                                         	echo "<h3 class='text-white'>".$movie_booking_details['movie_duration']."</h3>";
                                         	
                                         	
                                         ?>
                                         </p>
                                         <!-- time  -->
                                         <!-- select day  -->
                                         
                                           <form action="" method="post">

									<!-- hidden input -->
                                        <input type="hidden"   name="ux_nam"   value="<?php echo $_SESSION['ux']; ?>">
                                        <input type="hidden"   name="ux_mail"   value="<?php  echo $_SESSION["ux_email"]; ?>">
                                        <input type="hidden"   name="ux_sel_mov_dur"   value="<?php  echo $movie_booking_details['movie_duration']; ?>">
                                        <input type="hidden"   name="ux_sel_mov_img"   value="<?php  echo $movie_booking_details['movie_img']; ?>">
                                        <input type="hidden"   name="ux_sel_mov_cin"   value="<?php echo $cin_data['cinema_name']; ?>">
                                        <input type="hidden"   name="ux_sel_mov_name"   value="<?php  echo $movie_booking_details['movie_name']; ?>">
									<!-- hidden input -->



                                           <!-- date and time -->
										   <p style="color:white;">Which Show do you want to go?</p>
										   <select  name="mov_book_date" class="form-control"         style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);border:none;color:white;">
                                                             <option disabled selected>Select Your Show !</option>
                                                             <option><?php echo date("d-M-l"); ?></option>
                                                             <option><?php echo date("d-M-l",strtotime( "+1 days" )); ?></option>
                                                             <option><?php echo date("d-M-l",strtotime( "+2 days" )); ?></option>
															 <option><?php echo date("d-M-l",strtotime( "+3 days" )); ?></option>
															 <option><?php echo date("d-M-l",strtotime( "+4 days" )); ?></option>
															 <option><?php echo date("d-M-l",strtotime( "+5 days" )); ?></option>
                                            </select>

											<!-- date and time -->

											<!-- seat -->


											<p style="color:white;" class="mt-3">Choose Your Seat Price Class  ?</p>
                                            <p style="color:white;" class="text-muted">We have Special Concessions For Kids (aged between 3 to 12 Years). </p>
											<?php 
											$mov_price=mysqli_query($con,"select * from movie_price where movie_name_price='$movie_booking_details[movie_name]'");
											foreach($mov_price as $data){
											?>	

												<select  name="mov_book_price" class="form-control"         style="background-image:   -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);border:none;  color:white;">
												<option disabled selected>Select Your Seat !</option>
												<option>Economy : <?php echo $data['economy']; ?></option>
												<option>Business : <?php echo $data['business']; ?></option>
												<option>First Class : <?php echo $data['first_class']; ?></option>
												</select>

                                            <?php
											}
											?>

											<!-- seat -->

                                            <!-- number of seats -->
											<p style="color:white;" class="mt-3">Select Number Of Seats ?</p>
										   <select  name="mov_book_seat" class="form-control"         style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);border:none;color:white;">
                                                             <option disabled selected>Select Your Show !</option>
                                                             <option>1</option>
                                                             <option>2</option>
                                                             <option>3</option>
															 <option>4</option>
															 <option>5</option>
															 <option>6</option>
															 <option>7</option>
															 <option>8</option>
															 <option>9</option>
															 <option>10</option>
                                            </select>

                                            <!-- number of seats -->



											<!-- enter card number -->

											<p style="color:white;" class="mt-3"><i class="fa fa-cc-visa" aria-hidden="true"></i>Add Debit Or Credit Card Number</p>

                                            <input  type="text" name="mov_book_card"  class="form-control  mt-4" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);color:white;border:none;" placeholder="5555-5555-5555-5555" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" autocomplete="off" required>

											<!-- enter card number -->






										   <!-- veiw more detail btn -->
                                            <center>
                                            <input  type="submit" value="Confirm Ticket" name="mov_book_btn"  class="text-center btn mt-4" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);color:white;border:none;">
										    	</center>
                  
									       <!-- veiw more detail btn -->


                                           </form>                                          

                                         
                                         <!-- select day  -->
										


											</div>
										</div>
									</div>


								</div>
							</div>
						</div>


                        </div>       
			    <!-- end card -->

<!-- book ticket content -->



<?php 


if(isset($_POST['mov_book_btn'])){


	$ux_name=$_POST['ux_nam'];
	$ux_email=$_POST['ux_mail'];
	$ux_mov_dur=$_POST['ux_sel_mov_dur'];
	$ux_mov_cinema=$_POST['ux_sel_mov_cin'];
	$ux_mov_name=$_POST['ux_sel_mov_name'];
	$ux_date=$_POST['mov_book_date'];
	$ux_price=$_POST['mov_book_price'];
	$ux_seats=$_POST['mov_book_seat'];
	$ux_card=$_POST['mov_book_card'];
	$ux_mov_img=$_POST['ux_sel_mov_img'];

	
	echo '<script>alert("Are you Sure, You Want to Submit?")</script>';


	$insert_ticket_detail=mysqli_query($con,"insert into booking_details values('null','$ux_name','$ux_email','$ux_mov_dur','$ux_mov_cinema','$ux_mov_name','$ux_date','$ux_price','$ux_seats','$ux_card','$ux_mov_img')");


	if($insert_ticket_detail>0){

		echo 
		"
		<script>window.location.assign('userbooking.php')</script>
		";


	}



}



?>






<?php
include('footer.php');
?>