  
<?php
	require_once("userModel.php");

	$email = $_GET['email'];

	if($email == null){
		echo 'Enter email...';
	}else{
		addEmail($email);
		echo "Subscribed: ".$email;
	}

?>