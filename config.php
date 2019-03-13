<?php
$dbhost = 'localhost';
$dbname = 'authentication';
$dbusername = 'root';
$dbpassword = '';

$link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>