<?php

$con = MySQLi_connect(
   "localhost", 
   "root", 
   "", 
   "autocompletesearch" 
);

if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>
 