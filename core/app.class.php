<?php 

/**
* App
* @autor Jordan Cassiano
*/
class App
{
	
	function __construct(){	}

	private static $rota;

	private static $pagina;

	/**
	 * Funcao de inicializacao
	 * @return void
	 */
	public static function init() {
		
		/** @var string rota controladora */
		$tema = Url::getURL(1);

		if( $tema == "dashboard")
			$tema = "view/".$tema;
		else
			$tema = "view/".TEMA;

		/*** Pegando os dados da url */
		self::setRota( self::getSlug() );

		/** Separador padrao do sistema*/
		self::registrar( "DS", DIRECTORY_SEPARATOR );

		/** PASTA COM OS CONTROLES */
		self::registrar('PASTA_CONTROLE', dirname(__DIR__) . DS . "controle" );

		/** PASTA COM OS ASSETS */
		self::registrar('PASTA_ASSETS', dirname(__DIR__) . DS . $tema . "/assets" );

		/** PASTA COM OS ASSETS */
		self::registrar('URL_ASSETS', "http://localhost/site/".$tema."/assets" );

		self::registrar('URL_BASE', "http://localhost/site/" );

		self::getControle();

	}

	/** Cria define para o sistema */
	private static function registrar( $var, $valor ) {
		define( $var, $valor ) or die( "Nao foi possivel registrar {$var}");
	}

	/**
	 * Setando as rotas do Sistema
	 * @param string $url string vinda da url
	 */
	private static function setRota( $url ) {
		
		if( is_array( $url ) ) {

			if( !empty( $url['path'] ) )
				self::$rota = explode( "/", trim( $url['path'] , '/') );
		}		
	}

	/** Slug do sistema */
	private static function getSlug(){
		return @parse_url( $_SERVER['REQUEST_URI'] );
	}

	/** Funcao para buscar um determinado controle */
	private static function getControle() {

		$classe = "Index";
		
		if( !empty( self::$rota[1] ) && self::$rota[1] != "index.php" ){
			$classe = ucfirst( self::$rota[1] );
			if( !class_exists( $classe ))
				$classe = "QuatroZeroQuatro";
		}

		try {
		
			self::$pagina = new $classe( self::$rota );
			self::$pagina->init();
			self::$pagina->render();
			
		} catch (Exception $e) {
			var_dump( $e );
		}
	}
}