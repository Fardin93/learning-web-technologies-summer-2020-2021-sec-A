<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password){
					$_SESSION['flag'] = 'true';
					header('location: ../view/index.html');
			}else{
				echo 'invlaid username or password';
			}

		}else{
			echo "null value found";
		}
	}else{
		echo "invalid";
	}

?>