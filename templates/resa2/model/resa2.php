<?php

/** model resa2 */

$NOM = $_POST['Nom'];
$PRENOM = $_POST['Prenom'];
$TELEPHONE = $_POST['Telephone'];
$EMAIL = $_POST['Email'];
$DATE = $_POST['Date_Resa'];
$NOMBRE_PERS = $_POST['Nombre_Pers'];
$MESSAGE = $_POST['Messages'];

$db = connectDb();
$sqlRequest = "INSERT INTO reservation (NOM, PRENOM, TELEPHONE, EMAIL, DATES, NOMBRE_PERS, MESSAGES) VALUES ( :NOM, :PRENOM, :TELEPHONE, :EMAIL, :DATES, :NOMBRE_PERS, :MESSAGES)";

$sql = $db->prepare($sqlRequest);
$sql->bindParam('NOM', $NOM, PDO::PARAM_STR);
$sql->bindParam('PRENOM', $PRENOM, PDO::PARAM_STR);
$sql->bindParam('TELEPHONE', $TELEPHONE, PDO::PARAM_STR);
$sql->bindParam('EMAIL', $EMAIL, PDO::PARAM_STR);
$sql->bindParam('DATES', $DATE, PDO::PARAM_STR);
$sql->bindParam('NOMBRE_PERS', $NOMBRE_PERS, PDO::PARAM_STR);
$sql->bindParam('MESSAGES', $MESSAGE, PDO::PARAM_STR);
$sql->execute();
