<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/styles.css" rel="stylesheet"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
                     
    <form class="box" method="POST" action="../PHP/valideConnexion.php">

        <h2><strong><em> Authentification</em></strong></h2>
        <br>
        <div class="row">
            <input id="login" type="text" name="login" placeholder ="identifiant" size="30" maxlength="45" required>
        </div>
        <div class="row">
            <input id="mdp"  type="password"  name="mdp" placeholder ="mot de passe" size="30" maxlength="45" required>
        </div>
        <p>mot de passe oublié ?<a href="#"> Cliquez ici !</a></p>
        <br>
        <center><hr id="barre"></center>
            <input type="submit" value="Valider" name="valider">
        <p>Vous avez pas encore de compte ?<a href="./inscription.php"> Inscrivez-vous ici !</a></p> 
    </form>

</body>
</html>