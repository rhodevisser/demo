<?php 

require 'functions.php';
require 'Database.php';
//require 'router.php';

// Connect to the database, and execute a query. 


$db = new Database();

$post = $db->query("select * from posts where id = 2")->fetch(PDO::FETCH_ASSOC);

dumbDie($post['title']);




