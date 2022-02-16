<?php 
include("./cnx.php");

    $info = htmlspecialchars($_GET['info']);
    $sql2 = $cnx->prepare("Select * from service where Description like'%".$info."%' or categorie like '%".$info."%'");
    $sql2->execute();

    foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
    {
        echo "<div class='container_service'>
            <div class='row'>
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
                    <p>Prix :</p>
                </div>
                <br>
                <div class='row'>
                    <p>Description : </p>
                </div>
            </div>
            </div>";
    }


/* if(isset($_GET['user'])){
    $user = (String) trim($_GET['user']);
 
    $req = $cnx->prepare("Select * from service where Description like'".$user."%' or categorie like '".$user."%'");
 
    $req = $req->fetchALL();
  
    foreach($req as $r){
        echo "<div class='container_service'>
        <div class='row'>
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
                <p>Prix :</p>
            </div>
            <br>
            <div class='row'>
                <p>Description : </p>
            </div>
        </div>
        </div>";
    }
  }  */
?>