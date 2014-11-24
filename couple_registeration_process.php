<?php
    include_once"includes/header.php";
    include_once "includes/db.php";
    $mID;
    $fID;
    
    	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mID = $_POST['maleID'];
	    $fID =$_POST['femaleID'];

	    $db->query("INSERT INTO Couple (Male_step_id, female_step_id) VALUES('$mID', '$fID')");
	    echo "Your couple registeration has been successiful!";

	}
?>
<br>
<br>
<a href ='student_couple.php' class='btn btn-default btn-danger'>Return to couple Page</a>