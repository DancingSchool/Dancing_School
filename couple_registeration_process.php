<?php
    include_once"includes/header.php";
    include_once "includes/db.php";
    $mID;
    $fID;
<<<<<<< HEAD
    $dance1;
    $dance2;
    $dance3;
=======
>>>>>>> FETCH_HEAD
    
    	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mID = $_POST['maleID'];
<<<<<<< HEAD
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
=======
	    $fID =$_POST['femaleID'];

>>>>>>> FETCH_HEAD
	    $db->query("INSERT INTO Couple (Male_step_id, female_step_id) VALUES('$mID', '$fID')");
	    echo "Your couple registeration has been successiful!";

	}
?>
<br>
<br>
<<<<<<< HEAD
<a href ='student_couple.php' class='btn btn-default btn-danger'>Return to couple Page</a>

-->
=======
<a href ='student_couple.php' class='btn btn-default btn-danger'>Return to couple Page</a>
>>>>>>> FETCH_HEAD
