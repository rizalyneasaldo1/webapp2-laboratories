<?php

$hostname = "localhost"; // you localhost name
$username = "root"; // your mysql user
$password = " "; // your mysql password
$db_name = "wad2-db"; // your database name

try {
    $pdo = new PDO("mysql:host=$hostname;db_namename=$db_name", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
