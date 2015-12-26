<?php 
	include "../_config.php";

	define("CONTORLE", Url::getURL(1) );
	define("ACAO", Url::getURL(2));
	define("FUNCAO",  Url::getURL(3) );

	if( CONTORLE == "log" ) {

		$log = new Log();
		if( ACAO == "get" ) {

			if( FUNCAO == "user" ) {

				echo json_encode( $log->get("") );
			}
			elseif( FUNCAO == "tabelas" ) {
				$tabelas = $log->getTables();
				$retorno = array();
				foreach( $tabelas as $t )
				{
					$retorno[] = array( "value"=> $t['tabela'], "texto"=> $t['tabela'] );
				}
				echo json_encode( $retorno );
			}
		}

	}