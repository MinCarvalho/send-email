<?php
    include("config.php");

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     
    $mysqli = new mysqli($host, $username, $password, $dbname);

    if($mysqli -> error){
        die("Falha no login" . $mysqli -> error);
    }

   
    
?>
