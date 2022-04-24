<?php 

    class Empresa{

      Private  $idEmpresa;
      Private   $nombreEmpresa;
      Private   $baner;
      Private   $logo;
      Private   $calificacion;
      Private  $productos;



        public function __construct(
            $idEmpresa,
              $nombreEmpresa,
              $baner,
              $logo,
              $calificacion,
             $productos,
        )
        {
            $this->idEmpresa=$idEmpresa;
            $this-> nombreEmpresa= $nombreEmpresa;
            $this->  baner=  $baner;
            $this->  logo= $logo;
            $this->  calificacion= $calificacion;
            $this-> productos= $productos;
            
        }


        public static function obtenerEmpresas(){

            $contenidoArchivo = file_get_contents('../data/empresas.json');
            
            echo $contenidoArchivo;
        }


        public static function ObtenerEmpresa($id){
            $contenidoArchivo=file_get_contents('../data/empresas.json');
            $empresas=json_decode($contenidoArchivo,true);
            $empresa=null;

            for ($i=0; $i <sizeof($empresas) ; $i++) { 
                    if ($empresas[$i]["idEmpresa"]==$id) {
                        $empresa=$empresas[$i];
                        break;
                    }
            }
            echo json_encode($empresa);
        }

      /**
       * Get the value of idEmpresa
       */ 
      public function getIdEmpresa()
      {
            return $this->idEmpresa;
      }

      /**
       * Set the value of idEmpresa
       *
       * @return  self
       */ 
      public function setIdEmpresa($idEmpresa)
      {
            $this->idEmpresa = $idEmpresa;

            return $this;
      }

      /**
       * Get the value of nombreEmpresa
       */ 
      public function getNombreEmpresa()
      {
            return $this->nombreEmpresa;
      }

      /**
       * Set the value of nombreEmpresa
       *
       * @return  self
       */ 
      public function setNombreEmpresa($nombreEmpresa)
      {
            $this->nombreEmpresa = $nombreEmpresa;

            return $this;
      }

      /**
       * Get the value of baner
       */ 
      public function getBaner()
      {
            return $this->baner;
      }

      /**
       * Set the value of baner
       *
       * @return  self
       */ 
      public function setBaner($baner)
      {
            $this->baner = $baner;

            return $this;
      }

      /**
       * Get the value of logo
       */ 
      public function getLogo()
      {
            return $this->logo;
      }

      /**
       * Set the value of logo
       *
       * @return  self
       */ 
      public function setLogo($logo)
      {
            $this->logo = $logo;

            return $this;
      }

      /**
       * Get the value of calificacion
       */ 
      public function getCalificacion()
      {
            return $this->calificacion;
      }

      /**
       * Set the value of calificacion
       *
       * @return  self
       */ 
      public function setCalificacion($calificacion)
      {
            $this->calificacion = $calificacion;

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