<?php
function afficherResultatsRecherche() {
    if (isset($_POST['envoi'])) {
        $searchKeyword = $_POST['recherche'];

        include('connexion.php');
        $connexion = connexionBdd();

        $sql = "SELECT * FROM eleves WHERE nom LIKE '%$searchKeyword%' AND suppression = 0 OR prenom LIKE '%$searchKeyword%'  AND suppression = 0";
        $result = $connexion->query($sql);

        if ($result->num_rows > 0) {
            echo '<form method="post" action="methodes/update.php">';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Nom</th>'; 
            echo '<th>Prénom</th>';
            echo '<th>Email</th>';
            echo '<th>Téléphone</th>'; 
            echo '<th>Spécialité</th>';
            echo '<th>Modifier</th>';
            echo '<th>Supprimer</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td><input type="text" name="nom[]" value="' . $row["nom"] . '"></td>';
                echo '<td><input type="text" name="prenom[]" value="' . $row["prenom"] . '"></td>';
                echo '<td><input type="text" name="email[]" value="' . $row["email"] . '"></td>';
                echo '<td><input type="text" name="tel[]" value="' . $row["tel"] . '"></td>';
                echo '<td><input type="text" name="specialite[]" value="' . $row["specialite"] . '"></td>';
                echo '<td><input type="hidden" name="ideleves[]" value="' . $row["ideleves"] . '"><input type="submit" name="modifier" value="Modifier"></td>';
                echo '<td><a href="methodes/delete.php?id=' . $row["ideleves"] . '">Supprimer</a></td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
            echo '</form>';
        } else {
            echo '<div style="text-align: center;">';
            echo '<h2>Aucun résultat trouvé pour le nom : '. $searchKeyword .'.</h2>';
            echo '</div>';
        }

        $connexion->close();
    }
}

?>