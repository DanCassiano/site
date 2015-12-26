<?php 
/**
* Home
*/
class Index extends Controle
{
	
	function __construct()
	{
		$this->titulo = "Bem Vindo";
		$this->view = APP_ROOT."/view/".TEMA."/index.php";
	}

	public function init(){		
		// if( !empty( Session::get('login') ) )
			// header("location: dashboard");
	}
}