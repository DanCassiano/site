<div class="janela janela-dashboard">
	<header>
		Paginas
		<div class="controle right">
			<a href="#novo" data-trigger='#dialogoUser' ><i class="fa fa-plus"></i>Nova Pagina</a>
		</div>
		<div class="controle right">
			<input type="text" placeholder="Buscar...">
		</div>
	</header>
	<div class="corpo">
		<table class="table">
			<thead>
				<th class="t-medium">
					<input type="checkbox">
				</th>
				<th class="t-large text-left" >Titulo</th>
				<th class="t-medium">Autor</th>
				<th class="t-medium" >Status</th>	 		
			</thead>
			<tbody>
				<?php 
				foreach ($paginas->getPaginas() as $ind => $pagina ) { ?>
					<tr>
						<td><input type="checkbox"></td>
						<td>
							<?php echo $pagina['pagina'] ?>
							<p class="controles">
	 							<a href="<?php echo URL_BASE."dashboard/paginas/editar/".$pagina['id'] ?>">
	 								<i class="fa fa-pencil-square-o"></i>
	 								Editar
	 							</a>
	 							<a href="#ver">
	 								<i class="fa fa-eye"></i>
	 								Ver
	 							</a>
	 							<a href="#descartar">
	 								<i class="fa fa-trash-o"></i>
	 								Descartar
	 							</a>
	 						</p>
	 					</td>
	 					<td><?php echo $pagina['autor'] ?></td>
	 					<td><?php echo $pagina['publicado'] == 1 ? "Publicado" : "Não publicado" ?></td>
					</tr> <?php
				} ?>
			</tbody>
	 	</table>
	</div>
</div>

