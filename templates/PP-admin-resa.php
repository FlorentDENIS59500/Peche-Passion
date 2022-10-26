<?php
require_once "../src/model.php";

$db = connectDb();
require("PP-Simple-Auth.php");
$login = new Login;
$login->authorize();
$sqlRequest = 'SELECT * FROM Reservation ';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$db = disconnectDb();
require("PP-head.php");
require('PP-header-admin.php');
?>

<div class="show-resa">
    <h4>Voici la liste des réservation en cours !</h4>
</div>
<div class="show-resa">
    <!-- SELECT GENRE -->
    <form method="post" action="PP-admin-resa-2.php">
        <div class="mb-3">
            <label for="ID" class="form-label">Selectionne une reservation :</label>
            <select class="form-select" id="idresa" name="idresa">
                <?php
                foreach ($results as $listresa) {
                ?>
                    <option value="<?= $listresa->ID_RESERVATION ?>"><?= 'ID : ' . $listresa->ID_RESERVATION . ' / ' . $listresa->NOM . ' - ' . $listresa->PRENOM . ' Date :' . $listresa->DATES ?></option>
                <?php
                }
                ?>

            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Confirmer selection</button>
        </div>
        <div class="mb-3">
            <button type="button"><a href="PP-admin-resa.php">Annuler</a></button>
        </div>
    </form>
</div>


<?php
require 'PP-footer.php';
?>