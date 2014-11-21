
<?php
	include_once 'includes/session.php';		
	include_once 'includes/header.php';
?>
	<body>
		<!--This is my big div wrapped the full page-->
		<div class="col-md-12 login_form">
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
		</div>
		
		<!-- I will delete this button later for now just to go on next page -->
		<a href="main_page.php" class="btn btn-default btn-danger">Main Page1</a>

		
		<!-- This include fulction will add all the jQuery functions -->
		<?php include_once 'includes/bottom_jQuery_script.php';?>


	
		<div class="container col-md-12 footer_note ">
			<?php include_once 'includes/footer.php';?>
		</div>
	
	</body>


</html>