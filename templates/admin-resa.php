<?php
require_once "../src/model.php";

$db = connectDb();
require("auth.php");
$login = new Login;
$login->authorize();
$sqlRequest = 'SELECT * FROM Reservation ';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$db = disconnectDb();
require("head.php");
require('header-admin.php');
?>
<div class="photo-pub">
    <img src="..\assets\img\background\bass-boat3.jpg" class="img-bass-boat" alt="img-bass-boat3">
</div>
<div class="show-resa">
    <H1>Liste des réservations en cours</H1>
</div>
<div class="show-resa">
    <form class="form-frame"method="post" action="admin-resa-2.php">
        <div class="mb-2">
            <H3 class="form-label">Selectionnez une reservation :</H3>
        </div>
        <select class="form-select" id="idresa" name="idresa">
            <?php
            foreach ($results as $listresa) {
            ?>
                <option value="<?= $listresa->ID_RESERVATION ?>"><?= 'ID : ' . $listresa->ID_RESERVATION . ' / ' . $listresa->NOM . ' - ' . $listresa->PRENOM . ' Date :' . $listresa->DATES ?></option>
            <?php
            }
            ?>
        </select>
        <div class="mb-2">
            <button type="submit" class="btn btn-primary">Confirmer selection</button>
        </div>
        <div class="mb-2">
            <button type="button"><a href="admin-resa.php" class="btn btn-primary" style="color: red">Annuler</a></button>
        </div>
    </form>
</div>
<div class="foot"></div>
<?php
require 'footer.php';
?>