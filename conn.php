<?php

//$con = mysql_connection("localhost","cashsuvidbadmin","LGRU#2py");

         $dbhost = '13.127.98.139';
         $dbuser = 'root';
         $dbpass = 'jmd@111';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);

?>
