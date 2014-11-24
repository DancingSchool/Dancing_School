	<!-- this will includes all the links files we need for this site to work! -->
	<?php
	
		include_once 'includes/header.php';
		include 'includes/db.php';
		include'includes/session.php';
	?>


	<body>
		
		<head class="container col-md-12">
			<?php include_once 'includes/menu.php';?>	
			
		</head><!--End of the Head div -->
		
		
		<?php
						
			$instructors = $db->query("SELECT* FROM Instructor");
				
			while($instructor =$instructors->fetch_object()){
				$inst++;
				
				echo "<div class='container welcome_text col-md-4'>
				
					<div class='row'>
						<div class='col-md-12'>
							<img class='col-md-6' src='img/instructors/inst$inst.png'>
							
							<p class='text-left'>Name: $instructor->First_name</p>
							<p class='text-left'>Surname: $instructor->Last_name</p>
							<p class='text-left'>Email: <a href'#'>$instructor->Email</a></p>
						</div>
					</div>
		
				</div>";
			}
		?>
		
		
		
		
		
		
		
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	
			
		
		
			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>
			
			
			
			
			<!-- End of the page design in main page -->
	</body>