<?php
require_once "../src/model.php";

$db = connectDb();
require("PP-Simple-Auth.php");
$login = new Login;
$login->authorize();
$ID_BIERE = "";
if (isset($_POST["choix2"]) || ($_POST["choix2"] != "")) {
    $ID_BIERE = $_POST["choix2"];
} else {
    header('Location: PP-admin-remove.php');
}
$sqlRequest = 'SELECT * FROM beer WHERE ID_BIERE = :ID_BIERE';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->bindParam('ID_BIERE', $ID_BIERE, PDO::PARAM_STR);
$sqlResponse->execute();
$results = $sqlResponse->fetch();
$db = disconnectDb();
require("PP-head.php");
require('PP-header-admin.php');
if ($results) {
    $db = connectDb();
    $sqlRequest2 = 'DELETE FROM beer WHERE ID_BIERE = :ID_BIERE';
    $sql = $db->prepare($sqlRequest2);
    $sql->bindParam('ID_BIERE', $ID_BIERE, PDO::PARAM_STR);
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
        var_dump($ID_BIERE); ?>
        <h2>Erreur dans la suppression !</h2>
    </div>
<?php
}
require 'PP-footer.php';
?>