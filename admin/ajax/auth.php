<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM users WHERE user_login LIKE '".$_POST['login']."' AND user_pass LIKE '".md5($_POST['pass'])."'"))){
    session_start();
    $_SESSION['nick'] = $_POST['login'];
    $_SESSION['auth'] = 1;
    die;
}
die ("Authentication error!");