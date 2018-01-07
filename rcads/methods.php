<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cleanInput($input){
    $input = strip_tags($input);
    $input = filter_var( $input, FILTER_SANITIZE_STRING);
    $input = mysqli_real_escape_string($con, $input);
    return $input;
}
