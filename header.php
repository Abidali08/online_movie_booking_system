<?php 
session_start();
include('config.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="./bootcss/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

	<!-- Favicons -->
     <link rel="shortcut icon" href="icon/favi.png" type="image/x-icon">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Online Movie Booking System – Online Movies, TV Shows & Cinema Booking</title>
	<!-- custom css for header -->
<style>
     	.header__nav-link{
     		font-size: 12px !important;
     	}
     	a{
     		text-decoration:none;
     	}
     	/* importing ubantu font */
		 @import url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap");
         @import url("https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap");
     	@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
     	/* importing ubantu font */
     
     /* main logo css */
     #main__logo{
     	color:rgba(255,255,255,0.75);
     	font-family: 'Ubuntu', sans-serif;
     	text-transform:Uppercase;
     	padding-top:15px;
     	transition:1s;
     }
     #main__logo:hover{
     	color:#d63384;
     	transition:1s;
     }
     /* main logo css */
     
     /* welcome note css */
     .wrapper {
       /*This part is important for centering*/
       display: grid;
       place-items: center;
     }
     
     .typing-demo {
       width: 510px;
       animation: typing 3s steps(30), blink .5s step-end infinite alternate;
       white-space: nowrap;
       overflow: hidden;
       border-right: 3px solid;
       font-family: 'Ubuntu'	;
       font-size: 2em;
       color:white;
       text-transform:Uppercase;
       text-shadow: 3px 3px 10px white;
     }
     
     @keyframes typing {
       from {
         width: 0
       }
     }
         
     @keyframes blink {
       50% {
         border-color: transparent
       }
     }
     /* welcome note css */

	 /* contnt tab css */
	 .nav-tabs .nav-link.active{
		color:white !important;
	 }
     .nav-tabs .nav-link {
       margin-bottom: -1px;
       background: transparent !important;
       border: none !important;
	    }
		.nav-tabs .nav-link:focus{
			color:white !important;
		}
		.nav-tabs{
			border-bottom:none !important;
		}
	 /* contnt tab css */
        
	 /* option css */
	 .form-control:focus {
  border-color: inherit;
  -webkit-box-shadow: none;
  box-shadow: none;
   }
	 option{
		background:#28282d;
		color:white;
	 }
      
	 .mCustomScrollbar
	 {
		background-color: #2b2b31 !important;
	 }
	 .accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: 1rem 1.25rem;
    font-size: 2rem;
	font-weight:bolder;
    color: #212529;
    text-align: left;
    background-color: #fff;
	color:white;
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease;
	background-image: linear-gradient(90deg, rgb(27 127 204 / 80%) 0%, rgb(27 127 204 / 80%) 100%);

    }
              .accordion-body{
              	color:black;
              	background-image: white;
              	font-size:20px;
              }
              .accordion-button:focus {
                  box-shadow: none;
                  border-color: rgba(0,0,0,.125);
              	color:white;
              }
              .checked {
            color: orange;
              } 
          	


</style>
	<!-- custom css for header -->

</head>
<body class="body">
	
	



<!-- php start heres for session function -->


                            <?php 
							
                             
                            if(isset($_SESSION["ux"])){
								

                              echo 
							  '
							  <!-- header -->
	<header class="header">
		<div class="header__wrap" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<img src="icon/main__logo.png" width=70 height=70  style="display:inline">
							<a href="index.php" style="background-color:#2b2b31;">
							<h6 id="main__logo">Online Movie <br> Booking System</h6>
							</a>
							<!-- end header logo -->

							  <!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a href="index.php" class="header__nav-link">Home</a>
								</li>

								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies Categories</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
									<li><a href="hollywood.php">HollyWood</a></li>
									<li><a href="bollywood.php">BollyWood</a></li>
									<li><a href="lollywood.php">LollyWood</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="pricing.php" class="header__nav-link">Ticket Pricing</a>
								</li>

								<li class="header__nav-item">
									<a href="about.php" class="header__nav-link">About Us</a>
								</li>
								
								<li class="header__nav-item">
									<a href="faq.php" class="header__nav-link">Help</a>
								</li>
								<li class="header__nav-item">
									<a href="userbooking.php" class="header__nav-link">My Account</a>
								</li>
							
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">

								<a href="logout.php" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>Log Out</span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



							  ';


							} 
							else{

                              echo 
							  '
							 <!-- header -->
	<header class="header">
		<div class="header__wrap" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<img src="icon/main__logo.png" width=70 height=70  style="display:inline">
							<a href="index.php" style="background-color:#2b2b31;">
							<h6 id="main__logo">Online Movie <br> Booking System</h6>
							</a>
							<!-- end header logo -->
							  <!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a href="index.php" class="header__nav-link">Home</a>
								</li>

								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies Categories</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
									<li><a href="hollywood.php">HollyWood</a></li>
									<li><a href="bollywood.php">BollyWood</a></li>
									<li><a href="lollywood.php">LollyWood</a></li>

									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="pricing.php" class="header__nav-link">Ticket Pricing</a>
								</li>

								<li class="header__nav-item">
									<a href="about.php" class="header__nav-link">About Us</a>
								</li>
								
								<li class="header__nav-item">
									<a href="faq.php" class="header__nav-link">Help</a>
								</li>
								<li class="header__nav-item">
									<a href="signup.php" class="header__nav-link">Sign Up</a>
								</li>
							
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">

								<a href="signin.php" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>Login in</span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->


							  ';


							}
							?>


<!-- php ends here for session function -->



							



