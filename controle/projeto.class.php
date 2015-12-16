<?php 
/**
* Projeto
*/
class Projeto extends Controle
{
	
	function __construct()
	{
		$this->titulo = "Bem Vindo";
		$this->view = APP_ROOT."/view/Projeto.php";
	}

	public function init(){
		
		if( empty( Session::get('login') ) )
			$this->gotoControle('home');
	}
}