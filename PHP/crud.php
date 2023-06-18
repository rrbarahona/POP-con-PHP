<?php
    //Creación de las variables que permiten la conexión a la BDD mediante PHP
    $host="127.0.0.1";  //IP donde se encuentra la BDD
    $usuariodb="root";  //dependiendo de los accesos puede cambiar (root=superusuario)
    $clavedb="";        //Se crea sin clave
    $nombredb="dweb2023db";       //nombre de la BDD a la que se va a acceder

    //Parámetros de configuración para conexión BDD MariaDB
    $conexion=mysqli_connect($host, $usuariodb, $clavedb, $nombredb); //Conexión a BDD de MariaDB
    if (!$conexion) {
        echo "Error de conexión a la BDD";
        exit();
    }
?>     