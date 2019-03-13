<?php


include("config.php");
echo "User name"."\n";
$stmt = $link->query("SELECT * FROM login");
while ($row = $stmt->fetch()) {
    echo $row['name']."\n";
}

?>

