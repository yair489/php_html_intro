<?php

$articles = [ "first post", "Another post" , "Read this!"];

var_dump($articles);
echo "<br>";
var_dump($articles[0]);
echo "<br>";

$articles_index = [ 1=> "first post", 5=> "Another post" , "Read this!"];
var_dump($articles_index);

echo "<br>";

$articles_index_str = [ "one"=> "first post", "second"=> "Another post" , "Read this!"];
var_dump($articles_index_str);
echo "<br>";
var_dump($articles_index_str["one"]);
echo "<br>";


echo "<br>";
$values = [ 
    "message" => "Hello world!",
    "count"   => 150,
    "pi"      => 3.14,
    "status"  => false,
    "result"  => null
];

var_dump($values);
echo "<br>";
$count = 3;
$price = 9.99;

$data = [$count, $price];
var_dump($data);
echo "<br>";
$pepole = [
    [
        "name" => "yair",
        "email" => "yair@email",
        "height" => 1.80
    ],
    [
        "name" => "sho",
        "email" => "sho@email",
        "height" => 1.80
    ]
    ];
$yair_email = $pepole[0]["email"];
echo "$yair_email";

echo "<br>";
$articles = [ "first post", "Another post" , "Read this!"];
echo $articles[0];
echo $articles[1];
echo $articles[2];

echo "<br>";
foreach ($articles as $article){
    echo $article, "        ,   \t\t";
};
echo "<br>";
foreach ($articles as $index => $article){
    echo $index . " - " . $article, "        ,  ";
};