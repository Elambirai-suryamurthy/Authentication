<?php


include("config.php");
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$place=$_POST['place'];
$token=$_POST['token'];
//$sql = "UPDATE login SET name=?, password=?, place=? WHERE email=?";
$sql = $link->prepare("UPDATE login SET name=?, password=?,email=?, place=? WHERE token=?");
    
$sql->execute([$name, $password,$email, $place,$token]);

?>

