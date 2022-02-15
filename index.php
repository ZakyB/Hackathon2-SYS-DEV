<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./CSS/styles.css" rel="stylesheet"></script>
    <script src="./JS/mesFonctions.js"></script>
    <script src="./JS/JQuery_3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
        <!-- Navigation -->
        <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Je Remplis mes Bourses</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Demande de Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="border-radius:50px" href="./Pages/connexion.php"><button>Se Connecter</button></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        </header>

        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="search">

                    <center><form method="GET">
                        <div class="row">
                            <input type="search" placeholder="Search" name="s">
                        </div>
                        <div class="row">
                            <input type="submit" name="envoyer" style="width=400px;" onclick="Rechercher()">
                        </div>
                    </form></center>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="carre">
                    
                    <br>
                    <div class="container_service" id="Services">
                    </div>

                    </div>
                </div>
            </div>
        </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>