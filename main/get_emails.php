
<?php

require_once('../mySQL_connect.php');

$query = "SELECT email FROM user_referral_data"; 
$response = @mysqli_query($dbc, $query); 

if($response) //DISPLAYING DATA
{
	echo ' <table align = "left" cellspacing = "5" cellpadding = "8">

	   <tr><td align = "left"><b>Email</b></td>
       <td align = "left"><b>Referral Code</b></td>
       <td align = "left"><b>Friends Referred</b></td></tr> ';

	while($row = mysqli_fetch_array($response))
	{
		echo '<tr><td align="left">' . $row['email'];
		echo '<p></p>';
	}
}
else
{
	echo 'Could not query database.'; 
}

mysqli_close($dbc);

?>