<?php 
session_start();
include ("./cnx.php");

if (isset($_POST['saveDemande'])){
    if(!empty($_REQUEST['titre']) and !empty($_REQUEST['description'])){
        $login = $_SESSION['login'];

        $sql = $cnx->prepare('SELECT id,adresse from utilisateur where login=?');
        $sql->execute([$login]); 
        $user = $sql->fetch();

        $idUtilisateur = $user[0];
        $titre = htmlspecialchars($_REQUEST['titre']);
        $description = htmlspecialchars($_REQUEST['description']);
        $type = 1;

        $sql2 = "insert into service (idUtilisateur,Description,titre,type) 
        Values ('$idUtilisateur','$description','$titre','$type')";
        $res = $cnx->prepare($sql2);
        $res->execute();
        header('Location:../Pages/index.php');

    }else{
        echo "Veuillez compléter tous les champs...";
    }
}



?>