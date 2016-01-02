$(function(){
	$(".filtro").Select({
	});

	$(".filtroPost")
		.Select({});



 v = $("#formPagina").validate({
		submitHandler: function(form) {
			// user.add( $(form).serialize(), function(dados){ v.resetForm(); });
		},

		rules: {
			titulo: {
				required: true
			},
			link: {
				required: true,
			}
		}
	});

 	$("#btnSalvaPagina").click(function(){ $("#formPagina").submit() })
})