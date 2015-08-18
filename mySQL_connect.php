<?php
//CONNECTING TO DATABASE
DEFINE('DB_USER', 'root'); 
DEFINE('DB_PASSWORD', 'turtledove');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'blinkeyewear'); 

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error()); 

$dbc1 = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Error"); 

mysql_select_db(DB_NAME, $dbc1); 



?> 