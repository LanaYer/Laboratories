<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "UPDATE `biolab`.`users` SET `user_login` = 'Admin', "
        . "`user_pass` = '698d51a19d8a121ce581499d7b701668', `user_email` = 'example@mail.ru' "
        . "WHERE `users`.`user_id` = 1");

die($result);
