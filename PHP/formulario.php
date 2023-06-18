<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="../../html5/css/estilos.css">
</head>
<body>
    <section class="contenedor">
        <div class="espacio"></div>
        <h2 class="titulosH2" id="atractivos">FORMULARIO DE REGISTRO</h2>
        <form action="origen.php" method="post" class="formulario">
            <div class="box2">
                <div class="grupoForm">
                    <label for="nombres">Nombres: </label>
                    <input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres completos" required>
                </div>
                <div class="grupoForm">
                    <label for="apellidos">Apellidos: </label>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos completos">
                </div>   
                <div class="grupoForm">
                    <label for="dni">Cédula / DNI</label>
                    <input type="number" name="dni" id="dni">
                </div>
                <div class="grupoForm">
                    <label for="rol">Rol</label>
                    <select name="rol" id="rol">
                        <option value="1">Administrador</option>
                        <option value="2">Usuario normal</option>
                    </select>
                </div>
            </div>
            <div class="box2">                
                <div class="grupoForm">
                    <label for="telefono">Telefono</label>
                    <input type="number" name="telefono" id="telefono" placeholder="Ingrese su número de telefono">
                </div>  
                <div class="grupoForm">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" placeholder="Ingrese su correo electronico">
                </div>  
                <div class="grupoForm">
                    <label for="clave">Clave</label>
                    <input type="password" name="clave" id="clave" placeholder="Ingrese su clave">                    
                </div>                
                <div class="grupoForm">
                    <button class="boton1" type="submit">Guardar</button>
                </div>
            </div>
        </form>          
    </section>

    <div class="espacio"></div>    
</body>
</html>
