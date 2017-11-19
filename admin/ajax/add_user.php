<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "INSERT INTO `biolab`.`users` (`user_id`, `user_login`, `user_pass`, `user_email`) "
        . "VALUES (NULL, '".$_POST['user_login']."', '".md5($_POST['user_pass'])."', '".$_POST['user_email']."')");

die($result);