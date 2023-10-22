<?php include_once 'templates/header.php';?>

    <form method="post">
        <div class="search-container">
            <input type="text" name = "recherche" class="search-box" placeholder="Rechercher...">
            <button class="search-button" name="envoi" type="submit">Rechercher</button>
        </div>
    </form>
    <br>
    <br>

    <?php afficherResultatsRecherche();?>

<?php include_once 'templates/footer.html';?>