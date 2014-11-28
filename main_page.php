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
		
		
		
		
			<div class="container welcome_text">
				<div class="jumbotron">
					<center><h2>Welcome to Dancing School</h2>
					<p>For information on how to install and use Bootstrap for Sass, consult the GitHub repository readme. It's the most up to date source and includes information for use with Rails, Compass, and standard Sass projects.</p>
					<a href="#" class="btn btn-default">Couples</a>
					<a href="#" class="btn btn-info">Examinations</a></center>
				</div><!--End of the jumbotron div -->
			</div><!--End of the main container welcome div -->
			
			<div class="container">
				<div class="row">

					
					
					<div class="col-xs-6 col-md-3">
						<div class="list-group">
						  <a href=<?php require'links1.php';?> class="list-group-item active">
						    <center><h4 class="list-group-item-heading">Students</h4></center>
						    <a href=<?php require 'links1.php';?> class="thumbnail"><img src="img/new_student.jpeg" alt="..."></a></a>
						
						</div>
					</div>
					
					<div class="col-xs-6 col-md-3">
						<div class="list-group">
						  <a href="instructor.php" class="list-group-item active">
						    <center><h4 class="list-group-item-heading">Instructors</h4></center>
						    <a href="instructor.php" class="thumbnail "><img src="img/dance_instructor.jpeg" alt="..."></a>
						  </a>
						</div>
					</div>
					
					<div class="col-xs-6 col-md-3">
						<div class="list-group">
						  <a href="payment.php" class="list-group-item active">
						    <center><h4 class="list-group-item-heading">Paymants</h4></center>
						    <a href="payment.php" class="thumbnail"><img src="img/payments.jpeg" alt="..."></a>
						  </a>
						</div>
					</div>

					<div class="col-xs-6 col-md-3">
						<div class="list-group">
						  <a href="student_couple.php" class="list-group-item active">
						    <center><h4 class="list-group-item-heading">Couples</h4></center>
						    <a href="student_couple.php" class="thumbnail"><img src="img/couple_dance.jpeg" alt="..."></a>
						  </a>
						</div>
					</div>					


					
					<div class="col-xs-6 col-md-3">
						<div class="list-group">
						  <a href="student_examination.php" class="list-group-item active">
						    <center><h4 class="list-group-item-heading">Eximasations</h4></center>
							<a href="student_examination.php" class="thumbnail"><img src="img/dance_eximisation.jpeg" alt="..."></a>
						  </a>
						</div>
					</div>
					
					
				 
				</div><!--End of the ROW Div -->
			</div><!--End of the container div -->
	
		
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	
			
		
		
			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>
			
			
			
			
			<!-- End of the page design in main page -->
	</body>
</html>
	