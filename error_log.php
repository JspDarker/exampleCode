<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 12/09/2015
 * Time: 14:27
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");
error_log( "Hello, errors!" );
//run command: tail -f /tmp/php-error.log
echo $argc;
echo $argv;