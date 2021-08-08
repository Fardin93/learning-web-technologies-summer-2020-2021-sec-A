<?php
 
function isLoggedIn()
{
  if (isset($_SESSION['name'])) {
    return true;
  }else{
    return false;
  }
}

  ?>