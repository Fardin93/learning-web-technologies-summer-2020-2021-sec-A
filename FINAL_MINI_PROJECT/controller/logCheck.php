<?php
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id != "" || $password != ""){

			$_SESSION['flag'] = true;
			$_SESSION['id'] = $id;
			$_SESSION['password'] = $password;

			$conn = mysqli_connect('localhost', 'root', '', 'users');
			$sql = "select * from registration where id = '$id' and password = '$password' and type = 'User'";
			$result = mysqli_query($conn, $sql);


			if($result->num_rows == 1  ){

				header('location: ../view/user_home.php');
			}
			else
			{

				header('location: ../view/admin_home.php');
			}
		}
		}

	
?>