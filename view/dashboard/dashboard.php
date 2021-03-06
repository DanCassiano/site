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

			->getAsset('lib/jquery-1.11.3.min.js')
			->getAsset('lib/enscroll-0.6.1.min.js')
			->getAsset('lib/jquery.validate.min.js')
			->getAsset('lib/localization/messages_pt_BR.min.js');
		?>
	<base href="<?php echo URL_BASE ?>">
</head>
<body>
	<div class="container app-main">
		<?php 
			if( $this->servico != "login") {
				$this->getBoard("menu");
				$this->getBoard("header");
			}
			
			if( empty($this->servico) || $this->servico == "index" )
				$this->getBoard( $this->servico );
			else
				$this->getModulo( $this->servico );
		?>
	</div>
	<?php 
		$this->getAsset('app.js');
	?>

</body>
</html>