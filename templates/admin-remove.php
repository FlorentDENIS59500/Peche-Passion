<?php
require_once "../src/model.php";

$db = connectDb();
require("auth.php");
$login = new Login;
$login->authorize();
$sqlRequest = 'SELECT DISTINCT TYPE_BIERE FROM beer';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$TYPE_BIERE = 'Blonde';
if (isset($_GET['choix'])) {
    $TYPE_BIERE = $_GET['choix'];
}
$sqlRequest2 = 'SELECT * FROM beer WHERE TYPE_BIERE = :TYPE_BIERE';
$sqlResponse2 = $db->prepare($sqlRequest2);
$sqlResponse2->bindParam('TYPE_BIERE', $TYPE_BIERE, PDO::PARAM_STR);
$sqlResponse2->execute();
$results2 = $sqlResponse2->fetchAll(PDO::FETCH_OBJ);

$db = disconnectDb();
require("head.php");
require('header-admin.php');
?>
<div class="photo-pub">
    <img src="..\assets\img\background\bass-boat3.jpg" class="img-bass-boat" alt="img-bass-boat3">
</div>
<div class="remove-biere mb-3">
    <h1>Supression d'une photo</h1>
</div>
<div class="remove-biere">
    <form class="form-frame" method="POST" action="admin-remove-2.php">
        <div class="mb-3">
            <h2 for="genreselect2" class="form-labeladmin">Selectionnez une photo :</h2>
        </div>
        <select class="form-select" id="choix2" name="choix2">
            <?php
            foreach ($results2 as $catbiere2) {
            ?>
                <option value="<?= $catbiere2->ID_BIERE ?>"> <?= $catbiere2->NOM_BIERE ?></option>
            <?php
            }
            ?>
        </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SUPPRIMER</button>
        </div>
        <div class="mb-3">
            <button type="button"><a class="btn btn-primary" href="admin-add.php" style="color: red">Annuler</a></button>
        </div>
    </form>
</div>
<?php
require 'footer.php';
?>