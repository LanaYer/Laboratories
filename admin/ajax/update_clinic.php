<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "UPDATE `biolab`.`clinics` SET `clinic_name` = '".$_POST["clinic_name"]."', "
        . "`clinic_person` = '".$_POST["clinic_person"]."', `clinic_address` = '".$_POST["clinic_address"]."', `clinic_phone` = '".$_POST["clinic_phone"]."', "
        . "`clinic_fax` = '".$_POST["clinic_fax"]."' WHERE `clinics`.`clinic_id` = ".$_POST["clinic_id"]);

die($result);
