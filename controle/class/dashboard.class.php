<?php 
/**
* DashBoard
*/
class Dashboard extends Controle
{

	public $servico;

	function __construct( $rota )
	{
		$this->rota = $rota;
		$this->token = Session::token();
		$this->titulo = "Bem Vindo";
		$this->view = APP_ROOT."/view/dashboard/dashboard.php";

		$this->servico = Url::getURL(2);

		if( empty($this->servico) || $this->servico == "dashboard")
			$this->servico = 'index';
	}

	public function init(){

		if( empty( Session::get('login') ) )
			header("location: login");
	}

	public function getMenu() {
		$read = $this->getConn();
		return $read->read( "select * from permissoes WHERE id_pai = 0 " );
	}

	public function getBoard( $tela ) {
		$modulo = APP_ROOT."/view/dashboard/{$tela}.php";
		if( file_exists( $modulo ))
			require $modulo;
		else
			trigger_error( "Modulo não encontrado", 01 );
	}
}