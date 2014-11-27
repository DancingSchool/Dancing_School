	<!-- this will includes all the links files we need for this site to work! -->
	<?php include_once 'includes/header.php';?>


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
						
							<div class="col-md-12">
								<h5 class="col-sm-2 text-left control-lable" id="danceType">Dances</h5>
								<div class="col-md-6">

									<div  id ="latin">
									</div>						
								</div>
							</div>
						</div>

						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable" id="danceStyle">Dance Style: </p>
							<div class="col-md-5">
								<div class="col-md-6">
								<select name ="instID" onchange ="revealChoice(this.value)" class="form-control col-sm-2 text-right control-lable">
									<option>----</option>
									<option value="ballroom">Ballroom</option>
									<option value="latin">Latin American</option>
								</select>	<br/><br/><br/>							
							</div>
							</div>
							
							

						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-6">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Clear</button>								
							</div>
						</div>						
					</form><hr/>
			</div>
		</div>
	
		
		
		
		
		
		
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	

			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>

			<!-- End of the page design in main page -->
	</body>