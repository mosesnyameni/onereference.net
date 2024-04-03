<?php
//function to encrypt password
//input parameter is the password
function cryptPass($input , $rounds = 9){
   $salt = "";
   $saltChars = array_merge(range('A', 'Z'), range('a', 'z'), range(0,9));
   for($i=0; $i < 22; $i++){
		$salt .= $saltChars[array_rand($saltChars)];
   }
   //the enryptions used is one encryption name blowfish
   return crypt($input, sprintf('$2y$%02d$', $rounds) . $salt);

}
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