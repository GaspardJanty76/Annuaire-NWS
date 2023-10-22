<?php
<<<<<<< HEAD
<<<<<<< Updated upstream
if (isset($_POST['modifier'])) {
    include('connexion.php');
    $connexion = connexionBdd();
=======
=======
include_once __DIR__ . '/../templates/header.php';
>>>>>>> c701f9fe232e3adf8463d6f64fe3be8d7d2bc6b2
function modifierEleves() {
    if (isset($_POST['modifier'])) {
        include('connexion.php');
        $connexion = connexionBdd();
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> c701f9fe232e3adf8463d6f64fe3be8d7d2bc6b2

        $count = count($_POST['ideleves']);

        for ($i = 0; $i < $count; $i++) {
            $ideleves = $_POST['ideleves'][$i];
            $nom = $_POST['nom'][$i];
            $prenom = $_POST['prenom'][$i];
            $email = $_POST['email'][$i];
            $tel = $_POST['tel'][$i];
            $specialite = $_POST['specialite'][$i];

            $sql = "UPDATE eleves SET nom = ?, prenom = ?, email = ?, tel = ?, specialite = ? WHERE ideleves = ?";
            $stmt = $connexion->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("sssssi", $nom, $prenom, $email, $tel, $specialite, $ideleves);
                $stmt->execute();
                $stmt->close();
            } else {
                echo "Erreur de préparation de la requête : " . $connexion->error;
            }
        }
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
        header("Location:../success.php");
        $connexion->close();
>>>>>>> Stashed changes
    }
    echo "L'élève a été mis à jour avec succès.";

<<<<<<< Updated upstream
    $connexion->close();
}
=======

>>>>>>> Stashed changes
=======
        echo "L'élève a été mis à jour avec succès.";

        $connexion->close();
    }
}
modifierEleves();

include_once __DIR__ . '/../templates/footer.html';
>>>>>>> c701f9fe232e3adf8463d6f64fe3be8d7d2bc6b2
?>
