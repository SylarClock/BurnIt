

$("#grdMdl").click(function(){

	debugger;

	var nombre = $("#nombre").val();
	var apellido = $("#nombre").val();
	var email = $("#nombre").val();
	var pass = "weeed";

	var token = $("#token").val();
	var url = $("#url").val();

	var userEdit = {
		name: nombre,
		last_name: apellido,
		email: email,
		password: pass,
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
		    alert('Items added');
		},
		error: function(e){
			debugger;
		    console.log(e.message);
		}
	});


});