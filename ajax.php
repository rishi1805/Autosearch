<?php
 
include "database.php";

if (isset($_POST['search'])) {

   $Products = $_POST['search'];

   $Query = "SELECT Products FROM searchbox WHERE Products LIKE '%$Products%' LIMIT 5";

   $ExecQuery = MySQLi_query($con, $Query);

   echo '
   
<ul style ="list-style-type:none";>
   ';
   
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li onclick='fill("<?php echo $Result['Products']; ?>")' >
   <a>
   
       <?php echo $Result['Products']; ?>
   </li></a>
   
   <?php
}}
?>
</ul>
