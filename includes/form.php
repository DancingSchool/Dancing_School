<?php
	$userName = $pass=""; 
	$userNameError = $passError ="";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["userName"])) {
			$userNameError = "Username is required";
		}
		else {
			$userName = test_input($_POST["userName"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ];:*$/",$userName)) {
			$userNameError = "Only letters and numbers allowed";
			}
		}
		
		if (empty($_POST["pass"])) {
			$passError = "Password is required";
		}
		else {
			$pass = test_input($_POST["pass"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ];:*$/",$userName)) {
			$passError = "Only letters and numbers allowed";
			}
		}
		
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		 $data = htmlspecialchars($data);
		return $data;
	}

?>


			<form class="form-inline" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				
				<h2 class="title_text">Dancing School Instructor Login2</h2>
  				<div class="form-group">
  					<div class="input-group">
  						<div class="input-group-addon glyphicon glyphicon-user"></div>
  						<input class="form-control" name = "userName" type="text" placeholder="Type your user name">
						<p class="error"><?php echo ($userNameError);?></p>
    				</div>
  				</div>
  				
  				
  				<div class="form-group">
  					<label class="sr-only" for="exampleInputPassword2">Password</label>
  					<input type="password" class="form-control" id="exampleInputPassword2" name = "pass" placeholder="Password">
					<p class="error"><?php echo ($passError);?></p>
  				</div>
  				
  				<div class="checkbox">
  					<label><input type="checkbox"> Remember me</label>
  				</div>
  
  				<button type="submit" class="btn btn-default">Sign in</button>
			</form>
