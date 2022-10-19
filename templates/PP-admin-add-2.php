<?php
require_once "../src/model.php";

require("SimpleAuth.php");
$login = new Login;
$login->authorize();
$NAME_beer = $_POST['NAME_beer'];
$TYPE_beer = $_POST['choix'];
$DESC_beer = $_POST['Message'];
$PHOTO_beer = $_POST["PHOTO_beer"];
$db = connectDb();
$sqlRequest = "INSERT INTO beer (NAME_beer, TYPE_beer, DESC_beer, PHOTO_beer) VALUES (:NAME_beer, :TYPE_beer, :DESC_beer, :PHOTO_beer)";
$sql = $db->prepare($sqlRequest);
$sql->bindParam('NAME_beer', $NAME_beer, PDO::PARAM_STR);
$sql->bindParam('TYPE_beer', $TYPE_beer, PDO::PARAM_STR);
$sql->bindParam('DESC_beer', $DESC_beer, PDO::PARAM_STR);
$sql->bindParam('PHOTO_beer', $PHOTO_beer, PDO::PARAM_STR);
$sql->execute();
$db = disconnectDb();
require("head.php");
require('PP-header-admin.php');
?>
<div>
    <h2>Bière <?= $_POST['NAME_beer'] ?> ajoutée avec succès</h2>
</div>
<?php
require 'PP-footer.php';
?>