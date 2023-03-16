<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Bienvenido</title>
</head>
<body>
    
    <?php

        // Continuamos la sesión
        session_start();

        echo "<center>";
        echo "<div class='formulario'>";
        echo "<h2>Bienvenido " .$_SESSION["usuario"]."<h2>"; //Mostramos la sesión del usuario.

        //Mostramos el día y la hora exacta.
        echo "<p>Accedido el día: " .date("d-m-Y"). " a las: " .date("H:i:sa"). "</p>"; 

        //Mostramos la cookie
        
        if(isset($_COOKIE["prueba"])){

            echo $_COOKIE["prueba"];
        }
        else{

            echo "<p>La cookie ha desaparecido.<p>";
        }

        //Botón de cerrar sesión que nos dirige a "cerrarSesión.php".
        echo "<a href='cerrarSesion.php'><button class='cerrar'>Cerrar Sesión</button></a>";
        echo "</div>";
        echo "</center>";
        
    ?>

</body>
</html>