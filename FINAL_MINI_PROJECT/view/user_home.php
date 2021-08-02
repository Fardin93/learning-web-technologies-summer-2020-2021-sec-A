<?php

	session_start();

	if ($_SESSION['flag']) {
		$id = $_SESSION['id'];
		$password = $_SESSION['password'];

		$conn = mysqli_connect('localhost', 'root', '', 'users');
		$sql = "select name from registration where id = '$id' and password = '$password'";
		$result = mysqli_query($conn, $sql);
		$name = mysqli_fetch_assoc($result);
		
	}

?>

<center>
	<h1>Welcome <?php echo $name['name']; ?></h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="view_users.php">View Users</a>
	<br/>
	<a href="login.html">Logout</a>
</center>
© 2021 GitHub, Inc.