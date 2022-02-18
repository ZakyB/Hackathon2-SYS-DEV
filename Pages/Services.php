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
    <script>
        $
        (
            function(){
                getLesServices();
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
                <a class="navbar-brand" href="#"><img src="https://img.icons8.com/doodle/48/000000/garage-closed.png"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./DemandesService.php">Liste demande de Services</a>
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

        <br><br>
        <a class="nav-link" style="border-radius:50px;margin-top:4%;margin-left:80%;" href="./ajoutServices.php"><button>+ Ajout de Service</button></a>

        <div class="container">
            <div class="row">
                <div class="search" style="width:800px;margin-top:2%;padding: 30px 40px;">

                <center>
                <div class="form-inline">
                    <select name="" id="lstCategories" style="padding: 7px">
                        <option value="0">Catégories</option>
                    </select>
                    <select name="" id="lstVilles" style="padding: 7px">
                        <option value="0">Villes</option>
                    </select>
                    <input style="padding: 4.5px" type="search" id="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success" onclick="Rechercher()">Rechercher</button>
                </div>
                <br>
                <a href="#" name="maRecherche" style="margin-left:60%;">Sauvegarder la recherche</a>
                </center>
                
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="carre" id="Services">

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="carre" id="ServicesRechercher">

                    </div>
                </div>
            </div>
        </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>