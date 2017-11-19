 function auth() {        
    $.ajax({
        type: "POST",
        data:{
            'login':$('.biolab-admin-auth-form #login').val(),
            'pass': $('.biolab-admin-auth-form #pass').val()
        },
        url: "ajax/auth.php",
        success: function(data){
            if (data){
                alert(data);
            }
            else location.href = 'analytique.php';
        }
    });
}

//----------------------------------------------------------------------------------------
function delNew (id) {
    
    if (confirm("Delete item?")) {

            $.ajax({
                type: "POST",
                data:{
                    'new_id':id
                },
                url: "ajax/del_new.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
    } 
}	
function addNew () {
  
            $.ajax({
                type: "POST",
                data:{
                    'new_title': $(".biolab-admin-add_new #new_header").val(),
                    'new_text': $(".biolab-admin-add_new textarea").val(),
                    'new_image': document.getElementById("file").files[0].name
                },
                url: "ajax/add_new.php",
                async: true,
                success: function(data){
                    if (data) {
                        //location.reload();
                        $("#analitique_file").submit();
                    } 
                }
            });

}

function delNew2 (id) {
    
    if (confirm("Delete item?")) {

            $.ajax({
                type: "POST",
                data:{
                    'new2_id':id
                },
                url: "ajax/del_new2.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
    } 
}	
function addNew2 () {
  
            $.ajax({
                type: "POST",
                data:{
                    'new2_title': $(".biolab-admin-add_new input").val(),
                    'new2_text': $(".biolab-admin-add_new textarea").val()
                },
                url: "ajax/add_new2.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });

}

//----------------------------------------------------------------------------------------
	
function delClinic (id) {
    
    if (confirm("Delete item?")) {

            $.ajax({
                type: "POST",
                data:{
                    'clinic_id':id
                },
                url: "ajax/del_clinic.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
    } 
}	
function addClinic () {

            $.ajax({
                type: "POST",
                data:{
                    'region_id': $("#region_id").val(),
                    'clinic_name': $("#clinic_name").val(),
                    'clinic_person': $("#clinic_person").val(),
                    'clinic_address': $("#clinic_address").val(),
                    'clinic_phone': $("#clinic_phone").val(),
                    'clinic_fax': $("#clinic_fax").val()
                },
                url: "ajax/add_clinic.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
}
//----------------------------------------------------------------------------------------
	
function delRegion (id) {
    
    if (confirm("Delete item?")) {

            $.ajax({
                type: "POST",
                data:{
                    'region_id':id
                },
                url: "ajax/del_region.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
    } 
}	
function addRegion() {

            $.ajax({
                type: "POST",
                data:{
                    'region_name': $("#region_name").val()
                },
                url: "ajax/add_region.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });

}
//----------------------------------------------------------------------------------------
	
function delUser (id) {
    
    if (confirm("Delete item?")) {

            $.ajax({
                type: "POST",
                data:{
                    'user_id':id
                },
                url: "ajax/del_user.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
    } 
}

function addUser() {

            $.ajax({
                type: "POST",
                data:{
                    'user_login': $("#user_login").val(),
                    'user_pass': $("#user_pass").val(),
                    'user_email': $("#user_email").val()
                },
                url: "ajax/add_user.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });

}

//------------------------------------------------------------------------------
 function updateRegion(id) {

    $("#region_p-" + id.toString()).hide();
    $("#region_input-" + id.toString()).show();
    $("#region_update-" + id.toString()).hide();
    $("#region_save-" + id.toString()).show();
    
}  
 function saveRegion(id) {

            $.ajax({
                type: "POST",
                data:{
                    'region_id': id,
                    'region_name': $("#region_input-" + id.toString()).val()
                },
                url: "ajax/update_region.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
    
} 
//------------------------------------------------------------------------------
 function updateQualite(id) {

    $("#qualite_header-" + id.toString()).hide();
    $("#qualite_header_input-" + id.toString()).show();
    $("#qualite_text-" + id.toString()).hide();
    $("#qualite_text_input-" + id.toString()).show();
    
    $("#qualite_update-" + id.toString()).hide();
    $("#qualite_save-" + id.toString()).show();
    
}  
 function saveQualite(id) {

            $.ajax({
                type: "POST",
                data:{
                    'new_id': id,
                    'new_header': $("#qualite_header_input-" + id.toString()).val(),
                    'new_text': $("#qualite_text_input-" + id.toString()).val()
                },
                url: "ajax/update_new2.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
}
//------------------------------------------------------------------------------
 function updateAnalitique(id) {

    $("#analitique_header-" + id.toString()).hide();
    $("#analitique_header_input-" + id.toString()).show();
    $("#analitique_text-" + id.toString()).hide();
    $("#analitique_text_input-" + id.toString()).show();
    
    $("#analitique_update-" + id.toString()).hide();
    $("#analitique_save-" + id.toString()).show();
    
}  
 function saveAnalitique(id) {

            $.ajax({
                type: "POST",
                data:{
                    'new_id': id,
                    'new_header': $("#analitique_header_input-" + id.toString()).val(),
                    'new_text': $("#analitique_text_input-" + id.toString()).val()
                },
                url: "ajax/update_new.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
} 
//------------------------------------------------------------------------------
 function updateClinic(id) {

    $("#clinic_name-" + id.toString()).hide();
    $("#clinic_name_input-" + id.toString()).show();
    $("#clinic_person-" + id.toString()).hide();
    $("#clinic_person_input-" + id.toString()).show();
    $("#clinic_address-" + id.toString()).hide();
    $("#clinic_address_input-" + id.toString()).show();
    $("#clinic_phone-" + id.toString()).hide();
    $("#clinic_phone_input-" + id.toString()).show();
    $("#clinic_fax-" + id.toString()).hide();
    $("#clinic_fax_input-" + id.toString()).show();
    
    $("#clinic_update-" + id.toString()).hide();
    $("#clinic_save-" + id.toString()).show();
    
}  
 function saveClinic(id) {

            $.ajax({
                type: "POST",
                data:{
                    'clinic_id': id,
                    'clinic_name': $("#clinic_name_input-" + id.toString()).val(),
                    'clinic_person': $("#clinic_person_input-" + id.toString()).val(),
                    'clinic_address': $("#clinic_address_input-" + id.toString()).val(),
                    'clinic_phone': $("#clinic_phone_input-" + id.toString()).val(),
                    'clinic_fax': $("#clinic_fax_input-" + id.toString()).val()
                },
                url: "ajax/update_clinic.php",
                async: true,
                success: function(data){
                    if (data) {
                        location.reload();
                    } 
                }
            });
} 
//----------------------------------------------------------------------------------
 function ChangePass() {
    if ($("#admin_pass1").val()==$("#admin_pass2").val()) {
             $.ajax({
                type: "POST",
                data:{
                    'current_pass': $("#admin_pass").val(),
                    'pass': $("#admin_pass2").val()
                },
                url: "ajax/change_pass.php",
                async: true,
                success: function(data){
                    if (data=="0") {
                        alert("Incorrect current pass");
                        location.reload();
                    }
                    else{
                        alert("Password changed");
                        location.reload();                    
                    }

                }
            });       
    }
    else
        alert("Incorrect input");
}
//------------------------------------------------------------------------------------
function loadPdf() {
    $.ajax({
        type: "POST",
        data:{
           'task': 'load_pdf'
        },
        url: 'ajax/add_pdf.php',
        success: function( data ) {						
			$( "#pdf-res" ).html(data);					
		}
    });
} 

function addPdf (event) {
	if ($('#add-pdf-form')[0].checkValidity()==true) {
		event.preventDefault();
		var pdf_path = $('#pdf_path').val();
		var pdf_title = $('#pdf_title').val();
		var pdf_file = $('#pdf_file');
		var form_data = new FormData();
		$.each(pdf_file.prop('files'), function(i, file) {
			form_data.append('file-'+i, file);
		});
		form_data.append('task', 'add_pdf');
		form_data.append('pdf_path', pdf_path);
		form_data.append('pdf_title', pdf_title);
		$.ajax({
				type: 'POST',
				url: 'ajax/add_pdf.php',
				contentType		: false,
				processData		: false,
				cache			: false,
				headers			: { 'cache-control': 'no-cache' }, // fix for IOS6 (not tested)
				dataType		: 'html',
				data			: form_data,
				success: function( data ) {						
					$( "#pdf-res" ).html(data);	
					$('#add-pdf-form')[0].reset();					
				}
		});
	}
}

function delPDF (id) {
	$.ajax({
        type: "POST",
        data:{
           'task': 'delete_pdf',
           'id': id
        },
        url: 'ajax/add_pdf.php',
        success: function( data ) {						
			$( "#pdf-res" ).html(data);					
		}
    });
}