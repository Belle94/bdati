<?php 
	$server = localhost;
    $user = frebelle94;
    $pass = *****;
    $dbname = tesinabdati;
    
    $conn = new mysqli($server, $user, $pass, $dbname);
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }
?>