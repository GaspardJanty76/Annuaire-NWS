<?php include_once 'templates/header.php';?>

<div style="text-align: center;">
    <p class=""><?php $nombreLignes = compterLignesEleves(); echo "nombre de contact(s) : " . $nombreLignes; ?></p>
</div>
<div class="align">
    <form method="GET">
        <select id="triage" name="triage">
            <optgroup label="trier par :">
                <option value="" selected disabled hidden>trier par :</option>
                <option value="tNom">Nom</option>
                <option value="tPrenom">Prénom</option>
                <option value="tEmail">Email</option>
                <option value="tTel">Téléphone</option>
                <option value="tSpe">Spécialité</option>
            </optgroup>
        </select>
        <input type="submit" value="Trier">
    </form>
    <button type="button" class="excel" onclick="exportToExcel()"><img src="img/excel-logo.png" alt=""></button>  
        <script>
            function exportToExcel() {
                window.location.href = 'methodes/export.php';
            }
        </script>

</div>

<br>
<br>

<?php
$triage = isset($_GET['triage']) ? $_GET['triage'] : 'tNom';
listerEleves($triage);
?>

<?php include_once 'templates/footer.html';?>