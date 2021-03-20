<?php
$dsn =  "mysql:dbname=blog;host=127.0.0.1"; // Data Source Name
$dbuser = "root"; //database user
$dbpass = ""; //database password

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Falhou a conexão: "  .$e->getMessage();
}