<?php
// Inclure le fichier 'connexion.php', qui contient les informations de connexion à la base de données
include ('connexion.php');


// Requête SQL pour compter le nombre total de lignes dans la table "inscrit"
$sql2 = "SELECT COUNT(*) AS nombre_lignes FROM eleves WHERE suppression = 0";


// Exécution de la requête SQL2 pour compter le nombre de lignes dans la table "inscrit"
$resultat2 = $connexion->query($sql2);

// Vérifier si la requête SQL2 a été exécutée avec succès
if ($resultat2) {
    // Récupérer le résultat de la requête SQL2 en tant qu'objet associatif
    $ligne = $resultat2->fetch_assoc();

    // Afficher le nombre de lignes dans la table "inscrit"
    $nombre_lignes = $ligne['nombre_lignes'];

} else {
    // En cas d'erreur lors de l'exécution de la requête SQL2, afficher un message d'erreur
    echo "Erreur lors de l'exécution de la requête : " . $connexion->error;
}

// Vérifier s'il y a des résultats de la requête SQL1

// Fermer la connexion à la base de données
$connexion->close();
?>
