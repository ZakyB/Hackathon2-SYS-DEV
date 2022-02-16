<?php 
session_start();
include ("./cnx.php");

if (isset($_POST['valider'])){
    if(!empty($_REQUEST['titre']) and !empty($_REQUEST['description'])){
        $login = $_SESSION['login'];

        $sql = $cnx->prepare('SELECT id,adresse from utilisateur where login=?');
        $sql->execute([$login]); 
        $user = $sql->fetch();

        $idUtilisateur = $user[0];
        $adresse = $user[1];
        $titre = htmlspecialchars($_REQUEST['titre']);
        $description = htmlspecialchars($_REQUEST['description']);
        $categorie = 1;
        $prix = $_REQUEST['prix'];

        $sql2 = "insert into service (idUtilisateur,Description,adresse,prix,categorie,TitreService) Values ('$idUtilisateur','$description','$adresse','$prix','$categorie','$titre')";
        $res = $cnx->prepare($sql2);
        $res->execute();
        header('Location:../index.php');

    }else{
        echo "Veuillez compléter tous les champs...";
    }
}



?>