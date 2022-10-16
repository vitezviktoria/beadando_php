<?php

function PrintMenu(){
    echo '
        <li><a href="index.php?page=home">Főoldal</a></li>
        <li><a href="index.php?page=introduction">Bemutatkozás</a></li>
        <li><a href="index.php?page=news">Hírek</a></li>
        <li><a href="index.php?page=gallery">Galéria</a></li>
        <li><a href="index.php?page=contacts">Elérhetőségek</a></li>';
}

function DatabaseConnection(){
    $dsn = "mysql:host=localhost;dbname=schooldb;charset=utf8mb4";
    $username = "root";
    $password = "password";
    
    $db = new PDO($dsn, $username, $password);
    
    return $db;
}
?>