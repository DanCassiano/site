<?php 

/**
* App
*/
class App
{
	
	function __construct(){	}

	private static $rota;

	private static $pagina;

	public static function init() {
		
		/*** Pegando os dados da url */
		self::setRota( self::getSlug() );

		/** Separador padrao do sistema*/
		self::registrar( "DS", DIRECTORY_SEPARATOR );

		/** PASTA COM OS CONTROLES */
		self::registrar('PASTA_CONTROLE', dirname(__DIR__) . DS . "controle" );	

		/** PASTA COM OS ASSETS */
		self::registrar('PASTA_ASSETS', dirname(__DIR__) . DS . "assets" );	

		/** PASTA COM OS ASSETS */
		self::registrar('URL_ASSETS', "http://localhost/site/assets" );	

		self::getControle();

	}

	private static function registrar( $var, $valor ) {
		define( $var, $valor ) or die( "Nao foi possivel registrar {$var}");
	}

	private static function setRota( $url ) {
		
		if( is_array( $url ) ) {

			if( !empty( $url['path'] ) )
				self::$rota = explode( "/", trim( $url['path'] , '/') );				
		}		
	}

	private static function getSlug(){
		return @parse_url( $_SERVER['REQUEST_URI'] );
	}

	private static function getControle() {

		$classe = "Home";
		
		if( !empty( self::$rota[1] ) && self::$rota[1] != "index.php" ){
			$classe = ucfirst( self::$rota[1] );
			if( !class_exists( $classe ))
				$classe = "QuatroZeroQuatro";
		}

		self::$pagina = new $classe;
		self::$pagina->init();
		self::$pagina->render();
	}
}