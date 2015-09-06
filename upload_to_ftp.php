<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 06/09/2015
 * Time: 17:06
 */

// connect and login to FTP server
$ftp_server = "ftp.datdao.net16.net";
$ftp_username = 'a2464731';
$ftp_userpass = '123strong';

$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = "localfile.txt";

// upload file
if (ftp_put($ftp_conn, "/public_html/serverfile.txt", $file, FTP_ASCII))
{
    echo "Successfully uploaded $file.";
}
else
{
    echo "Error uploading $file.";
}

// close connection
ftp_close($ftp_conn);