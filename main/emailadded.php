<!DOCTYPE html>
<html>
<head>
	<title>Email Added</title>
</head>
<body>
<?php

if(isset($_POST['submit_email'])) //Grabbing email from input box. 
{
	$data_missing = array(); //Checking for missing data in form. 

	if(empty($_POST['email_input'])) 
	{
		$data_missing[] = 'email'; 
	}
	else
	{
		$email = trim($_POST['email_input']); //Getting the email. 
	}

	if(empty($data_missing)) //If no data missing...
	{
		require_once('../mySQL_connect.php'); //Connecting to database
		$query = 'INSERT INTO user_referral_data (email) VALUES (?)'; //Inserting email into database. 
		$statement = mysqli_prepare($dbc, $query); #Making statement. 

		mysqli_stmt_bind_param($statement, "s", $email); 
		mysqli_stmt_execute($statement); #Inserting email. 

		$affected_rows = mysqli_stmt_affected_rows($statement); 
		if($affected_rows == 1) #Making sure only one roow is changed. 
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
	else //If data is missing. 
	{
		echo 'You need to enter an email!'; 
	}
	
}

?>

</body>
</html>