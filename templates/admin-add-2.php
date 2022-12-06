<?php
require_once "../src/model.php";

require("auth.php");
$login = new Login;
$login->authorize();
$NOM_PHOTO = $_POST['NOM_PHOTO'];
$TYPE_PHOTO = $_POST['TYPE_PHOTO'];
$DESC_PHOTO = $_POST['Message'];
$PICT_PHOTO = $_POST["PICT_PHOTO"];

$db = connectDb();
$sqlRequest = "INSERT INTO photo (NOM_PHOTO, TYPE_PHOTO,DESC_PHOTO, PICT_PHOTO) VALUES (:NOM_PHOTO, :TYPE_PHOTO, :DESC_PHOTO, :PICT_PHOTO)";
$sql = $db->prepare($sqlRequest);
$sql->bindParam('NOM_PHOTO', $NOM_PHOTO, PDO::PARAM_STR);
$sql->bindParam('TYPE_PHOTO', $TYPE_PHOTO, PDO::PARAM_STR);
$sql->bindParam('DESC_PHOTO', $DESC_PHOTO, PDO::PARAM_STR);
$sql->bindParam('PICT_PHOTO', $PICT_PHOTO, PDO::PARAM_STR);
$sql->execute();
$db = disconnectDb();
require("head.php");
require('header-admin.php');
?>
<div>
    <h1 class="add2-photo">La photo <?= $_POST['NOM_PHOTO'] ?> a été ajoutée avec succès</h1>
    <?php header("refresh:3;url=admin-add"); ?>
</div>
<?php
require 'footer.php';
?>