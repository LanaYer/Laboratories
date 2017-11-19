<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "INSERT INTO `biolab`.`regions` (`region_id`, `region_name`) VALUES (NULL, '".$_POST['region_name']."')");

die($result);