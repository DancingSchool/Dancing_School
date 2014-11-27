	<!-- this will includes all the links files we need for this site to work! -->
	<?php include_once 'includes/header.php';?>


	<body>
		
			<?php include_once 'includes/menu.php';?>	

				<!-- Form start here -->
		<div class="container welcome_text">
			<div class="row">
				<div class="col-md-12">
				
					<h2 class="text-center">Payment Register Formpaes</h2> <hr/>
					
					<form action="payProcess.php" onsubmit=" return validatePayment(this)" method="post" class="form-horizontal">
						
						<div class="form-group">
							<p class="col-md-2 text-right control-lable" id="stID">Student ID :</p>
							<div class="col-md-10">
								<input type="text" name ="stID" class="form-control" placeholder="Type student ID..." />
							</div>
						</div>
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable">Payment Type:</p>
							<div class="col-sm-6">
								<select name ="payType" class="form-control">
									<option value="Cash">Cash</option>
									<option value="Card">Card</option>
									<option value="Cheque">Cheque</option>
								</select>								
							</div>
						</div>
						
						<div class="form-group">
							<p class="col-sm-2 text-right control-lable" id="amount">Amount :</p>
							<div class="col-sm-6">
								<input type="text" name ="amount" class="form-control" placeholder="Type payment amount..." />
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