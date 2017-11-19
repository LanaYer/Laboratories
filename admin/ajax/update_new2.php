<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "UPDATE `biolab`.`news2` "
        . "SET `new2_name` = '".$_POST["new_header"]."', `new2_text` = '".$_POST["new_text"]."' WHERE `news2`.`new2_id` = ".$_POST["new_id"]);

die($result);
