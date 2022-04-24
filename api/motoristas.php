<?php
include_once("../class/class-motoristas.php");

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $_POST=json_decode(file_get_contents('php//input'),true);
        $motorista= new Motorista($_POST["idMotorista"],$_POST["nombreMotorista"] ,$_POST["apellidoMotorista"] ,$_POST["correo"] ,$_POST["contraseña"] ,$_POST["ordenesTomadas"]);
        $motorista->guardarMotorista();
        break;
        
        case 'GET':
            if (isset($_GET['idMotorista'])) {
                Motorista::obtenerMotorista($_GET['idMotorista']);
            }else{
                Motorista::obtenerMotoristas();
            }
            break;
    default:
        # code...
        break;
}

?>