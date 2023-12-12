<?php 
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
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="dashboard.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Online Movie</strong> <strong>Booking System</strong></div>
              </a>
          </div>
            
            <!-- Log out               -->
            <div class="list-inline-item logout">                   <a id="logout" href="logout.php" class="nav-link btn" style="background-image: linear-gradient(90deg, #36a8c1 0%, #36a8c1100%);color:white;">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/danish.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Danish Khan</h1> 
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="dashboard.php"> <i class="icon-home"></i> Dashboard</a></li>
                <li><a href="booking.php"> <i class="icon-grid"></i>All Bookings</a></li>
                <li><a href="cinema.php"> <i class="fa fa-video-camera"></i>Cinema </a></li>
                <li><a href="industry.php"> <i class="fa fa-industry"></i>Industry </a></li>
                <li><a href="genre.php"> <i class="icon-padnote"></i>Genre </a></li>
                <li><a href="language.php"> <i class="fa fa-language"></i>Language </a></li>
                <li><a href="date.php"> <i class="fa fa-calendar"></i>Cinema Date </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Add & View Movies</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="addmovie.php">Add Movies</a></li>
                    <li><a href="viewmovie.php">View Movies</a></li>
                  </ul>
                </li>
                <li><a href="price.php"> <i class="icon-padnote"></i>Seat Price Details </a></li>
                <li><a href="user.php"> <i class="fa fa-bookmark"></i>Number Of Users</a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      