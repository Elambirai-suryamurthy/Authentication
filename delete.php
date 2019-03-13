<?php


include("config.php");
$email=$_POST['email'];

$count=$link->prepare("delete from login where email = ? ");

$count->execute(array($email));

?>

