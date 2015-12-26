<a href="#menu" class="trigger-menu">
	<i class="fa fa-bars"></i>
</a>
<div class="card card-menu off-canvas" id="canvasMenu">
	<header class="titulo ">
		<a href="#menu">
			<i class="fa fa-bars"></i>
		</a>
		Menu
	</header>
	<div class="corpo">
		<ul class="menu">
			<?php 
				foreach ( $this->getMenu() as $indice => $menu ) {

					$icone = "";

					if( $menu['Id'] == 1 )
						$icone = "fa-fort-awesome";
					elseif( $menu['Id'] == 5 )
						$icone = "fa-male";
					?>
						<li>
							<i class="fa <?php echo $icone ?>"></i>
							<a href="<?php echo URL_BASE ?>dashboard/<?php echo $menu['link'] ?>">
								<?php echo $menu['permissao'] ?>
							</a>
						</li>
					<?php
				}
		 	?>
		</ul>
	</div>
</div>
