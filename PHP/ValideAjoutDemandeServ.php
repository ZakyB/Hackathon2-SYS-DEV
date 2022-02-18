<?php 
session_start();
include ("./cnx.php");

if (isset($_POST['saveDemande'])){
    if(!empty($_REQUEST['TitreService']) and !empty($_REQUEST['description'])){
        $login = $_SESSION['login'];

        $sql = $cnx->prepare('SELECT id,adresse from utilisateur where login=?');
        $sql->execute([$login]); 
        $user = $sql->fetch();

        $idUtilisateur = $user[0];
        $TitreService = htmlspecialchars($_REQUEST['TitreService']);
        $description = addslashes($_REQUEST['description']);
        $prix = $_REQUEST['prix'];
        $type = 1;
        $categorie = $_REQUEST['categorie'];
        $ville = $_REQUEST['ville'];

        $sql2 = "insert into service (idUtilisateur,TitreService,description,type,Prix,categorie,ville) 
        Values ('$idUtilisateur','$TitreService','$description','$type','$prix','$categorie','$ville')";
        $res = $cnx->prepare($sql2);
        $res->execute();
        header('Location:../Pages/DemandesService.php');

    }else{
        echo "Veuillez compléter tous les champs...";
    }
}



?>