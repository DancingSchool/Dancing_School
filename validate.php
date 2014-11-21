<?php
	//session included to record the user detail through the whole pages when the user is loged in.
	include_once 'includes/session.php';
	
	//Comture and validate the user input
	$userName = $pass=""; 
	$validate = true;
	$error;
	
	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["userName"]) || empty($_POST["pass"]) ) {
			$validate =false;
			$error =1;
		}
		
		else {
			// check if name only contains letters and whitespace
			$userName = test_input($_POST["userName"]);
			$pass = test_input($_POST["pass"]);
			if (!preg_match("/^[a-zA-Z0-9 ]*$/",$userName) || !preg_match("/^[a-zA-Z0-9 ]*$/",$pass)) {
			$validate =false;
			$error =2;
			}
		}

		
	}
	
	//trims any whitle space and stripslashes the user input contains, and return the user trimed data
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		 $data = htmlspecialchars($data);
		return $data;
	}
	
	//query the database and search if the user input match any record
	if($validate){
		
		require "includes/db.php";
		$users =$db -> query("SELECT* FROM Login WHERE Username='$userName' AND Password ='$pass'");

		if($users->num_rows==1){
			$_SESSION["loggedIn"] =true;
			$_SESSION["username"] =$userName;
			$_SESSION["person_id"] =$pass;
			
			header("location: main_page.php");

		}
		
		else{
			$error =3;
			header("location: index.php?error=$error");
		}
	}
	
	
	
	else{
		header("location: index.php?error=$error");
	}
	

?>