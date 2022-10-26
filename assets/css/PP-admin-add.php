<?php
require_once "../src/model.php";
require("PP-Simple-Auth.php");
$login = new Login;
$login->authorize();

$db = connectDb();

$sqlRequest = 'SELECT DISTINCT TYPE_biere FROM beer';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$db = disconnectDb();
require("PP-head.php");
require('PP-header-admin.php');
?>
<div class="add-biere">
    <h4>Saisie d'une nouvelle bière !</h4>
</div>
<div class="add-biere">
    <form method="post" action="PP-admin-add-2.php">
        <div class="mb-3">
            <label for="title-biere-second" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="NAME_biere" name="NAME_biere" required>
        </div>
        <!-- SELECT GENRE -->
        <div class="mb-3">
            <label for="genreselect" class="form-label">Selectionne un type</label>
            <select class="form-select" id="choix" name="choix">
                <?php
                foreach ($results as $catbiere) {
                ?>
                    <option value="<?= $catbiere->TYPE_biere ?>"> <?= $catbiere->TYPE_biere ?></option>
                <?php
                }
                ?>

            </select>
        </div>

        <div class="mb-3">
            <label for="refimg" class="form-label">Affiche :</label>
            <input type="text" class="form-control" id="PHOTO_biere" name="PHOTO_biere" required>
        </div>

        <div class="mb-3">
            <label for="resume" class="form-label">Résumé :</label>
            <textarea type="text" name="Message" id="Message" rows="6" cols=35 required></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">CREER</button>
        </div>
        <div class="mb-3">
            <button type="button"><a href="PP-admin-add.php">Annuler</a></button>
        </div>
    </form>
</div>
<?php
require 'PP-footer.php';
?>