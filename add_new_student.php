	<!-- this will includes all the links files we need for this site to work! -->
	<?php include_once 'includes/header.php';?>


	<body>
		
		<head class="col-md-12">
			<?php include_once 'includes/menu.php';?>	
			
		</head><!--End of the Head div -->
		
		
		
		
		
		<!-- Form start here -->
		<div class="container welcome_text">
			<div class="row">
				<div class="col-md-12">
				
					<h2 class="text-center">Student Register Form</h2> <hr/>
					
					<form class="form-horizontal">
						
						<div class="form-group">
							<lable class="col-sm-2 text-right control-lable" for="gender">Gender :</lable>
							<div class="col-sm-6">
								<label class="radio-inline">
									<input type="radio" name="genderRadio" value="male" />Male
								</label>
								<label class="radio-inline">
									<input type="radio" name="genderRadio" value="female" />Female
								</label>							
							</div>
						</div>
						
						
						<div class="form-group">
							<lable class="col-sm-2 text-right control-lable" for="first-name">First name :</lable>
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="Type student name..." />
							</div>
						</div>
						
						<div class="form-group">
							<lable class="col-sm-2 text-right control-lable" for="family-name">Family name :</lable>
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="Type student name..." />
							</div>
						</div>
						
						<div class="form-group">
							<lable class="col-sm-2 text-right control-lable" for="email">Email :</lable>
							<div class="col-sm-6">
								<input type="email" class="form-control" placeholder="Type student email..." />
							</div>
						</div>						
						<div class="form-group">
							<lable class="col-sm-2 text-right control-lable" for="city">Instructors:</lable>
							<div class="col-sm-6">
								<select class="form-control">
									<option value="Azam">Azam</option>
									<option value="Aliyu">Aliyu</option>
									<option value="Nmat">Nmat</option>
									<option value="Saber">Saber</option>
									<option value="Zia">Zia</option>
								</select>								
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
			
		</div>
		
		
		
		
		
		
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	
			
		
		
			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>
			
			
			
			
			<!-- End of the page design in main page -->
	</body>