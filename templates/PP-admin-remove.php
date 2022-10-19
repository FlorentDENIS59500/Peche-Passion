<?php
require_once "../src/model.php";

$db = connectDb();
require("PP-simple-auth.php");
$login = new Login;
$login->authorize();
$sqlRequest = 'SELECT DISTINCT TYPE_beer FROM beer';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$TYPE_beer = 'Blonde';
if (isset($_GET['choix'])) {
    $TYPE_beer = $_GET['choix'];
}
$sqlRequest2 = 'SELECT * FROM beer WHERE TYPE_beer = :TYPE_beer';
$sqlResponse2 = $db->prepare($sqlRequest2);
$sqlResponse2->bindParam('TYPE_beer', $TYPE_beer, PDO::PARAM_STR);
$sqlResponse2->execute();
$results2 = $sqlResponse2->fetchAll(PDO::FETCH_OBJ);

$db = disconnectDb();
require("PP-head.php");
require('PP-header-admin.php');
?>

<div class="remove-beer mb-3">
    <h4>Supression d'une bière, sacrilège!</h4>
</div>
<div class="remove-beer">
    <form method="GET" action="PP-admin-remove.php">

        <!-- SELECT TYPE -->
        <div class="mb-3">
            <label for="genreselect" class="form-labeladmin">Selectionne un type </label>
            <select onchange="this.form.submit()" class="form-select" id="choix" name="choix">

                <?php
                foreach ($results as $catbeer) {
                ?>
                    <option <?php if (isset($_GET['choix']) && ($catbeer->TYPE_beer == $_GET['choix'])) {
                                echo 'selected';
                            } ?> value="<?= $catbeer->TYPE_beer ?>"> <?= $catbeer->TYPE_beer ?></option>
                <?php
                }
                ?>

            </select>
        </div>
    </form>
    <!-- SELECT beer -->
    <form method="POST" action="PP-admin-remove-2.php">
        <div class="mb-3">
            <label for="genreselect2" class="form-labeladmin">Selectionne une bière</label>
            <select class="form-select" id="choix2" name="choix2">
                <?php
                foreach ($results2 as $catbeer2) {
                ?>
                    <option value="<?= $catbeer2->ID_beer ?>"> <?= $catbeer2->NAME_beer ?></option>
                <?php
                }
                ?>

            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SUPPRIMER</button>
        </div>
        <div class="mb-3">
            <button type="button"><a href="PP-admin-remove.php">Annuler</a></button>
        </div>
    </form>
</div>
<?php
require 'PP-footer.php';
?>