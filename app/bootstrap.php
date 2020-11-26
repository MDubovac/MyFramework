<?php 
/* Require the config file */ 
require_once "../app/config/config.php";

/* Autoload Libraries */
spl_autoload_register(function($className){
    require_once "../app/libraries/" . $className . ".php";
});