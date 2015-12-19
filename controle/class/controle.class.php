<?php 

	/**
	* Controle
	*/
	abstract class Controle
	{
		
		private $conn;

		public $titulo;

		private $lang;

		public $view;

		public $rota;

		public $token;

		protected function getConn() {

			if( empty( $this->conn ) )
				$this->conn = new MyPdo();

			return $this->conn;
		}

		public function render()
		{
			ob_start();
			require $this->view;
			$pagina = ob_get_contents();
			$pagina = str_replace('</body>', '<input value="'.Session::token().'" type="hidden" ></body>', $pagina);
			ob_end_clean();
			echo $pagina;
		}

		protected function getAsset( $asset )
		{
			if( !defined('URL_ASSETS'))
				return;

			$arquivo = URL_ASSETS . "/";

			if( strpos( $asset, ".css") == true  ){
				echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$arquivo}css/{$asset}\">";
			}
			elseif( strpos( $asset, ".js") == true ){
				echo "<script type=\"text/javascript\" src=\"{$arquivo}js/{$asset}\" ></script>";
			}
			return $this;			
		}

		protected function gotoControle( $controle ) {
			header("location: $controle");
		}
		
	}