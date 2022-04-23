<?php 

class Usuario{
    Private $idUsuario;
    Private $nombreUsuario;
    Private $apellidoUsuario;
    Private $correo;
    Private $ordenes;
    private $contraseña;
    
    
    public function __construct(
        $idUsuario,$nombreUsuario,$apellidoUsuario,$correo,$ordenes,$contraseña,
    )
    {
        $this->idUsuario=$idUsuario;
        $this->nombreUsuario=$nombreUsuario;
        $this->apellidoUsuario=$apellidoUsuario;
        $this->correo=$correo;
        $this->ordenes=$ordenes;
        $this->contraseña=$contraseña;
        
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
     * Get the value of ordenes
     */ 
    public function getOrdenes()
    {
        return $this->ordenes;
    }

    /**
     * Set the value of ordenes
     *
     * @return  self
     */ 
    public function setOrdenes($ordenes)
    {
        $this->ordenes = $ordenes;

        return $this;
    }

    


    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of nombreUsuario
     */ 
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of nombreUsuario
     *
     * @return  self
     */ 
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get the value of apellidoUsuario
     */ 
    public function getApellidoUsuario()
    {
        return $this->apellidoUsuario;
    }

    /**
     * Set the value of apellidoUsuario
     *
     * @return  self
     */ 
    public function setApellidoUsuario($apellidoUsuario)
    {
        $this->apellidoUsuario = $apellidoUsuario;

        return $this;
    }

    /**
     * Get the value of contraseña
     */ 
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set the value of contraseña
     *
     * @return  self
     */ 
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }


    public static function obtenerUsuarios(){

        $contenidoArchivo=file_get_contents('../data/usuarios.json');
        echo $contenidoArchivo;

    }

    public static function obtenerUsuario($id){
        $contenidoArchivo=file_get_contents('../data/usuarios.json');
        $usuarios=json_decode($contenidoArchivo, true);
        $usuario=null;
        for ($i=0; $i <sizeof($usuarios) ; $i++) { 
            if ($usuarios[$i]["idUsuario"]==$id) { 
                $usuario=$usuarios[$i];
                break;   
            }
        }
        echo json_encode($usuario);


    }

        public function guardarUsuario(){
            $contenidoArchivo = file_get_contents("../data/usuarios.json");
            $usuarios = json_decode($contenidoArchivo,true);
            $usuarios[]=array(
                "idUsuario"=>$this->idUsuario,
                "nombreUsuario"=>$this->nombreUsuario,
                "apellidoUsuario"=>$this->apellidoUsuario,
                "correo"=>$this->correo,
                "ordenes"=>$this->ordenes,
                "contraseña"=>$this->contraseña
                
            );
            $archivo=fopen('../data/usuarios.json','w');
            fwrite($archivo,json_encode($usuarios));
            fclose($archivo);
            echo '{"codigoResultado":1, "mensaje":"Categoria guardada con exito"}';
        }


}


?>