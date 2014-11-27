<?php
    include_once"includes/header.php";
    include_once "includes/db.php";
    $mID;
    $fID;
    $dance1;
    $dance2;
    $dance3;
    
    	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mID = $_POST['maleID'];
			$fID =$_POST['femaleID'];
			$dance1 = $_POST['choice1'];
			$dance2 = $_POST['choice2'];
			$dance3 = $_POST['choice3'];
			
			echo $dance1;
			echo $dance2;
			echo $dance3;

			}

?>
<!--
	    $db->query("INSERT INTO Couple (Male_step_id, female_step_id) VALUES('$mID', '$fID')");
	    echo "Your couple registeration has been successiful!";

	}
?>
<br>
<br>
<a href ='student_couple.php' class='btn btn-default btn-danger'>Return to couple Page</a>

-->