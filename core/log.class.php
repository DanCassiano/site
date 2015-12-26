<?php 

	/**
	* Log
	*/
	class Log
	{
		private $pdo;

		function __construct()
		{

		}

		private function getPDO(){
			if( empty( $this->pdo ) )
				$this->pdo = new MyPdo();
			return $this->pdo;
		}

		public function get( $termo ) {

			$pdo = $this->getPDO();

			$sql = "SELECT 
						l.`id`,
						DATE_FORMAT(l.`hora`, '%d-%m-%Y %H:%i:%s') AS data,
						l.`mensagem`,
						l.`relacionamento`,
						( 
							SELECT usuario 
							FROM usuarios 
							WHERE usuarios.id = l.`relacionamento`
						) AS usuario,
						l.`query`,
						l.`tabela`
					FROM LOGS l
					ORDER BY hora DESC";
			return $pdo->read($sql);
		}

		public function getTables(){
			$pdo = $this->getPDO();

			return $pdo->read("SELECT 
									DISTINCT(tabela) AS tabela
								FROM LOGS
								ORDER BY logs.`id` DESC");
		}
	}