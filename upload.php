<?php
	
	include "_config.php";

	$uploaddir = IMAGEM_DIR;
	$upload = new Upload(); 

	foreach ( $_FILES as $ind => $arquivo ) {
		echo $upload->salvar( $arquivo, 1000, 800, IMAGEM_DIR  );
	}

