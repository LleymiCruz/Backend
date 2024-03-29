<?php 
    class Motorista{

     Private   $idMotorista;
     Private    $nombreMotorista;
     Private    $apellidoMotorista;
     Private   $correo;
     Private   $contrasena;
     Private   $ordenesTomadas;


        public function __construct(
       $idMotorista,
       $nombreMotorista,
       $apellidoMotorista,
       $correo,
       $contrasena,
       $ordenesTomadas,
        )
        {
            $this->idMotorista=  $idMotorista;
            $this->nombreMotorista=  $nombreMotorista;
            $this->apellidoMotorista= $apellidoMotorista;
            $this->correo =  $correo;
            $this->contrasena = $contrasena;
            $this->ordenesTomadas=  $ordenesTomadas;

        }

        public static function obtenerMotoristas(){
            $contenidoArchivo= file_get_contents('../data/motoristas.json');
            echo $contenidoArchivo;

        }

        public static function obtenerMotorista($id){

            $contenidoArchivo=file_get_contents('../data/motoristas.json');
            $motoristas=json_decode($contenidoArchivo,true);
            $motorista=null;

            for ($i=0; $i < sizeof($motoristas); $i++) { 
                    if($motoristas[$i]["idMotorista"]==$id){
                        $motorista=$motoristas[$i];
                        break;
                    }

            }
            echo json_encode($motorista);
        }


        public function guardarMotorista(){

            $contenidoArchivoMotoristas=file_get_contents('../data/motoristas.json');
            $motoristas=json_decode($contenidoArchivoMotoristas,true);

            $motoristas[]=array(
                    "idMotorista"=>$this->idMotorista,
                    "nombreMotorista"=>$this->nombreMotorista,
                    "apellidoMotorista"=>$this->apellidoMotorista,
                    "correo"=>$this->correo,
                    "contrasena"=>$this->contrasena,
                    

            );
            $arhivo=fopen('../data/motoristas.json','w');
            fwrite($arhivo,json_encode($motoristas));
            fclose($arhivo);
            echo '{"codigoResultado":1, "mensaje":"Motorista guardado con exito"}';

        }


          public static function verificarUsuario($correo,$password){
               $contenidoArchivo=file_get_contents('../data/motoristas.json');
               $motoristas=json_decode($contenidoArchivo,true);
                    for ($i=0; $i < sizeof($motoristas); $i++) { 
                         if ($motoristas[$i]["correo"]==$correo && $motoristas[$i]["contrasena"]==sha1($password) ) {
                              return $motoristas[$i];
                         }
                    }
                    return null;
          }


     /**
      * Get the value of idMotorista
      */ 
     public function getIdMotorista()
     {
          return $this->idMotorista;
     }

     /**
      * Set the value of idMotorista
      *
      * @return  self
      */ 
     public function setIdMotorista($idMotorista)
     {
          $this->idMotorista = $idMotorista;

          return $this;
     }

     /**
      * Get the value of nombreMotorista
      */ 
     public function getNombreMotorista()
     {
          return $this->nombreMotorista;
     }

     /**
      * Set the value of nombreMotorista
      *
      * @return  self
      */ 
     public function setNombreMotorista($nombreMotorista)
     {
          $this->nombreMotorista = $nombreMotorista;

          return $this;
     }

     /**
      * Get the value of apellidoMotorista
      */ 
     public function getApellidoMotorista()
     {
          return $this->apellidoMotorista;
     }

     /**
      * Set the value of apellidoMotorista
      *
      * @return  self
      */ 
     public function setApellidoMotorista($apellidoMotorista)
     {
          $this->apellidoMotorista = $apellidoMotorista;

          return $this;
     }

     /**
      * Get the value of correo
      */ 
     public function getCorreo()
     {
          return $this->correo;
     }

     /**
      * Set the value of correo
      *
      * @return  self
      */ 
     public function setCorreo($correo)
     {
          $this->correo = $correo;

          return $this;
     }

     /**
      * Get the value of contrasena
      */ 
     public function getContrasena()
     {
          return $this->contrasena;
     }

     /**
      * Set the value of contrasena
      *
      * @return  self
      */ 
     public function setContrasena($contrasena)
     {
          $this->contrasena = $contrasena;

          return $this;
     }

     /**
      * Get the value of ordenesTomadas
      */ 
     public function getOrdenesTomadas()
     {
          return $this->ordenesTomadas;
     }

     /**
      * Set the value of ordenesTomadas
      *
      * @return  self
      */ 
     public function setOrdenesTomadas($ordenesTomadas)
     {
          $this->ordenesTomadas = $ordenesTomadas;

          return $this;
     }
    }



?>