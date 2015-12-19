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

			$("[data-dialogo=true]").Dialog({
				trigger: $("[data-trigger]")
			})
		}

		app.__bindMenu = function(){

			$("a[href='#menu']").click(function(e){
				e.preventDefault();
				$("#canvasMenu").toggleClass('off-canvas');
				$("#canvasMenu").toggleClass('on-canvas');
			})
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
			trigger: $("[data-trigger]")
		}
		var op = $.extend({}, padrao, opcoes );

		op.trigger.on("click", function(e){
			e.preventDefault();
			ele.show();
			$(".mascara").show();
		});

		ele.find('a[href="#fechar"]').click(function(e){
			e.preventDefault();
			$(".mascara").hide();
			ele.hide();
		})
	}

	window.App = new App();

})(jQuery);
