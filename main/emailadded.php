<!DOCTYPE html>
<html>
<head>
	<title>Email Added</title>
</head>
<body>
<?php

if(isset($_POST['submit_email']))
{
	$data_missing = array(); 

	if(empty($_POST['email_input']))
	{
		$data_missing[] = 'email'; 
	}
	else
	{
		$email = trim($_POST['email_input']);
	}

	if(empty($data_missing))
	{
		require_once('../mySQL_connect.php'); 
		$query = 'INSERT INTO user_referral_data (email) VALUES (?)';
		$statement = mysqli_prepare($dbc, $query); 

		mysqli_stmt_bind_param($statement, "s", $email); 
		mysqli_stmt_execute($statement); 

		$affected_rows = mysqli_stmt_affected_rows($statement); 
		if($affected_rows == 1)
		{
			echo 'Email Entered'; 
			mysqli_stmt_close($statement); 
			mysqli_close($dbc); 

		}
		else
		{
			echo 'Error Occurred'; 
			echo mysqli_error(); 
			mysqli_stmt_close($statement); 
			mysqli_close($dbc); 
		}
	}
	else
	{
		echo 'You need to enter an email!'; 
	}
	
}

?>

</body>
</html>