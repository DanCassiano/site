<?php 

	/**
	* Controle
	*/
	Abstract class Controle
	{
		
		private $read;

		private $titulo;

		private $lang;
	

		public function __get( $dados ){
			var_dump( $dados );
			return $this[$dados];
		}

		public function __call($method,$args){
      	
        	// throw new Exception("Este Metodo {$method} nao existe!");
        } 
	}