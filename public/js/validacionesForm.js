function validaResgistro()
{
    var formData = {
        'nombre'              : $('#txt_nombre').val(),
        'apellido'            : $('#txt_apellido').val(),
        'correo'              : $('#txt_correo').val(),
        'pass'                : $('#txt_pass').val(),
        'passConfirma'        : $('#txt_passConfirma').val(),
        'fechaNacimiento'     : $('#txt_fechaNacimiento').val()
    };

    var validado = true;

    //Validaciones

    //Nombre
    if($.trim(formData.nombre) == '') {
        $('#group_nombre').addClass('has-error');
        $('#group_nombre span').removeClass('hidden');
        validado = false;
    }
    else {
        $('#group_nombre').removeClass('has-error');
        $('#group_nombre span').addClass('hidden');
    }

    //Apellido
    if($.trim(formData.apellido) == '') {
        $('#group_apellido').addClass('has-error');
        $('#group_apellido span').removeClass('hidden');
        validado = false;
    }
    else {
        $('#group_apellido').removeClass('has-error');
        $('#group_apellido span').addClass('hidden');
    }

    //Correo
    if($.trim(formData.correo) == '') {
        $('#group_correo').addClass('has-error');
        $('#group_correo span').empty();
        $('#group_correo span').append('El correo está vacio');
        $('#group_correo span').removeClass('hidden');
        validado = false;
    }
    else {
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,}$/i;
        if (testEmail.test(formData.correo)) {
            $('#group_correo').removeClass('has-error');
            $('#group_correo span').addClass('hidden');
        }
        else {
            $('#group_correo').addClass('has-error');
            $('#group_correo span').empty();
            $('#group_correo span').append('Introduce un correo válido');
            $('#group_correo span').removeClass('hidden');
            validado = false;
        }
    }

    //Contraseña
    if($.trim(formData.pass) == '') {
        $('#group_pass').addClass('has-error');
        $('#group_pass span').removeClass('hidden');
        validado = false;
    }
    else {
        $('#group_pass').removeClass('has-error');
        $('#group_pass span').addClass('hidden');
    }

    //Confirmación de contraseña
    if($.trim(formData.passConfirma) == '') {
        $('#group_passConfirma').addClass('has-error');
        $('#group_passConfirma span').empty();      
        $('#group_passConfirma span').append('Contraseña vacia');
        $('#group_passConfirma span').removeClass('hidden');
        validado = false;
    }
    else {
        if(formData.pass != formData.passConfirma) {
            $('#group_passConfirma').addClass('has-error');
            $('#group_passConfirma span').empty();      
            $('#group_passConfirma span').append('Contraseña diferente');                                                                          
            $('#group_passConfirma span').removeClass('hidden');  
            validado = false;              
        }
        else {
            $('#group_passConfirma').removeClass('has-error');
            $('#group_passConfirma span').addClass('hidden');                    
        }
    }

    //Fecha de Nacimiento
    if($.trim(formData.fechaNacimiento) == '') {
        $('#group_fechaNacimiento').addClass('has-error');
        $('#group_fechaNacimiento span').removeClass('hidden');     
        validado = false;
    }
    else {
        $('#group_fechaNacimiento').removeClass('has-error');
        $('#group_fechaNacimiento span').addClass('hidden');     
        
    }

    return validado;
    
}

function validaComentario()
{
    var comentario = $('#txt_comentario').val();

    if($.trim(comentario) == '') {
        return false;
    }
}