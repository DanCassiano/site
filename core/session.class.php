<?php 

// namespace Session;
/**
 * @author Jordan <jordan@emporioht.com.br> 
 * @package Util
 */
class Session
{
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