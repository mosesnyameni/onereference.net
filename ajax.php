<?php

        // Include the database configuration file.
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        // Log errors to a file
        ini_set('error_log', 'error.log');
        include_once("storescripts/connect_to_mysql.php");  
        // Retrieve the value of the "search" variable from "script.js".
        
if (isset($_POST['search'])) {
   // Assign the search box value to the $Name variable.
   $searchvalue = $_POST['search'];
   // Define the search query.
   //$Query = "SELECT Name FROM users WHERE Name LIKE '%$Name%' LIMIT 5";
   $query = "SELECT id, username ,  email ,  password ,  create_datetime ,  name ,  surname ,  company ,  jobrole ,  Industry ,
			    contact_num ,  ip_address ,  agent_id ,  candidate_id ,  referree_id ,  pass_hash , account_status , account_type, search_value
				FROM users
				where search_value like '%$searchvalue%' and account_type ='candidate';"; 
   // Execute the query.
   $ExecQuery = mysqli_query($db, $query);
   /*
   $result1 = mysqli_query($db, $query1);
   $res_num1 = mysqli_num_rows($result1);
   $row = mysqli_fetch_row($result1);
   */
   // Create an unordered list to display the results.
   echo ' <ul>    ';
   // Fetch the results from the database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       
            echo '<div class="search-result">';
            echo '<p>Candidate Name : '.$Result['search_value'].'</p>';
            echo '<p>Email: ' . $Result['email'] . '</p>';
            echo '<button class="connect-btn" data-email="' . $Result['email'] . '">Connect</button>';
            echo '</div>';
       ?>
   <!-- Create list items.
        Call the JavaScript function named "fill" found in "script.js".
        Pass the fetched result as a parameter. 
   <P onclick='fill("<?php //echo $Result['search_value']; ?>")'> 
   <a> -->
   <!-- Display the searched result in the search box of "search.php". 
       <h5><?php //echo 'Candidate Name : '.$Result['search_value']; ?></h5>
   </P></a> 
   <P onclick='fill("<?php //echo $Result['email']; ?>")'>
   <a> -->
   <!-- Display the searched result in the search box of "search.php". 
       <h5><?php // echo 'Candidate Email : '.$Result['email']; ?></h5>
   </P></a>
   <button class="connect-btn" id="button-search" type="submit" data-email="<?php  //echo $Result['email']; ?>" > Connect</button>
   <button class="connect-btn" id="button-search" type="submit" data-email="<?php //echo $Result['email']; ?>" > Unfollow</button> -->
   <!-- The following PHP code is only for closing parentheses. Do not be confused. -->
   <?php
}}
?>
</ul>
