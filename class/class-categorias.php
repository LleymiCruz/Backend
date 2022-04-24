<?php 

class Categoria{
 private $idCategoria;
 private $nombreCategoria;
  private $imagenCategoria;
  private  $empresas;


 public function __construct(
     $idCategoria,$nombreCategoria,$imagenCategoria,$empresas
 )
 {
     $this->idCategoria=$idCategoria;
     $this->nombreCategoria=$nombreCategoria;
     $this->imagenCategoria=$imagenCategoria;
     $this->empresas=$empresas;
 }


 public static function obtenerCategorias(){
    $contenidoArchivo=file_get_contents('../data/categorias.json');
    echo $contenidoArchivo;

}

public static function obtenerCategoria($id){
    $contenidoArchivo=file_get_contents('../data/categorias.json');
    $categorias = json_decode($contenidoArchivo,true);
    $categoria = null;

    for ($i=0; $i <sizeof($categorias) ; $i++) {
        if ($categorias[$i]["idCategoria"]==$id) {
                $categoria=$categorias[$i];
                break;
        } 
       
}
echo json_encode($categoria);

}



 /**
  * Get the value of idCategoria
  */ 
 public function getIdCategoria()
 {
  return $this->idCategoria;
 }

 /**
  * Set the value of idCategoria
  *
  * @return  self
  */ 
 public function setIdCategoria($idCategoria)
 {
  $this->idCategoria = $idCategoria;

  return $this;
 }

 /**
  * Get the value of nombreCategoria
  */ 
 public function getNombreCategoria()
 {
  return $this->nombreCategoria;
 }

 /**
  * Set the value of nombreCategoria
  *
  * @return  self
  */ 
 public function setNombreCategoria($nombreCategoria)
 {
  $this->nombreCategoria = $nombreCategoria;

  return $this;
 }

  /**
   * Get the value of imagenCategoria
   */ 
  public function getImagenCategoria()
  {
    return $this->imagenCategoria;
  }

  /**
   * Set the value of imagenCategoria
   *
   * @return  self
   */ 
  public function setImagenCategoria($imagenCategoria)
  {
    $this->imagenCategoria = $imagenCategoria;

    return $this;
  }

  /**
   * Get the value of empresas
   */ 
  public function getEmpresas()
  {
    return $this->empresas;
  }

  /**
   * Set the value of empresas
   *
   * @return  self
   */ 
  public function setEmpresas($empresas)
  {
    $this->empresas = $empresas;

    return $this;
  }
}


?>