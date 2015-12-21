<?php 

	/**
	* User
	*/
	class User
	{
		private $pdo;

		private $logado = false;

		private $idUser ;
		

		function __construct(){ }

		private function getPDO(){
			if( empty( $this->pdo ) )
				$this->pdo = new MyPdo();
			return $this->pdo;
		}


		public function login( $email, $senha ) {

			$senha = md5(md5(md5(md5( $senha ))));
			$pdo = $this->getPDO();
			$r = $pdo->read( "SELECT id FROM usuarios WHERE email = :email AND senha = :senha AND ativo = 1", 
							 "email={$email}&senha={$senha}" );

			if( $pdo->getRowCount() > 0) {
				$this->logado = $r[0]['id'];
				Session::set('login', $this->logado );
			}
			return $this->logado;
		}

		public function getUserLogin() {
			$this->idUser = Session::get('login');
			if( !empty( $this->idUser) ){

				$pdo = $this->getPDO();
				$r = $pdo->read( "SELECT 
										usuario,
										( SELECT imagem FROM imagens WHERE imagens.`Id` = ui.id_imagem ) AS imagem
								  FROM usuarios 
								  LEFT JOIN usuario_imagens ui ON ui.`id_usuario` = usuarios.`Id` 
								  WHERE usuarios.id =:id ", "id={$this->idUser}" );
				return $r[0];
			}
		}

		public function listUser( $ativo = 1 ) {
			$pdo = $this->getPDO();
			return $pdo->read( "SELECT 
									usuarios.`Id`, 
									usuarios.`usuario`,
									usuarios.`email`,
									DATE_FORMAT(data_cadastro, '%d-%m-%Y') AS data_cadastro,
									usuarios.`ativo`,
									( SELECT imagem FROM imagens WHERE imagens.`Id` = ui.id_imagem ) AS imagem
								FROM usuarios
								LEFT JOIN usuario_imagens ui ON ui.`id_usuario` = usuarios.`Id` AND ui.`ativa` = 1
								WHERE usuarios.`ativo` = :ativo 
								ORDER BY data_cadastro", "ativo={$ativo}" );
		}

		public function add( $dados ) {
			$pdo = $this->getPDO();
			$dados['senha'] = md5(md5(md5(md5( $dados['senha'] ))));
			echo $pdo->insert( "usuarios", $dados );
		}
	}