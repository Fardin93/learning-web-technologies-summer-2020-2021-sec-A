<!DOCTYPE html>
<html>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
			<input type="date" name="dob" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; }?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body> 
</html>