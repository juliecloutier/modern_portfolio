<?php

session_start();

include("models/siteModel.php");

function portfolioControlleur() {
    $projets = getProjets();
    
    include("vues/portfolioVue.php");
}


function loginControlleur() {

    include("vues/loginVue.php");
}

function loginSubmitControlleur() {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = getUser($username);
    $nombre_resultats = mysqli_num_rows($user);

    if ($nombre_resultats == 1) {
        // utilisateur est correct

        $entree = mysqli_fetch_assoc($user);

        $mot_de_passe_valide = password_verify($password, $entree["password"]);

        if ($mot_de_passe_valide) {
            $_SESSION['utilisateur_id'] = $entree["id"];
            $_SESSION['utilisateur_nom'] = $entree["username"];
            header("location:profil.php");
            exit();
        } else {
            $_SESSION['utilisateur_id'] = null;
            header("location:login.php?erreur=1");
            exit();
        }
    } else {
        // utilisateur est incorrect
        $_SESSION['utilisateur_id'] = null;
        header("location:login.php?erreur=1");
        exit();
    }
}

// page profil
function profilControlleur(){
    verifierUtilisateurConnecter();
    $username = $_SESSION['utilisateur_nom'];

    include("vues/profilVue.php");

}


function listeProjetAdminControlleur() {
    verifierUtilisateurConnecter();

    $projets = getProjets();
    
    include("vues/listeProjetVue.php");
}

function verifierUtilisateurConnecter() {
    if (isset($_SESSION['utilisateur_id']) == false) {
        header("location:index.php");
        exit();
    }
}

function ajoutProjetControlleur() {
    verifierUtilisateurConnecter();

    include("vues/ajoutProjetVue.php");
}

function ajoutProjetSubmitControlleur() {
    verifierUtilisateurConnecter();
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $image = $_FILES["image"]["tmp_name"];
    $audio = $_FILES["audio"]["tmp_name"];

    $destination_image = "images/" . basename($_FILES["image"]["name"]);
    move_uploaded_file($image, $destination_image);
    $destination_audio = "audio/" . basename($_FILES["audio"]["name"]);
    move_uploaded_file($audio, $destination_audio);

    $success = ajouterProjet($titre, $description, $destination_image, $destination_audio);

    if ($success) {
        header("location:listeProjetAdmin.php");
        exit();
    } else {
        header("location:ajoutProjet.php?erreur=1");
        exit();
    }
}



function modifierProjetControlleur() {
    verifierUtilisateurConnecter();

    $id = $_GET["id"];
    $projet = getProjet($id);

    include("vues/modifierProjetVue.php");
}

function modifierProjetSubmitControlleur() {
    verifierUtilisateurConnecter();
    $id = $_POST["id"];
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $image = $_FILES["image"]["tmp_name"];
    $audio = $_FILES["audio"]["tmp_name"];

    $destination_image = "images/" . basename($_FILES["image"]["name"]);
    move_uploaded_file($image, $destination_image);
    
    $destination_audio = "audio/" . basename($_FILES["audio"]["name"]);
    move_uploaded_file($audio, $destination_audio);

    $success = modifierProjet($id, $titre, $description, $destination_image, $destination_audio);

    if ($success) {
        header("location: listeProjetAdmin.php");
    } else {
        header("location: modifierProjet.php?id=$id&erreur=1");
    }
}


function supprimerProjetControlleur(){
    verifierUtilisateurConnecter();

    $id = $_GET["id"];

    $success = supprimerProjet($id);
    
    if ($success) {
        header("location:listeProjetAdmin.php");
        exit();
    } else {
        header("location:listeProjetAdmin.php?erreur=1");
        exit();
    }
}


function creerCompteControlleur(){
      include("vues/creerCompteVue.php");
}


function creerCompteSubmitControlleur(){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    $password = password_hash($password, PASSWORD_DEFAULT);
    
      
    $success = creerCompte($username, $password);
    
    if ($success) {
        //Compte créer
        header("location:login.php?creation_compte=1");
        exit();
    }else {
        //Erreur de création
        header("location:creerCompte.php?erreur=1");
        exit();
    };
}




