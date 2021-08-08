<?php
  $name="user123";
   $password="321";

if (isset($_POST['login'])) {

	$getname=$_POST['uname'];
	$getpassword=$_POST['psw'];
	if ($getname==$name and $getpassword==$password) {
		if (isset($_POST['rm'])) {
			setcookie('name',$getname,time()+60*60*7 );

		}
			session_start();
			$_SESSION['name']=$getname;
			header("location:userpanel.php");


	}else{
		echo "Username or Password is Invalid.<br> click here to
		<a href='login.php'> try again </a> ";

	}
}

  ?>
