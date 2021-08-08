<?php

  require_once '../Models/db_connect2.php';
$id="$_GET[name]";
$price="$_GET[jobtitle]";
$customerid="$_GET[location]";
$date="$_GET[salary]";

$query ="INSERT INTO `order_list` (`comname`, `jobtitle`, `location`, `salary`) VALUES ('$id','Reject', '$price', '$customerid', '$date');";


 execute($query);

	



  ?>
