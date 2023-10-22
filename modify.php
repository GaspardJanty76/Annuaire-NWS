<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/modifier.css">
    <link rel="stylesheet" href="css//lister.css">
    <link rel="shortcut icon" href="img/logoonglet.png" />
    <link rel="stylesheet" type="text/css" href="https://normandiewebschool.fr/assets/css/main.min.0754b8da326cf187918da6de8712da35f2709f482377d5598b61e7e219ce1eda.css" media="screen">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sofia-pro">
    <title>Inscription</title>
</head>
<body>
    <?php include ('methodes/search.php');?>
    <nav class="c-navbar-light">
        <a class="logo" href="index.php"><img class="logonws" src="img/logo.png" alt=""></a>
        <a class="" href="index.php">Ajouter un contact</a>
        <a class="" href="modifier.php">Modifier un contact</a>
        <a class="" href="lister.php">Lister les contacts</a>
    </nav>
    <form method="post">
        <div class="search-container">
            <input type="text" name = "recherche" class="search-box" placeholder="Rechercher...">
            <button class="search-button" name="envoi" type="submit">Rechercher</button>
        </div>
    </form>
    <br>
    <br>

    <?php afficherResultatsRecherche();?>




    <div class="bottom-decoration">
        <div class="red"></div>
        <div class="blue"></div>
        <div class="yellow"></div>
    </div>
</body>
</html>