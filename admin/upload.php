<?php
header("Content-Type: text/html; charset=utf-8");

ini_set('display_errors',1);
error_reporting(E_ALL);

    $uploaddir = '/srv/data/web/vhosts/www.appyside.com/htdocs/biolab/images/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
 /*   echo "<p>";

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
      echo "File is valid, and was successfully uploaded.\n";
    } else {
       echo "Upload failed";
    }

    echo "</p>";
    echo '<pre>';
    echo 'Here is some more debugging info:';
    print_r($_FILES);
    print "</pre>"; */

header("location: analytique.php");

?>