<!DOCTYPE html>
<html>
<head>
	<title>page 8</title>
</head>
<body>
	<table border="1" width="100%">
		<tr>
			<td colspan="3" align="center"><b>PERSONAL PROFILE</b></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input id="name" type="text" name="name" value=""></td><br><br>
			<td></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input id="email" type="email" name="email" value=""></td>
			<td></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input id="gender_Male" type="radio" name="radio" value="male">Male
				<input id="gender_Female" type="radio" name="radio" value="Female">Female
				<input id="gender_Other" type="radio" name="radio" value="Other">Other</td>
			<td></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td ><input id="dob" type="text" name=" 1" value="" size="1">/<input id="dob"type="text" name="" size="2">/<input id="dob" type="text" name="" size="3"> <i>(dd/mm/yyyy</i>
				</td>
			<td></td>
		</tr>
		<tr>
			<td>Degree</td>
			<td><input id="SSC" type="checkbox" name=" checkbox" value="">SSC
				<input id="HSC" type="checkbox" name=" checkbox" value="">HSC
				<input id="BSc." type="checkbox" name=" checkbox" value="">BSc.
				<input id="MSc." type="checkbox" name=" checkbox" value="">MSc. </td>
				<td></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td><input type="button" name="browse" value="Browse"> No file selected</td>
		</tr>
		<tr>
			<td colspan="3" height="20px"></td>
		</tr>
		<tr>
			<td colspan="3" align="right"><input type="submit" onclick="getName()"Submit>
				<input type="reset" name="" value="Reset"></td>
		</tr>
	</table>


	<script>
		"use strict"


			function getName(){
			let name = document.getElementById('name').value;

			if(name != ''){
				
				getemail();
				checkButton();
				
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


		function checkButton()  
			{
			if(document.getElementById('gender_Male').checked) {
			 //Male radio button is checked
			}else if(document.getElementById('gender_Female').checked) {
			  //Female radio button is checked
			}
			else if(document.getElementById('gender_Other').checked){

			}
			else{
				alert("please select");
			}
			}



			function DOB()){
			let email = document.getElementById('dob').value;

			if(dob != ''){
				
				
				
			}else{
				alert('null value');
			}
			
		}

				function checkBox()  
			{
			if(document.getElementById('SSC').checked) {
			 //Male radio button is checked
			}else if(document.getElementById('HSC').checked) {
			  //Female radio button is checked
			}
			else if(document.getElementById('BSc.').checked){

			}
			else if(document.getElementById('MSc.').checked){

			}
			else{
				alert("please select");
			}
			}








	</script>

</body>
</html>