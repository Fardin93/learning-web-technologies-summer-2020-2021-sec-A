

<?php

include('header/header.php');

require_once ('../Controller/orderinfo.php');
$info = getapprovedlist();

?>








<div class="w3-container">
<center>  <h2>Employeelist</h2>

 <table id="myTable" class="fl-table">
	
        <thead>
		
        <tr>
            
            <th>Name</th>
            <th>Company Name</th>
            <th>Cont No</th>
            <th>Username</th>
			<th>Password</th>
			
			
        </tr>
        </thead>
         <tbody>
    <?php
      foreach($info as $info)
      {
        echo "<tr>";

       
        echo "<td>".$info["name"]."</td>";
  

		echo "<td>".$info["cname"]."</td>";
		echo "<td>".$info["phone"]."</td>";
	
            echo "<td>".$info["username"]."</td>";
			 echo "<td>".$info["password"]."</td>";
		echo '<td><button class="btn"><a href="../Controller/actepe.php?id='.$info["order_id"].'&amp price='.$info["total_price"].'&amp customerid='.$info["customer_id"].'&amp date='.$info["date"].'" i class="fa fa-plus">  Delete</a></td>';
echo '<td><button class="btn"><a href="../Controller/saveasreject.php?id='.$info["order_id"].'&amp price='.$info["total_price"].'&amp customerid='.$info["customer_id"].'&amp date='.$info["date"].'" i class="fa fa-trash">  Edit</a></td>';



        echo "</tr>";
      }
    ?>

  </tbody>
    </table>
</div></section>
</div>
<?php

include('footer/footer.php');



?>
