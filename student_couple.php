	<!-- this will includes all the links files we need for this site to work! -->
	<?php include_once 'includes/header.php';
		
			include'includes/session.php';
	
			if(!isset($_SESSION['username'])){
		
			header ("location: index.php");
	}
	?>


	<body>
		
			<?php include_once 'includes/menu.php';?>	

				<!-- Form start here -->
		<div class="container welcome_text">
			<div class="row">
				<div class="col-md-12">
				
					<h2 class="text-center">Couple Register Form</h2> <hr/>
					
					<form action="couple_registeration_process.php" name ="couple" onsubmit="return validateCouple(this)" method="post" class="form-horizontal">
						
							<div class="form-group">
								<p class="col-sm-2 text-right control-lable" id="maleID">Male Step ID :</p>
								<div class="col-sm-6">
									<input type="text" name ="maleID" class="form-control" placeholder="Type male step ID..." />
								</div>
							</div>

						
							<div class="form-group">
								<p class="col-sm-2 text-right control-lable" id="femaleID">Female Step ID :</p>
								<div class="col-sm-6">
									<input type="text" name ="femaleID" class="form-control" placeholder="Type female step ID..." />
								</div>
							</div>
						
						
							<p id ="ptag" name ="pTag" value="EXPER"></p> 
						
							<div class="form-group">
								<div class="col-md-11">
									<p class="col-sm-2 text-right control-lable" id="danceType"> Dances :</p>
									<div class="col-md-6">
										
										<div  id ="latin"></div>						
									</div>
								</div>
							</div>
					

						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable" id="danceStyle">Dance Style: </p>
							<div class="col-md-5">
								<div class="col-md-6">
								<select name ="Dstyle" onchange ="revealChoice(this.value)" class="form-control col-sm-2 text-right control-lable">
									<option value="non">----</option>
									<option value="ballroom">Ballroom</option>
									<option value="Latin Amarican">Latin American</option>
								</select>	<br/><br/><br/>							
							</div>
							</div>
							
							

						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-6">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Clear</button>								
							</div>
						</div>	
						

						<a href ='main_page.php' class='btn btn-default btn-info col-md-offset-1'>Back to Main Page</a>
				
					</form><hr/>
			</div>
		</div>
	
		
		
		
		
		
		
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	

			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>

			<!-- End of the page design in main page -->
	</body>