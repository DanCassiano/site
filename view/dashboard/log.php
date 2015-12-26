<div class="janela janela-dashboard">
	<header>
		Log 
		<div class="controle right">
			<input type="text" placeholder="Buscar...">
		</div>
		<div class="controle right">
			<select name="" id="filtroLog2">
			</select>
		</div>
	</header>
	<div class="corpo">
		<table class="table" id="tabelaLog">
			<thead> 
				<tr>
					<th class="t-medium">Usuário</th>
					<th class="t-medium">tabela</th>
					<th class="t-medium">SQL</th>
					<th class="t-medium">Data</th>
					<th class="t-large">Mensagem</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>

<?php 

	$this->getAsset("log.js");
 ?>