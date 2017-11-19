<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$json = file_get_html("https://maps.googleapis.com/maps/api/distancematrix/json?origins=Donetsk%20Ukraine&destinations=Russia%20Moscow|Russia%20Saint%20Peterburg");

//$json = get_object_vars(json_decode(file_get_contents($json)));

//$_POST["address"]

die("7687");