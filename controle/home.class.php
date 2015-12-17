<?php 
/**
* Home
*/
class Home extends Controle
{
	
	function __construct()
	{
		$this->titulo = "Bem Vindo";
		$this->view = APP_ROOT."/view/home.php";
	}

	public function init(){		
		if( !empty( Session::get('login') ) )
			header("location: dashboard");
	}
}