<?php 
	
	/** caminho padrao da aplicacao	 */
	define("APP_ROOT", __DIR__ ) or die("Não foi possivel setar o caminho do APP");

	/*** Setando os errors	 */
	error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

	/** Auto load de Classes */
	require "_load.php";

	/** Registrando o autoload	 */
	spl_autoload_register('app_load_class');

	/**nome do Banco */
	define("BANCO", "app");

	/**Nome do Usuario	 */
	define("USUARIO", "root");
	
	/** Senha do Banco	 */
	define("SENHA", "");
	
	/** HOST*/
	define("HOST", "localhost");