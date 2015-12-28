<div class="janela board-edit">
	<header>
		Editar
	</header>
	<div class="corpo">

		<div class="col col-8">
			<form action="">
				<div class="row">
					<label for="inputPagina">Titulo</label>
					<input type="text" placeholder="Minha Pagina Nova" >
				</div>
				<div class="row">
					<label for="inputPagina">Link</label>
					<input type="url"  >
				</div>
				<div class="row">
					<label for="textConteudo">Conteudo</label>
					<br/>
					<textarea>Easy (and free!) You should check out our premium features.</textarea>
				</div>
			</form>
		</div>
		<div class="col col-4">
			<div class="card card-padrao card-block">
				<header>Propriedades</header>
				<div class="corpo">
					<div class="row">
						<label for="selectPublicado">
							<i class="fa fa-key"></i>
							Publicado
						</label>
						<div class="text-right">
							<select name="publicado" id="selectPublicado" class="filtro">
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</div>
					</div>
					<div class="row">
						<label for="selectPublicado">
							<i class="fa fa-eye"></i>
							Visivel
						</label>
						<div class="text-right">
							<select name="publicado" id="selectPublicado" class="filtro" >
								<option value="1" selected="selected" >Sim</option>
								<option value="0">Não</option>
							</select>
						</div>
					</div>
					<div class="row">
						<p>
							<i class="fa fa-calendar-check-o"></i>
							Publicada em:
							<div class="text-right">
								 12-12-2016
							</div>
						</p>
					</div>

					<div class="row">
						<label for="selectPai"><i class="fa fa-child"></i> Pertence a:</label>
						<div class="text-right">
							<select name="" id="">
								<option value="0">--</option>
							</select>
						</div>
					</div>

					<div class="row">
						<label for="selectModelo"><i class="fa fa-code"></i> Modelo</label>
						<div class="text-right">
							<select name="" id="" class="filtro" >
								<option value="" selected >Modelo 1</option>
							</select>
						</div>
					</div>
				</div>
				<div class="rodape text-right">
					<button class="btn btn-padrao"><i class="fa fa-trash-o"></i> Excluir</button>
				</div>
			</div>
		</div>
	</div>
	<div class="rodape text-right">
		<button class="btn btn-padrao"> Salvar</button>
	</div>
</div>
<?php 
	$this
		->getAsset("pagina.js")
		->getAsset("lib/tinymce/tinymce.min.js")
		->getAsset("lib/tinymce/langs/pt_BR.js");  
?>
<script>
	tinymce.init({ 
			selector:'textarea',
			min_height: 220,
			menubar: false,
			skin: "lightgray",
			 plugins: [
						"advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
						"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
						"table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
  					],
  					toolbar1: "undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | cut copy paste |  outdent indent blockquote | ltr rtl",
					toolbar2: " bullist numlist |  link unlink anchor image media code | insertdatetime preview | forecolor backcolor | table |  hr removeformat ",
					toolbar3: "subscript superscript | charmap emoticons | print fullscreen | visualchars visualblocks nonbreaking template pagebreak restoredraft",
					toolbar_items_size: 'small',
					style_formats: [{
							title: 'Bold text',
							inline: 'b'
					}, 
					{
						title: 'Red text',
						inline: 'span',
						styles: {
						color: '#ff0000'
						}
					}, {
						title: 'Red header',
						block: 'h1',
						styles: {
						color: '#ff0000'
					}
					}, {
						title: 'Example 1',
						inline: 'span',
						classes: 'example1'
					}, {
						title: 'Example 2',
						inline: 'span',
						classes: 'example2'
					}, {
						title: 'Table styles'
					}, {
						title: 'Table row 1',
						selector: 'tr',
						classes: 'tablerow1'
					}],
					templates: [{
						title: 'Test template 1',
						content: 'Test 1'
					}, {
						title: 'Test template 2',
						content: 'Test 2'
					}],
		});
</script>