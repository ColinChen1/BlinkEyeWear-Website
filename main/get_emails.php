<?php

require_once('../mySQL_connect.php');

$query = "SELECT email FROM emails"; 

$response = @mysqli_query($dbc, $query); 

if($response)
{
	echo 'EMAILS: <p></p>'; 

	while($row = mysqli_fetch_array($response))
	{
		echo $row['email'];
		echo '<p></p>';
	}
}
else
{
	echo 'Could not query database.'; 
}

mysqli_close($dbc);

?>