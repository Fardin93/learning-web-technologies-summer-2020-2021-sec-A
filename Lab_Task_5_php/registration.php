<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h3>Signup Page</h3>
<div>
	<form method="post" action="../controller/registrationCheck.php">
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="Password"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="Password" name="Password"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
					    <input type="radio" name="gender" value=""> Male
						<input type="radio" name="gender" value=""> Female
						<input type="radio" name="gender" value=""> Other
					</td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td><input type="date" name="dob"></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Reset">
				</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>