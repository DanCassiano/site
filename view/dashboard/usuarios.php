<div class="janela janela-dashboard">
	<header>
		Usuários
		
		<div class="controle right">
			<a href="#novo" data-trigger='#dialogoUser' ><i class="fa fa-plus"></i>Adicionar</a>
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

<div class="card card-padrao" id="dialogoUser" data-dialogo=true>
	<header>
		Usuário
		<div class="controle right">
			<a href="#fechar"><i class="fa fa-times-circle-o fa-3"></i></a>
		</div>
	</header>
	<div class="corpo">
		<form method="POST" id="formSalvaruser" class="row">
			<input type="hidden" id="inputUserId" name="userid">
			<div class="col col-7">
				<div class="row">
					<label for="inputUsuaro">Usuário</label>
					<input type="text" id="inputUsuaro" name="usuario" >
				
					<label for="inputEmail">E-mail</label>
					<input type="text" id="inputEmail" name="email">
				
					<label for="inputSenha">Senha</label>
					<input type="text" id="inputSenha" name="senha">
				
					<label for="inputConfirmaSenha">Confirmar senha</label>
					<input type="text" id="inputConfirmaSenha">
				</div>
			</div>
			<div class="col col-5">
				<div class="img-preview">
					<a href="#alterImagem">Alterar</a>
					<img src="http://localhost:3000/site/upload/user.png" alt="">
					<div class="progress-bar">
						<span class="barra"></span>
					</div>
				</div>
				<input type='file' name='file' value='Cadastrar foto' id="uploadfile" multiple >
			</div>
		</form>
	</div>
	<div class="rodape text-right">
		<button class="btn btn-padrao" id="salvarUsuario" >Salvar</button>
	</div>
</div>
<?php 
	$this
		->getAsset('lib/jquery.ui.widget.js')
		->getAsset('lib/jquery.iframe-transport.js')
		->getAsset('lib/jquery.fileupload.js')
		->getAsset('lib/user.js')
		->getAsset('user.js');
 ?>
