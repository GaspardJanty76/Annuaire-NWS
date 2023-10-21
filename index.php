<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="shortcut icon" href="img/logoonglet.png" />
    <link rel="stylesheet" type="text/css" href="https://normandiewebschool.fr/assets/css/main.min.0754b8da326cf187918da6de8712da35f2709f482377d5598b61e7e219ce1eda.css" media="screen">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sofia-pro">
    <title>Inscription</title>
    
</head>
<?php include ('methodes/post.php'); ?>
<body>
    <nav class="c-navbar-light">
        <a class="logo" href="index.php"><img class="logonws" src="img/logo.png" alt=""></a>
        <a class="" href="index.php">Ajouter un contact</a>
        <a class="" href="modifier.php">Modifier un contact</a>
        <a class="" href="lister.php">Lister les contacts</a>
    </nav>

    <div class="form-style-8">
        <form method="post">
            <input type="text" name="nom" placeholder="Nom" required/>
            <input type="text" name="prenom" placeholder="Prenom" required/>
            <input type="email" name="email" placeholder="Email" required/>
            <input type="phone" name="numero" placeholder="Téléphone" required/>
            <select id="spe" name="spe">
                <optgroup label="Spécialité envisagée">
                    <option value="Web Marketing">Web Marketing</option>
                    <option value="Communication Graphique">Communication Graphique</option>
                    <option value="Community Management">Community Management</option>
                    <option value="Développement Web">Développement Web</option>
                    <option value="Ne sais pas encore">Ne sais pas encore</option>
                </optgroup>
            <br>
            <br>
            <input type="submit" value="Ajouter un contact" />
        </form>
    </div>

<div class="bottom-decoration">
    <div class="red"></div>
    <div class="blue"></div>
    <div class="yellow"></div>
</div>
</body>
</html>