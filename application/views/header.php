<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="docs-assets/ico/favicon.png">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adimedia.css">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>dist/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  <img class="logo" src="<?php echo base_url(); ?>dist/img/logo.png" alt="" width="15%">
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php"> <span class="glyphicon glyphicon-home"></span> </a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#contact">Supplier</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="outdoor.php">Outdoor Print</a></li>
                    <li><a href="indoor.php">Indoor Print</a></li>
                    <li><a href="offset.php">Offset Print</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Materials</li>
                    <li><a href="#">Outdoor</a></li>
                    <li><a href="#">Indoor</a></li>
                    <li><a href="#">Laminating</a></li>
                    <li><a href="#">Tinta</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="signin.php">Sign In</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <!-- <li class="divider"></li> -->
                    <!-- <li><a href="#">Log Out</a></li> -->
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
	       
      </div>
    </div>
