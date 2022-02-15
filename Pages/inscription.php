<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/styles.css" rel="stylesheet"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <a href="https://icons8.com/icon/77vA1n1-oWl1/garage-fermé">Maison</a>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="./connexion.php"><img src="https://img.icons8.com/doodle/48/000000/garage-closed.png"/></a></a>
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
                        <a class="nav-link" style="border-radius:50px" href="./Pages/connexion.php"><button>Se Connecter</button></a>
                    </li>
                </ul>
                </div>
            </div>

        </nav>
        </header>
     
    <form class="box" style="margin-top:10%;" method="POST" action="../PHP/valideInscription.php">
            
                <h2><strong><em> Inscription</em></strong></h2>
                <br>
                <div class="row">
                    <input id="nom" type="text" name="nom" placeholder ="votre nom" size="30" maxlength="45">
                </div>
                <div class="row">
                    <input id="prenom" type="text" name="prenom" placeholder ="votre prénom" size="30" maxlength="45">
                </div>
                <div class="row">
                    <input id="email"  type="email"  name="mail" placeholder ="votre adresse mail"  size="30" required>
                </div>
                <div class="row">
                    <input id="adresse"  type="text"  name="adresse" placeholder ="votre adresse"  size="30" required>
                </div>
                <div class="row">
                    <input id="tel"  type="text"  name="tel" placeholder ="votre numéro de téléphone"  size="30" required>
                </div>
                <div class="row">
                    <input id="login" type="text" name="login" placeholder ="votre identifiant" size="30" maxlength="45" required>
                </div>
                <div class="row">
                    <input id="mdp"  type="password"  name="mdp" placeholder ="votre mot de passe" size="30" maxlength="45" required>
                </div>
                <br>
                <hr id="barre">       
                    <input type="submit" value="enregistrer" name="enregistrer">
            </form>
</body>
</html>