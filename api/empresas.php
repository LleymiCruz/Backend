<?php
header("Conten-Type: application/json");
include_once("../class/class-empresas.php");
$_POST= json_decode(file_get_contents('php://input'), true);
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
       
       
        break;
    
    case 'GET':
        if (isset($_GET['idEmpresa'])) {
            Empresa::obtenerEmpresa($_GET['idEmpresa']);
        }if (isset($_GET['idCategoria'])) {
            Empresa::obtenerEmpresasPorCategoria($_GET['idCategoria']);
        }if($_GET==null){
            Empresa::obtenerEmpresas();
        }

        break;

        case 'PUT':
          

            break;

    default:
        # code...
        break;
}

?>