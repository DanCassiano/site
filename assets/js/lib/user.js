(function($){

	var User = function(){}

	var user = User.prototype;
		user.url = "http://localhost/site/user/";
		user.add = function( dados, callback ) {
			privateUser("add/novo",dados,callback);
		}

		user.getPermissoes = function( idUser, callback ) {
			privateUser("get/permissoes",{ id: idUser },callback, 'json');
		}
		
	function privateUser( op, dados, callback, type) {
		$.post(user.url+op, dados,callback, type );
	}

	window.user = new User();
})(jQuery)