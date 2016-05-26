<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function dd($arr) {
    echo '<pre>'.print_r($arr, TRUE).'</pre>';
    die;
}


function  check_empty($str) {
    
    if ($str == '') {
        return TRUE;
    } else {
        return FALSE;
    }
}

