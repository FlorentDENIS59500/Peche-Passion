<?php
require("PP-head.php");
require('PP-header.php');
?>
<main>
    <div>
        <!-- col-sm-8 -->
        <h2 class="confirmation">La réservation de <?= $_POST['Prenom'] ?> <?= $_POST['Nom'] ?> a été ajouté avec succès !!</h2>
    </div>
</main>
<?php
require_once "../src/model.php";

$NOM = $_POST['Nom'];
$PRENOM = $_POST['Prenom'];
$TELEPHONE = $_POST['Telephone'];
$EMAIL = $_POST['Email'];
$DATE = $_POST['Date_Resa'];
$NOMBRE_PERS = $_POST['Nombre_Pers'];
$MESSAGE = $_POST['Messages'];
$db = connectDb();
$sqlRequest = "INSERT INTO Reservation (NOM, PRENOM, TELEPHONE, EMAIL, DATES, NOMBRE_PERS, MESSAGES) VALUES ( :NOM, :PRENOM, :TELEPHONE, :EMAIL, :DATES, :NOMBRE_PERS, :MESSAGES)";
$sql = $db->prepare($sqlRequest);
$sql->bindParam('NOM', $NOM, PDO::PARAM_STR);
$sql->bindParam('PRENOM', $PRENOM, PDO::PARAM_STR);
$sql->bindParam('TELEPHONE', $TELEPHONE, PDO::PARAM_STR);
$sql->bindParam('EMAIL', $EMAIL, PDO::PARAM_STR);
$sql->bindParam('DATES', $DATE, PDO::PARAM_STR);
$sql->bindParam('NOMBRE_PERS', $NOMBRE_PERS, PDO::PARAM_STR);
$sql->bindParam('MESSAGES', $MESSAGE, PDO::PARAM_STR);
$sql->execute();
$db = disconnectDb();
?>
<<script>
    setTimeout(function(){
    window.location.href = 'PP-resa.php';
    }, 5000);
    </script>
    <?php
    if (isset($_POST['Email'])) {

        $nom = $_POST["Nom"];
        $mail = $_POST["Email"];
        $prenom = $_POST["Prenom"];
        $date = $_POST["Date_Resa"];
        $nombre_pers = $_POST["Nombre_Pers"];
        $sujet = "Votre réservation";
        $message = "Bonjour $prenom $nom, nous vous confirmons votre r&eacute;servation du $date pour $nombre_pers personnes.\n\n Merci de votre confiance et à très bientôt.\n\n L'équipe Zerveza";


        $headers = "Content-Type: text/plain; charset=utf-8\r\n";

        if (mail($mail, $sujet, $message, $headers)) {

            echo " ";
        } else {

            echo "<p style='color:red; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Votre message n'a pas été envoyé !!!</p>";
        }
    }
    ?>
    <?php
    require 'PP-footer.php';
    ?>