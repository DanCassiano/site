(function($){

	var User = function(){}

	var user = User.prototype;
		user.url = "http://localhost/site/user/";
		user.add = function( dados, callback ) {
			privateUser("add/novo",dados,callback);
		}
		
	function privateUser( op, dados, callback ) {
		$.post(user.url+op, dados,callback );
	}

	window.user = new User();
})(jQuery)