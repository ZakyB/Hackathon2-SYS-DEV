<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/CSS/styles.css" rel="stylesheet"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <a href="https://icons8.com/icon/77vA1n1-oWl1/garage-fermé"></a>
</head>
    <body>
        <!-- Navigation -->
        <header>
        <nav class="navbar navbar-expand-lg navbar-green bg-blue fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/Hackathon2-SYS-DEV/index.php"><img src="https://img.icons8.com/doodle/48/000000/garage-closed.png"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services proposés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">mes Recherches</a>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="#">mon profil</a>
                    </li>

                </ul>
                </div>
            </div>
        </nav>
        </header>
        <br>
        <br>
        <br>
        <h2><center><strong> Ajout d'un Service</strong></center></h2>    
        <form>
    <center>

        <div class="form-row ">
    <div class="form-group col-md-4">
     
    <p>
       <h2> Photo utilisateur : </h2>
    </p>
    <label for="photoUtilisateur"></label>
    <img src="./Img/36b1a6da822d3b0d4eaef522260a8431.jpg">
    <br>
    <br>


      <label for="titreService"></label>
      <input type="text" class="form-control" id="Service" placeholder="Titre du service">
      
    <br>
    <label for="descriptionService"></label>

<textarea id="Description" name="Description du service"
          rows="4" cols="30">
Le service .....
</textarea>
    <br>
    <br>
  <button type="submit" class="btn btn-primary">Enregistrer le Service</button>
  <br>
  <br>
  <a href="./ajoutDemandeServices.php" class="btn btn-primary btn-lg " 
    tabindex="-1" role="button">Retour</a>
  </div>
</div>
</center>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>