
<?php
//	include_once 'includes/session.php';		
	include_once 'includes/header.php';
?>
	<body id="index">
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
						
						echo "<p class='error'> Incorrect Username or Password, please try again!</p>";
					}
				?>
			</div>
			<?php require_once 'includes/form.php';?>
		</div>
		
		
		
		<!-- This include fulction will add all the jQuery functions -->
		<?php include_once 'includes/bottom_jQuery_script.php';?>


	
		<div class="container col-md-12 footer_note ">
			<?php include_once 'includes/footer.php';?>
		</div>
	
	</body>


</html>