<?php 

    class Orden{

      Private  $idOrden;
      Private $estadoOrden;
      Private  $productos;
      Private  $direccionDestino;




        public function __construct(
            $idOrden,$estadoOrden,$productos,$direccionDestino
        )
        {
            $this->idOrden=$idOrden;
            $this->estadoOrden=$estadoOrden;
            $this->productos=$productos;
            $this->direccionDestino=$direccionDestino;
        }


        public static function obtenerOrdenes(){
            $contenidoArchivo=file_get_contents('../data/ordenes.json');
            echo $contenidoArchivo;

        }

        public static function obtenerOrden($idOrden){
            $contenidoArchivo=file_get_contents('../data/ordenes.json');
            $ordenes=json_decode($contenidoArchivo,true);
            $orden=null;

            for ($i=0; $i < sizeof($ordenes); $i++) { 
                if ($ordenes[$i]["idOrden"]==$idOrden) {
                    $orden=$ordenes[$i];
                    break;
                }
            }
            echo json_encode($orden);

        }
        public function guardarOrden(){
            $contenidoArchivo=file_get_contents('../data/ordenes.json');
            $ordenes= json_decode($contenidoArchivo, true);
            $ordenes[]=array(
                    "idOrden"=>$this->idOrden,
                    "estadoOrden"=>$this->estadoOrden,
                    "productos"=>$this->productos,
                    "direccionDestino"=>$this->direccionDestino,
            );
            $archivo=fopen('../data/ordenes.json' , 'w');
            fwrite($archivo, json_encode($ordenes));
            fclose($archivo);
            echo '{"codigoResultado":1, "mensaje":"Orden guardada con exito"}';
        }

      /**
       * Get the value of idOrden
       */ 
      public function getIdOrden()
      {
            return $this->idOrden;
      }

      /**
       * Set the value of idOrden
       *
       * @return  self
       */ 
      public function setIdOrden($idOrden)
      {
            $this->idOrden = $idOrden;

            return $this;
      }

      /**
       * Get the value of estadoOrden
       */ 
      public function getEstadoOrden()
      {
            return $this->estadoOrden;
      }

      /**
       * Set the value of estadoOrden
       *
       * @return  self
       */ 
      public function setEstadoOrden($estadoOrden)
      {
            $this->estadoOrden = $estadoOrden;

            return $this;
      }

      /**
       * Get the value of productos
       */ 
      public function getProductos()
      {
            return $this->productos;
      }

      /**
       * Set the value of productos
       *
       * @return  self
       */ 
      public function setProductos($productos)
      {
            $this->productos = $productos;

            return $this;
      }

      /**
       * Get the value of direccionDestino
       */ 
      public function getDireccionDestino()
      {
            return $this->direccionDestino;
      }

      /**
       * Set the value of direccionDestino
       *
       * @return  self
       */ 
      public function setDireccionDestino($direccionDestino)
      {
            $this->direccionDestino = $direccionDestino;

            return $this;
      }
    }


?>