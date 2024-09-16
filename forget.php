<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Library Management System </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style -->
	<link rel="stylesheet" type="text/css"
        href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css"
        href="bootstrap/css/bootstrap.min.css" />
	 <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
		
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
	<!-- include('header.php')?> -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" srcset="" style = "width:100px" class = "rounded-fill"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#focus">Sign-In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#foc">Sign-Up</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact_us.php">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<br><br><br>
	<h1>BVM LIBRARY</h1>
	<br/>
	

<br/>
<br/>
	<div class="container">

		<div class="login">
			<h2>Forgot Password</h2>
			<form action="mail.php" method="post">
				<input type="text" Name="mail" placeholder="Enter your Email" id ="mail" required="">
			<div class="send-button">
				<!--<form>-->
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
			
			<div class="clear"></div>
            <div class="register">
			
		    </div>

		<div class="clear"></div>
            </div>
			
			
			<br>
			
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>
	<!-- include('contact_us.php') -->
	<?php include('footer.php')?>
	





?>
<script type="text/javascript"
        href="bootstrap/js/jquery.js">
    </script>
     
    <script type="text/javascript"
        href="bootstrap/js/bootstrap.min.js">
    </script>
	<script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
<!-- //Body -->

</html>
