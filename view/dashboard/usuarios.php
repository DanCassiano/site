<div class="janela janela-dashboard">
	<header>
		Usuários
		
		<div class="controle right">
			<a href="#novo"><i class="fa fa-plus"></i>Adicionar</a>
		</div>
		<div class="controle right">
			<input type="text" placeholder="Buscar...">
		</div>
	</header>
	<div class="corpo">
		<table class="table">
			<thead>
				<tr>
					<th class="t-medium"></th>
					<th class="t-medium"></th>
					<th class="t-large">Usuário</th>
					<th class="t-medium">E-mail</th>
					<th class="t-medium">Data Cad</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$user = new User();
					$usuarios = $user->listUser();

					foreach ($usuarios as $ind => $user ) {
						?>
							<tr>
								<td>
									<input type="checkbox" value="<?php echo $user['usuario'] ?>">
								</td>
								<td>
									<img src="<?php echo URL_BASE ?>upload/<?php echo $user['imagem'] ?>" width=40>
								</td>
								<td><?php echo $user['usuario'] ?></td>
								<td><?php echo $user['email'] ?></td>
								<td><?php echo $user['data_cadastro'] ?></td>
								<td><a href="#edit"><i class="fa fa-pencil-square-o"></i>Editar</a></td>
							</tr>
						<?php
					}
				 ?>
			</tbody>
		</table>
	</div>
</div>