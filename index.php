

<?php
	include_once 'includes/session.php';		
	include_once 'includes/header.php';
?>
	<body>
		<!--This is my big div wrapped the full page-->
		<div class="col-md-12">
			<div id ="center">
			
				<!-- Detect and desplay error message on the page when the user loging fails-->
				<?php
					if($_GET["error"]==1){
						
						echo "<p class ='error'> Both Username and Password Required!</p>";
					}
					
					if($_GET["error"]==2){
						echo "<p class='error'> Could not log in. Valid authentication credentials were not provided!</p>";
					}
					
					else if($_GET["error"]==3){
						
						echo "<p class='error'> Incurrect Username or Password, please try again!</p>";
					}
				?>
			</div>
		<?php require_once 'includes/form.php';?>

	
	<!--Link to the google JQeury library and to bootstrap-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>	
	</body>


	
</html>