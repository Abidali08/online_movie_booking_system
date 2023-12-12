<?php
include('header.php');
?>

    <!-- home -->
    <section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
		</div>
		<!-- end home bg -->
        <!-- carousol -->
        <div class="container-fluid">
 
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="img/home/slider4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider9.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider10.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider11.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider12.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider13.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider14.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/slider15.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 </div>
        </div>
</section>
        <!-- homepg carousol -->






<!-- main page content start from heres -->


             	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h3 class="content__title" style="text-align:center;font-size:35px;margin:30px 10px;text-transform:uppercase;letter-spacing:2px;font-weight:bolder;">For Best Experience In Movies Viewing & Online Reservations</h3>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Now Showing</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">All Movies</a>
							</li>

						</ul>
						<!-- end content tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">

                          	<!-- header search -->
		                         <form action="" class="mb-5" method="post">
		                         	<div class="container">
		                         		<div class="row">
		                         			<div class="col-12">
									
		                         				<div class="header__search-content" style="box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%); border-radius:10px;">

												 <i class="icon ion-ios-search" style="color:white;margin:5px 5px;font-size:40px;"></i>

												 
												
													
					                              <select  name="ux_srch_time" class="form-control"         style="background:transparent;border:none;color:white;">
                                                             <option disabled selected>Movie Show-time (Example : 9 PM to 11 PM )</option>
                                                             <option>1:00 PM to 2:15 PM</option>
                                                             <option>2:15 PM to 4:00 PM</option>
                                                             <option>4:00 PM to 5:30 PM</option>
                                                             <option>5:30 PM to 7:25 PM</option>
                                                             <option>7:25 PM to 9:10 PM</option>
                                                             <option>9:10 PM PM to 10:40 PM</option>
                                                             <option>10:40 PM PM to 12:00 AM</option>
                                                             <option>12:00 PM PM to 1:30 AM</option>
                                                  </select>

                                                  <input type="date" name="ux_date" required style="background:transparent;border:none;color:white;border-left:2px solid white;" placeholder="Enter Movie Name">

                                          
                         
		                         					<button type="submit" name="btn_srch_time">search</button>
		                         				</div>
		                         			</div>
		                         		</div>
		                         	</div>
		                         </form>
		                         <!-- end header search -->

                           

                                 <!-- php starts here -->



								 <?php


                                 if(isset($_POST['btn_srch_time'])){


								 $ux_sel_time=$_POST['ux_srch_time'];
								 $ux_sel_date=$_POST['ux_date'];


								//  data fetcing from add moive

								 $ux_sel_result=mysqli_query($con,"select * from addmovie where movie_duration='$ux_sel_time'");


								 foreach($ux_sel_result as $ux_sel_data)
								 {
                                 ?>

                    <!-- if card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list" style="background:transparent;border:none;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php  echo "Admin/upload-images/".$ux_sel_data['movie_img'] ?>" alt="">
											<a href="moviedetail.php?movdet=<?php echo $ux_sel_data['movie_id'];?>" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php  echo $ux_sel_data['movie_name']; ?></a></h3>

											<!-- genre name -->
											<span class="card__category">
												<a href="#" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
												<?php  


			                                     $genre_res=mysqli_query($con,"select genre_name from genre where gen_id='$ux_sel_data[movie_genre_id]'");
			                                     $genre_data=mysqli_fetch_assoc($genre_res);
			                                     echo $genre_data['genre_name'];			
												
												?>
												</a>
											</span>
											<!-- genre name -->

											<!-- indus , lang  -->
							       <div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

												<ul class="card__list">
													<li style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
													<?php  
													
													$indus_res=mysqli_query($con,"select industry_name from industry where indus_id='$ux_sel_data[movie_indus_id]'");
													$indus_data=mysqli_fetch_assoc($indus_res);
													echo $indus_data['industry_name'];


													?>
													</li>


													<li style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
													<?php 
													
													$lang_res=mysqli_query($con,"select language_name from language where lang_id='$ux_sel_data[movie_lang_id]'");
													$lang_data=mysqli_fetch_assoc($lang_res);
													echo $lang_data['language_name'];
													
													
													?>
												</li>
												</ul>
											</div>
											<!-- indus , lang  -->

						                <div class="card__description">

										<!-- cinema  -->
										   <p style="color:white;"> Cinema Name :

										        <?php 
													
													$cin_res=mysqli_query($con,"select cinema_name from cinema where cin_id='$ux_sel_data[movie_cin_id]'");
													$cin_data=mysqli_fetch_assoc($cin_res);
													echo $cin_data['cinema_name'];
													
													
												?>

										    </p>
										 <!-- cinema  -->




                                         <!-- date  -->
                                         <p style="color:white;"> Movie On Date :
                                         
                                         <?php 
                                         	

                                             echo $ux_sel_date;

                                         	// $date_res=mysqli_query($con,"select date_name from date where date_id='$ux_sel_data[movie_date_id]'");
                                         	// $date_data=mysqli_fetch_assoc($date_res);
                                         	// echo $date_data['date_name'];
                                         	
                                         	
                                         ?>
                                         
                                         </p>
                                         <!-- date  -->

										  <!-- time  -->
										  <p style="color:white;"> Movie Timimgs :
                                         
                                         <?php 
                                         	
                                         	echo $ux_sel_data['movie_duration'];
                                         	
                                         	
                                         ?>
                                         
                                         </p>
                                         <!-- time  -->
										


							            </div>
										</div>
										
									</div>


									<!-- veiw more detail btn -->
								<div class="container-fluid">

                                    <a   href="moviedetail.php?movdet=<?php echo $ux_sel_data['movie_id'];?>"    class="form-control text-center" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);color:white;border:none;">Movie Details & Booking</a>

                                </div>
                                        <!-- veiw more detail btn -->
        


								</div>
							</div>
						</div>
				<!-- end card -->
                     <?php
						//  foreach loop bracket
						 }
						//  foreach loop bracket
						 }
                        // if ends heres



                         // else starts here


						else
						{
                                    
						 //  data fetcing from      
							     $ux_else_result=mysqli_query($con,"SELECT * from addmovie ORDER BY movie_id DESC LIMIT 8");



								//  esle foreach loop starts here

								 foreach($ux_else_result as $ux_else_data)
								 {
                                ?>


                    <!-- else card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list" style="background:transparent;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php  echo "Admin/upload-images/".$ux_else_data['movie_img'] ?>" alt="">
											<a href="moviedetail.php?movdet=<?php echo $ux_else_data['movie_id'];?>" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php  echo $ux_else_data['movie_name']; ?></a></h3>
											<span class="card__category">
												<a href="#" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
												<?php  


                                                   $genre_res=mysqli_query($con,"select genre_name from genre where gen_id='$ux_else_data[movie_genre_id]'");
                                                   $genre_data=mysqli_fetch_assoc($genre_res);
                                                   echo $genre_data['genre_name'];			
                                                   
                                                   ?>
											</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

												<ul class="card__list">
													<li style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
													<?php  
													
													$indus_res=mysqli_query($con,"select industry_name from industry where indus_id='$ux_else_data[movie_indus_id]'");
													$indus_data=mysqli_fetch_assoc($indus_res);
													echo $indus_data['industry_name']; 
													
													?>
													
												</li>
													<li style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
													<?php  
													
													$lang_res=mysqli_query($con,"select language_name from language where lang_id='$ux_else_data[movie_lang_id]'");
													$lang_data=mysqli_fetch_assoc($lang_res);
													echo $lang_data['language_name']; 
													
													?>
													</li>
												</ul>
											</div>

											<div class="card__description">
										<!-- cinema  -->
										<p style="color:white;"> Cinema Name :

                                                 <?php 
                                                 	
                                                 	$cin_res=mysqli_query($con,"select cinema_name from cinema where cin_id='$ux_else_data[movie_cin_id]'");
                                                 	$cin_data=mysqli_fetch_assoc($cin_res);
                                                 	echo $cin_data['cinema_name'];
                                                 	
                                                 	
                                                 ?>
                                                 
                                                 </p>
                                                 <!-- cinema  -->
                                                 
                                                 
                                                 
                                                 
                                                 <!-- date  -->
                                                 <p style="color:white;"> Movie On Date :
                                                 
                                                 <?php 
                                                 
                                                 
                                                 
                                                 
												 echo date("d-M-l");
                                                 
                                                 
                                                 ?>
                                                 
                                                 </p>
                                                 <!-- date  -->
                                                 
                                                 <!-- time  -->
                                                 <p style="color:white;"> Movie Timimgs :
                                                 
                                                 <?php 
                                                 
                                                 echo $ux_else_data['movie_duration'];
                                                 
                                                 
                                                 ?>
                                                 
                                                 </p>
                                                 <!-- time  -->


											</div>
										</div>
									</div>

									<!-- veiw more detail btn -->
                                      <div class="container-fluid">

									  <a   href="moviedetail.php?movdet=<?php echo $ux_else_data['movie_id'];?>"    class="form-control text-center" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);color:white;border:none;">Movie Details & Booking</a>

									  </div>
									<!-- veiw more detail btn -->


								</div>
							</div>
						</div>
                 <!-- card end here -->








                <?php

				}
                // else foreach loop ends here
			    }
               //   else ends heres
			    ?>
			    <!-- php ends here for tab showing now -->

		</div>
	 </div>





	<!---------------------------------------------         tab for all movies     ------------------------------------->




				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">

					         <!-- header search -->
								 <form action="" class="mb-5" method="post">
		                         	<div class="container">
		                         		<div class="row">
		                         			<div class="col-12">
									
		                         				<div class="header__search-content" style="box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%); border-radius:10px;">

												 <i class="icon ion-ios-search" style="color:white;margin:5px 5px;font-size:40px;"></i>

												 
												 <input  type="text" name="ux_movie_srch" placeholder="Search For A Movie,TV Series Name That You are Looking For">
                         
		                         					<button type="submit" name="ux_mov_srch_btn">search</button>
		                         				</div>
		                         			</div>
		                         		</div>
		                         	</div>
		                         </form>
		                     <!-- end header search -->


                              <!-- php starts here -->


							  <?php 


                                if(isset($_POST['ux_mov_srch_btn'])){

                                   $ux_movie_srch=$_POST['ux_movie_srch'];

								//    select query with like 

								$ux_srch_result=mysqli_query($con,"select * from addmovie where movie_name like '%$ux_movie_srch%' ");


								// foreach loop starts here

								foreach($ux_srch_result as $ux_srch_data)
								{
                                ?>



                 <!-- tab 2 if  card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list" style="background:transparent;border:none;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php  echo "Admin/upload-images/".$ux_srch_data['movie_img'] ?>" alt="">
											<a href="moviedetail.php?movdet=<?php echo $ux_srch_data['movie_id'];?>" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php  echo $ux_srch_data['movie_name']; ?></a></h3>

											<!-- genre name -->
											<span class="card__category">
												<a href="#" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
												<?php  


			                                     $genre_res=mysqli_query($con,"select genre_name from genre where gen_id='$ux_srch_data[movie_genre_id]'");
			                                     $genre_data=mysqli_fetch_assoc($genre_res);
			                                     echo $genre_data['genre_name'];			
												
												?>
												</a>
											</span>
											<!-- genre name -->

											<!-- indus , lang  -->
											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

												<ul class="card__list">
													<li style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
													<?php  
													
													$indus_res=mysqli_query($con,"select industry_name from industry where indus_id='$ux_srch_data[movie_indus_id]'");
													$indus_data=mysqli_fetch_assoc($indus_res);
													echo $indus_data['industry_name'];


													?>
													</li>


													<li style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
													<?php 
													
													$lang_res=mysqli_query($con,"select language_name from language where lang_id='$ux_srch_data[movie_lang_id]'");
													$lang_data=mysqli_fetch_assoc($lang_res);
													echo $lang_data['language_name'];
													
													
													?>
												</li>
												</ul>
											</div>
											<!-- indus , lang  -->

											<div class="card__description">

										<!-- cinema  -->
										   <p style="color:white;"> Cinema Name :

										        <?php 
													
													$cin_res=mysqli_query($con,"select cinema_name from cinema where cin_id='$ux_srch_data[movie_cin_id]'");
													$cin_data=mysqli_fetch_assoc($cin_res);
													echo $cin_data['cinema_name'];
													
													
												?>

										    </p>
										<!-- cinema  -->




                                         <!-- date  -->
                                         <p style="color:white;"> Movie On Date :
                                         
                                         <?php 
                                         	

                                        

                                         	$date_res=mysqli_query($con,"select date_name from date where date_id='$ux_srch_data[movie_date_id]'");
                                         	$date_data=mysqli_fetch_assoc($date_res);
                                         	echo $date_data['date_name'];
                                         	
                                         	
                                         ?>
                                         
                                         </p>
                                         <!-- date  -->

										  <!-- time  -->
										  <p style="color:white;"> Movie Timimgs :
                                         
                                         <?php 
                                         	
                                         	echo $ux_srch_data['movie_duration'];
                                         	
                                         	
                                         ?>
                                         
                                         </p>
                                         <!-- time  -->
										


											</div>
										</div>
									</div>


									<!-- veiw more detail btn -->

									<div class="container-fluid">

                                    <a   href="moviedetail.php?movdet=<?php echo $ux_srch_data['movie_id'];?>"    class="form-control text-center" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);color:white;border:none;">Movie Details & Booking</a>

                                    </div>
									<!-- veiw more detail btn -->



								</div>
							</div>
						</div>
			    <!-- end card -->





                                <?php
								}
								// foreach loop end here
								}
								// if ends here




								else{

									$ux_else_result=mysqli_query($con,"select * from addmovie");




									//  esle foreach loop starts here

									foreach($ux_else_result as $ux_else_data)
									{
										
								   ?>
   
   
					<!-- tab 2 else card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list" style="background:transparent;border:none;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php  echo "Admin/upload-images/".$ux_else_data['movie_img'] ?>" alt="">
											<a href="moviedetail.php?movdet=<?php echo $ux_else_data['movie_id'];?>" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php  echo $ux_else_data['movie_name']; ?></a></h3>

											<!-- genre name -->
											<span class="card__category">
												<a href="#" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
												<?php  


			                                     $genre_res=mysqli_query($con,"select genre_name from genre where gen_id='$ux_else_data[movie_genre_id]'");
			                                     $genre_data=mysqli_fetch_assoc($genre_res);
			                                     echo $genre_data['genre_name'];			
												
												?>
												</a>
											</span>
											<!-- genre name -->

											<!-- indus , lang  -->
											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

												<ul class="card__list">
													<li style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
													<?php  
													
													$indus_res=mysqli_query($con,"select industry_name from industry where indus_id='$ux_else_data[movie_indus_id]'");
													$indus_data=mysqli_fetch_assoc($indus_res);
													echo $indus_data['industry_name'];


													?>
													</li>


													<li style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);">
													<?php 
													
													$lang_res=mysqli_query($con,"select language_name from language where lang_id='$ux_else_data[movie_lang_id]'");
													$lang_data=mysqli_fetch_assoc($lang_res);
													echo $lang_data['language_name'];
													
													
													?>
												</li>
												</ul>
											</div>
											<!-- indus , lang  -->

											<div class="card__description">

										<!-- cinema  -->
										   <p style="color:white;"> Cinema Name :

										        <?php 
													
													$cin_res=mysqli_query($con,"select cinema_name from cinema where cin_id='$ux_else_data[movie_cin_id]'");
													$cin_data=mysqli_fetch_assoc($cin_res);
													echo $cin_data['cinema_name'];
													
													
												?>

										    </p>
										<!-- cinema  -->




                                         <!-- date  -->
                                         <p style="color:white;"> Movie On Date :
                                         
                                         <?php 
                                         	

                                        

                                         	$date_res=mysqli_query($con,"select date_name from date where date_id='$ux_else_data[movie_date_id]'");
                                         	$date_data=mysqli_fetch_assoc($date_res);
                                         	echo $date_data['date_name'];
                                         	
                                         	
                                         ?>
                                         
                                         </p>
                                         <!-- date  -->

										  <!-- time  -->
										  <p style="color:white;"> Movie Timimgs :
                                         
                                         <?php 
                                         	
                                         	echo $ux_else_data['movie_duration'];
                                         	
                                         	
                                         ?>
                                         
                                         </p>
                                         <!-- time  -->
										


											</div>
										</div>
									</div>

									<!-- veiw more detail btn -->

									<div class="container-fluid">

                                    <a   href="moviedetail.php?movdet=<?php echo $ux_else_data['movie_id'];?>"    class="form-control text-center" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);color:white;border:none;">Movie Details & Booking</a>

                                     </div>

									<!-- veiw more detail btn -->

								</div>
							</div>
						</div>
			    <!-- end card -->

                            <?php
									}

									//  esle foreach loop end here
								}
								// else ends here
							  ?>
					</div>
				</div>


			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->



<!-- main page content ends from here -->






		<!-- expected premiere  coming soon -->



		<section class="section section--bg" data-bg="img/section/section.jpg">
		 <div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h1 class="section__title">Coming Soon</h1>
				</div>
				<!-- end section title -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card" style="background:transparent;border:none;">
						<div class="card__cover">
							<img src="img/covers/cmg1.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">65</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card" style="background:transparent;border:none;">
						<div class="card__cover">
							<img src="img/covers/cmg2.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">DUNGEONS & DRAGONS: HONOR AMONG THIEVES</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card" style="background:transparent;border:none;">
						<div class="card__cover">
							<img src="img/covers/cmg3.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">KINGDOM OF THE DINOSAURS</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Drama</a>
								<a href="#">Music</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card" style="background:transparent;border:none;">
						<div class="card__cover">
							<img src="img/covers/cmg4.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">CREED III</a></h3>
							<span class="card__category">
								<a href="#">Sports</a>
								<a href="#">Drama</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card" style="background:transparent;border:none;">
						<div class="card__cover">
							<img src="img/covers/cmg5.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">WINNIE-THE-POOH: BLOOD AND HONEY</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
								<a href="#">Horror</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card" style="background:transparent;border:none;">
						<div class="card__cover">
							<img src="img/covers/cmg6.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">THE HUNGER GAMES: THE BALLAD OF SONGBIRDS AND SNAKES</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Drama</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
						</div>
					</div>
				</div>
				<!-- end card -->	
			</div>
		</div>
	</section>



	<!-- end expected premiere coming soon -->








<?php
include('footer.php');
?>