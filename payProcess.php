<?php
    include_once"includes/header.php";
    include_once "includes/db.php";
    $stID;
    $payType;
    $amount;
    
    	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $stID = $_POST['stID'];
	    $payType =$_POST['payType'];
	    $amount =$_POST['amount'];

	    $db->query("INSERT INTO Payment (Student_id, Payment_type, Amount, Date) VALUES('$stID', '$payType', '$amount', NOW())");
	    echo "Your payment registeration has been successiful!";

	}
?>
<br>
<br>
<a href ='payment.php' class='btn btn-default btn-danger'>Return to Payment Page</a>