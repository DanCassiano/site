<?php 
/**
* MyPDO
*/
class MyPdo
{
	private $conn;

	private $query;

	function __construct( ) {


		$dsn = 'mysql:host=' . HOST . ';dbname=' . BANCO;
		$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		if (empty($this->conn)) {
			
			try {
			
				$this->conn = new PDO($dsn, USUARIO, SENHA, $opcoes);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			} catch (PDOException $e) {
			
				echo $e->getMessage();
			}
		}

	}


	public function read( $sql, $parametros = null ) {

		if( $this->query( $sql, $parametros ) )
			return $this->getResult();

		return false;
	}

	public function getResult( $mode = PDO::FETCH_ASSOC ) {
		return $this->query->fetchAll( $mode );
	}

	private function query($sql, $parametros) {
		try{
			$db = $this->conn->prepare($sql);

			if( !empty( $parametros ) ) {

				parse_str( $parametros,  $parametros );

				if( is_array( $parametros )) {

					$chaves = array_keys( $parametros );
					foreach ($chaves as $chave) {
						$bind = ":".$chave;
						$db->bindValue( $bind, $parametros[ $chave ] );
					}
				}
			}

			$db->execute();

		}
		catch(PDOException $e){
			return false;
		}
		$this->query = $db;
		return true;
	}

	public function insert(Post $post) {
		$this->conn->beginTransaction();
 
		try {
			$stmt = $this->conn->prepare(
				'INSERT INTO posts (title, content) VALUES (:title, :content)'
			);
 
			$stmt->bindValue(':title', $post->getTitle());
			$stmt->bindValue(':content', $post->getContent());
			$stmt->execute();
 
            $this->conn->commit();
        }
        catch(Exception $e) {
            $this->conn->rollback();
        }
    }


    public function getRowCount(){
    	return $this->query->rowCount();
    }

	 // Fechando a Connexao
	function __destruct() {
		try {
			$this->conn = null;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}