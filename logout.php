<?php session_start();

    if (isset($_SESSION['loggedin'])) {
        unset(
            $_SESSION['loggedin'] ,
            $_SESSION["username"] ,
            $_SESSION["email"] ,
            $_SESSION["fname"] ,
            $_SESSION["lname"] ,
            $_SESSION["account_status"] ,
            $_SESSION["status"] ,
            $_SESSION["referree_id"] ,
            $_SESSION["agent_id"] ,
            $_SESSION['candidate_id']);
        session_destroy();
        header('location: login.php');
    }
