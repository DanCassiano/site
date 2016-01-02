<?php 
	$paginas = new Paginas();

	if( !empty( Url::getURL(3) ) &&  ( Url::getURL(3) == 'editar' || Url::getURL(3) == 'nova' ) ){
		require APP_ROOT."/view/dashboard/paginas/pagina-edit.php";
	}
	else {
			require APP_ROOT."/view/dashboard/paginas/pagina-lista.php";
		}


