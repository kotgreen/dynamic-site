<?php

$connection = new PDO("mysql::host=localhost;dbname=mysite;charset=utf8", "root", "mysql");

// прямой запрос
// $query = "INSERT users (name, age, login) VALUE ('петр', '13', 'nuy')";
// $count = $connection->exec($query);

$name = 'kooko2';
$age = 32;
$login = 'ko354';

$param = [
    'n' => $name,
    'age' => $age,
    'l' => $login
];

$sql = "INSERT users (name, age, login) VALUE (:n, :age, :l)"; // готовим запрос с плейсхолдерами
$query = $connection->prepare($sql); // подготавливаем запрос

$query->execute($param);
