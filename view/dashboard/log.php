<div class="janela janela-dashboard">
	<header>
		Log 
		<div class="controle right">
			<input type="text" placeholder="Buscar...">
		</div>
		<div class="controle right">
			<select name="" id="filtroLog2">
				<option value="1">Opt 10</option>
				<option value="2">Opt 20</option>
				<option value="3">Opt 30</option>
				<option value="4">Opt 40</option>
				<option value="5">Opt 50</option>
			</select>
		</div>
	</header>
	<div class="corpo">
		<table class="table" id="tabelaLog">
			<thead> 
				<tr>
					<th class="t-medium">Usuário</th>
					<th class="">Ação</th>
					<th class="t-large">tabela</th>
					<th class="t-medium">SQL</th>
					<th class="t-medium">Data</th>
					<th>Mensagem</th>
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