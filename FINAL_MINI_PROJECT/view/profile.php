<?php

	session_start();

	if ($_SESSION['flag']) {
		$id = $_SESSION['id'];
		$password = $_SESSION['password'];

		$conn = mysqli_connect('localhost', 'root', '', 'miniProject');
		$sql = "select * from registration where id = '$id' and password = '$password'";
		$result = mysqli_query($conn, $sql);
		$details = mysqli_fetch_assoc($result);
		//print_r($name);
		//echo $name['name'];
	}

?>

<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td><?php echo $details['id']; ?></tr>
		<tr><td>NAME</td><td><?php echo $details['name']; ?></td></tr>
		<tr><td>EMAIL</td><td><?php echo $details['email']; ?></td></tr>
		<tr><td>USER TYPE</td><td><?php echo $details['type']; ?></td></tr>
		<tr><td colspan="2" align="right"><a href="home.html">Go Home</a></td></tr>
	</table>			
</center>