<?php

include("includes/header.php"); ?>
    

<div id="login" class="container-fluid">

        <div class="row erreur">
            <div class="col-12">
                <h1 >Créer un compte</h1>

                <p>
                    <a href="login.php"> Retour à la connexion</a>
                </p>
                <?php if(isset($_GET["erreur"])) { ?> 
                    <p class="erreur"> Une erreur est survenu</p>
                <?php } ?>

                <form action="creerCompteSubmit.php" method="post">
                    <div>
                        <label>Nom d'utilisateur: <input type="text" name="username" placeholder="Nom d'utilisateur"></label>
                    </div>
                    <div>
                        <label>Mot de passe: <input type="password" name="password" placeholder="Mot de passe"></label>
                    </div>
                
                    <div>
                        <input type="submit" value="Créer un compte">    
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>