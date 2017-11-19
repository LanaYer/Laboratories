<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" version="XHTML+RDFa 1.0" >

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
                <h1>Contact</h1>
            </div>
        </div>
		<div class="biolab-patients">
			<div class="biolab-prof-block">
				<div class="form-wrapper">
					<form id="iform" name="iform" method="POST" action="" >
						<div class="form-item">
							<label for="iname">Name</label>
							<input class="ename" name="iname" id="iname" value="" placeholder="Name" type="text" required>
						</div>
						<div class="form-item">
							<label for="iemail">Email</label>
							<input class="eemail" name="iemail" id="iemail" value="" placeholder="Email" type="text" required>
						</div>
						<div class="form-item">
							<label for="imessage">Message</label>
							<textarea class="emessage" name="imessage" id="imessage" placeholder="Message" required></textarea>
						</div>
						<div class="form-btn">
							<input class="esubmit" name="isubmit" value="Soumettre" type="submit">	
						</div>
					</form>
					<div id="res"></div>
				</div>			
			</div>
		</div>
	</div>
	<script>
				$( ".esubmit" ).click(function(event) {
					if ($('#iform')[0].checkValidity()==true) {
						event.preventDefault();
						var form = $('#iform');
						$.ajax({
							type: 'POST',
							url: './admin/ajax/send-form.php',
							data: form.serialize(),
							success: function( data ) {	
								if (data!='error') {
									$('#iform').trigger( 'reset' );
									$( "#res" ).css('display','inline-block');
									$( "#res" ).html(data);									
									$( "#res" ).addClass('res-active');
									$( "#res" ).fadeOut( 4000, function() {
										$( "#res" ).removeClass('res-active');										
									});	
								}	
								else {
									$( "#res" ).css('display','inline-block');
									$( "#res" ).html('Erreur');									
									$( "#res" ).addClass('res-active');
									$( "#res" ).fadeOut( 4000, function() {
										$( "#res" ).removeClass('res-active');
									});	
								}								
							}
						});
					}
				});		
			</script>
</body>
</html>
                
 