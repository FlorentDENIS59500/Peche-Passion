<?php
require_once "../src/model.php";
require("auth.php");
$login = new Login;
$login->authorize();

$db = connectDb();

$sqlRequest = 'SELECT DISTINCT TYPE_BIERE FROM beer';
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
<div class="add-biere">
    <h1>Saisie d'une nouvelle photo</h1>
</div>
<div class="add-biere">
    <form method="post" class="form-frame" action="admin-add-2.php">
        <div class="mb-3">
            <label for="title-biere-second" class="form-label">Titre :</label>
            <input type="text" class="form-control" id="NOM_BIERE" name="NOM_BIERE" required>
        </div>
        <div class="mb-3">
            <label for="refimg" class="form-label">Photo :</label>
            <input type="text" class="form-control" id="PHOTO_BIERE" name="PHOTO_BIERE" required>
        </div>

        <div class="mb-3">
            <label for="resume" class="form-label">Résumé :</label>
            <textarea type="text" name="Message" id="Message" rows="6" cols=35 required></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">CREER</button>
        </div>
        <div class="mb-3">
            <button type="button"><a class="btn btn-primary" href="admin-add.php" style="color: red">Annuler</a></button>
        </div>
    </form>
</div>
<?php
require 'footer.php';
?>