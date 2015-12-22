<?php 
	
	include "../_config.php";

	define("CONTORLE", Url::getURL(1) );
	define("ACAO", Url::getURL(2));
	
	if( Url::getURL(3) == Session::token() )
	{
		if( CONTORLE == 'user' )
		{
			if( ACAO == 'logoff')
			{
				session_destroy();
				header("location: /site/login");
			}
		}
	}
	else
	{
		if( CONTORLE == 'user' )
		{
			if( ACAO  == "autenticar") {
				$user = new User();
				$user->login( getPOST('login') , getPOST("senha") );
					header("location: /site");
			}
			elseif( ACAO == "add" ) {
				$user = new User();
				$user->add( array( "usuario"=> getPOST('usuario') ,
								   "email"=> getPOST('email', FILTER_VALIDATE_EMAIL ),
								   "senha"=>getPOST('senha'),
								   "ativo"=> 1 ));
			}
		}
	}