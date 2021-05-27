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
    <!-- Menu -->
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

    <div class="container-fluid" id="first">
        
        <div class="top-menu row" id="top-menu">
            <div class="logo">
                
                <img src="images/Logo-Gabriel_Forion30Color.png" alt="">

                
            </div>
            
            
            
            <div class="liens">
                <a href="index.php">Accueil</a>
                <a href="index.php#biographie">Bio</a>
                <a href="portfolio.php">Portfolio</a>
                <a href="index.php" class="link_newsletter">Newsletter</a>
            </div>
            
            
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
                </a>
            
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="index.php">Accueil</a>
                    <a class="dropdown-item" href="index.php#biographie">Bio</a>
                    <a class="dropdown-item" href="portfolio.php">Portfolio</a>
                    <a class="dropdown-item" href="login.php">Admin</a>
                    <a href="index.php" class="dropdown-item link_newsletter2">Newsletter</a>
                </div>
            </div>
            <div class="admin">
                <a href="login.php"><img src="images/adminIcon.png" alt=""></a>
            </div>

            
        </div>

        <!-- Titre -->
        
            <div id="header">
                <div class="titre row">
                    <div class="texte col-12">
                        <H1>GABRIEL FORION</H1>
                        <p>Compositeur, mélodistre et arrangeur de musique inspiré</p>
                    </div>
                </div>
            </div>
         
            
    </div>

    <!-- Section bio -->
    <div class="bio1 container-fluid" id=biographie>

        <div class="top-bio row">
            <div class="col-3">
                Biographie
            </div>
        </div>

        <div class="row">
           <div class="mini-bio col-6">
                <p> Compositeur, mélodiste et arrangeur de musique inspiré, <span>GABRIEL FORION </span> partage sa vie entre la chanson et la musique de film depuis plusieurs années.</p>
           </div>
        </div>


    </div>
    <div class="bio2 container-fluid">
        <div class="row">
            <div class="portrait col-md-12 col-lg-4">
                <img src="images/GF-4.jpg" alt="">
            </div>
            <div class="bio2-texte col-md-12 col-lg-8">
                <p> 
                    Parmi ces œuvres on retrouve la trame musicale du film « Ghost of him » de STEFAN PSIELBREG, du documentaire « La vie d’Alex Joset » de GABRIEL GUERRERO et du court métrage « Sic Sic Sic » de DANIEL LAITUE.
                </p>

                <p>
                    Toujours un crayon à la main, en 2015-2016 GABRIEL FORION compose la musique des films « Aime-moi comme tu french », d’ANDRÉE FORCÉE; « Les êtres dispendieux », d'ALAIN EDMOND (sa chanson Blue & Green est nominée Meilleure Chanson Originale aux Canadian Screen Awards 2016) et « Gaylord s'en va en guerre » de RENÉ DRAPEAU, pour lequel il remporte à nouveau au Québec le Jutra Meilleure Musique Originale 2016.
                </p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/1rIHzU9oyPk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row video">
            <div class="col-12">
            </div>
        </div>
    </div>

    <div class="bio3 container-fluid">
        <div class="row justify-content-end">

            <div class="last col-lg-4">
                <p>  Stagiaire à Sienne (Italie) auprès du grand ENNIO MORRICONE, il a remporté 6 Félix et Jutra et a été nominé plus de 21 fois aux galas Adisq, Jutra et Genie Awards depuis l'année 2000. ARRANGEUR DE L'ANNÉE en 2010 de même qu'en 2011 pour ses albums « Sun Heat » et « Les Quarks ».</p>
                
                <p>
                    Gabriel Forion signe notamment la musique de « Madam Razzal » (mettant en vedette ABDUL GALEF), film de RÉJEAN GRANEAU nominé pour un Oscar dans la catégorie Best Foreign Language Film, pour lequel il remporte au Québec le Jutra Meilleure musique originale en 2012.</p>
                    
                </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>