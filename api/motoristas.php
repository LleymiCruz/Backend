<?php
include_once("../class/class-motoristas.php");

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $_POST=json_decode(file_get_contents('php//input'),true);
        $motorista=new Motoristas($_POST["idMotorista"],$_POST["nombreMotorista"] ,$_POST["apellidoMotorista"] ,$_POST["correo"] ,$_POST["contraseña"] ,$_POST["ordenesTomadas"]  );
        $motorista=obtenerMotorista();
        break;
    
    default:
        # code...
        break;
}

?>