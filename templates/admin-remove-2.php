<?php
require_once "../src/model.php";

$db = connectDb();
require("auth.php");
$login = new Login;
$login->authorize();
$ID_PHOTO = "";
if (isset($_POST["choix2"]) || ($_POST["choix2"] != "")) {
    $ID_PHOTO = $_POST["choix2"];
} else {
    header('Location: admin-remove.php');
}
$sqlRequest = 'SELECT * FROM photo WHERE ID_PHOTO = :ID_PHOTO';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->bindParam('ID_PHOTO', $ID_PHOTO, PDO::PARAM_STR);
$sqlResponse->execute();
$results = $sqlResponse->fetch();
$db = disconnectDb();
require("head.php");
require('header-admin.php');
if ($results) {
    $db = connectDb();
    $sqlRequest2 = 'DELETE FROM photo WHERE ID_PHOTO = :ID_PHOTO';
    $sql = $db->prepare($sqlRequest2);
    $sql->bindParam('ID_PHOTO', $ID_PHOTO, PDO::PARAM_STR);
    $sql->execute();
    $db = disconnectDb();
?>
    <div>
        <p>Bière supprimer avec succès</p>
    </div>
<?php
} else {
?>
    <div>
        <?php
        var_dump($_POST["choix2"]);
        var_dump($results);
        var_dump($ID_PHOTO); ?>
        <h2>Erreur dans la suppression !</h2>
    </div>
<?php
}
require 'footer.php';
?>