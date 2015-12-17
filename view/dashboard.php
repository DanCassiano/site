<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->titulo ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<?php 
		$this
			->getAsset('font-awesome.min.css')
			->getAsset('app.css')
			->getAsset('estilo.css');
		?>
</head>
<body>
	<div class="container app-main">
		
		<a href="#menu" class="trigger-menu">
			<i class="fa fa-bars"></i>
		</a>
		<div class="card card-menu off-canvas" id="canvasMenu">
			<header class="titulo">
				<a href="#menu">
					<i class="fa fa-bars"></i>
				</a>
				Menu
			</header>
			<ul>
				<li><a href="#">MENU 1</a></li>
				<li><a href="#">MENU 2</a></li>
				<li><a href="#">MENU 3</a></li>
				<li><a href="#">MENU 4</a></li>
				<li><a href="#">MENU 5</a></li>
				<li><a href="#">MENU 6</a></li>
				<li><a href="#">MENU 7</a></li>
				<li><a href="#">MENU 8</a></li>
				<li><a href="#">MENU 9</a></li>
				<li><a href="#">MENU 10</a></li>
			</ul>
		</div>
		
		<div class="card card-user " data-drop="true">
			<a href="#usuario" title="Fulano de Tal">
				<img src="http://placehold.it/40x40?text=User" alt="Usuário">
			</a>
			<div class="card card-opcoes">
				<div class="corpo">
					<a href="#User">Fulano</a>
					<hr>
					<a href="#sair">Sair</a>
				</div>
			</div>
		</div>

		<div class="janela janela-dashboard">
			<header>Paginas</header>
			<div class="corpo">
				
			</div>
		</div>
		

	</div>
	<?php 
		$this
			->getAsset('lib/jquery-1.11.3.min.js')
			->getAsset('app.js');
	?>

</body>
</html>