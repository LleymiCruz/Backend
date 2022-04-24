<?php 

    class Producto{

        
      Private $idProducto;
      Private  $nombreProducto;
      Private  $precio;
      Private $imagenProducto;

        public function __construct(
            $idProducto,
              $nombreProducto,
              $precio,
             $imagenProducto

        )
        {
          $this->idProducto=$idProducto;
          $this->nombreProducto=$nombreProducto;
          $this->precio=$precio;
          $this->imagenProducto=$imagenProducto;
        }

      public static function obtenerProductos(){
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
 /*           public function guardarProducto($idEmpresa){
               $contenidoArchivo=file_get_contents('../data/empresas.json');
               $empresas=json_decode($contenidoArchivo,true);
               $empresa=null;

                for ($i=0; $i <sizeof($empresas) ; $i++) { 
                    if($empresas[$i]["idEmpresa"]==$idEmpresa){
                        $empresa=$empresas[$i];
                        $empresa["productos"][]=array(
                            "idProducto"=>$this->idProducto,
                            "nombreProducto"=>$this->nombreProducto,
                            "precio"=>$this->precio,
                            "imagenProducto"=>$this->imagenProducto
                        );
                        $empresas[$i]=$empresa;
                        break;
                    }

                }
              
                $archivo=fopen('../data/ordenes.json'.'w')
                fwrite($archivo,json_encode($empresas));
                fclose($archivo);

                echo  '{"codigoResultado":1, "mensaje":"Producto guardado con exito"}';
            }  */

      /**
       * Get the value of idProducto
       */ 
      public function getIdProducto()
      {
            return $this->idProducto;
      }

      /**
       * Set the value of idProducto
       *
       * @return  self
       */ 
      public function setIdProducto($idProducto)
      {
            $this->idProducto = $idProducto;

            return $this;
      }

      /**
       * Get the value of nombreProducto
       */ 
      public function getNombreProducto()
      {
            return $this->nombreProducto;
      }

      /**
       * Set the value of nombreProducto
       *
       * @return  self
       */ 
      public function setNombreProducto($nombreProducto)
      {
            $this->nombreProducto = $nombreProducto;

            return $this;
      }

      /**
       * Get the value of precio
       */ 
      public function getPrecio()
      {
            return $this->precio;
      }

      /**
       * Set the value of precio
       *
       * @return  self
       */ 
      public function setPrecio($precio)
      {
            $this->precio = $precio;

            return $this;
      }

      /**
       * Get the value of imagenProducto
       */ 
      public function getImagenProducto()
      {
            return $this->imagenProducto;
      }

      /**
       * Set the value of imagenProducto
       *
       * @return  self
       */ 
      public function setImagenProducto($imagenProducto)
      {
            $this->imagenProducto = $imagenProducto;

            return $this;
      }
    }


?>