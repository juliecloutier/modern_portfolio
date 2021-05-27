<?php

include("includes/headerAdmin.php"); ?>
<div id="login" class="container">
    <div class="row">
        <div class="col-12 form">
            <div class="row erreur">
                <div class="col-12">
                    <h1>Ajout projet</h1>
                </div>
            </div>
        
            <div class="row formulaire-login">
                <div class="col-12">
                    <form action="ajoutProjetSubmit.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label>
                                Titre:
                                <input name="titre" type="text">
                            </label>
                        </div>
                        <div>
                            <label>Description:
                                <textarea name="description" type="text" class="form-control" rows="10" id="description"></textarea>
                            </label>
                        </div>
                        <div>
                            <label>
                                Image:
                                <input name="image" type="file">
                            </label>
                        </div>
                        <div>
                            <label>
                                Audio:
                                <input name="audio" type="file">
                            </label>
                        </div>
                        <div>
                            <input type="submit" value="Enregistrer le projet">
                        </div>
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <a href="listeProjetAdmin.php">Retour page projet admin</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>