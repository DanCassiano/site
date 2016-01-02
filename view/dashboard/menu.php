<a href="#menu" class="trigger-menu">
	<i class="fa fa-cube"></i>
</a>
<div class="card card-menu menu-dash seta-baixo" id="canvasMenu" style="display:none">
	<header class="titulo ">
		<i class="fa fa-search bind-seach"  ></i>
		<div class="controle left">
			<input type="search" id="inputBusca" style="display:none">
		</div>
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
					elseif( $menu['Id'] == 9 )
						$icone = "fa-user-secret";
					elseif( $menu['Id'] == 11 )
						$icone = "fa-film";

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
