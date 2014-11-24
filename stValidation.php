<?php
    include_once"includes/header.php";
    include_once "includes/db.php";
    $firstName;
    $secondName;
    $genre;
    $email;
    $instID;
    
    	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = $_POST['firstName'];
	    $secondName =$_POST['lastName'];
	    $genre =$_POST['genderRadio'];
	    $email =$_POST['Email'];
	    $instID =$_POST['instID'];
	    
	    $db->query("INSERT INTO Student (Instructor_id, First_name, Last_name, Gender, Email) VALUES('$instID', '$firstName', '$secondName', '$genre','$email')");
	    echo "Your registeration has been successiful!";

	}
?>
<br>
<br>
<a href ='student_register_form.php' class='btn btn-default btn-danger'>Return Students Page</a>