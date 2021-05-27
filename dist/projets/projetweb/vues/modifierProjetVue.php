<?php

include("includes/headerAdmin.php"); ?>

    <div id="login" class="container">
        <div class="col-6 form">

            <div class="row erreur">
                <div class="col-12">
                <h1>Modifier projet</h1>
                <form action="modifierProjetSubmit.php" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="id" value="<?= $projet["id"] ?>">
                    <div>
                        <label>
                            Titre:
                            <input name="titre" type="text" value="<?= $projet["titre"] ?>">
                        </label>
                    </div>
                    <div>
                    <label>
                            Description:
                            <input name="description" type="text" value="<?= $projet["description"] ?>">
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
                        <input type="submit" value="Modifier le projet">
                    </div>
                </form>
                </div>
            </div>

        </div>
    </div>
    <?php include("includes/footer.php"); ?>