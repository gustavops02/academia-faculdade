<?php

$host = 'localhost';
$username = 'root';
$passwd = '';
$database = 'mydb';


$mysqli = new mysqli($host,$username,$passwd,$database);

if($mysqli->error) {
    die("Falha ao conectar com o banco: ".$mysqli->error);
}