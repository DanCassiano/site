<?php 
/**
* Home
*/
class Login extends Controle
{
	
	function __construct()
	{
		$this->titulo = "Bem Vindo";
		$this->view = APP_ROOT."/view/login.php";
	}

	public function init(){
		
	}
}