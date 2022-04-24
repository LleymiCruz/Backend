<?php
header("Conten-Type: application/json");
include_once("../class/class-ordenes.php");
$_POST= json_decode(file_get_contents('php://input'), true);
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $orden=new Orden(
                
            $_POST['idOrden'],
            $_POST['estadoOrden'],
            $_POST['productos'],
            $_POST['direccionDestino'],
        );
        $orden->guardarOrden();
        
       
        break;
    
    case 'GET':
        if (isset($_GET['idOrden'])) {
            Orden::obtenerOrden($_GET['idOrden']);
        }
        else{
            Orden::obtenerOrdenes();
        }

        break;

        case 'PUT':
          

            break;

    default:
        # code...
        break;
}

?>