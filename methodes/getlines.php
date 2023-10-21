<?php
function compterLignesEleves() {
    include ('connexion.php');
    $connexion = connexionBdd();

    $sql2 = "SELECT COUNT(*) AS nombre_lignes FROM eleves WHERE suppression = 0";

    $resultat2 = $connexion->query($sql2);

    if ($resultat2) {
        $ligne = $resultat2->fetch_assoc();
        $nombre_lignes = $ligne['nombre_lignes'];
        return $nombre_lignes;
    } else {
        return "Erreur lors de l'exécution de la requête : " . $connexion->error;
    }

    $connexion->close();
}


?>
