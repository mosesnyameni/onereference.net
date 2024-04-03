<?php

$inputPass = "Password"; // the user input
 $pass = "password"; 
 $hashedPass  = cryptPass($pass); //store the hash in the db
 echo $hashedPass;
 
 
 //checking against hash
 if (crypt($inputPass, $hashedPass) == $hashedPass){
	echo " <br /> Password is match";

 } else {
	echo  " <br />Password does not match";
 }
 
 
?>