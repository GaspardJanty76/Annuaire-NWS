<?php
if (isset($_POST['modifier'])) {
    include('connexion.php');

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

            if ($stmt->execute()) {
                echo "L'élève a été mis à jour avec succès.";
            } else {
                echo "Erreur lors de la mise à jour de l'élève : " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Erreur de préparation de la requête : " . $connexion->error;
        }
    }

    $connexion->close();
}
?>
