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

	$('#superScroll, #viewPermissoes').enscroll({
		verticalTrackClass: 'track4',
		verticalHandleClass: 'handle4',
		minScrollbarLength: 25,
		addPaddingToPane: 10
	});

	$("#dialogoUser").Dialog({
		trigger: $("[data-trigger='#dialogoUser']"),
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

	$("#dialogoPermissoes").Dialog({
		trigger: $("a[href='#permissoes']"),
		open: function(r) {
			

			user.getPermissoes( $(r).prop("id"),function(d){
				var html = "";
				$.each( d,function(i,v){
					if( v.id_pai == 0 ) {
						html += '<div class="card card-permissoes card-user-permissao">'+
									'<div class=" titulo">'+
										"<input type='checkbox' value='' "+ ( v.ativo == 1 ? "checked" : "" ) +" >"+
										v.permissao +
									'</div>'+
									'<div class="corpo">';
										
									$.each( d,function(x,j) {
											if( j.id_pai == v.id ) {

												html += "<input type='checkbox' value='"+j.id+"' "+ ( j.ativo == 1 ? "checked" : "" ) +"  >"+j.permissao+"</input>";
											}
									});


						html += 	'</div>'+
								'</div>';
					}
				});

				$("#viewPermissoes").html(html);

			});
		}
	})
	

})