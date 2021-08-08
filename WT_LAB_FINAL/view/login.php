<?php
session_start();

require "../Model/db_connect.php";
global $con;
$err_uname="";
$err_psw="";
$err_invalid="";
$errmassage="";
$flag=false;
$login = "";
$uname="";
$psw="";
$usernameErr = $passwordErr = "";


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['username']))
  {
    $err_uname="*Username Required";
    $flag=true;


  }
 else
  {
    $uname=$_POST['username'];
  }
  
  
  if(empty($_POST['password']))
  {
    $err_psw="*Password Required";
    $flag=true;


  }
else
  {
    $psw=$_POST['password'];
  }

  if(!$flag)
      {
$query = "SELECT username from admin where username='$uname' and password='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["username"];

      header("Location:adminpanel.php");
    }
   
    
    }
}
  ?>

<?php

$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['username']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['username'];
  }
  if(empty($_POST['password']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['password'];
  }
  if(!$has_error)
  {
    $query = "SELECT username from employee where username='$uname' and password='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["username"];

      header("Location:employeepanel.php");
    }
    else
    {
echo '<script>alert("Please check your username and Password")</script>';
    }
  }


}
?>



  <center><form action="" method="POST">
     
<fieldset>
			<legend>Login</legend>


	 <h1 align = "center">Login</h1>


       <!--php validation error dekhanor jonno-->


       <input type="text" placeholder="Enter Username" id="username" name="username">
     <span  style="color: red"> <?php echo $err_uname;?></span><br><br>



       <input type="password" placeholder="Enter Password" id="password"  name="password" >
                 <td><span  style="color: red"><?php echo $err_psw;?></span><br><br>



         <input type="submit" name="submit" value="Login"><br><br>
		 
		
</fieldset>
  	</form>
   <?php
   echo "<h1>". $err_invalid . "</h1>" ;
  function read() {
  $file = fopen(filepath, "r");
  $fz = filesize(filepath);
  $fr = "";
  if($fz > 0) {
  $fr = fread($file, $fz);
  }
  fclose($file);
  return $fr;
  }
  ?>
  </body>
  </html>
