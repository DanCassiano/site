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
	<div class="container app-main">
		
		<div class="row text-center">
			<div class="janela janela-board">
				<header>Titulo</header>
				<div class="corpo">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sapiente fugiat, provident quos amet, explicabo optio modi accusamus. Consectetur sequi suscipit magni adipisci voluptates expedita deleniti officia delectus velit at!
				</div>
			</div>
			<div class="janela janela-board">
				<header class="text-center">Titulo</header>
				<div class="corpo">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sapiente fugiat, provident quos amet, explicabo optio modi accusamus. Consectetur sequi suscipit magni adipisci voluptates expedita deleniti officia delectus velit at!
				</div>
			</div>

			<div class="janela janela-board">
				<header class="text-right">Titulo</header>
				<div class="corpo">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sapiente fugiat, provident quos amet, explicabo optio modi accusamus. Consectetur sequi suscipit magni adipisci voluptates expedita deleniti officia delectus velit at!
				</div>
			</div>
		</div>
		<div class="row text-center">
			
			<div class="janela janela-board">
				<div class="corpo">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sapiente fugiat, provident quos amet, explicabo optio modi accusamus. Consectetur sequi suscipit magni adipisci voluptates expedita deleniti officia delectus velit at!
				</div>
				<div class="rodape">
					Titulo Rodape
				</div>
			</div>

			<div class="janela janela-board">
				<div class="corpo">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sapiente fugiat, provident quos amet, explicabo optio modi accusamus. Consectetur sequi suscipit magni adipisci voluptates expedita deleniti officia delectus velit at!
				</div>
				<div class="rodape text-center">
					Titulo Rodape
				</div>
			</div>

			<div class="janela janela-board">
				<div class="corpo">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sapiente fugiat, provident quos amet, explicabo optio modi accusamus. Consectetur sequi suscipit magni adipisci voluptates expedita deleniti officia delectus velit at!
				</div>
				<div class="rodape text-right">
					Titulo Rodape
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="janela janela-board">
				<div class="corpo">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sapiente fugiat, provident quos amet, explicabo optio modi accusamus. Consectetur sequi suscipit magni adipisci voluptates expedita deleniti officia delectus velit at!
				</div>
			</div>
		</div>

	</div>
	<?php 
		$this
			->getAsset('lib/jquery-1.11.3.min.js');
	?>

</body>
</html>