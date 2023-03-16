<?php

    //Comprobamos que el usuario y la contraseña NO están vacías.
    if(!empty($_POST["acceder"])){
        if(empty($_POST["usuario"]) or empty($_POST["contrasena"])){
            
            echo '<p class="alerta">Uno de los campos está vacío.</p>';
        }
        else{

            $usuario = $_POST["usuario"];
            $contrasena = md5($_POST["contrasena"]); //Encriptamos la contraseña con md5.

            //Consulta al SQL, Introducimos los datos deseados.
            $query=$conn->query("INSERT INTO login(usuario,contrasena) VALUES('$usuario','$contrasena')");


            if($query==1){

                echo '<p class="alertaCorrecta">Usuario registrado correctamente</p>'; 
            }

            else{

                echo '<p class="alerta">Error al registrar.</p>';
            }
        }
    }

?>