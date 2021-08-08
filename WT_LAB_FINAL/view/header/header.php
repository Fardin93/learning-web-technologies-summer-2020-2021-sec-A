
<?php



session_start();

include('../Controller/userval.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Care </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<h2><a href="doctorpanel.php">Admin panel</a></h2>


<header>
  <center><h2 style="color:red">Admin UserName~<?php echo $_SESSION["loggedinuser"];?></h2>

</header>
<button id="buttonone" < onclick="window.location.href='../controller/logout.php';">
                Logout
              </button>
<style>
#buttonone
{
background-color: #dd0851;
    border: none;

    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;

    border: 3px solid white;

    transform: translate(70%, -90%);
    margin-left: 82%;
}
</style>
<section>
  <nav>
    <ul>

      <li><a href="newemployee.php">New Employee</a></li>
	  <li><a href="employeeinfo.php">Employee info</a></li>
     




    </ul>

  </nav>


</section>
