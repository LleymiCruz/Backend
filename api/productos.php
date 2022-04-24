<?php
header("Conten-Type: application/json");
include_once("../class/class-productos.php");

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        
       /* $_POST = json_decode(file_get_contents('php://input'),true);
        $usuario = new Usuario(
            $_POST["idUsuario"],$_POST["nombreUsuario"],$_POST["apellidoUsuario"],$_POST["correo"],$_POST["ordenes"],$_POST["contraseña"],
        );

        $usuario->guardarUsuario();
        $resultado['mensaje'] = "Guardaur usuario informacion : " .json_encode($_POST);
        echo json_encode($resultado);
        break;*/
    
    case 'GET':
        if (isset($_GET['idproducto'])) {
            Producto::obtenerProducto($_GET['idProducto']);
        }
        else{
            Producto::obtenerProductos();
        }

        break;

        case 'PUT':
          

            break;

    default:
        # code...
        break;
}

?>