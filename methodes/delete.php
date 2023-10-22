<?php
<<<<<<< HEAD
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
=======
include_once './Annuaire-NWS/templates/header.php';
>>>>>>> c701f9fe232e3adf8463d6f64fe3be8d7d2bc6b2
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
header("Location:../success.php");
$connexion->close();
<<<<<<< HEAD
<<<<<<< Updated upstream
=======

?>
>>>>>>> Stashed changes
=======

include_once './Annuaire-NWS/templates/footer.html';
>>>>>>> c701f9fe232e3adf8463d6f64fe3be8d7d2bc6b2
