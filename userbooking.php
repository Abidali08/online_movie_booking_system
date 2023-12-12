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
						<h2 class="section__title">My Account & Bookings</h2>
						<!-- end section title -->
    
						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.php">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Account & Bookings</li>
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
						
						

     <div class="container mt-2">
					<div class="section__wrap">
						<!-- section title -->
						<h4 class="h4 text-white">
                            <?php 
                            
                            if(isset($_SESSION["ux"])){
                               echo $_SESSION["ux"];
                            }

                            ?>
                        </h4>
						<!-- end section title -->
    
						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item breadcrumb__item--active"><?php 
                            
                            if(isset($_SESSION["ux_email"])){
                               echo $_SESSION["ux_email"];
                            }

                            ?></li>
						</ul>
						<!-- end breadcrumb -->
					</div>
		</div>
           
						
				</div>
				</div>
			</div>
		</div>
        <hr style="background-image:linear-gradient(#ff55a5, #ff5860);height:10px;">

	</div>
	<!-- end filter -->



	<?php 
	
	$ticket_booked=mysqli_query($con,"select * from booking_details where user_name='$_SESSION[ux]'");

	foreach($ticket_booked as $ticket)
	{
		?>



	<!-- user ticket info -->

<div class="container my-3">

  <div class="row bg-white" style="border-radius:5px;background: linear-gradient(to right, #ece9e6, #ffffff);">


   <!-- col for img -->

    <div class="col text-center">
	<img  src="<?php  echo "Admin/upload-images/".$ticket['user_movie_img'] ?>" class="img-fluid img-thumbnail" width="200" height="100">
    </div>

   <!-- col for img -->


<!-- col for center info -->

    <div class="col-6 text-center" style="border-left:2px dashed #404040;border-right:2px dashed #404040;border-width:8px;">


	<p class="mt-2" style="text-transform:uppercase;font-size:30px;letter-spacing:10px;border-top:1px solid black;border-bottom:1px solid black;">
		<?php  echo $ticket['user_date'] ?>
	</p>
		<h1 style="font-family:ubantu;"><?php  echo $ticket['user_movie_name'] ?></h1>
		<h1 style="font-family:cursive;"><?php  echo $ticket['user_movie_cinema'] ?></h1>
		<p class="h4"><?php  echo $ticket['user_movie_dur'] ?></p>
		<h2><?php  echo $ticket['user_price']." X ".$ticket['user_seat']." /Rs" ?></h2>
    </div>



<!-- col for center info -->




<!-- col for ux info  -->
    <div class="col text-center">
	<h4 class="mt-3">
	<?php  echo "Name : ".$ticket['user_name'] ?>
	</h4>
	<p>
	<?php  echo "Email : ".$ticket['user_email'] ?>
	</p>
	<img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" whidth="120" height="200" image="img-fluid">
    </div>
<!-- col for ux info  -->

  </div>
</div>

<!-- user ticket info -->
 



  <?php
    }
  ?>



<?php
include('footer.php');
?>