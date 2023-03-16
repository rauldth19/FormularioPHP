<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Registro de usuario</title>
</head>
<body>
    <center>
        <div class="formulario">
            <form method="post" name="formulario">
                <h2>REGISTRO</h2>
                <?php
                    include("conexion.php");
                    include("registro1.php");
                ?>
                <div>
                    <input type="text" name="usuario" class="casillaFormulario" placeholder="Usuario"/>      
                </div>
                <br>
                <div>
                    <input type="password" name="contrasena" class="casillaFormulario" placeholder="Contraseña"/>       
                </div><br>  
                <button type="submit" name="acceder" class="login" value="acceder">Registrarse</button>
                <div>
                    <p>¿Tienes cuenta? <a href="index.html">Entra aquí</a></p>
                </div>
            </form>
        </div>
    </center>    
</body>
</html>