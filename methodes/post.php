<?php
// Vérifie si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ('connexion.php');

    // Récupère les données du formulaire soumises via la méthode POST
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $specialite = $_POST["spe"];

    // Requête SQL pour insérer les données du formulaire dans la table "inscrit"
    $sql = "INSERT INTO eleves (nom, prenom, email, tel, specialite, suppression)
            VALUES ('$nom', '$prenom', '$email','$numero','$specialite',0)";

    // Exécute la requête SQL
    if ($connexion->query($sql) === TRUE) {

        // Redirige vers une page de confirmation d'inscription en cas de succès
        header("Location: lister.php");
        exit(); // Arrête l'exécution du script après la redirection
    } else {
        // En cas d'erreur lors de l'exécution de la requête SQL, affiche un message d'erreur
        echo "Error: " . $sql . "<br>" . $connexion->error;
    }

    // Ferme la connexion à la base de données
    $connexion->close();
}
?>
