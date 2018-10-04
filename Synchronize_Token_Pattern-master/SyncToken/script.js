$(function (){


	var $csrf_token = $('#csrf_token');
	// var session_id = document.cookie.split(";")[0].split("=")[1];

	$.ajax({
		type: 'POST',
		url: 'endpoint.php',
		dataType: 'json',
		data: {},
		success: function(result){
			console.log(result.id);
			$csrf_token.val(result.id);
		}
	});
});