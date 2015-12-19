<?php 

// namespace Session;
/**
 * @author Jordan <jordan@emporioht.com.br> 
 * @package Util
 */
class Session
{
	public static function token( ){
		if( empty( $_SESSION['token'] ) )
			$_SESSION['token'] = self::getToken();

		return $_SESSION['token'];
	}

	private function getToken() {
		return  md5(uniqid(rand(), true));
	}

	public static function get( $chave ) {
		return $_SESSION[ $chave ];
	}

	public static function set( $chave, $valor ) {
		$_SESSION[ $chave ] = $valor;
	}

	private static function chaveExiste( $chave )
	{
		return empty( self::get( $chave ) );
	}
}