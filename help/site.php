<?php 

	function getGET( $variavel, $validacao = FILTER_VALIDATE_STRING ) {
		return filter_input(INPUT_GET, $variavel );
	}

	function getPOST( $variavel, $validacao = FILTER_VALIDATE_STRING ) {
		return filter_input(INPUT_POST, $variavel );
	}