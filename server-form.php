<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}
if(empty($_POST["fullname"]) ||
	empty($_POST["email"]))
	{
		echo "Please fill the form";
		exit;
	}
	
$name = $_POST["fullname"];
$email = $_POST["email"];

mail( 'pmj@user10.com' , 'New form submission' , 
"New form submission: Name: $name, Email:$email"  );

header('Location: result-form.html');


?>