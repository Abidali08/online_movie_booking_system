<?php
include('header.php');
?>


	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Bollywood Movies</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.php">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Bollywood</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->



		<!-- filter -->
		<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<!-- filter item -->
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">GENRE:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Action/Adventure">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
									<li>Action/Adventure</li>
									<li>Animals</li>
									<li>Animation</li>
									<li>Biography</li>
									<li>Comedy</li>
									<li>Cooking</li>
									<li>Dance</li>
									<li>Documentary</li>
									<li>Drama</li>
									<li>Education</li>
									<li>Entertainment</li>
									<li>Family</li>
									<li>Fantasy</li>
									<li>History</li>
									<li>Horror</li>
									<li>Independent</li>
									<li>International</li>
									<li>Kids</li>
									<li>Kids & Family</li>
									<li>Medical</li>
									<li>Military/War</li>
									<li>Music</li>
									<li>Musical</li>
									<li>Mystery/Crime</li>
									<li>Nature</li>
									<li>Paranormal</li>
									<li>Politics</li>
									<li>Racing</li>
									<li>Romance</li>
									<li>Sci-Fi/Horror</li>
									<li>Science</li>
									<li>Science Fiction</li>
									<li>Science/Nature</li>
									<li>Spanish</li>
									<li>Travel</li>
									<li>Western</li>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__quality">
								<span class="filter__item-label">QUALITY:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="HD 1080">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
									<li>HD 1080</li>
									<li>HD 720</li>
									<li>DVD</li>
									<li>TS</li>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__rate">
								<span class="filter__item-label">IMBd:</span>

								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<div id="filter__imbd-start"></div>
										<div id="filter__imbd-end"></div>
									</div>
									<span></span>
								</div>

								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
									<div id="filter__imbd"></div>
								</div>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__year">
								<span class="filter__item-label">RELEASE YEAR:</span>

								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<div id="filter__years-start"></div>
										<div id="filter__years-end"></div>
									</div>
									<span></span>
								</div>

								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
									<div id="filter__years"></div>
								</div>
							</div>
							<!-- end filter item -->
						</div>
						
						<!-- filter btn -->
						<a class="filter__btn" type="button" href="bollywood.php">apply filter</a>
						<!-- end filter btn -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->


	<div class="container">
	 <div class="row">
	    

	  <?php 
	
	
	   $bollywood_mov=mysqli_query($con,"select * from addmovie where movie_indus_id='3'");

	    foreach($bollywood_mov as $data)
	    {
        ?>
    
	<div class="col-6 col-sm-12 col-lg-6">
        		<div class="card card--list" style="background:transparent;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
			            <div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php  echo "Admin/upload-images/".$data['movie_img'] ?>" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php  echo $data['movie_name']; ?></a></h3>
											<span class="card__category">
												<a href="#" style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #36a8c1100%);">
												<?php  


                                                   $genre_res=mysqli_query($con,"select genre_name from genre where gen_id='$data[movie_genre_id]'");
                                                   $genre_data=mysqli_fetch_assoc($genre_res);
                                                   echo $genre_data['genre_name'];			
                                                   
                                                   ?>
											</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

												<ul class="card__list">
													<li style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #36a8c1100%);">
													<?php  
													
													$indus_res=mysqli_query($con,"select industry_name from industry where indus_id='$data[movie_indus_id]'");
													$indus_data=mysqli_fetch_assoc($indus_res);
													echo $indus_data['industry_name']; 
													
													?>
													
												</li>
													<li style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #36a8c1100%);">
													<?php  
													
													$lang_res=mysqli_query($con,"select language_name from language where lang_id='$data[movie_lang_id]'");
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
                                                 	
                                                 	$cin_res=mysqli_query($con,"select cinema_name from cinema where cin_id='$data[movie_cin_id]'");
                                                 	$cin_data=mysqli_fetch_assoc($cin_res);
                                                 	echo $cin_data['cinema_name'];
                                                 	
                                                 	
                                                 ?>
                                                 
                                                 </p>
                                                 <!-- cinema  -->
                                                 
                                                 
                                                 
                                                 
                                                 <!-- date  -->
                                                 <p style="color:white;"> Movie On Date :
                                                 
                                                 <?php 
                                                 
                                                 
                                                 
                                                 
                                                 $date_res=mysqli_query($con,"select date_name from date where date_id='$data[movie_date_id]'");
                                                 $date_data=mysqli_fetch_assoc($date_res);
                                                 echo $date_data['date_name'];
                                                 
                                                 
                                                 ?>
                                                 
                                                 </p>
                                                 <!-- date  -->
                                                 
                                                 <!-- time  -->
                                                 <p style="color:white;"> Movie Timimgs :
                                                 
                                                 <?php 
                                                 
                                                 echo $data['movie_duration'];
                                                 
                                                 
                                                 ?>
                                                 
                                                 </p>
                                                 <!-- time  -->


											</div>
										</div>
									</div>

									<!-- veiw more detail btn -->
                                      <div class="container-fluid">

									  <a   href="moviedetail.php?movdet=<?php echo $data['movie_id'];?>"    class="form-control text-center" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #36a8c1 100%);color:white;border:none;">Movie Details & Booking</a>

									  </div>
									<!-- veiw more detail btn -->
			 	 
			                     </div>
		                     </div>
						 </div>
             
                     <!-- card end here -->


                <?php
            
	            }
	            
	            ?>

       
   </div>
</div> 



<?php
include('footer.php');
?>