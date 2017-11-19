<?php

include 'admin/ajax/connect_db.php';

function getNews(){
    global $link;
    $query = "SELECT * FROM news ORDER BY date DESC";
    $res = mysqli_query($link, $query);
    return $res;
}
function getNews2(){
    global $link;
    $query = "SELECT * FROM news2 ORDER BY date DESC";
    $res = mysqli_query($link, $query);
    return $res;
}

$news = getNews();
$news2 = getNews2();

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
    
    <script type="text/javascript" src="web/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="web/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="web/slick/slick-theme.css">
        
    <script type="text/javascript" src="web/js/main.js"></script>
    
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
                <h1>GROUPE BIOLAB</h1>
            </div>
        </div>
        
        
        <div class="biolab-slider">
            
              <div class="regular slider">
                <div>
                    <img src="web/images/slider1.jpg">
                </div>
                <div>
                  <img src="web/images/slider2.jpg">
                </div>
                <div>
                  <img src="web/images/slider3.jpg">
                </div>
              </div>
 
                <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
                <script src="web/slick/slick.js" type="text/javascript" charset="utf-8"></script>
                <script type="text/javascript">
                  $(document).on('ready', function() {
                    $(".regular").slick({
                      dots: true,
                      infinite: true,
                      slidesToShow: 1,
                      slidesToScroll: 1
                    });
                  });
                </script>
        </div>
        
        
        <div class="biolab-home-buttons">
            <div class="biolab-home-buttons-container">
                <div class="biolab-home-button biolab-home-button-active" id="biolab-home-button1"><a>Plateforme analytique</a></div>
                <div class="biolab-home-button" id="biolab-home-button2"><a>Démarche qualité</a></div>
            </div>
        </div>
        <div class="biolab-home-news" id="biolab-home-news">
            <?php 
                while($myrow=mysqli_fetch_array($news))
                        {                   
                            echo "<div class=\"biolab-home-analitique\">";
                            echo "<h3>".$myrow['new_name']."</h3>";
                            echo "<div class=\"biolab-home-analitique-img\"><img alt=\"\" src=\"images/".$myrow['new_image']."\"></div>";
                            echo "<p>".$myrow['new_text']."</p>";
                            echo "</div>";
                        }
            ?>  
        </div>
        <div class="biolab-home-news" id="biolab-home-news2">  
           <?php 
                while($myrow=mysqli_fetch_array($news2))
                        {                   
                            echo "<div class=\"biolab-home-news-new\">";
                            echo "<span><i class=\"fa fa-chevron-right\"></i></span>";
                            echo "<h4>".$myrow['new2_name']."</h4>";
                            echo "<p>".$myrow['new2_text']."</p>";
                            echo "</div>";
                        }
            ?>  
        </div>
    </div>
</body>
</html>