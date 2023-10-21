<?php

function listerEleves() {
    $connexion = connexionBdd();
    $sql1 = "SELECT * FROM eleves WHERE suppression = 0 ORDER BY nom ";
    $resultat1 = $connexion->query($sql1);

    if ($resultat1->num_rows > 0) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nom</th>';
        echo '<th>Prénom</th>';
        echo '<th>Email</th>';
        echo '<th>Téléphone</th>';
        echo '<th>Spécialité</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $resultat1->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["nom"] . '</td>';
            echo '<td>' . $row["prenom"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '<td>' . $row["tel"] . '</td>';
            echo '<td>' . $row["specialite"] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo "Aucun résultat trouvé dans la table 'eleves'.";
    }

    $connexion->close();
}

?>
