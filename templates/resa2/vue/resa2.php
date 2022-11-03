
/** vue resa2 */
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