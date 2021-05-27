<?php include("includes/headerAdmin.php"); ?>
   

   
    
    <?php while($projet = mysqli_fetch_assoc($projets)) { ?>
<div class="container-fluid projets" id="portfolioProjets">
    <div class="row">
        <div class="col-7 gauche">
            <div class="row">
                <div class="col-6 titre">

                    <h1><?= $projet["titre"]; ?></h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-4 audio">
                    <p>Bande sonore</p>
                    <audio controls>
                        <source src="<?= $projet["audio"]; ?>" type="audio/mpeg">
                    </audio>
                </div>
            </div>
            <div class="row description">
                <div class="col">
                <div class="row">
                    <?= $projet["description"]; ?> 

                </div>   
                   <div class="row">
                       <a href="modifierProjet.php?id=<?= $projet["id"] ?>"><button type="button" class="btn btn-secondary">Modifier</button></a>
                       <a href="supprimerProjet.php?id=<?= $projet["id"] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>  

                   </div>
                </div>
            </div>
        </div>
        <div class="col-1 vide"></div>
        <div class="col-4 droite">
            <img src="<?= $projet["image"]; ?>" alt=""> 
           
        </div>
    </div>
</div>
<?php } ?>

</div>

<?php include("includes/footer.php"); ?>