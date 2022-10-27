<?php
require("PP-head.php");
require('PP-header.php');
?>
<main>
    <div class="photo-pub">
        <img src="..\assets\img\background\Peche-mouche1.jpg" class="img-peche-mouche" alt="img-peche-mouche">
    </div>
    <div class="container_contact">
        <div class="contact">
            <h3>CONTACT</h3>
            <form class="form-contact" method="post" action="PP-contact.php">
                <div class="cont1 contact1">
                    <input type="text" name="Nom" id="Nom" placeholder="Nom" size="20" required />
                    <br>
                    <input type="text" name="Prenom" id="Prenom" placeholder="Prénom" size="20" required />
                    <br>
                    <input type="E_mail" name="Email" id="Email" placeholder="exemple@email.com" size="25" required />
                </div>
                <div class="cont2 contact1">
                    <input type="text" name="Sujet" id="Sujet" placeholder="Sujet" size="25" required />
                    <br>
                    <textarea type="text" name="Message" id="Message" placeholder="Message" rows="4" cols="40" required></textarea>
                    <br>
                </div>
                <div class="btn contact1">
                    <input type="submit" class="envoyer" id="formulaire" value="Envoyer" />
                </div>

            </form>
        </div>
        <?php
        if (isset($_POST['Message'])) {

            $nom = $_POST["Nom"];
            $mail = $_POST["Email"];
            $sujet = $_POST["Sujet"];
            $message = $_POST["Message"];

            $headers = "Content-Type: text/plain; charset=utf-8\r\n";

            if (mail($mail, $sujet, $message, $headers)) {

                echo "<p style='color:green; font-size:20px; text-align:center; padding-top: 20px'>Votre message  bien été envoyé, merci. !!!</p>";
            } else {

                echo "<p style='color:red; font-size:20px; text-align:center; padding-top: 20px'>Votre message n'a pas été envoyé !!!</p>";
            }
        }
        ?>
    </div>
    <div class="minfooter"></div>
</main>
<script src="../assets/js/PP-contact.js"></script>
<?php
require("PP-footer.php");
?>