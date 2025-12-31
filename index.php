<?php 

require 'functions.php';
//require 'router.php';

// Connect to the database, and execute a query. 
class Database {
    public function query()
    {
        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=mydemoapp;utf8mb4";
        $pdo = new PDO($dsn);

        $statement = $pdo->prepare("select * from posts");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}

$db = new Database();

$posts = $db->query();



// connect to mySQL database. 


foreach ($posts as $post) {
        echo "<li>" .$post['title'] ."</li>";
}

