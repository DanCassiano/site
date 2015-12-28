
<div class="container app-main text-center">
	<img src="assets/imagens/1450764775_Rocket.svg" class="rocket login">
	<div class="janela janela-padrao login">
		<div class="corpo">
			<?php echo Url::getURL(3); ?>
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
