<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$res= mysqli_query($link, "SELECT new_image FROM news WHERE new_id=$_POST[new_id]");
$res = mysqli_fetch_array($res);

unlink('/srv/data/web/vhosts/www.appyside.com/htdocs/biolab/images/'.$res[new_image]);

$result = mysqli_query($link, "DELETE FROM news WHERE new_id=$_POST[new_id]");

die($result);