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
    margin-top: 10px;
    margin-left: -67px;
}
</style>
</head>
<body>

<h2>Profile picture</h2>

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
			<legend><h3>Profile Picture</h3></legend>
			<table>
				<img src="adminn.jpg" width="30%" align="center" class="img">
				<tr>
					<td>
						<input type="file" id="myFile" name="filename">
					</td>
				</tr>
					<tr>
					<td>
							  <input type="submit">
					</td>
				</tr>
					  
				
			  
					
					
					
				
			</table>
			
	</fieldset>
  </div>
</div>
</body>
</html>