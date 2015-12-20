	var url = "http://localhost/site/upload/imagem/user";
$(function(){

	$("a[href='#alterImagem']").click(function(e){
		e.preventDefault();
		$("#uploadfile").click();
	})

	$('#uploadfile').fileupload({
		url: url,
		dataType: 'json',
		done: function (e, data) {
	
		},
		progressall: function (e, data) {

			var progress = parseInt(data.loaded / data.total * 100, 10);
			barra.css({
				width: progress + "%" 
			})
		}
	});


	$("#formSalvaruser").submit(function(e){
		e.preventDefault();
		user.add( $(this).serialize(), function(dados){	});
	})

	$("#salvarUsuario").click(function(){
		$("#formSalvaruser").submit();
	})


})