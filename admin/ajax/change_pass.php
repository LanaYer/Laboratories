<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_num_rows(mysqli_query($link, "SELECT * FROM `users` WHERE `user_id` = 1 AND `user_pass` LIKE '".md5($_POST["current_pass"])."' "));

$result2 = mysqli_query($link, "UPDATE `biolab`.`users` SET `user_pass` = '".md5($_POST["pass"])."' WHERE `users`.`user_id` = 1 and `user_pass` = '".md5($_POST["current_pass"])."'");

die((string)$result);
