<?php 
	class User{
		private $id;
		private $name;
		private $email;

		
		public function __set($atrib, $value){
	          $this->$atrib = $value;
	      }
	  
	      public function __get($atrib){
	          return $this->$atrib;
	    }
	}

 ?>