<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "UPDATE `biolab`.`news` "
        . "SET `new_name` = '".$_POST["new_header"]."', `new_text` = '".$_POST["new_text"]."' WHERE `news`.`new_id` = ".$_POST["new_id"]);

die($result);
