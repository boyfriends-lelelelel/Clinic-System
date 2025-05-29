<?php

$dsn = "mysql:host=localhost;dbname=evercareclinic";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO: :ATTR_ERRMODE, PDO
    )
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

}