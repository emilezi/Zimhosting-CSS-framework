<?php
/**
    * Device information function
    *
    * @author Emile ZIMMER
    */

/**
    * Get the machine information
    *
    * @return string machine information
    *
    */
function getDevice() {

    $useragent = $_SERVER['HTTP_USER_AGENT'];

    if(stristr($useragent,'Macintosh')){$machine="Mac";}
    elseif(stristr($useragent,'Win')){$machine="Windows";}
    elseif(stristr($useragent,'iPhone')){$machine="iPhone";}
    elseif(stristr($useragent,'iPod')){$machine="iPod";}
    elseif(stristr($useragent,'Android')){$machine="Android";}
    elseif(stristr($useragent,'iPad')){$machine="iPad";}
    elseif(stristr($useragent,'linux')){$machine="Linux";}
    else{$machine="inconnu";}

    return $machine;

}