<?php 

    class Administrador{

        private $idAministrador;
        private $nombreAdministrador;
        private $apelliAdministrador;
        private $correo;
        private $contrasena;

        public function __construct(
         $idAministrador,
         $nombreAdministrador,
         $apelliAdministrador,
         $correo,
         $contrasena
        )
        {
            $this->idAministrador=$idAministrador;
            $this-> nombreAdministrador=$nombreAdministrador;
            $this->apelliAdministrador=$apelliAdministrador;
            $this->correo=$correo;
            $this->contrasena=$contrasena;

        }

        public static function verificarUsuario($correo, $password){
            $contenidoArchivo=file_get_contents('../data/administradores.json');
            $admins=json_decode($contenidoArchivo, true);
            for ($i=0; $i <sizeof($admins) ; $i++) { 
                if ($admins[$i]["correo"]==$correo && $admins[$i]["contrasena"]==sha1($password)) { 
                    return $admins[$i]; 
                }
            }
            return null;
    
        }




        /**
         * Get the value of idAministrador
         */ 
        public function getIdAministrador()
        {
                return $this->idAministrador;
        }

        /**
         * Set the value of idAministrador
         *
         * @return  self
         */ 
        public function setIdAministrador($idAministrador)
        {
                $this->idAministrador = $idAministrador;

                return $this;
        }

        /**
         * Get the value of nombreAdministrador
         */ 
        public function getNombreAdministrador()
        {
                return $this->nombreAdministrador;
        }

        /**
         * Set the value of nombreAdministrador
         *
         * @return  self
         */ 
        public function setNombreAdministrador($nombreAdministrador)
        {
                $this->nombreAdministrador = $nombreAdministrador;

                return $this;
        }

        /**
         * Get the value of apelliAdministrador
         */ 
        public function getApelliAdministrador()
        {
                return $this->apelliAdministrador;
        }

        /**
         * Set the value of apelliAdministrador
         *
         * @return  self
         */ 
        public function setApelliAdministrador($apelliAdministrador)
        {
                $this->apelliAdministrador = $apelliAdministrador;

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
    }

?>