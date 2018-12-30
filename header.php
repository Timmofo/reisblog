<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Blog info -->
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">

	<!-- Import font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- header.php -->
	<?php wp_head();?>
</head>

<body>

<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
	    <div class="d-flex flex-grow-1">
	        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
	        <a class="navbar-brand d-none d-lg-inline-block" href="/opdewereld">
	            Dutch Turtle
	        </a>
	        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
	            <img src="//placehold.it/40?text=LOGO" alt="logo">
	        </a>
	        <div class="w-100 text-right">
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	        </div>
	    </div>
	    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
	        <ul class="navbar-nav ml-auto flex-nowrap">
	            <li class="nav-item">
	                <a href="#" class="nav-link m-2 menu-item nav-active">Our Solution</a>
	            </li>
	            <li class="nav-item">
	                <a href="#" class="nav-link m-2 menu-item">How We Help</a>
	            </li>
	            <li class="nav-item">
	                <a href="opdewereld/blog" class="nav-link m-2 menu-item">Blog</a>
	            </li>
	            <li class="nav-item">
	                <a href="opdewereld/over-ons" class="nav-link m-2 menu-item">Over Ons</a>
	            </li>
	        </ul>
	    </div>
	</div>
</nav>