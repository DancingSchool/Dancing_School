<?php
    include_once"includes/header.php";
    include_once "includes/db.php";
    $stID;
   
    $stID = $_GET['id'];
    $student = $db->query("UPDATE Student SET Existence=0 WHERE Student_id = '$stID'");

	echo "Student with the student ID: $stID successfully deleted!";


?>
<br/>
<br/>
<a href ='student_register_form.php' class='btn btn-default btn-danger'>Return to Student Page</a>