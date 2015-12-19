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
		<?php 
			$this->getBoard("menu");
			$this->getBoard("header");
			$this->getBoard( $this->servico );
		?>
	</div>
	<?php 
		$this
			->getAsset('lib/jquery-1.11.3.min.js')
			->getAsset('app.js');
	?>

</body>
</html>