<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->titulo ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<?php 
		$this
			->getAsset('app.css');
			
		?>
</head>
<body>
	<div class="container app-main text-center">
		<img src="assets/imagens/1450764775_Rocket.svg" class="rocket login">
		<div class="janela janela-padrao login">
			<div class="corpo">

				<form action="user/autenticar/login" id="formLogin" method="POST">
					<div class="row">
						<label for="inputLogin">E-mail</label>
						<input type="text" name="login" id="inputLogin" class="anim-input">
					</div>

					<div class="row">
						<label for="inputSenha">Senha</label>
						<input type="password" name="senha" id="inputSenha" class="anim-input">
					</div>
						
					<div class="row text-right">
					<a href="user/requer/senha">Esqueci minha senha!</a>
						<button class="btn btn-padrao">Login</button>
					</div>
				</form>

			</div>
		</div>

		
	</div>
	<?php 
		$this
			->getAsset('lib/jquery-1.11.3.min.js')		 
			->getAsset('login.js');			 
	?>

</body>
</html>