<?php

	session_start();

	if(isset($_POST['submit']))
    { 

                $id = $_POST['id'];
		$password = $_POST['password'];

		if($id != "" || $password != ""){

			$_SESSION['flag'] = true;
			$_SESSION['id'] = $id;
			$_SESSION['password'] = $password;
                        if ($newpassword ="" ) 
			{
				echo "Enter a new Password";
			}

				else if ($password1=="@" ||$password1=="#" || $password1=="$" ||$password1=="%" and strlen($password1)<8) 
				{
					$user['password']=$newpassword;
					echo "Password changed";
				}
				else
				{
					echo "Enter a Valid password ";
 				}
		
		}else{
				echo "Invalid Input";
			}

			$conn = mysqli_connect('localhost', 'root', '', 'users');
			$sql = "alter table registration where id = '$id' and password = '$password' and type = 'User'";
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