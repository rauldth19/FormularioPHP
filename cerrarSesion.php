<?php

    //Cerramos la sesión y enviamos al usuario a la página inicial.
    session_destroy();
    header('Location:index.html');

?>