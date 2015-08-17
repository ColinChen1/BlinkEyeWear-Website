<?php
$send = mail("colinchen1526@gmail.com", "Test", "test", "From: example@example.com", 'From: my_account@gmail.com'."\r\n".'Reply-To: my_account@gmail.com'."\r\n".'X-Mailer: PHP/'.phpversion()); 
if($send)
{
	echo 'Yes'; 
}
else
{
	echo 'No';
}
?>