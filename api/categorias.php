<?php
header("Conten-Type: application/json");
include_once("../class/class-categorias.php");
$_POST= json_decode(file_get_contents('php://input'), true);
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        /*$categoria=new Categoria(
                
            $_POST['idCategoria'],
            $_POST['nombreCategoria'],
            $_POST['imagenCategoria'],
            $_POST['empresas']

        );
        $categoria->guardarCategoria();
        
       
        break;*/
    
    case 'GET':
        if (isset($_GET['idCategoria'])) {
            Categoria::obtenerCategoria($_GET['idCategoria']);
        }
        else{
            Categoria::obtenerCategorias();
        }

        break;

        case 'PUT':
          

            break;

    default:
        # code...
        break;
}

?>