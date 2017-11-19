<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" >

<head profile="http://www.w3.org/1999/xhtml/vocab">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biolab</title>


    <link type="text/css" rel="stylesheet" href="web/css/bootstrap.css" media="all" />
    
    <link type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" media="all" />
    <link type="text/css" rel="stylesheet" href="web/css/font-awesome.css" media="all" />
    <link type="text/css" rel="stylesheet" href="web/css/main.css" media="all" />
    <!-- HTML5 element support for IE6-8 -->

    <script type="text/javascript" src="web/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="web/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="web/js/main.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
<?php

include 'blocks/menu.php';

?>
    <div class="col-xs-12">
        <div class="biolab-header">
            <div class="biolab-button-show_menu">
            </div>
            <div class="biolab-header-h1">
                <h1>Accès Professionnels</h1>
            </div>
        </div>
		<div class="biolab-home-buttons">
            <div class="biolab-home-buttons-container">
                <div class="biolab-home-button biolab-home-button-active" id="biolab-home-button1"><a>Nos documents</a></div>
                <div class="biolab-home-button" id="biolab-home-button2"><a>Consultez les analyses</a></div>
            </div>
        </div>
		<div class="biolab-home-news" id="biolab-home-news">
           <?PHP
				include 'admin/ajax/connect_db.php';
				$query = "SELECT * FROM `biolab`.`pdf` WHERE pdf_path = 2 ORDER BY pdf_name ";
				$pdfs = mysqli_query($link, $query);			
				while($myrow=mysqli_fetch_array($pdfs)) {							
			?>
				<a id="pdf-<?=$i;?>" target="_blank" class="biolab-download-pdf" href="https://docs.google.com/gview?embedded=true&url=http://www.appyside.com/biolab/download/prof/<?=$myrow['pdf_file_name'];?>" >
					<i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?=$myrow['pdf_name'];?>
				</a>
			<?	}?>
        </div>
        <div class="biolab-home-news" id="biolab-home-news2">  		
			<h2>ConsulteZ les analyses de vos patients rapidement</h2>
			
			<div class="biolab-patients">        

				<div class="biolab-prof-block">
					<p>Vous pouvez nous faire parvenir une demande d’identification à l’adresse e-mail suivante :</p>
					<br>
						<a href="mailto:info.biolab@groupebiolab.com" >
							<p class="text-center blue-bold-text">
								info.biolab@groupebiolab.com
							</p>                
						</a>
					<br>
					<p>Nous vous transmettrons login et mot de passe par mail.</p>
					<br>
					<p>Si vous possédez des identifiants, cliquez sur le lien ci-dessus.</p>
					<div class="biolab-patients-info_block-arrow">  
					</div>
				</div>
				<div class="biolab-prof-button">
					<div class="biolab-home-button biolab-home-button-active"><a href="https://www.monresultat.fr">Consultez les analyses de vos patients</a></div>
				</div>
			</div>
		</div>

    </div>
</body>
</html>
                
 