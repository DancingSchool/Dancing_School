<?php

// database credentials
$dbHost		 = 'linuxproj.ecs.soton.ac.uk';
$dbUsername	 = 'za2e13';
$dbPassword	 = 'DancingSchool';
$dbSchema	 = 'db_za2e13';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbSchema);

// check if the database connection failed
if($db->connect_errno){
	echo "Failed to connect to MySQL: " . $db->connect_error;
}