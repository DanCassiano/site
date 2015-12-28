<?php 
	
	include "../_config.php";

	define("CONTORLE", Url::getURL(1) );
	define("ACAO", Url::getURL(2));
	define("FUNCAO",  Url::getURL(3) );
	
	if( Url::getURL(3) == Session::token() )
	{
		if( CONTORLE == 'user' )
		{
			if( ACAO == 'logoff')
			{
				$user = new User();
				$user->logoff();
				header("location: /site/dashboard/login");
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
					header("location: /site/dashboard");
			}
			elseif( ACAO == "add" ) {
				$user = new User();
				$user->add( array( "usuario"=> getPOST('usuario') ,
								   "email"=> getPOST('email', FILTER_VALIDATE_EMAIL ),
								   "senha"=>getPOST('senha'),
								   "ativo"=> 1 ));
			}
			elseif( ACAO == "get" ) {

				if( FUNCAO == "permissoes" ) {
					$user = new User();
					echo json_encode($user->getPermissoes( 1 ));
				}

			}
		}
		
	}