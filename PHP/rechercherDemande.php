<?php 
include("./cnx.php");

    $info = htmlspecialchars($_GET['info']);
    $cat = htmlspecialchars($_GET['cat']);
    
    if($cat == "0" ){
        $sql2 = $cnx->prepare("Select * from service INNER JOIN categorie ON service.categorie = categorie.id where Type=1 AND Description like'%".$info."%' or libelle like '%".$info."%' or titreService like '%".$info."%'");
        $sql2->execute();
    
        foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<div class='container_service'>
                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='row'>
                                <h4 style='font: size 20px;font-weight: bold;' ><em>".$ligne['TitreService']."</em></h4>
                            </div>
                            <div class='row'>
                                <p style='text-decoration: underline;'><strong>Budget : </strong>".$ligne['Prix']." €</p>
                            </div>
                            <br>
                            <br>
                            <div class='row'>
                                <p style='text-decoration: underline;'><strong>Categorie : </strong>".$ligne['libelle']."</p>
                            </div>
                            <div class='row'>
                                <p style='text-decoration: underline;'>".$ligne['Adresse']."</p>
                            </div>
                        </div>
                        <div class='col-md-8'>
                            <div class='row'>
                                <p style='text-decoration: underline;'><strong>Description : </strong>".$ligne['Description']."</p>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    }else{
        $sql2 = $cnx->prepare("Select * from service INNER JOIN categorie ON service.categorie = categorie.id where Type=1 AND service.categorie=".$cat." AND (Description like'%".$info."%' or libelle like '%".$info."%')");
        $sql2->execute();

        foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<div class='container_service'>
            <div class='row'>
                <div class='col-md-4'>
                    <div class='row'>
                        <h4 style='font: size 20px;font-weight: bold;' ><em>".$ligne['TitreService']."</em></h4>
                    </div>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Budget : </strong>".$ligne['Prix']." €</p>
                    </div>
                    <br>
                    <br>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Categorie : </strong>".$ligne['libelle']."</p>
                    </div>
                    <div class='row'>
                        <p style='text-decoration: underline;'>".$ligne['Adresse']."</p>
                    </div>
                </div>
                <div class='col-md-8'>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Description : </strong>".$ligne['Description']."</p>
                    </div>
                </div>
            </div>
        </div>";
        }
    }
?>