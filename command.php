<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 06/09/2015
 * Time: 17:32
 */

// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
echo exec('whoami');
echo "\n";