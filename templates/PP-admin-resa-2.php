<?php
require_once "../src/model.php";
$id_resa = '';
$db = connectDb();
require("PP-Simple-Auth.php");
$login = new Login;
$login->authorize();
if (isset($_POST["idresa"]) || ($_POST["idresa"] != "")) {
    $id_resa = $_POST["idresa"];
} else {
    header('Location: PP-admin-resa.php');
}
$sqlRequest = 'SELECT * FROM reservation WHERE ID_RESERVATION = :ID_RESERVATION';
$sql = $db->prepare($sqlRequest);
$sql->bindParam('ID_RESERVATION', $id_resa, PDO::PARAM_STR);
$sql->execute();
$results = $sql->fetch(5);
$db = disconnectDb();
require("PP-head.php");
?>
<?php
require('PP-header-admin.php');
?>
<div class="show-resa-title-biere-second">
    <h4>Voici le détail de la reservation n° : <?= $id_resa ?></h4>
</div>
<div class="show-resa">
    <table>
        <tbody>
            <tr>
                <td class="email"><?= $results->NOM ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->PRENOM ?></td>
            </tr>
            <tr>
                <td class="telephone"><?= $results->TELEPHONE ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->EMAIL ?></td>
            </tr>
            <tr>
                <td class="date"><?= $results->DATES ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->NOMBRE_PERS ?></td>
            </tr>
            <tr>
                <td class="message" colspan="3"><?= $results->MESSAGES ?></td>
            </tr>
        </tbody>
    </table>
</div>
<form method="post" action="PP-admin-resa-3.php?id_resa=<?= $id_resa ?>">
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Supprimer réservation</button>
    </div>
    <div class="mb-3">
        <button type="button"><a href="PP-admin-resa.php">Retourner a la liste</a></button>
    </div>
</form>
</div>
<?php

require 'PP-footer.php';
?>