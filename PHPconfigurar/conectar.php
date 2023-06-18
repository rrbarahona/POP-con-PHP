<?php
    
    //Parámetros de configuración para conexión BDD MariaDB
    $conexion=mysqli_connect($host, $usuariodb, $clavedb, $nombredb); //Conexión a BDD de MariaDB
    if (!$conexion) {
        echo "Error de conexión a la BDD";
        exit();
    }
?>     