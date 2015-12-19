<?php
	$user = new User();
	$d = $user->getUserLogin();
?>
<div class="card card-user " data-drop="true">
	<a href="#usuario" title="<?php echo $d['usuario'] ?>">
		<img src="<?php echo URL_BASE ?>upload/<?php echo $d['imagem'] ?>" width=40 alt="<?php echo $d['usuario'] ?>">
	</a>
	<div class="card card-opcoes">
		<div class="corpo">
			<a href="#<?php echo $d['usuario'] ?>"><?php echo $d['usuario'] ?></a>
			<hr>
			<a href="user/logoff/<?php echo $this->token ?>">Sair</a>
		</div>
	</div>
</div>
