<?php
$var;
  require_once '../Model/db_connect2.php';


  



  function getemployee()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM Employee";
    $product=get($query);
    return $product;


  }



  ?>