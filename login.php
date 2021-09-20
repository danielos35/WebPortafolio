<?php

    session_start(); 
    if(isset($_POST["login"])){

        $mail = $_POST["mail"];
        $password = $_POST["pass"];
            include("conexion.php"); 
            $result = $connect -> query("SELECT * FROM register WHERE mail LIKE '".$mail."' AND pass LIKE '".$password."'"); 

            if($result -> num_rows == 1 ){

                header("Location: index.html"); 

            }else{

                header("location: error.html"); 
            }


    }else{
        exit(); 
    }



?>