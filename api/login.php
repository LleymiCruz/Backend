<?php
header("Conten-Type: application/json");
include_once("../class/class-usuario.php");
$_POST= json_decode(file_get_contents('php://input'), true);
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
       $usuario = Usuario::verificarUsuario($_POST["correo"], $_POST["password"]);
       if($usuario)
           echo '{"codigoResultado":1, "mensaje":"usuario autenticado"}';
       else
       echo '{"codigoResultado":0, "mensaje":"usuario o password incorrectos"}';
       
    
}

?>