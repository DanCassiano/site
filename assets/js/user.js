var url = "http://localhost/site/upload/imagem/user";

	var inputUserId		   = $("#inputUserId"),
		inputUsuaro 	   = $("#inputUsuaro"),
		inputEmail 		   = $("#inputEmail"),
		inputSenha 		   = $("#inputSenha"),
		inputConfirmaSenha = $("#inputConfirmaSenha");

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
			$(".barra").css({
				width: progress + "%" 
			})
		}
	});

	$("#salvarUsuario").click(function(){
		$("#formSalvaruser").submit();
	});

	 v = $("#formSalvaruser").validate({
				submitHandler: function(form) {
					user.add( $(form).serialize(), function(dados){ v.resetForm(); });
				},
				rules: {
					email: {
						required: true,
						email: true
					}
				}
			});

	$('#superScroll').enscroll({
		verticalTrackClass: 'track4',
		verticalHandleClass: 'handle4',
		minScrollbarLength: 25,
		addPaddingToPane: 10
	});

	$("#dialogoUser").Dialog({
		trigger: $("[data-trigger]"),
		open: function(r) {
			v.resetForm();
			if( $(r).attr("id") )
			{
				var dado = usuarios[ $(r).attr("id") ];
					
					inputUserId.val( dado.Id );
					inputUsuaro.val(dado.usuario);
					inputEmail.val(dado.email);
					inputSenha.val( 123 );
			}
		}
	})
	

})