<?php

require 'functions.php';


//require 'router.php';

//connect to mysql database
$dsn = 'mysql:host=db;port=3306;dbname=myapp;user=root;password=yourpassword;charset=utf8mb4';
$pdo = new \PDO($dsn);

$statement = $pdo->prepare('SELECT * FROM posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

