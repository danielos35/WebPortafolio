<?php

    session_start(); 
    if (isset($_POST["enviar"])){

        $name = $_POST ["name"]; 
        $lastName = $_POST ["lastName"]; 
        $tel = $_POST ["tel"]; 
        $mail = $_POST ["mail"]; 
        $pass = $_POST["password"]; 
        $born = $_POST["born"]; 
        $sex = $_POST["sexo1"]; 
        $terms = $_POST["terms"];

        // Llamada a la hoja de conexión. 

        include("conexion.php");

        //Sentencia MYSQL 

        $result = $connect -> query("SELECT * FROM register WHERE mail LIKE '".$mail."'"); 
        if($result -> num_rows == 0){
            $connect -> query("INSERT INTO register VALUES(
                null,
                '$name', 
                '$lastName', 
                '$tel', 
                '$mail', 
                '$pass', 
                '$born', 
                '$sex', 
                '$terms'
            )"); 
            
            // exit(); 
            echo '<script type="text/javascript">alert("Datos registrados' . $to . '");</script>';
            header("location: index.html"); 

        }else{
            echo '<script type="text/javascript">alert("Intenta con nuevo datos' . $to . '");</script>';

            // header("location: index.html"); 
        }
        

        
        



    }else{
        header("location: register.html"); 
        exit(); 
    }

?>