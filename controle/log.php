<?php 
	include "../_config.php";

	define("CONTORLE", Url::getURL(1) );
	define("ACAO", Url::getURL(2));
	define("FUNCAO",  Url::getURL(3) );

	if( CONTORLE == "log" ) {

		if( ACAO == "get" ) {

			if( FUNCAO == "user" ) {

				$log = new Log();
				echo json_encode( $log->get("") );
			}
		}

	}