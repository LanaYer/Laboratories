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
                <h1>Accès Patients</h1>
            </div>
        </div>
		<div class="biolab-home-buttons">
            <div class="biolab-home-buttons-container patients">
                <div class="biolab-home-button biolab-home-button-active" id="biolab-home-button1"><a>Documents utiles</a></div>
                <div class="biolab-home-button" id="biolab-home-button2"><a>Préparer sa visite</a></div>
                <div class="biolab-home-button" id="biolab-home-button3"><a>Mes résultats</a></div>
            </div>
        </div>
        <div class="biolab-home-news" id="biolab-home-news">
		<?PHP
			include 'admin/ajax/connect_db.php';
			$query = "SELECT * FROM `biolab`.`pdf` WHERE pdf_path = 1 ORDER BY pdf_name ";
			$pdfs = mysqli_query($link, $query);
			$i=1;			
			while($myrow=mysqli_fetch_array($pdfs)) {							
		?>
            <a id="pdf-<?=$i;?>" target="_blank" class="biolab-download-pdf" href="https://docs.google.com/gview?embedded=true&url=http://www.appyside.com/biolab/download/patient/<?=$myrow['pdf_file_name'];?>" >
				<i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?=$myrow['pdf_name'];?>
			</a>
		<?	}?>
		<script>
			/*$(document).on( 'click', '.biolab-download-pdf', function (event) {
				event.preventDefault();
				var pdf_url = $(this).attr('href');
				pdf_url = pdf_url.trim();
				alert (pdf_url);
				window.open(pdf_url, '_blank');
			});	*/	
		</script>
        </div>
        <div class="biolab-home-news" id="biolab-home-news2">  
			<p>"Rendez-vous :<br /><br />Contactez votre laboratoire afin de savoir si un rendez vous est néccéssaire pour les analyses demandées sur votre ordonnance. Les coordonnées de chaque laboratoire sont accessibles sur notre site.<br /><br />Pièces à fournir le jour du prélèvement :<br />» Votre ordonnance en cours de validité (&lt;12 mois)<br />» Votre carte vitale<br />» Votre carte mutuelle en cours de validité<br />» Votre pièce d'identité pour les cartes de groupes<br />» Votre attestation papier de CMU (Complémentaire Mutuelle Universelle) ou AME (Aide Médical d'Etat).<br /><br />Tous nos laboratoires sont conventionnés auprès de la caisse nationale d’assurance maladie, et des caisses de régimes spéciaux. Concernant la mutuelle, il est nécessaire de vérifier à l’accueil si votre mutuelle est acceptée.<br />Certaines analyses peuvent être réalisées sur votre demande sans prescription ou avant la prescription de votre médecin. Dans ce cas, la facturation est à votre charge. Le laboratoire vous renseignera à la demande.<br /><br />Renseignements complémentaires :</p>
			<p>Pour répondre au mieux à vos attentes, n'hésitez pas à transmettre au secrétariat ou aux infirmières toutes les informations permettant d'améliorer votre prise en charge :</p>
			<p>- Téléphone fixe et mobile, pour vous joindre rapidement.</p>
			<p>- Médecins destinataires supplémentaires pour vos résultats.</p>
			<p>- Prise d'un traitement (anticoagulant, antibiotique, chimiothérapie...).</p>
			<p>- Suivi médical ou chirugical particulier</p>
			<p>- Pour les dosages hormonaux chez la femme : Date des dernières règles, jour du cycle.</p>
			<p>Nos préleveurs seront éventuellement amenés à vous poser des questions complémentaires afin de permettre une interprétation de vos résultats par le biologiste.</p>
			<h2>Venir à jeun ?</h2>
			<p>Le jeun est obligatoire durant 10 à 12 heures sans prise alimentaire (vous pouvez boire de l'eau plate), pour :</p>
			<p>- Un bilan lipidique (cholesterol, triglycerides, LDL, HDL).</p>
			<p>- AMH, prolactine.</p>
			<p>- Test Helicobacter pylori.</p>
			<p>(Liste non exhaustive).</p>
			<p>Le jeun est obligatoire durant 8 heures pour une glycémie.</p>
			<p>De façon générale, il est préférable de réaliser les prises de sang le matin avant 10 heures et à jeun ou après un dejeuner léger si le jeun n'est pas obligatoire.</p>
			<h2>Être à jeun ?</h2>
			<p>Ne pas prendre de petit-déjeuner, ni de repas durant la nuit</p>
			<p>Ne pas boire des boissons sucrées ou alcoolisée</p>
			<p>Vous pouvez boire de l'eau plate sans limite</p>
			<h2>Autres préconisations</h2>
			<p>Pour les prélèvements cardiaques, merci d'évitez les activités physiques intenses.</p>
			<h2>Patients mineurs :</h2>
			<p>Les résultats ne pourront être délivrés qu'au représentant légal ou au médecin prescripteur. Les enfants mineurs doivent être accompagnés par un representant légal (il est possible de signer des derogations au laboratoire).</p>
			<h2>Prise de sang chez les enfants :</h2>
			<h2>Pour le confort de votre enfant, vous pouvez demander à votre médecin une prescription pour acheter un patch anti-douleur dans une pharmarcie (type EMLA). "</h2>
					</div>
		<div class="biolab-home-news" id="biolab-home-news3">  	
		
			<h2>VOS RÉSULTATS SONT DISPONIBLES LE JOUR MÊME SUR INTERNET.</h2>
			<p>En cas de difficulté pour accéder à vos login faites une réclamation dans l’onglet contact.</p>
			
			<div class="biolab-patients">        
				<h2>Comment ça marche?</h2>
				<div class="biolab-patients-info_block">
					<span>1.</span>
					<p>Le secrétariat  vous a transmis vos codes d’accès « IDENTIFIANT et MOT DE PASSE ».</p>
					<div class="biolab-patients-info_block-arrow">  
					</div>
				</div>
				<div class="biolab-patients-info_block">
					<span>2.</span>
					<p>Allez sur le site  <a href="https://www.monresultat.fr"> https://www.monresultat.fr</a> et laissez vous guider.</p>
					<div class="biolab-patients-info_block-arrow">  
					</div>
				</div>
				<div class="biolab-patients-info_block">
					<span>3.</span>
					<p>Après avoir saisie vos codes, vous devez impérativement personnaliser votre mot de passe.</p>
				</div>
				<div class="biolab-patients-button">
					<div class="biolab-home-button biolab-home-button-active"><a href="https://www.monresultat.fr">Voir les résultats</a></div>
				</div>
			</div>
		</div>

    </div>
</body>
</html>