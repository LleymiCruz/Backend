<?php 

header("Conten-Type: application/json");
include_once("../class/class-motoristas.php");

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $motorista =Motorista::verificarUsuario($_POST["correo"], $_POST["password"]);
        if($motorista)
            echo '{"codigoResultado":1, "mensaje":"usuario autenticado"}';
        else
        echo '{"codigoResultado":0, "mensaje":"usuario o password incorrectos"}';
}


?>