<?php
require_once "../src/model.php";

require("PP-Simple-Auth.php");
$login = new Login;
$login->authorize();
$NOM_BIERE = $_POST['NOM_BIERE'];
$TYPE_BIERE = $_POST['choix'];
$DESC_BIERE = $_POST['Message'];
$PHOTO_BIERE = $_POST["PHOTO_BIERE"];
$db = connectDb();
$sqlRequest = "INSERT INTO beer (NOM_BIERE, TYPE_BIERE, DESC_BIERE, PHOTO_BIERE) VALUES (:NOM_BIERE, :TYPE_BIERE, :DESC_BIERE, :PHOTO_BIERE)";
$sql = $db->prepare($sqlRequest);
$sql->bindParam('NOM_BIERE', $NOM_BIERE, PDO::PARAM_STR);
$sql->bindParam('TYPE_BIERE', $TYPE_BIERE, PDO::PARAM_STR);
$sql->bindParam('DESC_BIERE', $DESC_BIERE, PDO::PARAM_STR);
$sql->bindParam('PHOTO_BIERE', $PHOTO_BIERE, PDO::PARAM_STR);
$sql->execute();
$db = disconnectDb();
require("PP-head.php");
require('PP-header-admin.php');
?>
<div>
    <h2>Bière <?= $_POST['NOM_BIERE'] ?> ajoutée avec succès</h2>
</div>
<?php
require 'PP-footer.php';
?>