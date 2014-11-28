	<!-- this will includes all the links files we need for this site to work! -->
	<?php include_once 'includes/header.php';
		include'includes/session.php';

	
		if(!isset($_SESSION['username'])){
		
		header ("location: index.php");
	}
	?>
		


	<body>
		
	
		<div class="col-md-12">
			<?php include_once 'includes/menu.php';?>	
			
		</div><!--End of the Head div -->	
		
		
		
		<!-- Form start here -->
		<div class="container welcome_text">
			<div class="row">
				<div class="col-md-12">
				
					<h2 class="text-center">Student Register Form</h2> <hr/>
					
					<form action="stValidation.php" onsubmit=" return validateForm(this)" method="post" class="form-horizontal">
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable" id="firstName">First name :</p>
							<div class="col-sm-6">
								<input type="text" name ="firstName" class="form-control" placeholder="Type student name..." />
							</div>
						</div>
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable" id="lastName">Family name :</p>
							<div class="col-sm-6">
								<input type="text" name ="lastName" class="form-control" placeholder="Type student name..." />
							</div>
						</div>
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable" id="gender">Gender :</p>
							<div class="col-sm-6">
								<label class="radio-inline">
									<input type="radio" id ="male" name="genderRadio" value="male" />Male
								</label>
								<label class="radio-inline">
									<input type="radio" id ="female" name="genderRadio" value="female" />Female
								</label>							
							</div>
						</div>
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable" id="Email">Email :</p>
							<div class="col-sm-6">
								<input type="text" name="Email" class="form-control" placeholder="Type student email..." />
							</div>
						</div>						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable">Instructors:</p>
							<div class="col-sm-6">
								<select name ="instID" class="form-control">
									<option value="1">Sum</option>
									<option value="2">Jelue</option>
									<option value="3">David</option>
									<option value="4">Shawa</option>
									<option value="5">Hares</option>
								</select>								
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
			
		</div>
		
		
		
		
		
		
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	
			
		
		
			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>
			
			
			
			
			<!-- End of the page design in main page -->
	</body>