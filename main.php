<?php 
   $email = stripslashes($argv[1]);
   $password = stripslashes($argv[2]);
   
   $handle = fopen("test.txt", "w");
   fwrite($handle, "hi ".$email." ".$password);
   

?>