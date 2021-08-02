<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<center>
<form method="POST" action="../controller/regiCheck.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3 style="color:red"> REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id" value=""><br/>
					Password<br/><input type="password" name="password" value=""><br/>
					Confirm Password<br/><input type="password" name="cpassword" value=""><br/>
					Name<br/><input id="name" type="text" name="name" value=""><br/>
					Email<br/><input id="email" type="email" name="email" value=""><br/>
					User Type<i>[User/Admin]</i><br>
					<select name="type">
						<option>Admin</option>
						<option>User</option>
					</select>
					<hr/>
					<input type="submit" name="submit" value="Registration" onclick="getName()"submit>
					<a href="login.html">Login</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
<script>
		"use strict"
			function getName(){
			let name = document.getElementById('name').value;
			if(name != ''){
				getemail();
				
				alert('done');
				
			}else{
				alert('null value');
			}
			
		}
		function getemail(){
			let email = document.getElementById('email').value;
			if(email != ''){
				
				
				
			}else{
				alert('null value');
			}
			
		}
	</script>
</body>
</html>