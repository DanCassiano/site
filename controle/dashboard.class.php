<?php 
/**
* Home
*/
class Dashboard extends Controle
{
	
	function __construct()
	{
		$this->titulo = "Bem Vindo";
		$this->view = APP_ROOT."/view/dashboard.php";
	}

	public function init(){		
		if( empty( Session::get('login') ) )
			header("location: login");
	}
}