<?php
require_once "../src/model.php";

require("auth.php");
$login = new Login;
$login->authorize();
$NOM_PHOTO = $_POST['NOM_PHOTO'];
$DESC_PHOTO = $_POST['Message'];
$PICT_PHOTO = $_POST["PICT_PHOTO"];

$db = connectDb();
$sqlRequest = "INSERT INTO photo (NOM_PHOTO, DESC_PHOTO, PICT_PHOTO) VALUES (:NOM_PHOTO, :DESC_PHOTO, :PICT_PHOTO)";
$sql = $db->prepare($sqlRequest);
$sql->bindParam('NOM_PHOTO', $NOM_PHOTO, PDO::PARAM_STR);
$sql->bindParam('DESC_PHOTO', $DESC_PHOTO, PDO::PARAM_STR);
$sql->bindParam('PICT_PHOTO', $PICT_PHOTO, PDO::PARAM_STR);
$sql->execute();
$db = disconnectDb();
require("head.php");
require('header-admin.php');
?>
<div>
    <h2>Bière <?= $_POST['NOM_PHOTO'] ?> ajoutée avec succès</h2>
</div>
<?php
require 'footer.php';
?>