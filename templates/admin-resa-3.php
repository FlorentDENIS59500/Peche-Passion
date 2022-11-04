<?php
require_once "../src/model.php";

$id_resa = '';
$db = connectDb();
require("auth.php");
$login = new Login;
$login->authorize();
if (isset($_GET['id_resa'])) {
    $id_resa = $_GET['id_resa'];
    $db = connectDb();
    $sqlRequest2 = 'DELETE FROM reservation WHERE ID_RESERVATION = :ID_RESERVATION';
    $sql2 = $db->prepare($sqlRequest2);
    $sql2->bindParam('ID_RESERVATION', $id_resa, PDO::PARAM_STR);
    $sql2->execute();
    $db = disconnectDb();
}
require("head.php");
?>
<?php
require('header-admin.php');
?>
<div class="show-resa-title-biere-second">
    <h4>Reservation n° : <?= $id_resa ?> bien supprimée</h4>
</div>
<?php
header("refresh:3;url=admin-resa.php");
require 'footer.php';
?>