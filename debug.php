<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 10/10/2015
 * Time: 13:48
 */

$f=$_GET['f'];
$l=$_GET['l'];
$r=0;

for($i=0;$i<10;$i++) {
    if($i%2===0||$i%3===0) {
        $r+=$i;
    }
}
echo "$f $l: $r";