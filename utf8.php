<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 12/09/2015
 * Time: 10:34
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Tell PHP that we're using UTF-8 strings until the end of the script
mb_internal_encoding('UTF-8');

// Tell PHP that we'll be outputting UTF-8 to the browser
mb_http_output('UTF-8');

// Our UTF-8 test string
$string = 'Êl síla erin lû e-govaned vîn.';
$string = 'đào mẫn đạt';

// Transform the string in some way with a multibyte function
// Note how we cut the string at a non-Ascii character for demonstration purposes
$string = mb_substr($string, 0, 7);

// Connect to a database to store the transformed string
// See the PDO example in this document for more information
// Note the `charset=utf8mb4` in the Data Source Name (DSN)
$link = new PDO(
    'mysql:host=127.0.0.1;dbname=mytest;charset=utf8mb4',
    'root',
    '123456',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false
    )
);

// Store our transformed string as UTF-8 in our database
// Your DB and tables are in the utf8mb4 character set and collation, right?
$handle = $link->prepare('insert into ElvishSentences (Id, Body) values (?, ?)');
$id = rand(1,10000);
$handle->bindValue(1, $id, PDO::PARAM_INT);
$handle->bindValue(2, $string);
$handle->execute();

// Retrieve the string we just stored to prove it was stored correctly
$handle = $link->prepare('select * from ElvishSentences where Id = ?');
$handle->bindValue(1, $id, PDO::PARAM_INT);
$handle->execute();

// Store the result into an object that we'll output later in our HTML
$result = $handle->fetchAll(\PDO::FETCH_OBJ);

header('Content-Type: text/html; charset=UTF-8');
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UTF-8 test page</title>
</head>
<body>
UTF-8 test page
<?php
foreach($result as $row){
    print($row->Body);  // This should correctly output our transformed UTF-8 string to the browser
}
?>
</body>
</html>