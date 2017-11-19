<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "ajax/connect_db.php";
?>

<div class="biolab-admin-right-block  biolab-admin-clinics">
    <h1 class="">PDFs</h1>
    
	<form action="" method="post" name="form" id="add-pdf-form" enctype = "multipart/form-data">
		<table>
			<tr>
				<td></td>
				<td>
					<select  id="pdf_path" name="pdf_path" class="form-control" >
						<option value="1" selected>Patients</option>
						<option value="2">Professionnels</option>
					</select> 
				</td>
				<td><input id="pdf_title" size="40" name="pdf_title" class="form-control" placeholder="title" required></td>
				<td><input id="pdf_file" type="file" name="pdf_file" accept="application/pdf" required></td>
				<td><span  class="biolab-admin-news-new-add" onclick='addPdf(event)'>Add PDF</span></td>                                                                                                
			</tr>
		</table>
	</form>
	<div id="pdf-res"></div>
    <script>
		$( document ).ready(function() {
			loadPdf()
		});
	</script>           
    
    
</div>
