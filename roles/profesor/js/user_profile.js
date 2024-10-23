$(document).ready(function(){
	/* Events and buttons */
	//Send inputs forms 
	$(document).on("submit","#formUpdate",userUpdate);

	/* -------------------------------------------------------------------------------- */
	/* Forms validate */
	// Validate form update profile
	$("#formUpdate").validate({
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

    /* ---------------------------------------------------------------------------------- */
	/* Functions AJAX */
	// This function is AJAX for Update user profile
	function userUpdate(event){
		event.preventDefault();
		$pwd = $("#pwd").val();
		$pwd_confirm = $("#pwd_confirm").val();
		if($pwd == $pwd_confirm){
			$.ajax({
				url:"/roles/profesor/php/updateUser.php",
				method:"POST",
				data: $(this).serialize(),
				success: function(response){
					$("#result").html(response);
				},
				   error: function(error){
					$("#result").html(`<div class='alert alert-warning'>
					<button type='button' class='close' data-dismiss='aaria-hidden='true'>×</button>
					<strong>Error: ${error}.</strong>
				</div>`);
				}
			});
		}else{
			$("#result").html(`<div class='alert alert-warning'>
				<button type='button' class='close' data-dismiss='aaria-hidden='true'>×</button>
				<strong>Error: Las contraseñas con coinciden</strong>
			</div>`);
		}
    }

	/* ----------------------------------------------------------------------------------- */
	/* Animations Functions */

    
});
