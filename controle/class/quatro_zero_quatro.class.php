<?php 
/**
* 404
*/
class QuatroZeroQuatro extends Controle
{
	
	function __construct()
	{
		$this->titulo = "Bem Vindo";
	}

	public function init(){		
		require APP_ROOT."/view/404.php";
	}
}