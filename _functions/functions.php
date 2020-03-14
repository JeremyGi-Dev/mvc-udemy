<?php

/**
 * permet de securiser une chaine de caractère
 * @param $string
 * @return $string
 */
function str_secur($string){
    return(trim(htmlspecialchars($string)));
}

/**
 * Debug plus lisible des var dump
 * @param $var
 */
function debug($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}