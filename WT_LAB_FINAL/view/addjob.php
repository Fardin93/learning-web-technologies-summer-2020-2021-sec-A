
<?php


include('header/header.php');
include "../Model/db_connect.php";
$name=$email=$uname=$pass=$conf_pass=$phone=$nid=$address="";
$name_err=$email_err=$pass_err=$uname_err=$nid_err=$phn_err=$add_err=$conf_pass_err=$geder_err="";
$flag = 1;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['submit']))
  {
    if(empty($_POST['name']))
    {
        $name_err="NAME CAN NOT BE EMPTY";
    $flag = 0;
    }else
    {
      $name=$_POST['name'];
    }
    if(empty($_POST['Email']))
    {
        $email_err="EMAIL CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $email=$_POST['Email'];
    }
    if(empty($_POST['uname']))
    {
        $uname_err="USERNAME CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $uname=$_POST['uname'];
     
    }
    if(empty($_POST['pass']))
    {
        $pass_err="PASSWORD CAN NOT BE EMPTY";
    $flag = 0;
    }
    else{
      $pass=$_POST['pass'];
    }
    if(empty($_POST['con_pass']))
    {
        $conf_pass_err="CONFIRM PASSWORD CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $conf_pass=$_POST['con_pass'];
    }
    if(empty($_POST['nid']))
    {
      $nid_err="NATIONAL ID NUMBER CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $nid=$_POST['nid'];
    }
    if(empty($_POST['phone']))
    {
      $phn_err="PHONE NUMBER CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $phone=$_POST['phone'];
    }
    if(empty($_POST['address']))
    {
      $add_err="ADDRESS CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $address=$_POST['address'];
    }
    if($pass != $conf_pass)
    {
      $pass_err="PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH";
      $flag = 0;
    }
 if($flag)
    {
    $name=mysqli_real_escape_string($con,$name);
    $pass=mysqli_real_escape_string($con,$pass);
   
    $uname=mysqli_real_escape_string($con,$uname);
    
    $phone=mysqli_real_escape_string($con,$phone);
    $address=mysqli_real_escape_string($con,$address);
   

    $sql="insert into employee(username,password,name,cname,phone) values('$uname','$pass','$name','$address','$phone')";

    if (mysqli_query($con, $sql)) {
    } else {
      echo "user table Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
}

}
?>

<title>Add employee</title>

<body>
<center><form class="box" method="post" action="../controller/addjob.php" name="registration">

      <h1>Add Employee</h1>


          <input type="text" name="name" placeholder='NAME' value="<?php echo $name;?>"></td>


          <td id="name_err"><?php echo $name_err;?></td><br>





              <td><input type="text" name="uname" id="uname" placeholder='title' value=""></td>


              <td id="uname_err"><?php echo $uname_err;?></td><br>



              <td><input type="password" name="pass" id="pass" placeholder='location'></td>


              <td id="pass_err"><?php echo  $pass_err;?></td><br>



              <td><input type="password" name="con_pass" id="con_pass" placeholder='salary'></td>


              <td id="conf_pass_err"><?php echo  $conf_pass_err;?></td><br>


       


        



       <input type="submit" name="submit" value="Add" id='btn'></td>






   </form></center>





<?php

include('footer/footer.php');



?>
