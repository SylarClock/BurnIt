

var options = { 
    complete: function(response) 
    {
    	if($.isEmptyObject(response.responseJSON.error)){
    		
    		$("input[name='title']").val('');
    		alert('Image Upload Successfully.');
    	}else{
    		alert(response.responseJSON.error);
    	}
    }
  };

 $("#btn_prof_img").click(function(){
 	var file = $("#perfil").val();
 	if(file ==""){
 		alert('Selciona una foto primero');
 		return false;
 	}
 	else
 	 	$(this).parent().parent().ajaxForm(options);

 });

 $("#btn_port_img").click(function(){
 	var file = $("#portada_fl").val();
 	if(file ==""){
 		alert('Selciona una foto primero');
 		return false;
 	}
 	else
 	 	$(this).parent().parent().ajaxForm(options);

 });

$("#grdMdl").click(function(){

	var nombre = $("#nombre").val();
	var apellido = $("#Apellido").val();
	var email = $("#email").val();
	var pass = $("#pass").val();
	var id = $("#id").val();
	var birth = $("#birth").val();

	var token = $("#token").val();
	var url = $("#url").val();

	var perfil = $("#perfil")[0].files[0];

	var userEdit = {
		id:id,
		name: nombre,
		last_name: apellido,
		email: email,
		password: pass,
		birth_day: birth,
		photo: perfil
	}

	if(nombre == "" || apellido == "" || email == "" ||birth == "" )
	{
		alert('Llena todos los campos');

	}else{

			form = new FormData();
			form.append('id', id);
			form.append('name', nombre);
			form.append('image', perfil);


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
	}


	

});