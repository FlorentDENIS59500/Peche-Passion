<?php
require_once "../src/model.php";

$db = connectDb();
require("auth.php");
$login = new Login;
$login->authorize();
$sqlRequest = 'SELECT DISTINCT TYPE_PHOTO FROM photo';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$TYPE_PHOTO = 'brochet';
if (isset($_GET['choix'])) {
    $TYPE_PHOTO = $_GET['choix'];
}
$sqlRequest2 = 'SELECT * FROM photo WHERE TYPE_PHOTO = :TYPE_PHOTO';
$sqlResponse2 = $db->prepare($sqlRequest2);
$sqlResponse2->bindParam('TYPE_PHOTO', $TYPE_PHOTO, PDO::PARAM_STR);
$sqlResponse2->execute();
$results2 = $sqlResponse2->fetchAll(PDO::FETCH_OBJ);

$db = disconnectDb();
require("head.php");
require('header-admin.php');
?>
<div class="photo-pub">
    <img src="..\assets\img\background\bass-boat3.jpg" class="img-bass-boat" alt="img-bass-boat3">
</div>
<div class="remove-fish mb-3">
    <h1>Suppression d'une photo</h1>
</div>
<div class="remove-fish1">
        <!-- Select Type -->
    <form method="GET" action="admin-remove">
        <div class="mb-3">
            <label for="genreselect" class="form-labeladmin">Selectionnez une catégorie </label>
            <select onchange="this.form.submit()" class="form-select" id="choix" name="choix">
                <?php
                foreach ($results as $catfish) {
                ?>
                    <option <?php if (isset($_GET['choix']) && ($catfish->TYPE_PHOTO == $_GET['choix'])) {
                                echo 'selected';
                            } ?> value="<?= $catfish->TYPE_PHOTO ?>"> <?= $catfish->TYPE_PHOTO ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </form>
    <!-- Select photo -->
    <form method="GET" action="admin-remove-2">
        <div class="mb-3">
            <label for="genreselect2" class="form-labeladmin">Selectionnez une photo</label>
            <select class="form-select" id="choix2" name="choix2">
                <?php
                foreach ($results2 as $catfish2) {
                ?>
                    <option value="<?= $catfish2->ID_PHOTO ?>"> <?= $catfish2->NOM_PHOTO ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-4">
            <button type="submit" class="btn btn-primary">SUPPRIMER</button>
        </div>
        <div class="mb-4">
            <button type="button" class="btn btn-primary"><a href="admin-remove" style="color: red">Annuler</a></button>
        </div>
    </form>
</div>
<div class="foot"></div>
<?php
require 'footer.php';
?>