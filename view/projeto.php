<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->titulo ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php 
		$this
			->getAsset('app.css')
			->getAsset('timeline.css');
		?>
</head>
<body>
	<div class="entire-menu"> 
  		<input type="checkbox" id="change-hamburguer" /> 
  		<a class="hamburguer" href="#" title="Menu">
    		<span></span>
    		<label for="change-hamburguer"></label>
  		</a> 
  		<div class="menu">
    		<a href="#">Item</a>
    		<a href="#">Item</a>
  		</div> 
	</div>

	<div class="container app-main">

		<section id="cd-timeline" class="cd-container">
			 
		</section>
	</div>


	<?php 
		$this
			->getAsset('lib/jquery-1.11.3.min.js')
			->getAsset('lib/timeline.js') 
			->getAsset('app.js') 
	?>

</body>
</html>