<?php
    include_once"includes/header.php";
    include_once "includes/db.php";
    $mID;
    $fID;
    $dStyle;
    $dance1;
    $dance2;
    $dance3;
    
    	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mID = $_POST['maleID'];
			$fID =$_POST['femaleID'];
			$dStyle = $_POST['Dstyle'];
			$dances = $_POST['checkB'];
				
			$dance1 = $dances[0];
		    $dance2 = $dances[1];
		    $dance3 = $dances[2];

			
	    $db->query("INSERT INTO Couple (Male_step_id, Female_step_id, Dancing_style, Dance_1, Dance_2, Dance_3) VALUES('$mID', '$fID','$dStyle', '$dance1','$dance2','$dance3')");
	    echo "Your couple registeration has been successiful!";

		}
?>
<br>
<br>
<a href ='student_couple.php' class='btn btn-default btn-danger'>Return to couple Page</a>