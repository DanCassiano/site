// jQuery(document).ready(function($){
// 	var timelineBlocks = $('.cd-timeline-block'),
// 		offset = 0.8;

// 	// //hide timeline blocks which are outside the viewport
// 	// hideBlocks(timelineBlocks, offset);

// 	// //on scolling, show/animate timeline blocks when enter the viewport
// 	// $(window).on('scroll', function(){
// 	// 	(!window.requestAnimationFrame) 
// 	// 		? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
// 	// 		: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
// 	// });

// 	// function hideBlocks(blocks, offset) {
// 	// 	blocks.each(function(){
// 	// 		( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
// 	// 	});
// 	// }

// 	// function showBlocks(blocks, offset) {
// 	// 	blocks.each(function(){
// 	// 		( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
// 	// 	});
// 	// }

// 	$("#cd-timeline").TimeLine({
// 		url: "projeto/busca/timeline"
// 	});
// });

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

	window.App = new App();

})(jQuery);
