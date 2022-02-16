<?php 
session_start();
include ("./cnx.php");

if (isset($_POST['valider'])){
    $login = htmlspecialchars($_REQUEST['login']);
    $mdp = htmlspecialchars($_REQUEST['mdp']);
    $decrypt = sha1($mdp);

    $sql = "select * from utilisateur where Login=?";
    $resultat = $cnx->prepare($sql);
    $resultat->bindValue(1,$login);
    $resultat->execute();
        
    if ($resultat-> rowCount() > 0){
        $data = $resultat->fetch();
        if($data['mdp'] == $decrypt){
            $_SESSION['login']= $login;
            header('Location:../Pages/Services.php');
        }else {
            echo ("Mot de passe incorrect");
        }
    }else{
        include('../index.php');
        echo ("Login ou mot de passe incorrect");
    } 
}
?>