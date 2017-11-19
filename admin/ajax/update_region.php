<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "UPDATE `biolab`.`regions` SET `region_name` = '".$_POST['region_name']."' WHERE `regions`.`region_id` = ".$_POST['region_id']."");

die($result);
