<?php
function listerEleves($triage) {
    $connexion = connexionBdd();

    switch ($triage) {
        case 'tNom':
            $sql = "SELECT * FROM eleves WHERE suppression = 0 ORDER BY nom";
            break;
        case 'tPrenom':
            $sql = "SELECT * FROM eleves WHERE suppression = 0 ORDER BY prenom";
            break;
        case 'tEmail':
            $sql = "SELECT * FROM eleves WHERE suppression = 0 ORDER BY email";
            break;
        case 'tTel':
            $sql = "SELECT * FROM eleves WHERE suppression = 0 ORDER BY tel";
            break;
        case 'tSpe':
            $sql = "SELECT * FROM eleves WHERE suppression = 0 ORDER BY specialite";
            break;
        default:
            $sql = "SELECT * FROM eleves WHERE suppression = 0 ORDER BY nom";
            break;
    }

    $resultat = $connexion->query($sql);

    if ($resultat->num_rows > 0) {
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

        while ($row = $resultat->fetch_assoc()) {
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