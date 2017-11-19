<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "INSERT INTO `biolab`.`news` (`new_id`, `new_name`, `new_text`, `new_image`) VALUES (NULL, '".$_POST['new_title']."', '".$_POST['new_text']."', '".$_POST['new_image']."')");

die($result);