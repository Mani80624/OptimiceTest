$(document).ready(function(){
    /* Events and buttons */
    // Send information form courses_form id to createCourse.php
	$(document).on("submit","#courses_form",courseCreate);
    // Send information form edit-course 
    $(document).on("submit","#edit-form", courseUpdate);
    // Animation: Show register-course div with button-register id
    $(document).on("click","#button-register",showDivRegister);
    // Animation: Hide register-course div with cancel-form id
    $(document).on("click","#cancel-form", hideDivRegister);
    // Animation: Hide Edit-register
    $(document).on("click","#cancel-update", hideDivEdit)


    /* -------------------------------------------------------------------------------------- */
    /* Functions with AJAX */
	// To get table model function
    function tableGet(){
	$.ajax({
	    url: "/roles/profesor/php/tableModel.php",
	    method: "POST",
	    success: function(response){
		$("#table_async").html(response);
        getIdCourse();
	    },
	    error: function(error){
		$("#table_async").html("Ha ocurrido un error");
	    }
	});
    }
	// Call the table model
    tableGet();
    // Ajax send
	function courseCreate(event){
        event.preventDefault();
        $.ajax({
            url:"/roles/profesor/php/createCourse.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(response){
                //console.log(response);
                $("#result-register-course").html(response);
				$("input").val("");
                hideDivRegister();
				tableGet();
            },
            error: function(error){
                $("#result").html(`<div class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='aaria-hidden='true'>×</button>
				<strong>Error: ${error}</strong>
			</div>`);
            }
        });
    }


    function deleteCourse(id){
		let id_course = id;
		$.ajax({
			url:'/roles/profesor/php/delete_course.php',
			method:'POST',
			data:{id_course:id_course},
			success: function(response){
                $("#result_course").html(response);
                console.log(response);
				tableGet();
			},
			error: function(error){
				console.log("fallo con exito");
			}
		});
	}

    function courseUpdate(event){
        event.preventDefault();
        let id_course = sessionStorage.getItem('id_course');
        let name_course = $("#name_course").val();
        let hours = $("#hours").val();
        let description = $("#description").val();
        $.ajax({
            url:"/roles/profesor/php/updateCourse.php",
            method:"POST",
            data:{name_course:name_course,hours:hours,description:description, id_course:id_course},
            success: function(response){
                tableGet();
                $("input").val("");
                hideDivEdit();
                $("#result_course").html(response);
                //console.log(response);
            },
            error: function(error){
                console.log("Ha ocurrido un error");
            }
        });
    }
    /* -------------------------------------------------------------------------- */
    /* Forms Validate */
    // Validation of courses_form
	$("#courses_form").validate({
        rules:{
            name_course:{
                required:true
            },
            hours:{
                required:true
            },
            description:{
                required:true,
                maxlength:250
            }
        },
        messages:{
            name_course:{
                required:"Ingresa un nombre del curso"
            },
            hours:{
                required:"Ingresa el número de horas"
            },
            description:{
                required:"Ingresa una descripción",
                maxlength:"Ingresa una descripción en un máximo de 250 carácteres"
            }
        }
    });

    $("#edit-form").validate({
        rules:{
            name_course:{
                required:true
            },
            hours:{
                required:true
            },
            description:{
                required:true,
                maxlength: 250
            }
        },
        messages:{
            name_course:{
                required: "Es necesario escribir el nombre del curso"
            },
            hours:{
                required: "Es necesario indicar el número de horas"
            },
            description:{
                required: "Es necesario indicar la descripción del curso",
                maxlength: "Es número máximo de caracteres para la descripción es de 250"
            }
        }
    });
    

    /* -------------------------------------------------------------------------- */
    /* Animation Functions */
    // Show register-course div from course.php
    function showDivRegister(){
        $("#register-course").show(500);
    }
    // Hide register-course div from course.php
    function hideDivRegister(){
        $("#register-course").hide(500);
    }
    // Show hide edit id
    function showDivEdit(){
        $("#hide-edit").show(500);
    }
    function hideDivEdit(){
        $("#hide-edit").hide(500);
    }

    /* -------------------------------------------------------------------------- */    
	/* Functions */
    function getIdCourse(){
        let edit = document.querySelectorAll('.edit');
		for(let i=0;i<edit.length;i++){
			//Add event click in each selector a of edit class
			$(document).on("click",`#${edit[i].id}`,function(){
				let my_id = edit[i].id;
				// To apply regex for return a string
				let digit = my_id.match(/\d+/g).join('');
				console.log(digit);
                sessionStorage.setItem('id_course', digit);
                showDivEdit();
			});
		}


        let trash = document.querySelectorAll('.trash');
		for(let j=0;j<trash.length;j++){
			//Add event click in each selector a of trash class
			$(document).on("click",`#${trash[j].id}`,function(){
				let my_id = trash[j].id;
				// To apply regex for return a string
				let digit = my_id.match(/\d+/g).join('');
				// We call to deleteCourse() for deleteCourse
				//console.log(digit);
				deleteCourse(digit);
			})
		}
    }
})
