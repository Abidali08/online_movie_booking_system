<?php 
session_start();
include('config.php');


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Online Movie Booking System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favi.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>


       .login-page {
         position: relative;
       }
       
       .login-page::before {
         content: '';
         width: 100%;
         height: 100%;
         display: block;
         z-index: -1;
         background: url(../img/section.jpg);
         background-size: cover;
         position: absolute;
         top: 0;
         right: 0;
       }
       
       .login-page .container {
         min-height: 100vh;
         z-index: 1;
         padding: 20px;
       }
       
       .login-page .form-holder {
         width: 100%;
         border-radius: 5px;
         overflow: hidden;
         margin-bottom: 50px;
       }
       
       .login-page .form-holder .info,
       .login-page .form-holder .form {
         min-height: 70vh;
         padding: 40px;
         height: 100%;
       }
       
       .login-page .form-holder div[class*='col-'] {
         padding: 0;
       }
       
       .login-page .form-holder .info {
         background: #17a2b8;
         color: #fff;
       }
       
       .login-page .form-holder .info h1 {
         font-size: 2.5em;
         font-weight: 700;
       }
       
       .login-page .form-holder .info p {
         font-weight: 300;
       }
       
       .login-page .form-holder .form {
         background: #2d3035;
       }
       
       .login-page .form-holder .form .form-group {
         position: relative;
         margin-bottom: 30px;
       }
       
       .login-page .form-holder .form .content {
         width: 100%;
       }
       
       .login-page .form-holder .form form {
         width: 100%;
         max-width: 400px;
       }
       
       .login-page .form-holder .form #login,
       .login-page .form-holder .form #register {
         margin-bottom: 20px;
         cursor: pointer;
         color: #fff;
       }
       
       .login-page .form-holder .form a.forgot-pass,
       .login-page .form-holder .form a.signup {
         font-size: 0.9rem;
         color: #17a2b8;
       }
       
       .login-page .form-holder .form small {
         color: #aaa;
       }
       
       .login-page .form-holder .form .terms-conditions label {
         cursor: pointer;
         color: #aaa;
         font-size: 0.9rem;
       }
       
       .login-page .copyrights {
         width: 100%;
         z-index: 9999;
         position: absolute;
         bottom: 0;
         left: 0;
         color: #fff;
       }
       
       @media (max-width: 991px) {
         .login-page .form-holder .info,
         .login-page .form-holder .form {
           min-height: auto;
           padding: 40px;
           height: 100%;
         }
       }
    </style>
  </head>






  <body>
    <div class="login-page" style="background: linear-gradient(to right, #232526, #414345);">
    <h1 class="text-center pt-3">ADMIN LOGIN PANEL</h1>
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow" style="box-shadow:0px 2px 12px 5px white;">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #c14936 100%);">
                <div class="content">
                  <div class="logo">
                    <h1 class="mb-3" style="font-family:Verdana;font-weight:400;text-transform:uppercase ;">Online Movie Booking System Admin Login</h1>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" action="" class="form-validate">
                    <div class="form-group">
                      <input id="login-username" type="email" name="admin_email" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">Admin Email</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="admin_pass" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button id="login" type="submit" name="admin_btn" class="btn btn-primary" style="background-image: -webkit-linear-gradient(0deg, #36a8c1 0%, #c14936 100%);">Login</button>
                  </form><a href="#" class="forgot-pass">Forgot Password?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
         <p>2023 &copy; Online Movie Booking System.</p>
      </div>
    </div>


<?php 

if(isset($_POST['admin_btn'])){


  $ad_email=$_POST['admin_email'];
  $ad_pass=$_POST['admin_pass'];


  $admin_login_result=mysqli_query($con,"SELECT * FROM `admin_login` WHERE `email`='$ad_email' AND `password`='$ad_pass'");

  $ad_fetch_result=mysqli_fetch_assoc($admin_login_result);

if(mysqli_num_rows($admin_login_result)>0){

// session for admin

  $_SESSION["admin"]=$ad_fetch_result['email'];

// session for admin


  echo 
	"
	<script>window.location.assign('dashboard.php')</script>
	";


}
else{

  echo '<script>alert("Invalid Email Or Password!")</script>';

}

}

?>












    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>