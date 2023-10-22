<?php
function compterLignesEleves() {
    include ('connexion.php');
    $connexion = connexionBdd();

    $sql = "SELECT COUNT(*) AS nombre_lignes FROM eleves WHERE suppression = 0";

    $resultat = $connexion->query($sql);

    if ($resultat) {
        $ligne = $resultat->fetch_assoc();
        $nombre_lignes = $ligne['nombre_lignes'];
        return $nombre_lignes;
    } else {
        return "Erreur lors de l'exécution de la requête : " . $connexion->error;
    }

    $connexion->close();
}


?>
