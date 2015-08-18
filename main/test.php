<?php
require_once('../mySQL_connect.php');


$query = mysql_query("SELECT * FROM user_data WHERE email = 'colinchen1526@gmail.com'") or die(mysql_error()); 
if($query)
{
	die("HIDS");
}
?>