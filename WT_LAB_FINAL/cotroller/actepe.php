<?php

  require_once '../Model/db_connect2.php';
$id="$_GET[username]";



$query2 ="DELETE FROM `employee` WHERE `username` = '$id'";

 
 execute($query2);
	header("Location:../view/employeelist.php");




  ?>
