<?php if($_SESSION['login'])
{?>
<!-- <div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">My Profile</a></li>
				<li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php">My Tour History</a></li>
			<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Welcome :</li>				
			<li class="sig">
			
				-->
<?php } else {?> 
<!-- <div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
					

        </ul>
		<div class="clearfix"></div>
	</div>
</div> -->
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<!-- <div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Tourism <span>Management System</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div> -->
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
				
							
								
								

								<?php if($_SESSION['login'])
{?>
								<li><a href="index.php">Home</a></li>
							
								<li><a href="package-list.php">Tour Packages</a></li>
								<li><a href="Tour_agencies.php">Tour Agency</a><li>
								<li><a href="profile.php">Profile</a><li>
								
			                     
			<li class="prnt"><a href="tour-history.php">Tour History</a></li>
			
								<li><a href="logout.php">Logout</a><li>
								<?php } else { ?>
									<ul class="nav navbar-nav">
						<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Admin</a></li>
		</ul>
		<li class="nav hel"><a href="index.php">Home</a></li>
						
<li><a href="package-list.php">Tour Packages</a></li>
<li><a href="Tour_agencies.php">Tour Agency</a></li>
								<li><a href="page.php?type=contact">Contact Us</a></li>
									
								&nbsp&nbsp &nbsp&nbsp
								&nbsp&nbsp &nbsp&nbsp
								&nbsp&nbsp &nbsp&nbsp
								&nbsp&nbsp &nbsp&nbsp
								
								&nbsp&nbsp &nbsp&nbsp
								<li class="nav sig"><a href="#" data-toggle="modal" data-target="#myModal" ><i class= "fas fa-user-plus"></i></a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" ><i class="fas fa-sign-in-alt"></i></a></li>
                
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
						
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>