<?php
            ini_set('session.cookie_domain', 'onereference.net/');
            session_start();
            $tempemail = "";
            
        	if(!isset($_SESSION['candidate_id'])){
        		header("location: login.php");
        		exit;
        	}
        	
        	echo 'this is the session candidate id: '. $_SESSION['candidate_id'];
        	$tempcandidate_id = $_SESSION["candidate_id"];
        	$tempemail = $_SESSION["email"]; 
        	$tempname = $_SESSION["fname"];
        	$templastname = $_SESSION["lname"];
        	
        	echo 'Temporary email '.$tempemail; 
        	
        	//error_reporting(E_ALL);
        	ini_set('display_errors', 1);
        
        	// Log errors to a file
        	ini_set('error_log', 'error.log');		
?>
<?php
//Event when the invite link is triggered
if(isset($_POST["submit_invite"])){
    
                error_reporting(E_ALL);
            	ini_set('display_errors', 1);
            
            	// Log errors to a file
            	ini_set('error_log', 'error.log');
            	//connect to the database
            	include_once("storescripts/connect_to_mysql.php"); 
            	//get email from data base
            	

        		 $tmp_id = "";
        		 $tmp_role ="";
        		 $tmp_username = ""; 
        		 $tmp_email = "";
        		 $tmp_password = "";
        		 $tmp_create_datetime = ""; 
        		 $tmp_name = "";
        		 $tmp_surname = "";
        		 $tmp_company = "";
        		 $tmp_jobrole= "";
        		 $tmp_Industry = "";
        		 $tmp_contact_num = "";
        		 $agent_id = "";		 
        		 $referree_id = "";
        		 $account_status = "true";		 
        		 $candidate_id = "";
        		 $candidate_email = $tempemail;
        		$tmp_reftype = '';
        		//Get details for the candidate				
        
        		 		 
        		// clean user inputs to prevent sql injections	 
        		$tmp_reftype = trim($_POST['txtreferee_type']);
        		$tmp_reftype = strip_tags($tmp_reftype);
        		$tmp_reftype = htmlspecialchars($tmp_reftype);
        			 
        		$tmp_name = trim($_POST['txtname']);
        		$tmp_name = strip_tags( $tmp_name);
        		$tmp_name = htmlspecialchars( $tmp_name);
        		
        		$tmp_surname = trim($_POST['txtsurname']);
        		$tmp_surname = strip_tags($tmp_surname);
        		$tmp_surname = htmlspecialchars($tmp_surname);
        		
        		$tmp_email = trim($_POST['txtemail']);
        		$tmp_email = strip_tags($tmp_email);
        		$tmp_email = htmlspecialchars($tmp_email);
        		
        		$tmp_Industry = trim($_POST['txtindustry']);
        		$tmp_Industry = strip_tags($tmp_Industry);
        		$tmp_Industry = htmlspecialchars($tmp_Industry);
        		
        		$tmp_jobrole = trim($_POST['txtjobrole']);
        		$tmp_jobrole = strip_tags($tmp_jobrole);
        		$tmp_jobrole = htmlspecialchars($tmp_jobrole);
        		
        		$tmp_contact_num = trim($_POST['txtcontact']);
        		$tmp_contact_num = strip_tags($tmp_contact_num);
        		$tmp_contact_num = htmlspecialchars($tmp_contact_num);
        		
        		$tmp_company = trim($_POST['txtcompany']);
        		$tmp_company = strip_tags($tmp_company);
        		$tmp_company = htmlspecialchars($tmp_company);
            	            
	            //get email froms session variable
				$email = $tempemail;
				//create link to enable referee to signup, the email is used to identify the related candidate
				$actual_link = "http://www.onereference.net/referee_signup.php?email=".$email;
        		$toEmail = $tmp_email;
        		$subject = "Signup and complete referee profile ";
        		//$mailHeaders = "From: Admin\r\n";
        		//mail($toEmail, $subject, $content, $mailHeaders);
        	    $message = "
                    <html>
                    <head>
                    <title> Onereference : Invitation to be a referee for job candidate </title>
                    </head>
                    <body>
                    <p> Good Day, </p>
                    <p> A candidate ". $tempname." ".$templastname." ,has elected you to be their referee on their job applications.  </p>
                    <p> Follow the link below to register as a referee and assist the job candidate with a reliable job referal. </p>
                    <table>
                    <tr>
                    <th>Link :". $actual_link ."</th>
                    </tr>
                    </table>
                    <p> Kind Regards </p>
                    <p> Onereference Team. </p>
            
                    </body>
                    </html>
                    ";
                    
                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    
                    // More headers
                    $headers .= 'From: <Admin@cp3.domains.co.za>' . "\r\n";
                    $headers .= 'Cc: Admin@cp3.domains.co.za' . "\r\n";
				
				if(mail($toEmail,$subject,$message,$headers)) {
					$errMSG = "Complete all details as the provided link to register as referree.";	
				}
				echo " Sending email...";
				$emailPass = "Invite has been submitted";
				//header('location:/candidate_home.php#invitereferee');
				//action="index.php#div4"
				/* CANDIDATE INVITES REFEREE TO JOIN PLATFORM*/
				$query = "INSERT INTO referee_invite
				(cand_id, ref_name, ref_surname, ref_email, cand_email, cand_name, cand_surname, ref_contact, referal_date, invite_status) 
            	
            	VALUES ('$tempcandidate_id','$tmp_name','$tmp_surname','$tmp_email','$tempemail','$tmp_name','$tmp_surname','$tmp_contact_num',now(),'invite_send')"; 
            	$res = mysqli_query($db ,$query);
            
            
}				
?>
<?php

//Event when referee is added Manually
// when submit button is clicked

if(isset($_POST["submit"])){
    
        error_reporting(E_ALL);
    	ini_set('display_errors', 1);
    
    	// Log errors to a file
    	ini_set('error_log', 'error.log');
    	//connect to the database
    	include_once("storescripts/connect_to_mysql.php"); 

		 $tmp_id = "";
		 $tmp_role ="";
		 $tmp_username = ""; 
		 $tmp_email = "";
		 $tmp_password = "";
		 $tmp_create_datetime = ""; 
		 $tmp_name = "";
		 $tmp_surname = "";
		 $tmp_company = "";
		 $tmp_jobrole= "";
		 $tmp_Industry = "";
		 $tmp_contact_num = "";
		 $agent_id = "";		 
		 $referree_id = "";
		 $account_status = "true";		 
		 $candidate_id = "";
		 $candidate_email = $tempemail;
		$tmp_reftype = '';
		//Get details for the candidate				

		 		 
		// clean user inputs to prevent sql injections	 
		$tmp_reftype = trim($_POST['txtreferee_type']);
		$tmp_reftype = strip_tags($tmp_reftype);
		$tmp_reftype = htmlspecialchars($tmp_reftype);
			 
		$tmp_name = trim($_POST['txtname']);
		$tmp_name = strip_tags( $tmp_name);
		$tmp_name = htmlspecialchars( $tmp_name);
		
		$tmp_surname = trim($_POST['txtsurname']);
		$tmp_surname = strip_tags($tmp_surname);
		$tmp_surname = htmlspecialchars($tmp_surname);
		
		$tmp_email = trim($_POST['txtemail']);
		$tmp_email = strip_tags($tmp_email);
		$tmp_email = htmlspecialchars($tmp_email);
		
		$tmp_Industry = trim($_POST['txtindustry']);
		$tmp_Industry = strip_tags($tmp_Industry);
		$tmp_Industry = htmlspecialchars($tmp_Industry);
		
		$tmp_jobrole = trim($_POST['txtjobrole']);
		$tmp_jobrole = strip_tags($tmp_jobrole);
		$tmp_jobrole = htmlspecialchars($tmp_jobrole);
		
		$tmp_contact_num = trim($_POST['txtcontact']);
		$tmp_contact_num = strip_tags($tmp_contact_num);
		$tmp_contact_num = htmlspecialchars($tmp_contact_num);
		
		$tmp_company = trim($_POST['txtcompany']);
		$tmp_company = strip_tags($tmp_company);
		$tmp_company = htmlspecialchars($tmp_company);
		
		$tmp_userrole = 'Referee';
		
		/* NO NEED FOR PASSWORD WHEN ADDING THE REFEREE ON YOUR OWN*/
		/*
		$tmp_password = trim($_POST['txtpassword']);
		$tmp_password = strip_tags($tmp_password);
		$tmp_password = htmlspecialchars($tmp_password); */
		
		
		/*
		$conpass = trim($_POST['txtconfirmpassword']);
		$conpass = strip_tags($conpass);
		$conpass = htmlspecialchars($conpass);
		*/
		
		$ip = 	trim($_SERVER['REMOTE_ADDR']);
				
		//basic email validation
		if (!filter_var($tmp_email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
			echo "Please enter valid email address";
		} else {
			// check email exist or not
			$query = "SELECT email FROM users WHERE email='$tmp_email' LIMIT 1 ;";
			$result = mysqli_query($db ,$query);
			$count = mysqli_num_rows($result); 
			if($count > 0){
				    $error = true;
					$emailError = "Provided email is already in use.";
					echo $emailError;
				
			}else{
			      //echo "email user is unique";
			      $error = false;  
			}
		}	
		
		/* password validation
		if (empty($tmp_password)){
			$error = true;
			$passError = "Please enter password.";
			echo $passError ;
		} else if(strlen($tmp_password) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";  
			echo $passError ;
		}*/
		
		//mandatory field validation		
		
		/* if all fields have been completed and not error has occurred */
		if(!$error ) {
			include 'storescripts/cryptpass.php';	
			$p_hash =  cryptPass($tmp_password); 
			
			//include ("storescripts/connect_to_mysql.php");
			$status = 'Inactive';
			$random = rand(1,10000);
			$today = date("Ymd");
			//used as a key to identify the user ( creation of IDs for each user type)
			$tmp_username = $today.$tmp_surname.$random;
			$referree_id = $today.$tmp_surname.$tmp_userrole.$random;
		
			//input all information that has been captured by the user
			$query1 = "INSERT INTO refereeprofile  
			( username ,  email ,  password ,  create_datetime ,  name ,  surname ,  company ,  jobrole ,  Industry ,
			 contact_num ,  ip_address ,  candidate_email , candidate_id ,  referree_id ,  pass_hash , account_status , account_type, referee_type, creator )
			VALUES 
			('$tmp_username','$tmp_email','$tmp_password',NOW(),'$tmp_name', '$tmp_surname','$tmp_company','$tmp_jobrole','$tmp_Industry',
			'$tmp_contact_num','$ip','$candidate_email','$candidate_id','$referree_id','$p_hash','$account_status','$tmp_userrole', '$tmp_reftype','candidate');";
			
			$res = mysqli_query($db ,$query1);	
			
			echo '  Referal completed';				
			//header('location:/Login.php');
	}
}

