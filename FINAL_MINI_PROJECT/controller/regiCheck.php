<?php


	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		if($id == "" || $email == "" || $password == "" || $cpassword == "" || $name == ""){
			echo "null submission...";
		}else{

			if($password == $cpassword){

				$conn = mysqli_connect('localhost', 'root', '', 'users');
				$sql = "insert into registration values('$id', '$password', '$cpassword', '$name', '$email', '$type')"; 
				$result = mysqli_query($conn, $sql);

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>