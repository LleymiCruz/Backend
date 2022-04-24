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
            $contenidoArchivo=file_get_contents('../data/productos.json');
            echo $contenidoArchivo;
      }
        
      public static function obtenerProducto($idProducto){
            $contenidoArchivo=file_get_contents('../data/productos.json');
            $productos=json_decode($contenidoArchivo, true);
            $producto=null;
            for ($i=0; $i <sizeof($productos) ; $i++) { 
                if ($productos[$i]["idProducto"]==$idProducto) {
                    $producto=$productos[$i];
                    break;
                }
            }
            echo json_encode($producto);
      }
      public static function ObtenerProductosPorEmpresa($idEmpresa){
            $contenidoArchivoEmpresas=file_get_contents('../data/empresas.json');
            $empresas=json_decode($contenidoArchivoEmpresas,true);
            $empresa=null;

            for ($i=0; $i <sizeof($empresas) ; $i++) { 
                  if ($empresas[$i]["idEmpresa"]==$idEmpresa) {
                        $empresa=$empresas[$i];
                        break;
                  }
            }
            $contenidoArchivoProductos=file_get_contents('../data/productos.json');
            $productos=json_decode($contenidoArchivoProductos,true);
            $resultadoProductos=array();
            for ($i=0; $i <sizeof($productos) ; $i++) { 
                  if(in_array($productos[$i]["idProducto"], $empresa["productos"])){
                        $resultadoProductos[]=$productos[$i];
                  }
            }

            echo json_encode($resultadoProductos);
      }
      public function guardarProducto(){
            $contenidoArchivoProductos=file_get_contents('../data/productos.json');
            $productos= json_decode($contenidoArchivoProductos, true);
            $productos[]=array(
                    "idProducto"=>$this->idProducto,
                    "nombreProducto"=>$this->nombreProducto,
                    "precio"=>$this->precio,
                    "imagenProducto"=>$this->imagenProducto,
            );
            $archivo=fopen('../data/productos.json' , 'w');
            fwrite($archivo, json_encode($productos));
            fclose($archivo);
            echo '{"codigoResultado":1, "mensaje":"Producto guardado con exito"}';
      }
 
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