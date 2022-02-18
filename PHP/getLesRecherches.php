<?php 
session_start();
include ('./cnx.php');

$login = $_SESSION['login'];
$sql = $cnx->prepare('SELECT id,adresse from utilisateur where login=?');
$sql->execute([$login]); 
$user = $sql->fetch();

$idUtilisateur = $user[0];

$sql = $cnx ->prepare("SELECT recherche.libelle as libelle,categorie.libelle as categorie,prix,ville.Libelle as ville from recherche 
                        INNER JOIN utilisateur on utilisateur.id = recherche.idUtilisateur 
                        INNER JOIN categorie on categorie.id = recherche.categorie
                        INNER JOIN ville ON ville.id = recherche.ville
                        WHERE utilisateur.id = $idUtilisateur");
$sql -> execute();

echo "<center><h2 class='cadre'><center><strong> Mes recherches </strong></center></h2> </center> <br>";

foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
{
    echo "
    <div class='container_service'>
        <div class='row'>
            <div class='col-md-6'>
                <div class='row'>
                    <h4 style='font: size 20px;font-weight: bold;' ><em>".$ligne['libelle']."</em></h4>
                </div>
                <div class='row'>
                    <p style='text-decoration: underline;'><strong>Budget : </strong>".$ligne['prix']." €</p>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='row'>
                    <p style='text-decoration: underline;'><strong>Categorie : </strong>".$ligne['categorie']."</p>
                </div>
                <div class='row'>
                    <p style='text-decoration: underline;'><strong>Ville : </strong>".$ligne['ville']."</p>
                </div>
            </div>
        </div>
    </div>";
}

?>