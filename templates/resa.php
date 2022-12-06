<?php
require("head.php");
require('header.php');
require_once "../src/model.php";

if (isset($_POST['submit-form-resa'])) {
    $NOM = $_POST['NOM'];
    $PRENOM = $_POST['PRENOM'];
    $TELEPHONE = $_POST['TELEPHONE'];
    $EMAIL = $_POST['EMAIL'];
    $DATES = $_POST['DATES'];
    $NOMBRE_PERS = $_POST['NOMBRE_PERS'];
    $MESSAGE = $_POST['MESSAGES'];
    $PatternMail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $AllLettersReg = $NOM . $PRENOM . $MESSAGE;
    $Headers = "Content-Type: text/plain; charset=utf-8\r\n";
    if (!preg_match("/^[a-zA-z]*$/", $AllLettersReg)) {
        echo "<p class='error-mailto-resa'> Seules les lettres sont autorisées.</p>";
    } else if (!preg_match("/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/", $TELEPHONE)) {
        echo "<p class='error-mailto-resa'>Numéro de téléphone invalide.</p>";
    } else if (!preg_match($PatternMail, $EMAIL)) {
        echo "<p class='error-mailto-resa'>L'email n'est pas valide.</p>";
    } else if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(2[0-3]|[01][0-9]):[0-5][0-9]$/", $DATES)) {
        echo "<p class='error-mailto-resa'>Le format de la date n'est pas valide.</p>";
    } else if (!preg_match("/^[12]$/", $NOMBRE_PERS)) {
        echo "<p class='error-mailto-resa'>Désolé, 2 personnes max.</p>";
    } else {
        $db = connectDb();
        $sqlRequest = "INSERT INTO reservation (NOM, PRENOM, TELEPHONE, EMAIL, DATES, NOMBRE_PERS, MESSAGES) VALUES ( '$NOM', '$PRENOM', '$TELEPHONE', '$EMAIL', '$DATES', $NOMBRE_PERS, '$MESSAGE')";
        $sql = $db->prepare($sqlRequest);
        $sql->bindParam('NOM', $NOM, PDO::PARAM_STR);
        $sql->bindParam('PRENOM', $PRENOM, PDO::PARAM_STR);
        $sql->bindParam('TELEPHONE', $TELEPHONE, PDO::PARAM_STR);
        $sql->bindParam('EMAIL', $EMAIL, PDO::PARAM_STR);
        $sql->bindParam('DATES', $DATES, PDO::PARAM_STR);
        $sql->bindParam('NOMBRE_PERS', $NOMBRE_PERS, PDO::PARAM_STR);
        $sql->bindParam('MESSAGES', $MESSAGE, PDO::PARAM_STR);
        $sql->execute();
        $db = disconnectDb();
        echo "<p class='ok-mailto-resa'>La réservation de  $NOM $PRENOM a été ajoutée avec succès.</p>";

        $newdate = explode("-", $DATES);
        $newdate1 = $newdate[0];
        $newdate2 = $newdate[1];
        $newdate3 = $newdate[2];
        $newdate4 = explode("T", $newdate3);
        $newdate5 = $newdate4[0];
        $newdate6 = $newdate4[1];
        $sujet = "Confirmation reservation - Pêche Passion";
        $messageMail = "Bonjour" . " " . $NOM . " " . $PRENOM . ", nous vous confirmons votre réservation du " . $newdate5 . "-" . $newdate2 . "-" . $newdate1 . " à " . $newdate6 . " pour " . $NOMBRE_PERS . " personnes.\n\n Merci de votre confiance et à très bientôt.\n\n L'équipe Pêche Passion.";
        $Headers = "Content-Type: text/plain; charset=utf-8\r\n";
        mail($EMAIL, $sujet, $messageMail, $Headers);
        echo "<p class='ok-mailto-resa'>Vous allez recevoir un mail de confirmation.</p> ";
    }
}

?>
<main>
    <div class="title-fish">
        <img class="logo-wave1" src="..\assets\img\Fish\vague_gauche-sf.png" alt="img-left-wave">
        <span class="title">Pêche Passion</span>
        <img class="logo-wave2" src="..\assets\img\Fish\vague_droite-sf.png" alt="img-right-wave">
    </div>
    <div class="subtitle">
        <h2>Guide de pêche</h2>
    </div>
    <div class="photo-pub">
        <img src="..\assets\img\background\bass-boat3.jpg" class="img-bass-boat" alt="img-bass-boat3">
    </div>
    <div class="container_resa">
        <div class="reservation">
            <h4>Réservation</h4>
            <form class="form-resa" method="post" action="">
                <div class="cont1 resa">
                    <input type="text" name="NOM" id="NOM" placeholder="Nom" size="40" required />
                    <br>
                    <input type="text" name="PRENOM" id="PRENOM" placeholder="Prénom" size="40" required />
                    <br>
                    <input type="tel" name="TELEPHONE" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" id="TELEPHONE" placeholder="N° Téléphone 0000000000" size="10" required />
                    <br>
                    <input type="email" name="EMAIL" id="EMAIL" placeholder="Email" size="40" required />
                </div>
                <div class="cont2 resa">
                    <input type="datetime-local" name="DATES" id="DATES" required />
                    <br>
                    <input type="number" name="NOMBRE_PERS" min="1" max="2" id="NOMBRE_PERS" placeholder="Nombre de personnes" size="1" required />
                    <br>
                    <textarea type="text" name="MESSAGES" id="MESSAGES" placeholder="Merci de bien vouloir préciser si vous réservez pour la journée ou la demi-journée." rows="4" cols=40></textarea>
                    <br>
                </div>
                <div class="btn resa">
                    <input type="submit" name="submit-form-resa" id="formulaire" class="reserver" value="Réserver" />
                </div>
            </form>
        </div>
    </div>

    <div class="foot"></div>
</main>
<script src="../assets/js/resa.js"></script>
<?php
require("footer.php");
?>