<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 06/09/2015
 * Time: 16:01
 */

$array = array("id" => 2, "name" => "name");
$result = array();
//$result['result'] => null, $result['result'] => list
//$array = null;
if(empty($array)) {
    $result['result'] = null;
} else {
    $result['result'][] = $array;
}
$result['status'] = "200";
$result['total'] = "100";
//var_dump($result);

settype($result['status'], 'integer');
settype($result['total'], 'integer');
settype($result['result'], 'array');
var_dump(json_encode($result));


// A valid json string
$json[] = '{"Organization": "PHP Documentation Team"}';

// An invalid json string which will cause an syntax
// error, in this case we used ' instead of " for quotation
$json[] = "{'Organization': 'PHP Documentation Team'}";


foreach ($json as $string) {
    echo 'Decoding: ' . $string;
    json_decode($string);

    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - No errors';
            break;
        case JSON_ERROR_DEPTH:
            echo ' - Maximum stack depth exceeded';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Underflow or the modes mismatch';
            break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unexpected control character found';
            break;
        case JSON_ERROR_SYNTAX:
            echo ' - Syntax error, malformed JSON';
            break;
        case JSON_ERROR_UTF8:
            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
        default:
            echo ' - Unknown error';
            break;
    }

    echo PHP_EOL;
}