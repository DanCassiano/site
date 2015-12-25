<?php 
	/**
	* Instal
	*/
	class Instal extends Controle
	{
		
		public function init(){

			$this->titulo = "Instalação";
			$this->view = APP_ROOT."/view/instal.php";
		}
	}