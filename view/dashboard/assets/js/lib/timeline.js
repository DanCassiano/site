
(function( $ ){

	var TimeLine = function(){}

	var timeline = TimeLine.prototype;

		timeline.templateBloco = "<div class=\"cd-timeline-block\">"+
									"<div class=\"cd-timeline-img cd-picture\">"+
										"<img src=\"{{icone}}\" alt=\"{{titulo}}\">"+
									"</div>"+
									"<div class=\"cd-timeline-content\">"+
										"<h2>{{titulo}}</h2>"+
										"<p>{{conteudo}}</p>"+
										"<a href=\"{{id}}\" class=\"cd-read-more\">Ver</a>"+											
									"</div>"+
								"</div>";

		timeline.elemento = null;
		timeline.opcoes = [];

		timeline.__init = function( elemento, opcoes ) {

			timeline.elemento = elemento;
			timeline.opcoes = opcoes;

			// Metódo de chamada
    		// if ( methods[method] ) {
      // 			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
    		// } 
    		// else if ( typeof method === 'object' || ! method ) {
      // 			return methods.init.apply( this, arguments );
    		// } else {
      // 			$.error( 'Method ' +  method + ' does not exist on jQuery.tooltip' );
    		// } 


			this.render();
		}

		timeline.render = function(){	

			var time = this;
			this.dados(function(d){
				var html = "";
					$.each(d, function(i,v){
						html += time.replaceTemp( v );
					})
				time.elemento.html( html );
			})
		}

		timeline.dados = function( callback )
		{
			var  time = this;
			$.ajax({
  				url: time.opcoes.url,
  				method: time.opcoes.method,
  				dataType: "json"
			})
			.done(callback);
		}

		timeline.replaceTemp = function( valores )
		{
			var map = [ 'icone', 'titulo' , 'conteudo', 'id' ];
			var time = this;
			$.each( map, function(i,v){
				
				if( valores[ v ] ){
					regex = new RegExp( "{{"+v+"}}" , "g");
					time.templateBloco = time.templateBloco.replace( regex , valores[v] );
				}
			})

			return time.templateBloco;
		}

		$.fn.TimeLine  = function( opcoes )
		{
			var defaults = {
          		'url' : '',
          		"method":"POST",
          		"antesPost":null,
          		"durantePost":null,
          		"fimDoPost":null
        	};
 
        	var settings = $.extend( {}, defaults, opcoes );

        	var time = new TimeLine();
        		time.__init( $(this), settings );

        	return this;
		}

})(jQuery);