<?php 

require 'functions.php';
//require 'router.php';

// connect to mySQL database. 
$dsn = "mysql:host=localhost;port=3306;user=root;dbname=mydemoapp;utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();


