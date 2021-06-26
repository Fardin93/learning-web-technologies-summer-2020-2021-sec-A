<?php
session_start();
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
if (!$email) {
   echo "please ttype a valid email address";
   }else{
   
   $user =[ 'email'=>$email, 'type'=>$type];
   	$_SESSION['email'] = $email;

   if ($row==""){
  echo "no user registred with this emaial";

    }
   }
  ?>