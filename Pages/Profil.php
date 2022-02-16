<?php session_start();
include ("../PHP/cnx.php");
$login = $_SESSION['login'];
$sql = $cnx->prepare('SELECT * from utilisateur where login=?');
$sql->execute([$login]); 
$user = $sql->fetch();

$nom = $user[1];
$prenom = $user[2];
$adresse = $user[3];
$mail = $user[4];
$tel = $user[5];

?>
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
    <br><br><br><br></br></br>

    <div class="container">
        <div class="row">
            <div class="carre" style="border: 2px solid black;border-radius:20px;width:800px">

            <center><br>
            <h2 class="cadre"><center><strong> Mon Profil</strong></center></h2> 
            <br>
            <div class="form-row ">
                <div class="form-group col-md-4">
                    <div class="row">
                        <label for="nom">Votre Nom : </label>
                        <input type="text" name="nom" id="nom" placeholder="<?php echo $nom; ?>" size="30" maxlength="45" disabled>
                    </div>
                    <br>
                    <div class="row">
                        <label for="prennom">Votre Prenom : </label>
                        <input type="text" name="prenom" id="prenom" placeholder="<?php echo $prenom; ?>" size="30" maxlength="45"disabled>
                    </div>
                    <br>
                    <div class="row">
                        <label for="adresse">Votre Adresse : </label>
                        <input type="text" name="adresse" id="adresse" placeholder="<?php echo $adresse; ?>" size="30" maxlength="45" disabled>
                    </div>
                    <br>
                    <div class="row">
                        <label for="mail">Votre adresse e-mail : </label>
                        <input type="text" name="mail" id="mail" placeholder="<?php echo $mail; ?>" size="30" maxlength="45" disabled>
                    </div>
                    <br>
                    <div class="row">
                        <label for="tel">Votre Numéro de téléphone : </label>
                        <input type="text" name="tel" id="tel" placeholder="<?php echo $tel; ?>" size="30" maxlength="45" disabled>
                    </div>
                    <br>
                    <a class="nav-link" style="border-radius:50px" href="#"><button>Modifier mon profil</button></a>
                </div>
            </div>
            </center>
            </div>
        </div>
    </div>