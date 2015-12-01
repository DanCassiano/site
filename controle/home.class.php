<?php 
/**
* Home
*/
class Home extends Controle
{
	
	function __construct()
	{
		$this->titulo = "Bem Vindo";
	}

	public function init(){		
		require APP_ROOT."/view/home.php";
	}
}