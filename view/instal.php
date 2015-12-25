<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->titulo ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Mono&subset=greek' rel='stylesheet' type='text/css'>
	<?php 
		$this
			->getAsset('font-awesome.min.css')
			->getAsset('app.css')
			->getAsset('estilo.css')

			->getAsset('lib/jquery-1.11.3.min.js');
		?>
</head>
<body>
	<div class="container app-main">
		<div class="janela janela-dashboard">
			<header>Instalação</header>
			<div class="corpo">
				<form action="" >
					<div class="row">
						<label for="inputHost">Host</label>
						<input type="text" value="localhost" id="inputHost" >
					</div>
					<div class="row">
						<label for="inputUsuario">Usuário</label>
						<input type="text" value="root" id="inputUsuario" >
					</div>
					<div class="row">
						<label for="inputSenha">Senha</label>
						<input type="text" value="" id="inputSenha" >
					</div>
					
				</form>
			</div>
			<div class="rodape text-right">
				<button class="btn btn-padrao" >Continuar</button>
			</div>
		</div>
	</div>
	<?php 
		$this->getAsset('intal.js');
	?>

</body>
</html>