<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

if(isset($_POST['submit_email'])) //Grabbing email from input box. 
{
	$data_missing = array(); //Checking for missing data in form. 

	require_once('../mySQL_connect.php'); //Connecting to database.

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

		$checkForSameEmail = mysql_query("SELECT * FROM user_data WHERE email = '$email'") or die("query error1"); 

		if(mysql_num_rows($checkForSameEmail) == 0)
		{

		//	$to      = 'colinchen1526@gmail.com';
		//	$subject = 'the subject';
		//	$message = 'hello';
		//	$send = mail('colinchen1526@gmail.com', $subject, $message); //Sending email telling user that they have signed up. 
		//	if($send)
		//	{
		//		echo 'Yes'; 
		//	}
		//	else
		//	{
		//		echo 'No';
		//	}		
			
			$query = 'INSERT INTO user_data (email, referral_code) VALUES (?, ?)'; //Query for inserting email into database. 
			$statement = mysqli_prepare($dbc, $query); #Making statement. 		

			$seed = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'); #Creating random referral code. 
			$rand = '';
			foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];
			echo $rand; 

			mysqli_stmt_bind_param($statement, "ss", $email, $rand); 
			mysqli_stmt_execute($statement); #Inserting email and randomly generated referral code. 

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

			header(('Location: referral_page.php?ref=' . $rand));
		}
		else
		{
			$grabReferralCodeQuery = "SELECT referral_code FROM user_data WHERE email = '$email'"; //Getting referral code of already entered email. 
			$referral_code_object = mysql_query($grabReferralCodeQuery); 
			$referral_code_array = mysql_fetch_assoc($referral_code_object);
			$referral_code_url = $referral_code_array['referral_code']; 
			header(('Location: referral_page.php?ref=' . $referral_code_url)); 
		}
	}
	else //If data is missing. 
	{
		echo 'You need to enter an email!'; 
	}
	
}

//header('Location: referral_page.html'); //Directing to referral page after signing up. 

?>

</body>
</html>