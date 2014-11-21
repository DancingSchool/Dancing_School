<!-- this will includes all the links files we need for this site to work! -->
<?php include_once 'includes/header.php';?>


	<body>
		
		<!--This is my big div wrapped the full page-->
		<div class="col-md-12 login_form">	
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