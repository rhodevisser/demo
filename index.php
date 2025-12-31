<?php 

require 'functions.php';
//require 'router.php';

// Connect to the database, and execute a query. 
class Database {

    public $connection;

    public function __construct()
    {

        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=mydemoapp;utf8mb4";

        $this->connection = new PDO($dsn);

    }


    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;

    }

}

$db = new Database();

$post = $db->query("select * from posts where id = 2")->fetch(PDO::FETCH_ASSOC);

dumbDie($post['title']);




