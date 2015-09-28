<?php 

class Cliente{
	private $id;
	private $cpf;
	private $tel;
	private $cel;
	private $end;
	private $userid;

	public function __set($atrib, $value){
          $this->$atrib = $value;
      }
  
      public function __get($atrib){
          return $this->$atrib;
    }

}


 ?>