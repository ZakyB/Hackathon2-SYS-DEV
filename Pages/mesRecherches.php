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
                getLesRecherches();
            }
        );
    </script>
</head>
    <body style="background-color:#D3D3D3;">
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
                        <a class="nav-link" href="./Services.php">Liste des Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mes Recherches</a>
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
                <div class="col-md-8" style="background-color:white;">
                    <div class="carre" id="mesRecherches">

                    </div>
                </div>
            </div>
        </div>