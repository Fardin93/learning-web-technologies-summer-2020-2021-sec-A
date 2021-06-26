<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; 
  border-right: 1px solid #000;
   border: 1px solid #000;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.img{
     padding-left: 70px;
    margin-top: -100px;
    margin-left: 54px;
}
</style>
</head>
<body>

<h2>Edit Profile</h2>

<div class="row">
  <div class="column" style="background-color:#fff;">
    <h2>Account<hr></h2>
            <a href="">Dashboard</a><br>
			<a href="">View Profile</a><br>
			<a href="">Edit Profile</a><br>
			<a href="">Change Profile Picture</a><br>
			<a href="">Change Password</a><br>
			<a href="">Logout</a><br>
  </div>
  <div class="column" style="background-color:#fff;">
    <fieldset>
			<legend><h3>Edit Profile</h3></legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Bob"></td>
					
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="name" placeholder="Bob@aiub.edu"></td>
					
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
					<td>Date Of Birth</td>
					<td><input type="text" name="name" placeholder="23/12/1999"></td>
					
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Submit">
					
				</td>
				</tr>
					
					
					
				
			</table>
			
	</fieldset>
  </div>
</div>
</body>
</html>