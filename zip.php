<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 06/09/2015
 * Time: 17:23
 */

$zip = new ZipArchive();
$filename = "./localfile.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

$zip->addFromString("localfile.txt", "#1 This is a test string added as localfile.txt.\n");
$zip->addFromString("README.md", "#2 This is a test string added as README.md.\n");
$zip->addFile("settype.php","/settype2.php");
echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();