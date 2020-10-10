<?php
$title = "Accueil";
$dsn = "mysql:host=servinfo-mariadb;dbname=DBdasilva";
$user = "dasilva";
$password = "dasilva";

$pdo = new PDO($dsn, $user, $password, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


$query = "SELECT * FROM FILM";
$statement = $pdo->prepare($query);
$statement->execute();
$films = $statement->fetchAll();

require "elements/header.php";


?>
