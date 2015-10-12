<?php 

Class Agenda{
	
	private $id;
    private $periodo;
    private $data;
    private $os;
    private $user_id;
    private $tecnico;

    public function __set($atrib, $value){
          $this->$atrib = $value;
      }
  
      public function __get($atrib){
          return $this->$atrib;
    }
}


 ?>