<?php

include("includes/header.php"); ?>
    

    <div id="login" class="container">
        <div class="col-6 form">

            <div class="row erreur">
                <div class="col-12">
                <?php if(isset($_GET["erreur"]) ){ ?>
        <p class="erreur">
            Votre pseudo ou mot de passe est incorrect.
        </p>
    <?php } ?>

    <?php if(isset($_GET["creation_compte"]) == true ){ ?>
        <p class="info">
            Votre compte a été créer avec succès.
        </p>
    <?php } ?>
                </div>
            </div>
        
            <div class="row formulaire-login">
                <div class="col-12">
                    <form action="loginSubmit.php" method="post">
                        <div>
                            <label>Nom d'utilisateur: <input type="text" name="username" placeholder="Nom d'utilisateur"></label> 
                        </div>
                        <div>
                            <label>Mot de passe: <input type="password" name="password" placeholder="Mot de passe"></label>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Se connecter">
                        </div>
                    </form>

                    <a href="creerCompte.php"> Se créer un compte</a>
                </div>
            </div>

        </div>
    </div>

    <?php include("includes/footer.php"); ?>

