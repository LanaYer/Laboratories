<div class="biolab-admin-main-header">
<?php
    session_start();
    
    if ($_SESSION["auth"]!=1){
        header("location:404.php");
    }
        
    echo "You enter as ".$_SESSION['nick']."&nbsp;&nbsp;&nbsp;";
?>
<a href="ajax/logout.php">Logout</a>
</div>
<div class="biolab-admin-left-block">
    <div class="biolab-admin-left-block-logo">
            <img src="web/images/menu_logo.png"/>
    </div> 
    <ul>
            <a href="/biolab"><li><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Biolab App</li></a>        
            <a href="analytique.php"><li><i class="fa fa-calendar-o"></i>&nbsp;&nbsp;&nbsp;Plateforme analytique</li></a>
            <a href="qualite.php"><li><i class="fa fa-calendar-o"></i>&nbsp;&nbsp;&nbsp;Démarche qualité</li></a>
            <a href="regions.php"><li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Regions</li></a>
            <a href="clinics.php"><li><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Clinics</li></a>
            <a href="users.php"><li><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Users</li></a>            
            <a href="pdf-uploads.php"><li><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;PDF</li></a>            
    </ul>
</div>    
