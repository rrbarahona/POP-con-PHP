<?php
    
    //Creacion de la clase clase_mysqli
    class clase_mysqli{

        //Declarar Variables globales que permiten realizar la conexion
        var $Servidor;  
        var $Usuario;  
        var $Clave;        
        var $BaseDatos;
        
        //Declarar Variables de control de errores
        var $Errorno=0;
        var $Error="";

        //Identificacion de consultas y conexion
        var $ConexionID=0;
        var $ConsultaID=0;
        
        //Declarar constructor de la clase que recibe las variables de conexion a BDD
        function clase_mysqli($host="", $user="", $pass="", $db=""){
            $this->Servidor=$host;
            $this->Usuario=$user;
            $this->Clave=$pass;
            $this->BaseDatos=$db;
        }

        //Funcion para la conexion a BDD
        function conectar($host, $user, $pass, $db){

            //Control en caso de variables vacias se coja los valores de las variables globales
            if ($host !="") $this->Servidor=$host;
            if ($user !="") $this->Usuario=$user;
            if ($pass !="") $this->Clave=$pass;
            if ($db !="") $this->BaseDatos=$db;            

            //Conexion al servidor de la BDD
            $this->ConexionID = new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);

            //Control de la conexion al servidor
            if (!$this->ConexionID) {
                $this->Error="Ha fallado la conexion";
                return 0;
            }
            return $this->ConexionID;
        }

        //Funcion consulta Query
        function consultar($sql=""){
            if ($sql=="") {
                $this->Error="No existe ninguna sentencia SQL";
                return 0;
            }

            $this->ConsultaID=mysqli_query($this->ConexionID, $sql);

            //Control si la consulta es correcta o no
            if (!$this->ConsultaID) {
                echo $this->ConexionID->Error;
            }
            return $this->ConsultaID;
        }

        //Retorna el numero de campo de la consulta
        function numerocam(){
            return mysqli_num_fields($this->ConsultaID);
        }

        //Retorna el numero de registro de la consulta
        function numeroreg(){
            return mysqli_num_rows($this->ConsultaID);
        }

        //Visualizar la consulta en una tabla
        function consultabla(){
            echo "<table border = 1>";
                echo "<tr>";
                    for ($i=0; $i < $this->numerocam(); $i++) { 
                        echo "<td>".mysqli_fetch_field_direct($this->ConsultaID, $i)->name."</td>";
                    }
                echo "</tr>";
                while ($row=mysqli_fetch_array($this->ConsultaID)) {
                    echo "<tr>";
                    for ($i=0; $i < $this->numerocam() ; $i++) { 
                        echo "<td>".$row[$i]."</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";    
        }
    }
?>    