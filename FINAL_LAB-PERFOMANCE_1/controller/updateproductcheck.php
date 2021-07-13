<?php 
    require_once('../model/fucnctions.php');
    session_start();
    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $bprice=$_POST['BuyingPrice'];
        $sprice=$_POST['SellingPrice'];

        $id=$_SESSION['id'];

        $product = [	
            'name'	=> $name, 
            'BuyingPrice'=> $bprice, 
            'SellingPrice'=>$sprice, 
            'id' => $id
        ];
        updateProduct($product);
        //echo $id;
        if(isset($_POST['display'])){
            header('location: ../view/product_list.php');
        }else{
            
        }
       
    }

?>