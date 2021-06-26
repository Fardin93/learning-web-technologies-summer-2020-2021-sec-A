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
</style>
</head>
<body>

<h2>Change Password</h2>

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
			<legend><h3>Change Password</h3></legend>
			<table>
				
				<tr>
					<td>Current Password</td>
				   <td><input type="Password" name="Password"></td>
				</tr>
					<tr>
					<td style="color: green;">New Password</td>
				   <td><input type="Password" name="Password"></td>
				</tr>
					<tr>
					<td style="color: red;">Retype New Password</td>
				   <td><input type="Password" name="Password"></td>
				  	</tr>
              
                <table>
			    	<tr>
			  	         <hr>
						<td><input type="submit" name="submit" value="Submit">
							
					</tr>
					</table>
						 
					
					
				
			</table>
			
	</fieldset>
  </div>
</div>
</body>
</html>