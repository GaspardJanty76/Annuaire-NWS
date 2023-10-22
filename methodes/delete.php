<?php
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
include ('connexion.php');
$connexion = connexionBdd();
if (isset($_GET['id'])) {
    $idToDelete = $_GET['id'];

    $sqlDelete = "UPDATE eleves SET suppression = 1 WHERE ideleves = $idToDelete";

    if ($connexion->query($sqlDelete) === TRUE) {
        echo "L'élève a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'élève : " . $connexion->error;
    }

    
} else {
    echo "ID de l'élève non spécifié.";
}
header("Location:../success.php");
$connexion->close();
<<<<<<< Updated upstream
=======

?>
>>>>>>> Stashed changes
