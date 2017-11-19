<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "connect_db.php";
$upload_folder = '/srv/data/web/vhosts/www.appyside.com/htdocs/biolab/download/';
$pdf_folder = '';
$out = '';
if ($_POST['pdf_path'] == 1) $pdf_folder = 'patient/';
elseif ($_POST['pdf_path'] == 2) $pdf_folder = 'prof/';

if ($_POST['task']=='add_pdf'){
	if ($_FILES){
		foreach($_FILES as $file) {
			//Check allowed extensions
			$query = 'SELECT id FROM `biolab`.`pdf` WHERE pdf_file_name="'.$file["name"].'" LIMIT 1 ';
			$result = mysqli_query($link, $query);
			$res_row = mysqli_fetch_array($result);
			$pdf_id = $res_row['id'];
			if (!$pdf_id){		
				$path_parts = pathinfo($file["name"]);
				$file_ext = strtolower($path_parts['extension']);
				if ($file_ext == 'pdf') {			
					move_uploaded_file($file["tmp_name"], $upload_folder.$pdf_folder.$file["name"]);
					//insert images to DB
					$query = 'INSERT INTO `biolab`.`pdf` (`pdf_path`, `pdf_name`, `pdf_file_name`) 
					VALUES ("'.$_POST[pdf_path].'", "'.$_POST[pdf_title].'", "'.$file["name"].'") ';
					mysqli_query($link, $query);
					$out = print_PDF ();				
				}
			}
			else {
				$out = "<div class='error'>Le fichier existe déjà</div>";
				$out .= print_PDF();
			}
		}
	}
	echo $out;
}
elseif ($_POST['task']=='delete_pdf'){
	$query = 'SELECT pdf_path, pdf_file_name FROM `biolab`.`pdf` WHERE id="'.$_POST["id"].'" LIMIT 1 ';
	$result = mysqli_query($link, $query);
	$res_row = mysqli_fetch_array($result);
	$pdf_path = $res_row['pdf_path'];
	$pdf_file_name = $res_row['pdf_file_name'];
	$pdf_folder = '';
	if ($pdf_path == 1) $pdf_folder = 'patient/';
	elseif ($pdf_path == 2) $pdf_folder = 'prof/';
	
	
	if(is_file($upload_folder.$pdf_folder.$pdf_file_name)) {
		unlink($upload_folder.$pdf_folder.$pdf_file_name); // delete file
	}	
	$query = "DELETE FROM `biolab`.`pdf` WHERE id='".$_POST["id"]."' ";
	mysqli_query($link, $query);
	echo print_PDF();
}
else echo print_PDF();


function print_PDF (){
	include "connect_db.php";
	$out = "<table>";
	$query = "SELECT * FROM `biolab`.`pdf` ORDER BY pdf_path, id ";
    $pdfs = mysqli_query($link, $query);
	
    while($myrow=mysqli_fetch_array($pdfs)) {  
		$pdf_folder = '';
		if ($myrow['pdf_path'] == 1) {
			$pdf_folder = 'patient/';
			$pdf_folder_out = 'Patient';			
		}
		elseif ($myrow['pdf_path'] == 2) {
			$pdf_folder = 'prof/';
			$pdf_folder_out = 'Professionnels';
		}
		$out .= "<tr>
					<td><p id=\"pdf_id\">".$myrow['id']."</p></td>
					<td><p id=\"pdf_name\">".$myrow['pdf_name']."</p></td>
					<td><p id=\"pdf_file_name\"><a target=\"_blank\" href=\"/biolab/download/".$pdf_folder.$myrow['pdf_file_name']."\">".$myrow['pdf_file_name']."</a></p></td>
					<td><p id=\"pdf_path\">".$pdf_folder_out."</p></td>
					<td><span  class=\"biolab-admin-news-new-del\" onclick='delPDF(".$myrow['id'].")'>Delete</span></td>					
				</tr>";
    }
	$out .= "<table>";
	return $out;
}


?>