<?php
header("Conten-Type: application/json");
include_once("../class/class-usuario.php");
$_POST = json_decode(file_get_contents('php://input'),true);
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        
        $usuario = new Usuario(
            $_POST["idUsuario"],
            $_POST["nombreUsuario"],
            $_POST["apellidoUsuario"],
            $_POST["correo"],
            $_POST["contrasena"],
            $_POST["ordenes"],
        );

        if($usuario->guardarUsuario()==null){
            echo '{"codigoResultado":1, "mensaje":"usuario autenticado"}';

        }
          
        break;
    
    case 'GET':
        if (isset($_GET['idUsuario'])) {
            Usuario::obtenerUsuario($_GET['idUsuario']);
        }
        else{
            Usuario::obtenerUsuarios();
        }

        break;

        case 'PUT':
          

            break;

    default:
        # code...
        break;
}

?>