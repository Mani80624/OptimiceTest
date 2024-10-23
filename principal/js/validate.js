$(document).ready(function(){
    
    /* Button for create new user */
    $(document).on("submit","#form-signUp",createUser);

    /* Validate the form for signup.php */
    $("#form-signUp").validate({
        rules:{
            name:{
                required:true
            },
            email:{
                required:true,
                email: true
            },
            pwd:{
                required:true,
                minlength: 8
            },
            pwd_confirm:{
                required: true,
                equalTo:"#pwd"
                
            }
        },
        messages:{
            name:{
                required: "Por favor ingresa un nombre"
            },
            email:{
                required:"Por favor ingrese un email",
                email:"Por favor ingrese un email válido"
            },
            pwd:{
                required:"Por favor ingrese una contraseña",
                minlength:"Ingrese una contraseña de almenos 8 caracteres"
            },
            pwd_confirm:{
                required:"Por favor ingresa la misma contraseña",
                equalTo:"Las contraseñas no coinciden"
            }
        }
    });
    
    /* Function for create User */
    function createUser(event){
        event.preventDefault();

        // Passwords validation
        const password = $("#pwd").val();
        const confirm_password = $("#pwd_confirm").val();

        if(password !== confirm_password){
            console.log("Las contraseñas no coinciden");
        }


        $.ajax({
            url:'/principal/php/user_register.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(message){
                $("#result").html(message);
            },
            error: function(error){
                $("#result").html(`<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
			<strong>¡Oh no!</strong> Ha ocurrido un error al registrar, vuelve a intentarlo .
			</div>`);
            }

        });
    }

    /* Validate the form verification form */
    $("#verification-form").validate({
        rules:{
            email:{
                required:true,
                email:true
            },
            pwd:{
                required:true,
                minlength: 8
            }
        },
        messages:{
            email:{
                required: "Se requiere de un correo electrónico",
                email: "El formato no es de un correo electrónico verifica por favor"
            },
            pwd:{
                required:"Se requiere de una contraseña",
                minlength: "Ingresa al menos 8 carácteres"
            }
        }
    });

});
