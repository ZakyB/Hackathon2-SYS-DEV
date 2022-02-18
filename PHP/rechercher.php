<?php 
include("./cnx.php");

    $info = htmlspecialchars($_GET['info']);
    $cat = htmlspecialchars($_GET['cat']);
    
    if($cat == "0" ){
        $sql2 = $cnx->prepare("Select * from service INNER JOIN categorie ON service.categorie = categorie.id where Description like'%".$info."%' or libelle like '%".$info."%' or titreService like '%".$info."%'");
        $sql2->execute();
    
        foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<div class='container_service'>
            <div class='row'>
                <div class='col-md-4'>
                    <div class='case_img'>
                        <img src='../Img/36b1a6da822d3b0d4eaef522260a8431.jpg'>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class='row'>
                        <h4 style='font: size 20px;font-weight: bold;' ><em>".$ligne['TitreService']."</em></h4>
                    </div>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Prix : </strong>".$ligne['Prix']." €</p>
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
                <div class='col-md-4'>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Description : </strong>".$ligne['Description']."</p>
                    </div>
                </div>
            </div>
        </div>"; 
        }
    }else{
        $sql2 = $cnx->prepare("Select * from service INNER JOIN categorie ON service.categorie = categorie.id where service.categorie=".$cat." AND (Description like'%".$info."%' or libelle like '%".$info."%')");
        $sql2->execute();

        foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<div class='container_service'>
            <div class='row'>
                <div class='col-md-4'>
                    <div class='case_img'>
                        <img src='../Img/36b1a6da822d3b0d4eaef522260a8431.jpg'>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class='row'>
                        <h4 style='font: size 20px;font-weight: bold;' ><em>".$ligne['TitreService']."</em></h4>
                    </div>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Prix : </strong>".$ligne['Prix']." €</p>
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
                <div class='col-md-4'>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Description : </strong>".$ligne['Description']."</p>
                    </div>
                </div>
            </div>
        </div>"; 
        }
    }
?>

<?php 
/* include("./cnx.php");

    $info = htmlspecialchars($_GET['info']);
    $cat = htmlspecialchars($_GET['cat']);
    $ville = htmlspecialchars($_GET['ville']);

    if($cat == "0"){
        if($ville == "0"){
            $sql2 = $cnx->prepare("Select * from service INNER JOIN categorie ON service.categorie = categorie.id where Description like'%".$info."%' or libelle like '%".$info."%'");
            $sql2->execute();
        
            foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<div class='container_service'>
                <div class='row'>
                    <div class='col-md-4'>
                        <div class='case_img'>
                            <img src='../Img/36b1a6da822d3b0d4eaef522260a8431.jpg'>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='row'>
                            <h4 style='font: size 20px;font-weight: bold;' ><em>".$ligne['TitreService']."</em></h4>
                        </div>
                        <div class='row'>
                            <p style='text-decoration: underline;'><strong>Prix : </strong>".$ligne['Prix']." €</p>
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
                    <div class='col-md-4'>
                        <div class='row'>
                            <p style='text-decoration: underline;'><strong>Description : </strong>".$ligne['Description']."</p>
                        </div>
                    </div>
                </div>
            </div>"; 
            }
        }else{
            $sql2 = $cnx->prepare("Select * from service INNER JOIN categorie ON service.categorie = categorie.id INNER JOIN ville ON service.ville = ville.id where service.categorie=".$cat." AND (Description like'%".$info."%' or libelle like '%".$info."%')");
            $sql2->execute();

            foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<div class='container_service'>
                <div class='row'>
                    <div class='col-md-4'>
                        <div class='case_img'>
                            <img src='../Img/36b1a6da822d3b0d4eaef522260a8431.jpg'>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='row'>
                            <h4 style='font: size 20px;font-weight: bold;' ><em>".$ligne['TitreService']."</em></h4>
                        </div>
                        <div class='row'>
                            <p style='text-decoration: underline;'><strong>Prix : </strong>".$ligne['Prix']." €</p>
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
                    <div class='col-md-4'>
                        <div class='row'>
                            <p style='text-decoration: underline;'><strong>Description : </strong>".$ligne['Description']."</p>
                        </div>
                    </div>
                </div>
            </div>"; 
            }
        }
    }else{
        $sql2 = $cnx->prepare("Select * from service INNER JOIN categorie ON service.categorie = categorie.id INNER JOIN ville ON service.ville = ville.id where service.categorie=".$cat." AND service.ville=".$ville." AND(Description like'%".$info."%' or ville.libelle like '%".$info."%' or categorie.libelle like '%".$info."%')");
        $sql2->execute();

        foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<div class='container_service'>
            <div class='row'>
                <div class='col-md-4'>
                    <div class='case_img'>
                        <img src='../Img/36b1a6da822d3b0d4eaef522260a8431.jpg'>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class='row'>
                        <h4 style='font: size 20px;font-weight: bold;' ><em>".$ligne['TitreService']."</em></h4>
                    </div>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Prix : </strong>".$ligne['Prix']." €</p>
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
                <div class='col-md-4'>
                    <div class='row'>
                        <p style='text-decoration: underline;'><strong>Description : </strong>".$ligne['Description']."</p>
                    </div>
                </div>
            </div>
        </div>"; 
        }
    } */
?>