<?php

require_once('../mySQL_connect.php');

$query = "SELECT email FROM emails"; 

$response = @mysqli_query($dbc, $query); 

if($response)
{
	echo 'EMAILS: '; 

	while($row = mysqli_fetch_array($response))
	{
		echo $row['email'];
	}
}
else
{
	echo 'Could not query database.'; 
}

mysql_close($dbc);

?>