<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/lister.css">
    <link rel="shortcut icon" href="img/logoonglet.png" />
    <link rel="stylesheet" type="text/css" href="https://normandiewebschool.fr/assets/css/main.min.0754b8da326cf187918da6de8712da35f2709f482377d5598b61e7e219ce1eda.css" media="screen">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sofia-pro">
    <title>Lister les contacts</title>
</head>
<body>
    <?php include ('methodes/getlines.php');?>
    <nav class="c-navbar-light">
        <a class="logo" href="index.php"><img class="logonws" src="img/logo.png" alt=""></a>
        <a class="" href="index.php">Ajouter un contact</a>
        <a class="" href="modifier.php">Modifier un contact</a>
        <a class="" href="lister.php">Lister les contacts</a>
    </nav>
    <div style="text-align: center;">
        <p class=""><?php echo "nombre de contact(s) : " . $nombre_lignes; ?></p>
    </div>
    
    <form method="post">
        <table class="border">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Spécialité</th>
                </tr>
            </thead>
            <tbody>
                <?php include ('methodes/get.php');?>
            </tbody>
        </table>
    </form>

    <div class="bottom-decoration">
    <div class="red"></div>
    <div class="blue"></div>
    <div class="yellow"></div>
</div>
</body>
</html>