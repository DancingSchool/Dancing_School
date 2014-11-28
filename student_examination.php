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
				
					<h2 class="text-center">Examination Marking</h2> <hr/>
					
					<form action="marking_process.php" onsubmit=" return validateMarking(this)" method="post" class="form-horizontal">
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable" id="coupleID">Couple ID :</p>
							<div class="col-sm-6">
								<input type="text" name ="couple" class="form-control" placeholder="Type couple ID..." />
							</div>
						</div>
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable">Dance One Result:</p>
							<div class="col-sm-6">
								<select name ="dance1" class="form-control">
									<option value="Bronze">Broze</option>
									<option value="Silver">Silver</option>
									<option value="Gold">Gold</option>
								</select>								
							</div>
						</div>
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable">Dance Two Result:</p>
							<div class="col-sm-6">
								<select name ="dance2" class="form-control">
									<option value="Bronze">Broze</option>
									<option value="Silver">Silver</option>
									<option value="Gold">Gold</option>
								</select>								
							</div>
						</div>
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable">Dance Three Result:</p>
							<div class="col-sm-6">
								<select name ="dance3" class="form-control">
									<option value="Bronze">Broze</option>
									<option value="Silver">Silver</option>
									<option value="Gold">Gold</option>
								</select>								
							</div>
						</div>
				
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-6">
								<button type="submit" class="btn btn-primary">Submit Marking</button>
								<button type="reset" class="btn btn-default">Clear</button>								
							</div>
						</div>						
					</form><hr/>
			</div>
		</div>
			
		</div>
		
		
		
		<a href ='main_page.php' class='btn btn-default btn-info col-md-offset-1'>Back to Main Page</a>
		
		
		
	
			<!-- This include fulction will add all the jQuery functions -->
			<?php include_once 'includes/bottom_jQuery_script.php';?>	

			<!-- This include function will add the footer in the site -->
			<?php include_once 'includes/footer.php';?>

			<!-- End of the page design in main page -->
	</body>
	
</html>