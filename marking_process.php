<?php
    include_once"includes/header.php";
    include_once "includes/db.php";
    $coupleID;
    $result1;
    $result2;
    $result3;
    
    	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
       $coupleID = $_POST['couple'];
	    $result1 =$_POST['dance1'];
	    $result2 =$_POST['dance2'];
	    $result3 =$_POST['dance3'];
	    
	    $db->query("INSERT INTO Examination (Couple_id, Dance_1_result, Dance_2_result, Dance_3_result, Date) VALUES('$coupleID', '$result1', '$result2', '$result3', NOW())");
	    echo "Your Markings have been successfully registered!";

	}
	
?>
<br>
<br>
<a href ='student_examination.php' class='btn btn-default btn-danger'>Return Examination Page</a>