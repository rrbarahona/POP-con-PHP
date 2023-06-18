<?php
    
    include("../PHPconfigurar/configurar.php"); //se configura el acceso a la BDD
    include("../PHPconfigurar/clase_mysql.php"); //Se llama a la conexion a la BDD

    //Se instancia el objeto
    $miconexion = new clase_mysqli;

    //Ingreso a cada una de las funciones creadas en clase_mysql.php
    $miconexion->conectar($host, $usuariodb, $clavedb, $nombredb);

    //$sql = "insert into usuarios values ('', 'Roberto Manuel', 'Diaz Navarro', '0923642086', 'admin', '0980281543', 'rmdiaz@gmail.com', '999')";
    //$clave=md5('999');
    //$sql="update usuarios set clave='$clave' where id=11";
    $sql="select * from usuarios";
    $res=$miconexion->consultar($sql);
    $miconexion->consultabla();

    /*if ($res) {
        echo "La Sentencia";
    } else {
        echo "Hay error";
    }*/
?>