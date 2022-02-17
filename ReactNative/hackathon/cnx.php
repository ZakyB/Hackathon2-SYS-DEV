<?php

$host = 'mysql-69153-0.cloudclusters.net';
$db   = 'Hackathon';
$user = 'admin';
$pass = '1bS4pmwO';
$port = "16568";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
     $pdo = new \PDO($dsn, $user, $pass, $options);
     echo "Connected successfully";
} catch (\PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}

?>
