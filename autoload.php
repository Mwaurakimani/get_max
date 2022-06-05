<?php
spl_autoload_register('autoloader');


function autoloader($classname){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath  = $path . $classname .$extension;
    
    include_once $fullPath;
}