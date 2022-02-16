<?php
//connexion a la base de données
// dsn = Data Source Name = driver MYSQL
$dsn='mysql:dbname=Hackathon;host=mysql-69153-db.mysql-69153:16568';
//login
$login='Hackathon';
// Mot de passe
$motDePasse='bourse123';
// Connexion au serveur MySQL
try{
    $cnx = new PDO($dsn, $login, $motDePasse,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch (PDOException $e){
	die('Erreur : ' . $e->getMessage());
}
?>
