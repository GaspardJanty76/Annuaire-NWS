<?php
function ajouterEleve($nom, $prenom, $email, $numero, $specialite) {
    include ('connexion.php');
    $connexion = connexionBdd();

    $sql = "INSERT INTO eleves (nom, prenom, email, tel, specialite, suppression)
            VALUES ('$nom', '$prenom', '$email', '$numero', '$specialite', 0)";

    if ($connexion->query($sql) === TRUE) {
        
        header("Location: list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connexion->error;
    }


    $connexion->close();
}

?>
