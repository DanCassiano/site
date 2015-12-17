
<?php 


	include "_config.php";
	

	$controle = getGET('controle');

	if( $controle == "autenticar" ) {

		Session::set("login", "asdasdasdsd");
		header("location: ".URL_DIR."/index.php");
 	}
 
