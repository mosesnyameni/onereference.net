<?php
    //$ser="localhost:3308";
	/*
	$servername = "localhost:3306";	
	$username = "mypropsp_rentspace";
    $password = 'mypropspace';
	
	//$password = '';
	$db_name = "mypropsp_rentspace";
	
	if(!function_exists('mysqli_init')&& !extension_loaded('mysqli')){
		echo 'Oops Connection Lost';
	} 
		
	// Create connection
	//$db = new mysqli($servername, $username,$password, $db_name);
	//$db = new mysqli($servername, $username,$password, $db_name);
	
	$db = mysqli_connect($servername, $username, $password, $db_name );
	//$db = mysqli_connect($servername, $username, $password);
	// Check connection
	
	if (!$db) {
	   // die("Connection failed: " . mysqli_connect_error());
		die('Connect Error: ' . $db->connect_error);
		echo "Connected failed";
	} */
	
	/////// Capture information to onereference database
	$servername = "localhost:3306";	
	//$username = "onereference_admin";
	$username = "mypropsp_onereference_admin";
    $password = 'Umbrellaone187';
	
	//$password = '';
	$db_name = "mypropsp_onereference";
	
	if(!function_exists('mysqli_init')&& !extension_loaded('mysqli')){
		echo 'Oops Connection Lost';
	} 
		
	// Create connection
	//$db = new mysqli($servername, $username,$password, $db_name);
	//$db = new mysqli($servername, $username,$password, $db_name);
	
	$db = mysqli_connect($servername, $username, $password, $db_name );
	//$db = mysqli_connect($servername, $username, $password);
	// Check connection
	
	if (!$db) {
	   // die("Connection failed: " . mysqli_connect_error());
		die('Connect Error: ' . $db->connect_error);
		echo "Connected failed";
	}
	
?>