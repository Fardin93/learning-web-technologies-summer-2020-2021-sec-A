<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "jobportal");
$sql = "SELECT * FROM joblist WHERE type LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		
                 echo "	<tr>
		          <td>".$row['sl']."</td>
		          <td>".$row['title']."</td>
		          <td>".$row['location']."</td>
		          <td>".$row['salary']."</td>
		        </tr>";
                  }
             
	}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>