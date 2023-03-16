    <?php

        //incluimos la conexión a la base de datos.
        include("conexion.php");

        //Obtiene los valores del html (usuario y contraseña).
        $usuario = $_POST["usuario"];
        //$contrasena = $_POST["contrasena"]; 
        $contrasena = md5($_POST["contrasena"]);

        
        //Consulta al SQL, busca coincidencia entre el usuario y contraseña introducida.
        $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$usuario."' and contrasena = '".$contrasena."'");     

        //Almacenamos el número de fila (almacena el numero de fila si encuentra coincidencia).
        $nr = mysqli_num_rows($query);


        //Si es distinto a 0 entramos.
        if($nr != 0){

            //Inicio sesión y almaceno el nombre de su usuario.
            session_start();
            $_SESSION['usuario']=$usuario;

            //configuro la cookie          
           setcookie("prueba", "<p>Esta es la informacion de la primera cookie, prueba a refrescar en 30 segundos.<p>", time()+30);


            //Envio al usuario a "bienvenido.php".
            header("Location: bienvenido.php"); 
        }

        //Si es 0 no entramos.
        else if ($nr == 0){

            header("Location: index.html");
        }  
    ?>
    
