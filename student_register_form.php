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
					
					
					<div class="col-md-6">
						<form action="student_register_form.php" method="post">
							<div class="list-group">
							  <a href="#" class="list-group-item active">
							    <center><input type="text" class="form-control text-center" name="searchName" placeholder="Search student by name... "></center>
							    
							    </a>
							</div>
							
							 
						
					</div>
					
					<div class="row">
						 <center class="col-md-2 btn btn-info"><input type="submit" class="form-control text-center" value="Search">
							 </center>
					</form>
					</div>
					
					
					<div class="col-sm-24 col-md-12">
						<div class="list-group">
						  
						    <center><h3 class="col-md-12 list-group-item-heading">Students found in database </center><br/><br/><br/></h3>
						  
							
							
							<table class=" col-md-12 row">
								<p class="well col-md-1 text-center text-capitalize">ID</p>
								<p class="well col-md-1 text-center text-capitalize">Gender</p>
								<p class="well col-md-2 text-center text-capitalize">First name</p>
								<p class="well col-md-2 text-center text-capitalize">Family name</p>
								<p class="well col-md-3 text-center text-capitalize">Student email</p>
								<p class="well col-md-2 text-center text-capitalize">Instructor Id</p>
								<br/>
							
								<div class=" col-md-12">
									<div class="row">
										
										
										
										<?php
											
											require 'includes/db.php';
											
											if(isset($_POST['searchName'])){
												$search_name = $_POST['searchName'];
												if(!empty($search_name)){
													
													$students = $db->query("SELECT* FROM Student WHERE First_name LIKE '%$search_name%'");
										
													
													if($students->num_rows>=1){
														while($student =$students->fetch_object()){
															
														
														echo "<p class=' col-md-1 text-center text-capitalize'>$student->Student_id</p>
																<p class=' col-md-1 text-center text-capitalize'>$student->Gender</p>
																<p class=' col-md-2 text-center text-capitalize'>$student->First_name</p>
																<p class=' col-md-2 text-center text-capitalize'>$student->Last_name</p>
																<p class=' col-md-3 text-center text-capitalize'>$student->Email</p>
															<p class=' col-md-2 text-center text-capitalize'>$student->Instructor_id</p>
															
															<form action='#' method='#'>
																<input type='submit' value='Delete'  class='btn btn-danger pull-right'/>
															</form>
															<br/><hr/>
																						";
														
														}
													}	
													else{
														echo 'No student match this name!';
													}
												}
											}
										
										?>
										
										
									</div>
								</div>
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