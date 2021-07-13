<?php
    session_start();
    require_once('../model/product_model.php');
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['buyP']) || empty($_POST['sellP']))
        {
            echo 'Null value found';
        }   
        else
        {
            $name=$_POST['name'];
            $buyP=$_POST['buyP'];
            $sellP=$_POST['sellP'];
            $products=[
                'name' => $name,
                'buyP' => $buyP,
                'sellP'=> $sellP,
                        ];
            $status = insertProduct($products);
            if(isset($_POST['display']))
            {
                header('location: ../view/product_list.php');
            }
            else
            {
                echo "error!!! try again please";
            }

        }
    }