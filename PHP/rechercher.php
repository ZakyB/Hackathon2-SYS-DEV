<?php 
include("./cnx.php");

if(isset($_GET['s']) and !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    $sql2 = $cnx->prepare("Select * from service where Description like'%".$recherche."%' or categorie like '%".$recherche."%'");
    $sql2->execute();

    foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
    {
        echo "<div class='row'>
                <div class='col-md-4'>
                    <div class='case_img'>
                        <img src='./Img/36b1a6da822d3b0d4eaef522260a8431.jpg'>
                    </div>
                </div>
                <div class='col-md-8'>
                    <div class='row'>
                        <p>Titre de l'annonce</p>
                    </div>
                    <div class='row'>
                        <p>Prix : ".$ligne['categorie']."</p>
                    </div>
                    <br>
                    <div class='row'>
                        <p>Description : ".$ligne['Description']."</p>
                    </div>
                </div>
            </div>";
    }
}
?>