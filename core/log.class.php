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
						l.`hora` AS data,
						l.`mensagem`,
						l.`relacionamento`,
						( 
							SELECT usuario 
							FROM usuarios 
							WHERE usuarios.id = l.`relacionamento`
						) AS usuario,
						l.`sql`,
						l.`tabela`
					FROM LOGS l
					ORDER BY hora ASC";
			return $pdo->read($sql);
		}
	}