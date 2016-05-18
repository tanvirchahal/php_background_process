<?php 

   // Receiving the arguments on the server task
   $email = stripslashes($argv[1]);
   $password = stripslashes($argv[2]);
   
   $handle = fopen("test.txt", "w");
   
   //writing a file called test.txt, contains custom passed data
   fwrite($handle, "hi ".$email." ".$password);
   

?>