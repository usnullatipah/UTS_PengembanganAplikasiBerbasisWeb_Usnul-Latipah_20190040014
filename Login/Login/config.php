<?php

$db_host = "localhost";
$db_user = "root";
$db_name = "smk_suryakencana";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user,);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}