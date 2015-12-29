
$(function(){
	$("#filtroLog, #filtroLog2").Select({
		open:function(r){

		},
		url: $("base").attr("href")+"log/get/tabelas" 
	});

	log.get("",function(dados){
		
		var html = "";
		$.each(dados,function(i,v){
			html += "<tr>"+
						"<td>"+v.usuario+"</td>"+
						"<td>"+v.tabela+"</td>"+
						"<td>"+v.query+"</td>"+
						"<td>"+v.data+"</td>"+
						"<td>"+v.mensagem+"</td>"+
					"</tr>";
		});

		$("#tabelaLog tbody").html( html );
	})
});

(function($){

	var Log = function(){}

	var log = Log.prototype;
		log.url = $("base").attr("href")+ "log/";

		log.get = function( termo, callback ) {
			privateUser( "get/user", {}, callback, 'json' );
		}

		function privateUser( op, dados, callback, type) {
			$.post(log.url+op, dados,callback, type );
		}

	window.log = new Log();
})(jQuery)