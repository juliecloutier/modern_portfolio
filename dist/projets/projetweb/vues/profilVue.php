<?php

include("includes/headerAdmin.php"); ?>


<div id="profil">
    <div class="container">

        <div class="row">
            <div class="col profil-bienvenue">
            <h1> Bienvenue <?=  $username;
                ?></h1>
            
            </div>
        </div>    
    

        
        <div class="row">
            <div class="col-6"><a href="ajoutProjet.php">Ajouter un projet</a></div>
            <div class="col-6"><a href="listeProjetAdmin.php">Modifier les projets</a></div>
        </div>
    </div>
</div>
<?php 
include("includes/footer.php"); ?>