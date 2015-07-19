<?php include '../config/config.php'; ?>
<?php include '../libraries/Database.php'; ?>
<?php include '../helpers/format_helper.php'; ?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must*  come first in the head; any other head content must come *after* these tags -->
	    <title>GymRave</title>

	    <!-- Bootstrap -->
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- AwesomeFont -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	    
	    <link href="../css/custom.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>
  	<body>
	
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<!-- Create button that collapse our nav bar -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<!-- This line of code is use for accessibility purpose towards screen reader -->
						<span class="sr-only">Toggle Navigation</span>
						<!-- icon bar -->
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- navbar brand class = name on the left of navigation bar -->
					<a class="navbar-brand" href="../index.html">GymRave</a>				
				</div>
				
				<div class="navbar-collapse collapse">
					<!--  allign everything properly on the right side -->
					<ul class="nav navbar-nav navbar-right">
					<!-- Active means current site -->
					<li class="active"><a href="index.php">Admin Home</a></li>
					<li><a href="add_post.php">Add Post</a></li>
					<li><a href="add_category.php">Add Category</a></li>
					<li><a href="../index.html">Visit site</a></li>
					</ul>
				</div>
			</div>	
		</div> <!-- End of Navbar -->

 	<body>


    <div class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">

