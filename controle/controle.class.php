<?php 

	/**
	* Controle
	*/
	abstract class Controle
	{
		
		private $read;

		private $titulo;

		private $lang;

		public $view;
	
		private function getToken()
		{
			return  md5(uniqid(rand(), true));
		}


		public function render()
		{
			ob_start();
			require $this->view;
			$pagina = ob_get_contents();
			$pagina = str_replace('</body>', '<input value="'.$this->getToken().'" type="hidden" ></body>', $pagina);
			ob_end_clean();
			echo $pagina;
		}

		protected function getAsset( $asset )
		{
			if( !defined('URL_ASSETS'))
				return;

			return URL_ASSETS . "/". ( strpos( $asset, ".css") ? "/css/" : "/js/" ). $asset;
		}
		
	}