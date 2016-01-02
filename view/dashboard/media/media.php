<div class="janela board-edit">
	<header>
		Biblioteca de mídia
		<div class="controle right">
			<button class="btn btn-sucesso">Nova mídia</button>
		</div>
	</header>
	<div class="corpo">
		<div class="controles-midia">
			<div class="controle left">
				<a href="#grid" class="btn btn-link btn-medio" >
					<i class="fa fa-th-large"></i>
				</a>
				<a href="#lista" class="btn btn-link btn-medio">
					<i class="fa fa-list"></i>
				</a>
			</div>
			<div class="controle left">
				<select name="media" id="filtroTipoMedia">
					<option value="0">Todas as Medias</option>
					<option value="1">Imagens</option>
					<option value="2">Audio</option>
					<option value="3">Videos</option>
				</select>
			</div>
			<div class="controle right">
				<input type="search">
			</div>
		</div>
	</div>
</div>
<script>
$(function(){

	$("#filtroTipoMedia").Select();
})
</script>