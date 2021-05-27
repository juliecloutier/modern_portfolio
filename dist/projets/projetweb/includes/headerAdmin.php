<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabriel Forion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Castoro:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<body>
<!-- Newsletter div -->
<div class="newsletter">
         <div class="close">
         <p><a href="#">Fermer</a></p>

         </div>

         
        <h1>  S'inscrire pour la newsletter</h1>
            <form name="mon_form" action="#" method="POST">
                <div>
                    <input type="text" name="nom"  placeholder="Nom">
                </div>
                <div>
                    <input type="text" name="courriel"  placeholder="Courriel">
                </div>
                <div>
                    <input type="submit" value="Soumettre">
                </div>
            </form>

            
        </div>
      <!-- FIN Newsletter div -->
<div class="container-fluid " id="page-login">
        
        <!-- Menu fixe--> 
        <div class="top-menu row" id="top-menu portfolioMenu" >
            <div class="logo">
                <img src="images/Logo-Gabriel_Forion30Color.png" alt="">
            </div>
            
            <div class="liens">
                <a href="listeProjetAdmin.php">Portoflio</a>
                <a href="ajoutProjet.php">Ajout</a>
                <!-- <a href="profil.php">Profil utilisateur</a> -->
                <a href="index.php">Déconnexion</a>
            </div>
            
            
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
                </a>
            
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a href="listeProjetAdmin.php">Portoflio</a>
                <a href="ajoutProjet.php">Ajout</a>
                <!-- <a href="profil.php">Profil utilisateur</a> -->
                <a href="index.php">Déconnexion</a>                </div>
            </div>
            <div class="admin">
                <a href="profil.php"><img src="images/adminIcon.png" alt=""></a>
            </div>     
        </div>
    <!-- Fin menu fixe -->
    