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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="./connexion.php">
                    <img src="https://img.icons8.com/doodle/48/000000/garage-closed.png"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    </div>
            </div>
    </nav>
    </header>  
    <br>
    <br>
    <h2><center><strong> Conctater</strong></center></h2>                 
    <form method="POST" action="#">
        <br>
        <label for="descriptionService"></label>
        <center>
        <p>
            Votre mail ici :
        </p>
        <textarea id="Description" name="Description du service"
          rows="4" cols="30">
        
        </textarea>
        </center>
        <br>
            <center>
            <input type="submit" value="Envoyer" name="valider"> 
            </center>
    </form>

</body>
</html>