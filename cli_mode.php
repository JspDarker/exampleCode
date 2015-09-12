<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 12/09/2015
 * Time: 11:27
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");
error_log( "Hello, errors!" );
//run command: tail -f /tmp/php-error.log


if (php_sapi_name() == "cli") {
    // In cli-mode
    var_dump("In cli-mode");

    echo "------------\n";
    var_dump($argc); //count input by CLI
    echo "------------\n";
    var_dump($argv);//array list inputs by CLI

} else {
    // Not in cli-mode
    var_dump("Not in cli-mode");
}

var_dump(php_sapi_name());//apache2handler,...