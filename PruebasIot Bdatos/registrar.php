<?php 

//Incluye el archivo que realiza la conexion con la base de datos
include ("con_bd.php");

//Si el boton "enviar"  fue presionado entonces, isset , determina si esta vacio , devuelve booleano 

//$_POST en PHP es una variable superglobal que
//se utiliza para recopilar datos de un formulario HTML y enviarlos a un script de PHP.
if(isset($_POST['enviar']))
{
    //Si los campos temperatura y serie , no estan vacios 
    if(strlen($_POST['temperatura']) >= 1 && strlen($_POST['serie']) >= 1)
    {

        /*crea dos variables $temp y $serie y les asigna 
        lo ingresado en los campos con trim()

        trim():Esta función devuelve una cadena con los espacios 
        en blanco eliminados del inicio y final del str. 
        sin el segundo parámetro, trim() eliminará estos caracteres*/

        $temp = trim($_POST['temperatura']);
        $serie = trim($_POST['serie']);


        //crea una variable $consulta que aloja la consulta SQL enviada a la base de datos

        $consulta = "INSERT INTO `temperatura`(  `temperatura`, `serie`) VALUES ( '$temp' , '$serie')";


        //hace la consulta con la funcion mysqli_query() que devuelve un booleano 
        
        $resultado = mysqli_query($conex,$consulta);


        //comprueba que los datos se enviaron correctamente a la base de datos
        if($resultado )
        {
            ?>

                <h3 class = "ok"> Se cargaron los datos correctamente desde la web </h3>

            <?php
        } else { ?>

            <h3 class = "bad"> Error al cargar los datos</h3>

        <?php }
    
        
    }else 
        {
            // si los campos llegaron vacios lo notifica por pantalla
            ?>
            <h3 class = "bad"> Campos vacios</h3>
            <?php 
        }
}else{

//si no se envio nada , aca debe ir el codigo de la subida por el sensor


    $tempg = trim($_GET['temp']);
    $serieg = trim($_GET['serie']);

     //crea una variable $consulta que aloja la consulta SQL enviada a la base de datos

    $consulta = "INSERT INTO `temperatura`(  `temperatura`, `serie`) VALUES ( '$tempg' , '$serieg')";


     //hace la consulta con la funcion mysqli_query() que devuelve un booleano 
     
     $resultado = mysqli_query($conex,$consulta);


     //comprueba que los datos se enviaron correctamente a la base de datos
     if($resultado )
     {
         ?>

             <h3 class = "ok"> Se cargaron los datos correctamente a traves del sensor</h3>

         <?php
     } else { ?>

         <h3 class = "bad"> Error al cargar los datos por el sensor</h3>

     <?php }
}



?>
