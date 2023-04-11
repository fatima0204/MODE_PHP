<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Accueil | MODE</title>
    </head>

    <body>
        
        <header>
            <h1>MODE</h1>

            <div class="slogan-div">
            <h3 class="slogan">Trouver votre style</h3>
            </div>
            
            <div id="nav-bar">
                <ul>
                    <a href="index.php?page=accueil" ><li>Accueil</li></a>
                    <a href="index.php?page=conseils"><li>Conseils</li></a>
                    
                    <li>Mon Compte </li>
                    <li>Panier</li>

                    <div id="search">
                    <input id="searchbar" onkeyup="Recherches" type="text"
                    name="search" placeholder="Recherches">
                    <img src="./img/icon_search.png" alt="icon_search" class="search-icon">
                    </div>
                </ul>
            </div>

        </header>

        


        <div class="container">
            <h1 class="titre"><?php echo $titre?></h1>
            <?php echo $content ?> 
        </div>

        <footer>

            <div>
                <ul>Mentions légales</ul>
                <ul>Informations</ul>
                <ul>Nous Contacter</ul>
            </div>

            <div class="center">
                <h2>MODE</h2><br><br>
                <p>Copyright 2022 tous droits réservés</p><br><br>
            
                <img class= "logomedia" src="../img/facebook.png" alt="logofacebook">
                <img class= "logomedia" src="../img/instagram.png" alt="logoinstagram">
                <img class= "logomedia" src="../img/snapchat.png" alt="logosnapchat">
            </div>

            <div>
                <ul>Connexion</ul>
                <ul>Articles</ul>
                <ul>Accueil</ul>
            </div>

            

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="./Bootstrap-vue/js/bootstrap.js"></script>
    </body>

</html>