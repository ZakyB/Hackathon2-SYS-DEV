<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../CSS/styles.css" rel="stylesheet"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <a href="https://icons8.com/icon/77vA1n1-oWl1/garage-fermé"></a>
</head>
<body>
        <!-- Navigation -->
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
                        <a class="nav-link" href="./Services.php">Liste des Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./mesRecherches.php">Mes Recherches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="border-radius:50px" href="./Profil.php"><button>Mon Profil</button></a>
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
            <form method="POST" action="../PHP/valideAjoutDemandeServ.php">
            <h2 class="cadre"><center><strong> Demande de services</strong></center></h2>  
            
            <div class="form-row ">
                <div class="form-group col-md-4">
                    <label for="">Titre de la demande de service</label>
                    <input type="text" class="form-control" id="TitreService" name="TitreService">
                    <br>
                    <div class="row">
                        <label for="prix">Budget de la demande de service:</label>
                        <input type="number" id="prix" name="prix">
                        
                        <label for="categorie">Categorie:</label>
                        <input type="text" id="categorie" name="categorie">

                    </div>
                    <br>
                    <label for="">description demande de service :</label>
                    <textarea id="Description" name="description" placeholder="Description du service" rows="5" cols="30"></textarea>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary" value="saveDemande" name="saveDemande">Valider la demande de Service</button>
                    <br>
                </div>
            </div>
                
            </form>
            <br>
            <a href="./DemandesService.php"><button type="submit">Retour</button></a>
            </center>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>