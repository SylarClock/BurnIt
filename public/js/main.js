$("#srch_bar").focus(function(){
	$(".srch-fade").fadeIn('slow');
	$(".srch-drop").fadeIn('slow');
});
$("#srch_bar").focusout(function(){
	$(".srch-fade").fadeOut('slow');
	$(".srch-drop").fadeOut('slow');
});
$("#srch_bar").keyup(function(){
	var texto = $(this).val();

	if(texto !="" && texto.length > 2){
		var search = {
			search:texto
		}
		var token = $("#token_sch").val();

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': token
		    }
		});

		$.ajax({
			url: "/search",
			method: "POST",
			dataType: "json",
			data: search,
			success: function(data){
				$(".srch-drop ul").html(data);
			},
			error: function(e){
			    console.log(e.message);
			}
		});
	}
	
});