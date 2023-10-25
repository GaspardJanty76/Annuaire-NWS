<?php include_once 'templates/header.php';?>
    <div class="form-style-8">
        <form method="post">
            <input type="text" name="nom" placeholder="Nom" required/>
            <input type="text" name="prenom" placeholder="Prenom" required/>
            <input type="email" name="email" placeholder="Email" required/>
            <input type="phone" name="numero" placeholder="Téléphone" required/>
            <select id="spe" name="spe">
                <optgroup label="Spécialité envisagée">
                    <option value="" selected disabled hidden>Spécialité envisagée</option>
                    <option value="Web Marketing">Web Marketing</option>
                    <option value="Communication Graphique">Communication Graphique</option>
                    <option value="Community Management">Community Management</option>
                    <option value="Développement Web">Développement Web</option>
                    <option value="Ne sais pas encore">Ne sais pas encore</option>
                </optgroup>
            <br>
            <input type="submit" value="Ajouter un contact" />
        </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $numero = $_POST["numero"];
            $specialite = $_POST["spe"];
            ajouterEleve($nom, $prenom, $email, $numero, $specialite);}
        ?>
    </div>
<?php include_once 'templates/footer.html';?>