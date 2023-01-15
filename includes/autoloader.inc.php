<?php
function autoLoader($filename)
{
    $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    if (strpos($url, 'includes') !== false) {
        $path = "../classes/";
    } else {
        $path = "classes/";
    }
    $ext = ".class.php";
    require_once $path . $filename . $ext;
}


spl_autoload_register('autoLoader');