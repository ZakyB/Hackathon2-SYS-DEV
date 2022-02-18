<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../CSS/styles.css" rel="stylesheet"></script>
    <script src="../JS/mesFonctions.js"></script>
    <script src="../JS/JQuery_3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <a href="https://icons8.com/icon/77vA1n1-oWl1/garage-fermé"></a>
    <script>
        $
        (
            function(){
                getLesCategories();
                getLesVilles();
            }
        );
    </script>
</head>
<body>
    <!-- Navigation -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./Services.php"><img src="https://img.icons8.com/doodle/48/000000/garage-closed.png"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./DemandesService.php">Demande de Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./mesRecherches.php">Mes Recherches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="border-radius:50px" href="#"><button>Mon Profil</button></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="carre" style="border: 2px solid black;border-radius:20px;width:800px">

                <center>
                <form method="POST" action="../PHP/insert_Services.php">
                <h2 class="cadre"><center><strong> Ajout d'un Service</strong></center></h2> 

                <div class="form-row ">
                    <div class="form-group col-md-4">
                    <br>
                    <div class="row">
                        <label for="titreService">Titre du service</label>
                        <input type="text" name="titre" id="titreService" placeholder="Titre du service" size="30" maxlength="45">
                    </div>
                    <br>
                    <div class="row">
                        <label for="">Catégories du service</label>
                        <select name="categorie" id="lstCategories">
                            <option value="0">Catégories</option>
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <label for="">Ville du service</label>
                        <select name="ville" id="lstVilles">
                            <option value="0">Villes</option>
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <label for="img">Vos images:</label>
                        <input type="file" id="img">
                    </div>
                    <br>
                    <div class="row">
                        <label for="prix">Prix du Service:</label>
                        <input type="number" id="prix" name="prix">
                    </div>
                    <br>
                    <div class="row">
                        <label for="descriptionService">Description du service :</label>
                        <textarea id="Description" name="description" placeholder="Description du service" rows="5" cols="30"></textarea>
                    </div>
                        <br><br>
                    <div class="row">
                        <button type="submit"style="margin-bottom:10px" name="valider">Enregistrer</button>
                    </div>
                    </div>
                </div>
            </form>
            <a href="./Services.php"><button type="submit">Retour</button></a>
            </center>

            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>