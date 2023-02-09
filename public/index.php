<?php

$books = [
    [
        'name' => 'Do Androids Drem of Eletric Sheep',
        'author' => 'Philipe K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com',
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com',
    ],
    [
        'name' => 'Martin',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com',
    ]
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
});

require "index.view.php";