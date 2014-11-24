	<!-- this will includes all the links files we need for this site to work! -->
	<?php include_once 'includes/header.php';
		include'includes/session.php';
	?>
	


	<body>
		
		<head class="col-md-12">
			<?php include_once 'includes/menu.php';?>	
			
		</head><!--End of the Head div -->
		
		
		
		
		

		
		
	
			
			<div class="container welcome_text">
				<div class="row">
					
					<div class="col-sm-6 col-md-3">
						<div class="list-group">
						  <a href="add_new_student.php" class="list-group-item active">
						    <center><h4 class="list-group-item-heading">Add New Student</h4></center>
						    </a>
						</div>
					</div>
					
					
					<div class="col-sm-12 col-md-9">
						<div class="list-group">
						  <a href="#" class="list-group-item active">
						    <center><input type="text" class="form-control text-center" placeholder="search student by name... "></center>
						    </a>
						</div>
					</div>
					
					
					<div class="col-sm-24 col-md-12">
						<div class="list-group">
						  <a href="#" class="list-group-item">
						    <center><h4 class="list-group-item-heading ">Students found in database </h4></center>
						  </a>
							
							
							<table class="col-sm-12 col-md-12 table table-bordered table table-hover row">
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student id</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student gender</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student first name</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student Family name</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student Couple</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student Results</p>
								<p class="table-bordered col-sm-12 col-md-12">This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1  This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1 This is the paragraph 1</p>
								
								
								
								<a href="#" class="list-group-item-heading">This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1  This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1 This is the paragraph 1</a><br/>
								<a href="#" class="list-group-item-heading">This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1  This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1 This is the paragraph 1</a><br/>
								<a href="#" class="list-group-item-heading">This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1  This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1 This is the paragraph 1</a><br/>
								<a href="#" class="list-group-item-heading">This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1  This is the paragraph 1 	This is the paragraph 1 	This is the paragraph 1 This is the paragraph 1</a><br/>
								
						    	<p class="table-bordered col-md-2 table-bordered">This is the paragraph 1</p>
							</table>
						
						</div>
					</div>
				</div>
			</div>
		
		
		
		
		
		
		
		
		
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	
			
		
		
			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>
			
			
			<br>
			<br>
			<a href ='main_page.php' class='btn btn-default btn-info col-md-offset-1'>Back to Main Page</a>
			
			<!-- End of the page design in main page -->
	</body>