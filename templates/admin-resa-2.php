<?php
require_once "../src/model.php";
$id_resa = '';
$db = connectDb();
require("auth.php");
$login = new Login;
$login->authorize();
if (isset($_POST["idresa"]) || ($_POST["idresa"] != "")) {
    $id_resa = $_POST["idresa"];
} else {
    header('Location: admin-resa.php');
}
$sqlRequest = 'SELECT * FROM reservation WHERE ID_RESERVATION = :ID_RESERVATION';
$sql = $db->prepare($sqlRequest);
$sql->bindParam('ID_RESERVATION', $id_resa, PDO::PARAM_STR);
$sql->execute();
$results = $sql->fetch(5);
$db = disconnectDb();
require("head.php");
?>
<?php
require('header-admin.php');
?>
<div class="show-resa-title-fish-second">
    <h1>Voici le détail de la reservation n° : <?= $id_resa ?></h1>
</div>
<div class="show-resa">
    <table>
        <tbody>
            <tr>
                <td class="name">Nom : <?= $results->NOM ?></td>
            </tr>
            <tr>
                <td class="firstname">Prénom : <?= $results->PRENOM ?></td>
            </tr>
            <tr>
                <td class="phone">Téléphone : <?= $results->TELEPHONE ?></td>
            </tr>
            <tr>
                <td class="email">Email : <?= $results->EMAIL ?></td>
            </tr>
            <tr>
                <td class="date">Date : <?= $results->DATES ?></td>
            </tr>
            <tr>
                <td class="number">Nombre de pers. : <?= $results->NOMBRE_PERS ?></td>
            </tr>
            <tr>
                <td class="message" colspan="3">Message : <?= $results->MESSAGES ?></td>
            </tr>
        </tbody>
    </table>
</div>
<form method="post" action="admin-resa-3.php?id_resa=<?= $id_resa ?>" class="form2">
    <div class="mb-1">
        <button type="submit" class="btn btn-primary">Supprimer réservation</button>
    </div>
    <div class="mb-1">
        <button type="button" class="btn btn-primary"><a href="admin-resa.php" style="color: red">Retourner a la liste</a></button>
    </div>
</form>
</div>
<?php

require 'footer.php';
?>