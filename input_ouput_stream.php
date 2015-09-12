<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 12/09/2015
 * Time: 14:35
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

// prints "I love PHP"
echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=');