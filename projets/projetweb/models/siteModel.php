<?php

include("includes/bdd.php");

function getProjet($id) {
    global $bdd;

    $sql = "
        SELECT *
        FROM projets
        WHERE id = '$id'
    ";

    $resultat = mysqli_query($bdd, $sql);

    return mysqli_fetch_assoc($resultat);
}

function getProjets() {
    global $bdd;
    
    $sql = "
        SELECT *
        FROM projets
    ";

    return mysqli_query($bdd, $sql);
}


function getUser($username) {
    global $bdd;

    $sql = "
        SELECT id, username, password 
        FROM utilisateurs
        WHERE 
            username = '$username'
    ";

    return mysqli_query($bdd, $sql);
}



function ajouterProjet($titre, $description, $destination_image, $destination_audio) {
    global $bdd;

    $sql = "
        INSERT INTO projets
            (titre, description, image, audio)
        VALUES
            ('$titre', '$description', '$destination_image', '$destination_audio')
    ";

    return mysqli_query($bdd, $sql);
}

function modifierProjet($id,$titre, $description, $destination_image, $destination_audio) {
    global $bdd;

    $sql = "
        UPDATE projets
        SET
            titre = '$titre',
            description = '$description',
            image = '$destination_image',
            audio = '$destination_audio'
        WHERE id = $id
    ";

    
    
    return mysqli_query($bdd, $sql);
}

function supprimerProjet($id) {
    global $bdd;

    $sql = "
        DELETE FROM projets
        WHERE id = $id
    ";

    return mysqli_query($bdd, $sql);
}



function creerCompte($username,$password){
    global $bdd;

    $sql = "
    INSERT INTO utilisateurs 
        (username, password)
    VALUES
        ('$username', '$password')

";

 return mysqli_query($bdd, $sql);
}

