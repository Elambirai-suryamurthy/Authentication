<?php


include("config.php");
try {

        $name=$_POST['name'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $place=$_POST['place'];
    $encrypted_password= hash('sha256', $password);
    $token = bin2hex(openssl_random_pseudo_bytes(16));
   // $hash_password=md5($password);(another method of encripting) 
    
    $query = $link->prepare("SELECT email FROM login WHERE email=?");
    $query->execute(array($email));
   
    
  if($query->rowCount() > 0){
    echo json_encode("User already Exist");
  
}
else {
    // prepare sql and bind parameters
    $stmt = $link->prepare("INSERT INTO `login` (`name`, `password`, `email`,`place`) 
    VALUES (?,?,?,?)");
    // insert a row
    $stmt->execute(array($name,$encrypted_password,$email,$place));
    $data = array("status"=>"success");
    echo json_encode($data);

    

    
    }
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

?>

