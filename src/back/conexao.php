<?php

$host = 'localhost';
$username = 'root';
$passwd = '';
$database = 'mydb';

try {
    $pdo = new PDO("mysql:host=".$host.";dbname=".$database, $username, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    die("Error: ".$e->getMessage());
}

