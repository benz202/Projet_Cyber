<?php

$servername= "localhost";
$username="root";
$password="";

try{
    $conn = new PDO ("mysql:host=$servername; $dbname=projet_cyber", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Connexion retablish";
}catch(PDOException $e){
    echo "Connexion error".$e->getMessage();
}

?>