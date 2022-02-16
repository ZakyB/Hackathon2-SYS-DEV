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
</head>
    <body>
        <!-- Navigation -->
        <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.php"><img src="https://img.icons8.com/doodle/48/000000/garage-closed.png"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Demande de Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mes Recherches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="border-radius:50px" href="#"><button>Mon Profil</button></a>
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

                <div class="search" style="width:600px;margin-top:5%;padding: 30px 40px;">

                <center><form method="GET">
                    <div class="row">
                        <input type="search" id="search" style="width:600px;height:40px" placeholder="Search" name="s">
                    </div>
                    <br>
                        <input type="submit" name="envoyer" style="width=400px;padding:5px 10px;border-radius:15px;" value="Rechercher" onclick="Rechercher()">
                </form></center>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="carre" id="Services">

                    <!-- <br>
                    <div class="container_service">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="case_img">
                                    <img src="../Img/36b1a6da822d3b0d4eaef522260a8431.jpg">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <p>Titre de l'annonce</p>
                                </div>
                                <div class="row">
                                    <p>Prix : </p>
                                </div>
                                <br>
                                <div class="row">
                                    <p>Description : Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre . Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container_service">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="case_img">
                                    <img src="./Img/36b1a6da822d3b0d4eaef522260a8431.jpg">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <p>Titre de l'annonce</p>
                                </div>
                                <div class="row">
                                    <p>Prix : </p>
                                </div>
                                <br>
                                <div class="row">
                                    <p>Description : Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre . Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container_service">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="case_img">
                                    <img src="./Img/36b1a6da822d3b0d4eaef522260a8431.jpg">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <p>Titre de l'annonce</p>
                                </div>
                                <div class="row">
                                    <p>Prix : </p>
                                </div>
                                <br>
                                <div class="row">
                                    <p>Description : Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre . Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    </div>
                </div>
            </div>
        </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>