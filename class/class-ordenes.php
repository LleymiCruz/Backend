<?php 

    class Orden{

      Private  $idOrden;
      Private $estadoOrden;
      Private  $productos;




        public function __construct(
            $idOrden,$estadoOrden,$productos
        )
        {
            $this->idOrden=$idOrden;
            $this->estadoOrden=$estadoOrden;
            $this->productos=$productos;
        }


        public static function obtenerOrdenes(){
            $contenidoArchivo=file_get_contents('../data/ordenes.json');
            echo $contenidoArchivo;

        }

        public static function obtenerOrden($id){
            $contenidoArchivo=file_get_contents('../data/ordenes.json');
            $ordenes=json_decode($contenidoArchivo,true);
            $orden=null;

            for ($i=0; $i < sizeof($ordenes); $i++) { 
                if ($ordenes[$i]["idOrden"]==$id) {
                    $orden=$ordenes[$i];
                    break;
                }
            }
            echo json_encode($orden);

        }


        public function guardarOrden(){
            

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
    }


?>