	<!-- this will includes all the links files we need for this site to work! -->
	<?php include_once 'includes/header.php';
		
			include'includes/session.php';
	
			if(!isset($_SESSION['username'])){
		
			header ("location: index.php");
	}
	?>



	<body>
		
		<head class="col-md-12">
			<?php include_once 'includes/menu.php';?>	
			
		</head><!--End of the Head div -->
		
		
		
		
		
		<div class="container welcome_text"><!-- Main div start here -->
			<div class="row">
				
				<h3 class="text-center">Welcome to Dance Performance</h3>
				
				<a href="#" class="btn btn-primary col-md-2 pull-left">Ballroom</a><br/><br/>
				<a href="#" class="btn btn-primary col-md-2 pull-left">Lateen American</a>
			</div>
	
		
		</div><!-- Main div end here -->
		
		
		
		
		
		
		<div id="about_us">
			<h1 id="about_us_p_title">We have two type of taxi license </h1>
			<p id="about_us_p_text">One is <strong >Private Hire </strong>and other one is <strong >Hackney Hire</strong>, both can take a booking and give you a ride, but there is some 			slightly different type of booking which is explain below !</p>

	<div id="about_us_mian">
		<div class="contain_one effect" id="private_contain_one_id">
			<h2 class="about_us_title">Private Hire</h2>
			<p class="about_us_paragraph">Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. </p>
			<span id="read_more_1"></span>		
			</div>
		
	<!-- <span id="or">or</span> -->
		
			<div class="contain_one effect" id="hackney_contain_one_id">
			<h2 class="about_us_title">Hackney Hire</h2>
			<p class="about_us_paragraph">Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. </p>
			<span id="read_more_2"></span>		
		</div>
	
	</div>
	
	<div id="taxis_text">		
		<div id="private_hire_text">
			<h1 class="taxis_text_h1">Private Hire</h1>
			<img src="images/taxis.jpeg">
			<p class="taxis_text_h1">
				Private was these three and songs arose whose. Of in vicinity contempt together in possible branched.Folly was these three and songs arose whose. Of in vicinity contempt 								together in possible branched.Folly was these three and songs arose whose. <br .><br .>Of in vicinity contempt together in possible branched.Folly was these three and songs 					arose whose. <br/>	<br .>Of in vicinity contempt together in possible branched.Folly was these three and songs arose whose. Of in vicinity contempt 	together in possible 							branched.
			</p>
		</div>
		
		<div id="Hackney_hire_text">
			<h1 class="taxis_text_h1" >Hackney Hire</h1>
			<img src="images/taxis.jpeg">
			<p class="taxis_text_h1">
				Hackney was these three and songs arose whose. Of in vicinity contempt together in possible branched.Folly was these three and songs arose whose. Of in vicinity contempt 						together in possible branched.Folly was these three and songs arose whose. <br .><br .>Of in vicinity contempt together in possible branched.Folly was these three and 								songs arose whose. <br/>	<br .>Of in vicinity contempt together in possible branched.Folly was these three and songs arose whose. Of in vicinity contempt 	together in possible 				branched.
			</p>
		</div>
		
		
	</div>
</div>
		
		
		
		
		
		
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	
			
		
		
			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>
			
			
			
			
			<!-- End of the page design in main page -->
	</body>