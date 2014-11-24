	<!-- this will includes all the links files we need for this site to work! -->
	<?php
	
		include_once 'includes/header.php';
		include 'includes/db.php';
		include'includes/session.php';
	?>


	<body>
		
		<head class="col-md-12">
			<?php include_once 'includes/menu.php';?>	
			
		</head><!--End of the Head div -->
		
		
		
		
		
		<div class="container welcome_text">

			
			<div class="row">
				<div class="col-md-3">
						<a href="#" class="thumbnail">
							<img src="img/payments.jpeg">
						</a>
							<p class="text-center">Name: <a href="#">Zia </a></p>
							<p class="text-center">Surname: <a href="#">Ahmed</a></p>
							<p class="text-center">Email: <a href="#">zia.ahmed@me.com</a></p>
					</div>

			</div>
			
			
					<?php
						
						$instructors = $db->query("SELECT* FROM Instructor");
				
						while($instructor =$instructors->fetch_object()){
							
							echo "<table class='table table-bordered'>
							
							<tr>
								<th></th>
								
								
							</tr>
							
							</table>";
				
						}
					
					?>


		
		
		
		
		
		
		

		
		</div>
		
		
		
		
		
		
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	
			
		
		
			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>
			
			
			
			
			<!-- End of the page design in main page -->
	</body>