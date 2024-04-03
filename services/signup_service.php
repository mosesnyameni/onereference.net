<?php

include_once("shared/menu_general.php");
if (isset($_POST['submit'])) {
    include_once("storescripts/connect_to_mysql.php");
    //variable creation

    $tmp_id = "";
    $tmp_userrole = "";
    $tmp_username = "";
    $tmp_email = "";
    $tmp_password = "";
    $tmp_create_datetime = "";
    $tmp_name = "";
    $tmp_surname = "";
    $tmp_company = "";
    $tmp_jobrole = "";
    $tmp_Industry = "";
    $tmp_contact_num = "";
    $agent_id = "";
    $candidate_id = "";
    $referree_id = "";
    $account_status = "true";

    // clean user inputs to prevent sql injections

    $tmp_userrole = trim($_POST['txtprofile_type']);
    $tmp_userrole = strip_tags($tmp_userrole);
    $tmp_userrole = htmlspecialchars($tmp_userrole);

    $tmp_name = trim($_POST['txtname']);
    $tmp_name = strip_tags($tmp_name);
    $tmp_name = htmlspecialchars($tmp_name);

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

    $tmp_password = trim($_POST['txtpassword']);
    $tmp_password = strip_tags($tmp_password);
    $tmp_password = htmlspecialchars($tmp_password);

    $emailError = '';
    $passError = '';
    $conf_pass_Error = '';
    $error_msg = '';
    $error = false;
    $emailPass = '';
    /*
      $conpass = trim($_POST['txtconfirmpassword']);
      $conpass = strip_tags($conpass);
      $conpass = htmlspecialchars($conpass);
     */

    $ip = trim($_SERVER['REMOTE_ADDR']);

    //basic email validation
    if (!filter_var($tmp_email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
        echo "Please enter valid email address";
    } else {
        // check email exist or not
        $query = "SELECT email FROM users WHERE email='$tmp_email' LIMIT 1 ;";
        $result = mysqli_query($db, $query);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $error = true;
            $emailError = "Provided email is already in use.";
            echo $emailError;
            //$emailError = $result + " I am false";
            //echo $emailError ;
            //die(mysqli_error());
        } else {
            echo "email user is unique";
            $error = false;
        }
    }
    // password validation
    if (empty($tmp_password)) {
        $error = true;
        $passError = "Please enter password.";
        echo $passError;
    } else if (strlen($tmp_password) < 6) {
        $error = true;
        $passError = "Password must have atleast 6 characters.";
        echo $passError;
    }

    //mandatory field validation

    /* if all fields have been completed and not error has occurred */
    if (!$error) {

        include 'storescripts/cryptpass.php';
        $p_hash = cryptPass($tmp_password);

        include ("storescripts/connect_to_mysql.php");
        $status = 'Inactive';
        $random = rand(1, 10000);
        $today = date("Ymd");
        //used as a key to identify the user ( creation of IDs for each user type)
        $tmp_username = $today . $tmp_surname . $random;
        $candidate_id = '';
        $agent_id = '';
        $referree_id = '';
        if (!empty($tmp_userrole)) {
            if ($tmp_userrole == 'Candidate') {
                $candidate_id = $today . $tmp_surname . $tmp_userrole . $random;
                //$propertyowner_id = $today.$lname.$role.$random;
                //header('location:/agentprofile.php');
            } else if ($tmp_userrole == 'Agent') {    //compare passwords				
                $agent_id = $today . $tmp_surname . $tmp_userrole . $random;
                //header('location:/renterprofile.php');					
            } else if ($tmp_userrole == 'Referee') {
                $referree_id = $today . $tmp_surname . $tmp_userrole . $random;
                //header('location:/buyerprofile.php');
            }
        }
        //input all information that has been captured by the user
        $var_searchval = $tmp_name . ' ' . $tmp_surname;

        $query1 = "INSERT INTO users
		    ( username ,  email ,  password ,  create_datetime ,  name ,  surname ,  company ,  jobrole ,  Industry ,
			 contact_num ,  ip_address ,  agent_id ,  candidate_id ,  referree_id ,  pass_hash , account_status , account_type,search_value )
			VALUES 
			('$tmp_username','$tmp_email','$tmp_password',NOW(),'$tmp_name', '$tmp_surname','$tmp_company','$tmp_jobrole','$tmp_Industry',
			'$tmp_contact_num','$ip','$agent_id','$candidate_id','$referree_id','$p_hash','$account_status','$tmp_userrole','$var_searchval');";

        $res = mysqli_query($db, $query1);
        header('location: login.php');
        $emailPass = " successfull capturing";
    } else {
        $error_msg = " Profile cannot be captured due to missing information";
    }
}
