<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "INSERT INTO `biolab`.`news2` (`new2_id`, `new2_name`, `new2_text`) VALUES (NULL, '".$_POST['new2_title']."', '".$_POST['new2_text']."')");

die($result);