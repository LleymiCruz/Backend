<?php 
include_once('../class/class-empresas.php');

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
       
        break;
      case 'GET':

        if (isset($_GET['idEmpresa'])) {
            Empresa::ObtenerEmpresa($_GET['idEmpresa']);
        }else{
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