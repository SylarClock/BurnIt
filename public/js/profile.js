

$("#grdMdl").click(function(){

	debugger;

	var nombre = $("#nombre").val();
	var apellido = $("#Apellido").val();
	var email = $("#email").val();
	var pass = $("#pass").val();
	var id = $("#id").val();
	var birth = $("#birth").val();

	var token = $("#token").val();
	var url = $("#url").val();

	var userEdit = {
		id:id,
		name: nombre,
		last_name: apellido,
		email: email,
		password: pass,
		birth_day: birth,
	}

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });

	$.ajax({
		url: url,
		method: "POST",
		dataType: "json",
		data: userEdit,
		success: function(data){
			debugger;
		    location.reload();
		},
		error: function(e){
			debugger;
		    console.log(e.message);
		}
	});


});