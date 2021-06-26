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

<h2>View Profile</h2>

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
			<legend><h3>Registration</h3></legend>
			<table>
				<tr>
					<td>Name: Bob</td>
					
				</tr>
				<tr>
					<td>Email: Bob@aiub.edu</td>
					
				</tr>
					<tr>
					<td>Gender: Male</td>
					
				</tr>
					<tr>
					<td>Date Of Birth: 19/09/1998</td>
					
				</tr>
					
					
					
				
			</table>
			<a href="" >Edit Profile</a>
			<img src="adminn.jpg" width="30%" align="center" class="img">
			<a href="">Change</a>
	</fieldset>
  </div>
</div>
</body>
</html>