<?php 
include_once("shared/menu_general.php");
if (isset($_POST["submit"])) {
    ob_start();
    //ini_set('session.cookie_domain', 'mypropspaces.co.za/');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    // Log errors to a file
    ini_set('error_log', 'error.log');

    // Log errors to a file
    //var_dump($_POST);
    include_once("storescripts/connect_to_mysql.php");

    $error = false;

    $email = trim($_POST['txtemail']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['txtpassword']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    $passError = '';
    $emailError = '';
    $emailstatus = false;
    $passStatus = false;

    //basic email validation
    if (empty($email)) {
        $error = true;
        $emailError = "Please enter email address.";
        //echo "email error 1";
    } else { // check email exist or not
        $query = "SELECT email FROM users WHERE email='$email';";
        $result = mysqli_query($db, $query);
        $res_num = mysqli_num_rows($result);

        if ($res_num <= 0) {
            $error = true;
            $emailError = "Username and password not recognised";
            echo $emailError;
        } else { //user exists
            $error = false;
        }
    }
    //Insertion of data in the database		
    include 'storescripts/cryptpass.php';
    if (empty($pass)) {
        $error = true;
        $passError = "Please enter your password";
        //echo "no password";
    } else if (!$error) {

        $query1 = "SELECT id, username ,  email ,  password ,  create_datetime ,  name ,  surname ,  company ,  jobrole ,  Industry ,
			    contact_num ,  ip_address ,  agent_id ,  candidate_id ,  referree_id ,  pass_hash , account_status , account_type
				FROM users
				where email ='$email';";

        // and status = 'active'
        $result1 = mysqli_query($db, $query1);
        $res_num1 = mysqli_num_rows($result1);
        $row = mysqli_fetch_row($result1);

        $db_password = $row[3];
        //first convert password and then validate against password hash
        $p_hash = cryptPass($pass);
        $p_db_hash = cryptPass($db_password);
        //get the hashed password from the database
        $db_pass_hash = $row[15];
        //echo 'input password '.$pass; 
        //echo ' DB password '.$db_password; 

        $db_account_type = $row[17];
        //echo ' The type of user :'. $db_account_type ;
        //check if the user exits
        if ($res_num1 < 0) {
            $passError = "User not recognised. Please login with correct credentials";

            //if the user exits and validate hashed password VS database hashed password
        } else if (($res_num1 == 1) && ($pass == $db_password)) {
            session_start();
            //echo ' user signed in		';
            // prevent session fixation attack
            session_regenerate_id();

            $db_ID = $row[0];
            $db_username = $row[1];
            $db_email = $row[2];
            $db_name = $row[5];
            $db_surname = $row[6];
            $db_company = $row[7];
            $db_jobrole = $row[8];
            $db_Industry = $row[9];
            $db_contact_num = $row[10];
            $db_ip_address = $row[11];
            $db_agent_id = $row[12];
            $db_candidate_id = $row[13];
            $db_referree_id = $row[14];
            $db_pass_hash = $row[15];
            $db_account_status = $row[16];
            $db_account_type = $row[17];

            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = $db_username;
            $_SESSION["email"] = $db_email;
            $_SESSION["fname"] = $db_name;
            $_SESSION["lname"] = $db_surname;
            $_SESSION["account_status"] = $db_account_status;
            $_SESSION["status"] = $db_account_status;
            $_SESSION["referree_id"] = $db_referree_id;
            $_SESSION["agent_id"] = $db_agent_id;
            $_SESSION['candidate_id'] = $db_candidate_id;
            $sql = "UPDATE users
				SET ip_address = '$db_ip_address', last_login=now() where email='$db_email';";

            $query2 = mysqli_query($db, $sql);

            if (($db_account_type == "Agent")) {
                header("location: agent_home.php");
                exit;
            } else if ($db_account_type == "Candidate") {
                //echo ' candidate signed on';
                //header("location: Login.php");
                header("location: candidate_home.php");
                exit;
                //Header("Location: servicehome.php");
                //Header("Location: email_activation.php");
            } else if ($db_account_type == "Referee") {
                header("location: referee_home.php");
                exit;
                //exit();
            } else {
                $passError = "Please enter the correct password";
            }
        } else { //passwords do match
            $error = true;
            $passError = " Incorrect password or username";
        }
    }
}
