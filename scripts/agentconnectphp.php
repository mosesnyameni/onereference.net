<?php
// Assuming you have established a database connection
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 // Log errors to a file
 ini_set('error_log', 'error.log');
            	//connect to the database
// Check if agentId and candidateEmail are set in the POST request
if (isset($_POST['agentId']) && isset($_POST['candidateEmail'])) {
    
	include_once("storescripts/connect_to_mysql.php"); 
    // Sanitize input data
    $agentId = mysqli_real_escape_string($db, $_POST['agentId']);
    $candidateEmail = mysqli_real_escape_string($db, $_POST['candidateEmail']);
    
    echo " agentconnectphp : received candidate email and agent id"; 
	//get values using agentID and candidate email then include this values into the connects_table
	//Get candidate value
	$query1 = "SELECT id, username ,  email ,  password ,  create_datetime ,  name ,  surname ,  company ,  jobrole ,  Industry ,
	contact_num ,  ip_address ,  agent_id ,  candidate_id ,  referree_id ,  pass_hash , account_status , account_type
	FROM users
	where email ='$candidateEmail';"; 
	// and status = 'active'
    $candresult = mysqli_query($db, $query1);
    $row = mysqli_fetch_row($candresult);
    $db_candidate_id = $row[1];
	
	//Get agent value
	$query2 = "SELECT id, username ,  email ,  password ,  create_datetime ,  name ,  surname ,  company ,  jobrole ,  Industry ,
	contact_num ,  ip_address ,  agent_id ,  candidate_id ,  referree_id ,  pass_hash , account_status , account_type
	FROM users
	where username ='$agentId';"; 
	// and status = 'active'
    $agentresult = mysqli_query($db, $query2);
    $row1 = mysqli_fetch_row($agentresult);
    $db_agent_email = $row1[2];
    
	//email value pair to search for the relationship between candidate and agent
	$searchvalue = $db_agent_email.' '.$candidateEmail;
	$connectstatus = "connected";
    // Perform an SQL query to insert agentId and candidateEmail into connections table
    $query = "INSERT INTO connect_table 
	(agent_id, candidate_id, connection_status, connectdate, candidate_email, agent_email, search_value) 
	VALUES ('$agentId', '$db_candidate_id', '$connectstatus',now(),'$candidateEmail','$db_agent_email','$searchvalue')";
    
    if (mysqli_query($db, $query)) {
        // If the query is successful, return a success message
        echo "Agent is now connected candidate!";
        
    } else {
        // If there's an error with the query, return the error message
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
} else {
    // If agentId and candidateEmail are not set, return an error message
        echo "Error: agentId and candidateEmail not set.";
}
?>
