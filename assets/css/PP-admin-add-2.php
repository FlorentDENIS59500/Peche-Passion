<?php
require_once "../src/model.php";

require("PP-Simple-Auth.php");
$login = new Login;
$login->authorize();
$NAME_biere = $_POST['NAME_biere'];
$TYPE_biere = $_POST['choix'];
$DESC_biere = $_POST['Message'];
$PHOTO_biere = $_POST["PHOTO_biere"];
$db = connectDb();
$sqlRequest = "INSERT INTO biere (NAME_biere, TYPE_biere, DESC_biere, PHOTO_biere) VALUES (:NAME_biere, :TYPE_biere, :DESC_biere, :PHOTO_biere)";
$sql = $db->prepare($sqlRequest);
$sql->bindParam('NAME_biere', $NAME_biere, PDO::PARAM_STR);
$sql->bindParam('TYPE_biere', $TYPE_biere, PDO::PARAM_STR);
$sql->bindParam('DESC_biere', $DESC_biere, PDO::PARAM_STR);
$sql->bindParam('PHOTO_biere', $PHOTO_biere, PDO::PARAM_STR);
$sql->execute();
$db = disconnectDb();
require("PP-head.php");
require('PP-header-admin.php');
?>
<div>
    <h2>Bière <?= $_POST['NAME_biere'] ?> ajoutée avec succès</h2>
</div>
<?php
require 'PP-footer.php';
?>