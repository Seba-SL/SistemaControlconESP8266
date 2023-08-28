<?php
{
    //Crea una variable booleana que aloja lo que retorna mysqli_connect()

    $conex = mysqli_connect("localhost","root","","iot_resources"); 


    //si no se pudo conectar lo notifica en pantalla con echo

    if (!$conex) {
     echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
     echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
     echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
     exit;  
    }else "Conexion exitosa";

}
?>
