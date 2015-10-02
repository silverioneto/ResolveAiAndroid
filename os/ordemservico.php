<?php 
/**
* 
*/
class OrdemServico extends
{
	private $id_func;
	private $id_user; 
	private $tipo_equip;
	private $descri_equip;
	private $defeito_equi;
	private $status;
	
	public function __set($atrib, $value){
          $this->$atrib = $value;
      }
  
      public function __get($atrib){
          return $this->$atrib;
    }
}

 ?>