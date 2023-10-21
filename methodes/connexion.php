<?php
function connexionBdd() {
    $serveur = "localhost";
    $port = 8888;
    $utilisateur = "root";
    $motdepasse = "1597";
    $basededonnees = "inscriptionnws";

    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees, $port);

    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    return $connexion;
}
?>
