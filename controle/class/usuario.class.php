<?php 
	/**
	* usuarios
	*/
	class Usuario extends Controle
	{
		
		function __construct( $rota )
		{
			$this->rota = $rota;
			
			$this->token = Session::token();

			$this->titulo = "Bem Vindo";
			$this->view = APP_ROOT."/view/dashboard.php";
		}

		public function init(){

			if( empty( Session::get('login') ) )
				header("location: login");
		}

	}