<?php 
session_start();
include ("./cnx.php");

if (isset($_POST['maRecherche'])){
        $login = $_SESSION['login'];

        $sql = $cnx->prepare('SELECT id,adresse from utilisateur where login=?');
        $sql->execute([$login]); 
        $user = $sql->fetch();

        $idUtilisateur = $user[0];
        $libelle = htmlspecialchars($_REQUEST['search']);

        $sql2 = "insert into recherche (idUtilisateur,libelle) Values ('$idUtilisateur','$libelle')";
        $res = $cnx->prepare($sql2);
        $res->execute();
        header('Location:../Pages/Services.php');
}



?>