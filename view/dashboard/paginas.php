<?php 
	$paginas = new Paginas();

	if( !empty( Url::getURL(3) ) &&  Url::getURL(3) == 'editar' ) {
		require APP_ROOT."/view/dashboard/pagina-edit.php";
	}
	else {
			require APP_ROOT."/view/dashboard/pagina-lista.php";
		}


