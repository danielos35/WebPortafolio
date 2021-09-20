<?php

    $host = "localhost"; 
    $user = "root"; 
    $pass1 = ""; 
    $db = "portafolio"; 

    $connect = new mysqli($host,$user,$pass1, $db); 

    if ($connect){

        echo "Conectado al servidor"; 

    }else{
        echo "Error al conectar";
        exit();  
    }

?>