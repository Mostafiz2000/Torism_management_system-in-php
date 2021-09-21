<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style9.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<link href="https://fonts.googleapis.com/css2?family=Gelasio:ital@1&display=swap" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/simple.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<?php include('includes/header.php');?>
</head>
<body>

<div class="banner">


	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;font-size: 65px;"><b> Tourism Management System<b></h1>
	</div>
</div>

<!-- 

<div class="container">
	<div class="rupes">
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-usd"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO taka. 1000 OFF</h3>
				<h4><a href="offers.html">TRAVEL SMART</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-h-square"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO 70% OFF</h3>
				<h4><a href="offers.html">ON HOTELS ACROSS WORLD</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-mobile"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>FLAT USD. 50 OFF</h3>
				<h4><a href="offers.html">US APP OFFER</a></h4>
			
			</div>
				<div class="clearfix"></div>
		</div>
	
	</div>
</div> -->
<!--- /rupes ---->




<!---holiday---->
<div class="container">
	<div class="holiday">
		<div class="containrr">
			<div class="bas"><i class="fas fa-user-friends"></i>
		10k+ 
		<p>users</p>
	</div>
	<div class="bas"><i class="fas fa-clipboard-list"></i>
		100+ 
		<p>Packages</p>
	</div>
	<div class="bas"><i class="fas fa-briefcase"></i>
		4
		<p>Agencies</p>
	</div>
	<div class="bas"><i class="fas fa-search-location"></i>
		50+
		<p>Tour location</p>
	</div>
	

</div><a href="package-list.php">
<div class="sep">
	See Packages <i class="fas fa-angle-right"></i>
</div>
</a>
<h1>Quotes</h1>
<br>
<br>
	<div class="bo">
	
<div class="qutoes">
	<div class="quto">
	<i class="fas fa-quote-left"></i>
	</div>

	<br>
	<p>A journey of a thousands miles ,begins with a single step.</p>
	<div class="qutoes--credit">-Lao Tzu</div>
</div>
<img src="e1.jpg " ></img>
</div>
	<div class="bo">
		<img src="bear.jpeg " ></img>
<div class="qutoes">
	<div class="quto">
	<i class="fas fa-quote-left"></i>
	</div>

	<br>
	<p>Life is an adventure that is is best lived boldly</p>
	<div class="qutoes--credit">-bear grylls</div>
</div></div>


	



</div>
			<div class="clearfix"></div>
	</div>




<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>