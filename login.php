<?php


include("config.php");
$name=$_POST['name'];
$password=$_POST['password'];
$token=$_POST['token'];
$encrypted_password= hash('sha256', $password);
$stmt = $link->prepare("SELECT * FROM `login` WHERE `name` = ? AND `password`= ? AND `token`= ?");
$stmt->execute(array($name,$encrypted_password,$token));

if($stmt->rowCount() > 0){
    echo json_encode("Succesful");
}
else{
    echo json_encode("failed");
}



?>

