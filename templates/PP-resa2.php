<?php
require("PP-head.php");
require('PP-header.php');
require_once "../src/model.php";

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

?>
<main>
    <div>
        <!-- col-sm-8 -->
        <h2 class="confirmation">La réservation de <?= $_POST['Prenom'] ?> <?= $_POST['Nom'] ?> a été ajoutée avec succès !!
        </h2>
    </div>
</main>
<script>
    setTimeout(function() {
        window.location.href = 'PP-resa.php';
    }, 5000);
</script>
<?php
if (isset($_POST['Email'])) {
    $nom = $_POST["Nom"];
    $mail = $_POST["Email"];
    $prenom = $_POST["Prenom"];
    $date = $_POST["Date_Resa"];
    $Newdate = explode("-", $date);
    $Newdate1 = $Newdate[0];
    $Newdate2 = $Newdate[1];
    $Newdate3 = $Newdate[2];
    $Newdate4 = explode("T", $Newdate3);
    $Newdate5 = $Newdate4[0];
    $Newdate6 = $Newdate4[1];
    $nombre_pers = $_POST["Nombre_Pers"];
    $sujet = "Votre réservation";
    $message = "Bonjour" . " " . $prenom . " " . $nom . ", nous vous confirmons votre réservation du " . $Newdate5 . "-" . $Newdate2 . "-" . $Newdate1 . " à " . $Newdate6 . " pour " . $nombre_pers . " personnes.\n\n Merci de votre confiance et à très bientôt.\n\n L'équipe Pêche Passion";

    $headers = "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($mail, $sujet, $message, $headers)) {

        echo "";
    } else {

        echo "<p style='color:red; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Votre message n'a pas été envoyé !!!</p>";
    }
}
?>


<?php
require 'PP-footer.php';
?>