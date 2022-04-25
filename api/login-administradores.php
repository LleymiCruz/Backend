<?php 

header("Conten-Type: application/json");
include_once("../class/class-administradores.php");
$_POST= json_decode(file_get_contents('php://input'), true);
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $admin =Administrador::verificarUsuario($_POST["correo"], $_POST["password"]);
        if($admin)
            echo '{"codigoResultado":1, "mensaje":"usuario autenticado"}';
        else
        echo '{"codigoResultado":0, "mensaje":"usuario o password incorrectos"}';
}

?>