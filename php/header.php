<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>Hospital Services</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/hodlogo.png" type="image/x-icon">
<link rel="icon" href="images/hoslogo.png" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>

<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>

<!-- Page Loader -->
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->
<div id="wrap">
  
  <header class="header-style-2">
    <div class="container">
      <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="" style="height: 52px;"></a> </div>
      <div class="head-info">
        <P> WELCOME TO HOSPITAL MANAGMENT SYSTEM </p>
       
      </div>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li> <a href="index.php">Home </a></li>
            <li><a href="about.php">About</a></li>            
            <li><a href="patientappointment.php">Appointment </a></li>
            <li><a href="contact.php">Contact_us </a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account </a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="adminaccount.php">Admin</a></li>
                <li><a href="doctoraccount.php">Doctor</a></li>
                <li><a href="patientaccount.php">Patient </a></li>
                
              </ul>
            </li>           
          </ul>
        </div>
      </div>
    </nav>
  </header>