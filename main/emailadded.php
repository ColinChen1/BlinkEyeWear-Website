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

	if(empty($s_POST['email_input']))
	{
		$data_missing[] = 'email'; 
	}
	else
	{
		$email = trim($POST['email_input']);
	}

	if(empty($data_missing))
	{
		require_once('../mySQL_connect.php'); 
	}
	
}

?>

</body>
</html>