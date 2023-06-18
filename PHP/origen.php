<?php

    //Se hace la carga del archivo que configura BDD
    include("../PHPconfigurar/configurar.php"); //archivo configurar.php ubicado en carpeta "PHPconfigurar" 

    //Se hace la carga del archivo que conecta BDD
    include("../PHPconfigurar/conectar.php"); //archivo conectar.php ubicado en carpeta "PHPconfigurar"
    
    //Extracción de los campos de la BDD
    $nombre=$_POST['nombres'];
    $apellido=$_POST['apellidos'];
    $cedula=$_POST['dni'];
    $rol=$_POST['rol'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];

    //Encriptar clave
    $clave=md5($clave);

    //sentencia sql para insertar registros
    $sql = "INSERT INTO usuarios VALUES ('','$nombre','$apellido','$cedula','$rol','$telefono','$correo','$clave')";

    //Se ejecuta la sentencia sql y se llama a la conexion
    $result = mysqli_query($conexion, $sql);

    //Se valida que el registro fue guardado
    if ($result) {
        echo "Registro Guardado";
    }

    //Cierre de la conexion a la BDD
    mysqli_close($conexion);

    //Regreso a la pantalla principal
    echo '<script>alert("Datos Guardados Satisfactoriamente")</script>';
    echo "<script>location.href='formulario.php'</script>";

?>