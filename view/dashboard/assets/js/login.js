$(function(){


	var formLogin = $("#formLogin"),
		inputLogin = $("#inputLogin"),
		inputSenha = $("#inputSenha");

		formLogin
			.on("submit",function(e){

				var msg = "";

					if( inputLogin.val() == "" )
						msg += "Entre com seu Login<br/>";

					if( inputSenha.val() == "" )
						msg += "Entre com sua Senha!";

					if( msg != "" ){
						e.preventDefault();
						$(".rodape").html( msg )
					}
					
			});

})