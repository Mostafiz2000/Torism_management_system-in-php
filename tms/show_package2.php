<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style9.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">

<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/simple.js"></script>
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

<!--- banner ---->
<div class="banner-nai">
	<div class="container">
</div>
</div>
<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
<h1 class="Title1" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Sundarban Agency</h1>
<p style="text-align:center; font-weight:bold;"> 0195683372<br> 
	 bagerhut@gmail.com
                    <br>
                    Khulna</p>
	<div class="container">
		
		<div class="room-bottom">
		<h3>Package List</h3>
		
                 
					
<?php

$sql = "SELECT * from tbltourpackages where PackageLocation = 'Sundarban' " ;
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Tour Guide:</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>Taka <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
		
		</div>
	</div>
</div>


<!--- /footer-top ---->
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