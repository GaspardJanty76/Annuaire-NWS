<?php
function connexionBdd() {

    $jsonFile = file_get_contents(__DIR__ .'/../methodes/config.json');
    $config = json_decode($jsonFile);
    
    $connexion = new mysqli($config->host, $config->username, $config->password, $config->database);
    

    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    return $connexion;
}
?>
