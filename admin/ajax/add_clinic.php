<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "INSERT INTO `biolab`.`clinics` (`clinic_id`, `region_id`, `clinic_name`, `clinic_person`, `clinic_address`, `clinic_phone`, `clinic_fax`) "
    . "VALUES (NULL, '$_POST[region_id]', '$_POST[clinic_name]', '$_POST[clinic_person]', '$_POST[clinic_address]', '$_POST[clinic_phone]', '$_POST[clinic_fax]')");

die($result);