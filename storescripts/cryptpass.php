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
 
?>