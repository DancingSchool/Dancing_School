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
						    <center><input type="text" class="form-control text-center" name="searchName" placeholder="search student by name... "></center>
						    
						    </a>
						 
						</div>
						 <center class="col-md-3 btn"><input type="submit" class="form-control text-center" value="search"></center>
						</form>
					</div>
					
					
					<div class="col-sm-24 col-md-12">
						<div class="list-group">
						  
						    <center><h4 class="col-md-12 list-group-item-heading ">Students found in database </center><br/><br/><br/></h4>
						  
							
							
							<table class="col-sm-12 col-md-12 row">
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student id</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student gender</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student first name</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student Family name</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student Couple</p>
								<p class="col-sm-2 col-md-2 text-center text-capitalize">Student Results</p>
								
								<div class="container col-md-12">
									<div class="row"><hr/>
										
										
										
										<?php
											
											require 'includes/db.php';
											
											if(isset($_POST['searchName'])){
												$search_name = $_POST['searchName'];
												if(!empty($search_name)){
													
													$students = $db->query("SELECT* FROM Student WHERE First_name LIKE '%$search_name%'");
										
													
													if($students->num_rows>=1){
														while($student =$students->fetch_object()){
															
														
														echo "<p class='col-sm-2 col-md-2 text-center text-capitalize'>$student->Student_id</p>
															<p class='col-sm-2 col-md-2 text-center text-capitalize'>$student->First_name</p>
															<p class='col-sm-2 col-md-2 text-center text-capitalize'>$student->Last_name</p>
															<p class='col-sm-2 col-md-2 text-center text-capitalize'>$student->Gender</p>
															<p class='col-sm-2 col-md-2 text-center text-capitalize'>$student->Email</p>
															<p class='col-sm-2 col-md-2 text-center text-capitalize'>$student->Instructor_id</p>
															<p class='col-sm-2 col-md-2 text-center text-capitalize'>$student->Couple_id</p>
														";
														
														}
													}	
													else{
														echo 'No student match this name!';
													}
												}
											}
										
										?>
										
										<hr/>
										
										
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