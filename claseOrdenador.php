<?php
class claseOrdenador
{
  //Creación de las clases
  public $marca="";
  public $ram=4;

  //Declaración de un método

  public function setMarca ($marca){
    $this->marca=$marca;
  }
  public function getMarca(){
    return $this->marca;
  }
  public function setRam ($ram){
    $this->ram=$ram;
  }
  public function getRam(){
    return $this->ram;
  }


} ?>
