<?php
include_once './Annuaire-NWS/templates/header.php';
include ('connexion.php');
$connexion = connexionBdd();
if (isset($_GET['id'])) {
    $idToDelete = $_GET['id'];

    $sql = "UPDATE eleves SET suppression = 1 WHERE ideleves = $idToDelete";

    if ($connexion->query($sql) === TRUE) {
        echo "L'élève a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'élève : " . $connexion->error;
    }

    
} else {
    echo "ID de l'élève non spécifié.";
}
$connexion->close();

include_once './Annuaire-NWS/templates/footer.html';
