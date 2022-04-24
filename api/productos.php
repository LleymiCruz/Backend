<?php
header("Conten-Type: application/json");
include_once("../class/class-productos.php");
$_POST= json_decode(file_get_contents('php://input'), true);
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $producto=new Producto(
                
            $_POST['idProducto'],
            $_POST['nombreProducto'],
            $_POST['precio'],
            $_POST['imagenProducto']

        );
        $producto->guardarProducto();
        
       
        break;
    
    case 'GET':
        if (isset($_GET['idProducto'])) {
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