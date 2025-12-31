<?php 

require 'functions.php';
//require 'router.php';

// Connect to the database, and execute a query. 
class_Database {
    public function query()
    {

    }

}

$db = new Database();

$db->query();



// connect to mySQL database. 
$dsn = "mysql:host=localhost;port=3306;user=root;dbname=mydemoapp;utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
        echo "<li>" .$post['title'] ."</li>";
}

