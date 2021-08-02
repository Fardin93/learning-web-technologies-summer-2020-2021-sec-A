<?php
	
require_once('db.php');


function insertproduct($user){
	$conn = getConnection();
	$sql = "insert into users values('', '{$user['name']}','{$user['type']}', '{$user['email']}', '{$user['password']}', '{$user['confirm_pass']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}

function getproductbyId($id){
	
	$conn = getConnection();
	$sql = "select * from users where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAlluser(){

	$conn = getConnection();
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	$products = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($products, $row);
	}
	return $products;
}

function updateuser($user){
	$conn = getConnection();
	$sql = "update users set userName=''', '{$user['name']}','{$user['type']}', '{$user['email']}', '{$user['password']}', '{$user['confirm_pass']}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}



?>