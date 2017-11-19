<?php

include 'admin/ajax/connect_db.php';

?>

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
    
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo34xP-Z-_G8q5MJ9x8SL1f86hpiErLPA&callback=initMap"></script>

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
                <h1>MENTIONS LÉGALES</h1>
            </div>
        </div>
        <div class="biolab-mention-page">
            <div class="biolab-mention-page-inner">
                <p>SELAS BIOLAB</p>
                <p>34 Rue GAMBETTA</p>
                <p>78130 LES MUREAUX</p>
                    <a href="mailto:info.biolab@groupebiolab.com" >
                        <p class="blue-bold-text">
                            info.biolab@groupebiolab.com
                        </p>                
                    </a>                
            </div>
        </div>
    </div>
</body>
</html>