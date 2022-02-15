<?php 
include ("./cnx.php");

if (isset($_POST['enregistrer'])){
    if(!empty($_REQUEST['nom']) and !empty($_REQUEST['prenom'])){

        $nom = htmlspecialchars($_REQUEST['nom']);
        $prenom = htmlspecialchars($_REQUEST['prenom']);
        $email = htmlspecialchars($_REQUEST['mail']);
        $adresse = htmlspecialchars($_REQUEST['adresse']);
        $tel = htmlspecialchars($_REQUEST['tel']);
        $login = htmlspecialchars($_REQUEST['login']);
        $mdp = sha1($_REQUEST['mdp']);

        $stmt = $cnx->prepare('SELECT * FROM utilisateur WHERE login=?');
        $stmt->execute([$login]); 
        $user = $stmt->fetch();
        if ($user) {
            echo "cette identifiant est déjà utilisé";
            header('Location:valideInscription.php');
        } else {
            $sql2 = "insert into utilisateur (nom,prenom,adresse,mail,tel,Login,mdp)
            Values ('$nom','$prenom','$adresse','$email','$tel','$login','$mdp')";
            $res = $cnx->prepare($sql2);
            $res->execute();
            header('Location:../index.php');
        } 

    }else{
        echo "Veuillez compléter tous les champs...";
    }
}
?>