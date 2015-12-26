<?php 
	/**
	* Paginas
	*/
	class Paginas
	{
		
		private $pdo;


		private function getPDO(){
			if( empty( $this->pdo ) )
				$this->pdo = new MyPdo();
			return $this->pdo;
		}

		function __construct( )
		{
			
		}

		public function getPaginas() {

			$pdo = $this->getPDO();
			$sql = "SELECT 
						`id`,
						`pagina`,
						`link`,
						`publicado`,
						`permitir_view`,
						 DATE_FORMAT(`data_criacao`, '%d-%m-%Y' )AS data_criacao,
						  ( 
							SELECT usuario
							FROM usuarios
							WHERE usuarios.id = id_autor
						  )AS autor 
					FROM `paginas` ";
			return $pdo->read($sql);
		}
	}