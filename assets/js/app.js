;(function($){

	var App = function(){
		var a = this;
		$(function(){
			a.__init();
		})
	}

	var app = App.prototype;

		app.__init = function(){

			$("[data-drop='true']").DropDown();
			this.__bindMenu();

			// $("[data-dialogo=true]").Dialog({
			// 	trigger: $("[data-trigger]")
			// })
		}

		app.__bindMenu = function(){

			$("a[href='#menu']").click(function(e){
				e.preventDefault();
				$("#canvasMenu").toggleClass('off-canvas');
				$("#canvasMenu").toggleClass('on-canvas');
			})
		}

		app.isEmail = function(email){
			var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
			var check=/@[w-]+./;
			var checkend=/.[a-zA-Z]{2,3}$/;
			if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1))
				return false;
			
			return true;
		}

	$.fn.Select = function( opcoes ) {

		var padrao = {
			texto: "Filtro",
			open: function(r){},
			close:function(r){},
			change:function(r){},
			url: "",
			data:"",
			dados:[]
		}
		
		return $(this).each(function(){
				
				var $ele = $(this);
					$ele.hide();
				var op = $.extend({}, padrao, opcoes );
				var htmlLista = "";


				function renderLista( dados, ele ){

					var htmlLista = "";
					$.each( dados,function(i,v){
						htmlLista += "<li class=\"\"><a href=\"" + v.value + "\">" + v.texto + "</a></li>";
					});
					$(ele).html( htmlLista );
				}

					
					if( $ele.attr('id') == undefined)
						$ele.attr('id', "select"+Math.floor(Math.random() * 100) );

				var select = $("<div class='select'></div>");
					$ele.before(select);

					
					if( $ele.find("option:selected").text() ) {
						op.texto = $ele.find("option:selected").text();
						gutter = op.texto.length + 20;
					}
					
					select.html('<a href="#select">'+
									'<span>'+op.texto+'</span>&nbsp;'+
									'<i class="fa fa-caret-down"></i>'+
								'</a>'+
								'<div class="select-lista">'+
									'<ul></ul>'+
								'</div>');

				var lista = select.find(".select-lista");
				var width = lista.outerWidth() < 50 ? 50 : lista.outerWidth();
					select.width( width + gutter );

				if( op.url == "" ) {
				
					$.each( $ele.find("option"),function(i,v){
						op.dados.push({ "value": $(v).val(), "texto": $(v).text()});
					});
					renderLista(op.dados, lista.find("ul"));
				}
				else {
					$.post(op.url,op.data,null,'json')
					 .done(function(r){
						renderLista(r, lista.find("ul"));
						
					})
				}
				select.on("click",'a[href="#select"]',function(e){
					e.preventDefault();
					$(".select-lista").hide();
					lista.show();
				});

				lista.on('click', 'a',function(e){
						e.preventDefault();
						lista.find("li").removeClass('select');
						$(this).parent().addClass("select");
						valorSelecionado = $(this).attr('href');
					
						select
							.find(">a span")
							.text( $(this).text() )
							.attr('href', $(this).attr('href') );
						lista.hide();

						var width = lista.outerWidth() < 50 ? 50 : lista.outerWidth();
							select.width( width  );
				});
			});
		return $(this);
	}


	$.fn.DropDown = function( opcoes ){

		var ele = $(this);

			ele.on( "click"," > a",function(e){
				e.preventDefault();

				ele.find('.card-opcoes').toggle();
			})

	}

	$.fn.Dialog = function( opcoes ) {

		var ele = $(this);
			ele.addClass('dialogo');
			ele.hide();

		if( $('.mascara')[0] == undefined ) {
			$('body').append( $("<div></div>", { "class": "mascara" } ) );
		}
		var padrao = {
			trigger: $("[data-trigger]"),
			open: function(){}
		}
		var op = $.extend({}, padrao, opcoes );

		op.trigger.on("click", function(e){
			e.preventDefault();
			ele.show();
			$(".mascara").show();
			
			op.open( this, ele );
		});

		ele.find('a[href="#fechar"]').click(function(e){
			e.preventDefault();
			$(".mascara").hide();
			ele.hide();
		});
		
		ele.find('[dialogo-close]').click(function(e){
			e.preventDefault();
			ele.hide();
			$(".mascara").hide();
		});

		return ele;
	}

	window.App = new App();
})(jQuery);
